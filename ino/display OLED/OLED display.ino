// code display

#include <SPI.h>
#include <HttpClient.h>
#include <Ethernet.h>
#include <EthernetClient.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>

#define SCREEN_WIDTH 128
#define SCREEN_HEIGHT 64

Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT);
int cnt;
int yi, yf;
int dy;

// --------------------------- //
// CAMBIA QUA PER INDIRIZZO IP //
// --------------------------- //
const char kHostname[] = "192.168.1.101"; // your pc's ip address

// --------------------------- //
// CAMBIA QUA PER LE RICHIESTE //
// --------------------------- //
const char kPathStatus[] = "/arduini_Open-day/required/selector.php?oled_status"; // php selector page path
const char kPathString[] = "/arduini_Open-day/required/selector.php?oled_string";

byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED }; // mac address

const int kNetworkTimeout = 30*1000; // Number of milliseconds to wait without receiving any data before we give up

const int kNetworkDelay = 5000; // Number of milliseconds to wait if no data is available before trying again

const int stringDim = 20;

void setup()
{
  // initialize serial communications at 9600 bps:
  Serial.begin(9600); 

  if (!display.begin(SSD1306_SWITCHCAPVCC, 0x3C))
    {
        while (true)
            ;
    }
    delay(1000);
    display.clearDisplay();
    display.display();

    // Setto il colore del testo a "bianco"
    display.setTextColor(WHITE);
    // Setto dimensione del testo
    display.setTextSize(1);
    // Sposto il cursore a metà altezza del display
    display.setCursor(0, SCREEN_HEIGHT / 2);
    // Stampo una scritta
    display.println("INIT... ");
    display.drawLine(0, 0, 100, 50, WHITE);
    // La mando in stampa
    display.display();
    delay(250);
    yi = 0;
    yf = 63;
    dy = 1;

  while (Ethernet.begin(mac) != 1)
  {
    Serial.println("Error getting IP address via DHCP, trying again...");
    delay(15000);
  }  
}

void loop()
{
  int err =0;
  char readedString[stringDim];
  readedString[0]=0;
  
  EthernetClient c;
  HttpClient http(c);
  
  err = http.get(kHostname, kPathStatus);
  err = http.skipResponseHeaders();
  
  if (err == 0)
  {
      int bodyLen = http.contentLength();
        
      // Now we've got to the body, so we can print it out
      unsigned long timeoutStart = millis();
      
      char* readedChar="z";
      while ( (http.connected() || http.available()) && ((millis() - timeoutStart) < kNetworkTimeout) )
      {
          if (http.available())
          {
              *readedChar = http.read();
              // Print out this character
              strcat(readedString, readedChar);
              //Serial.print(readedChar)
              // from char to strin
              bodyLen--;
              // We read something, reset the timeout counter
              timeoutStart = millis();
          }
          else
          {
              // We haven't got any data, so let's pause to allow some to
              // arrive
              delay(kNetworkDelay);
          }
      }

      if (strcmp(readedString, "On")==0){ //se attivo prendo anche la stringa
        display.clearDisplay();
        display.display();

        display.setCursor(0, 10);
        display.setTextSize(1);

        //------------------------------------------------
        err = http.get(kHostname, kPathString);
        err = http.skipResponseHeaders();
  
        if (err == 0)
        {
            bodyLen = http.contentLength();
            
            char readedChar;
            while ( (http.connected() || http.available()) && ((millis() - timeoutStart) < kNetworkTimeout) )
            {
                if (http.available())
                {
                    readedChar = http.read();
                    display.print(c);
                    bodyLen--;
                    // We read something, reset the timeout counter
                    timeoutStart = millis();
                }
                else
                {
                    // We haven't got any data, so let's pause to allow some to
                    // arrive
                    delay(kNetworkDelay);
                }
            }
        }
      }
      else{
        if(strcmp(readedString, "Off")==0){
            display.clearDisplay();
          }
        }
      }

        //------------------------------------------------
    /*
      display.setCursor(0, 25);
      display.setTextSize(2);
      display.println("Marcheselli");
    
    display.display();
    /*
    display.drawLine(0,yi,127,yf, WHITE);
    display.display();
    yi = yi+dy;
    yf = yf-dy;

    if(yi == 0)
      dy = -dy;
    if(yi == 64)
      dy = -dy;

    // put your main code here, to run repeatedly:
    /*display.clearDisplay();
    display.display();
    display.setTextSize(2);
    display.setCursor(3, 3);
    display.println(cnt);
    display.display();
    cnt++;
      }
      else{
        if(strcmp(readedString, "Off")==0){
          
        }
      
      }
  }
  else
  {
    //Serial.print("Connect failed: ");
    //Serial.println(err);
  }
  http.stop();
  c.stop();
  
  // ------------------------------------------------------------------------ //
  // NEL readedString CONTIENE I DATI RICHIESTI, RICORDA DI METTERE LO SPAZIO //
  // ------------------------------------------------------------------------ //
  Serial.println(readedString);
}

/*
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>

#define SCREEN_WIDTH 128
#define SCREEN_HEIGHT 64

Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT);
int cnt;
int yi, yf;
int dy;

void setup()
{
    if (!display.begin(SSD1306_SWITCHCAPVCC, 0x3C))
    {
        while (true)
            ;
    }
    delay(1000);
    display.clearDisplay();
    display.display();

    // Setto il colore del testo a "bianco"
    display.setTextColor(WHITE);
    // Setto dimensione del testo
    display.setTextSize(1);
    // Sposto il cursore a metà altezza del display
    display.setCursor(0, SCREEN_HEIGHT / 2);
    // Stampo una scritta
    display.println("INIT... ");
    display.drawLine(0, 0, 100, 50, WHITE);
    // La mando in stampa
    display.display();
    delay(250);
    yi = 0;
    yf = 63;
    dy = 1;
}

void loop()
{
    display.clearDisplay();
    display.display();

    display.setCursor(0, 10);
    display.setTextSize(1);
    display.println("Oggi il sole e sono felice...");
    /*
      display.setCursor(0, 25);
      display.setTextSize(2);
      display.println("Marcheselli");
    
    display.display();
    /*
    display.drawLine(0,yi,127,yf, WHITE);
    display.display();
    yi = yi+dy;
    yf = yf-dy;

    if(yi == 0)
      dy = -dy;
    if(yi == 64)
      dy = -dy;

    // put your main code here, to run repeatedly:
    /*display.clearDisplay();
    display.display();
    display.setTextSize(2);
    display.setCursor(3, 3);
    display.println(cnt);
    display.display();
    cnt++;
    delay(10000);
}
*/
// thanks @ CescoP81 for the code
