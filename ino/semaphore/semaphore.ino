#include <SPI.h>
#include <HttpClient.h>
#include <Ethernet.h>
#include <EthernetClient.h>

// --------------------------- //
// CAMBIA QUA PER INDIRIZZO IP //
// --------------------------- //
const char kHostname[] = "192.168.1.101"; // your pc's ip address

// --------------------------- //
// CAMBIA QUA PER LE RICHIESTE //
// --------------------------- //
const char kPath[] = "/arduini_Open-day/required/semaphore_status"; // php selector page path

byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED }; // mac address

const int kNetworkTimeout = 30*1000; // Number of milliseconds to wait without receiving any data before we give up

const int kNetworkDelay = 5000; // Number of milliseconds to wait if no data is available before trying again

const int stringDim = 20;

int Rosso = 11;
int Giallo = 12;
int Verde = 13;
int Bot = 3;
int BotStato = LOW; // parto con il semaforo spento
int lettura = LOW;

void setup()
{
  // initialize serial communications at 9600 bps:
  Serial.begin(9600); 

  pinMode(Rosso, OUTPUT);
  pinMode(Giallo, OUTPUT);
  pinMode(Verde, OUTPUT);
  pinMode(Bot, INPUT);

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
  
  err = http.get(kHostname, kPath);
  
  if (err == 0)
  {
      err = http.skipResponseHeaders();
      if (err >= 0)
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
                //Serial.print(readedChar);

                // from char to string

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
      else
      {
        Serial.print("Failed to skip response headers: ");
        Serial.println(err);
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
  
  if (strcmp(readedString, "On")==0){
      digitalWrite(Verde, HIGH);
      delay(4000);
      digitalWrite(Verde, LOW);
      digitalWrite(Giallo, HIGH);
      delay(2000);
      digitalWrite(Giallo, LOW);
      digitalWrite(Rosso, HIGH);
      delay(4000);
      digitalWrite(Rosso, LOW);
  }
  else{
    if(strcmp(readedString, "Off")==0){
     // lampeggio giallo ( spento )
      digitalWrite(Verde, LOW);
      digitalWrite(Rosso, LOW);
      
      for(int i=0; i<10; i++){
        digitalWrite(Giallo, HIGH);
        delay(500); // ritardo
        digitalWrite(Giallo, LOW);
        delay(500); // ritardo
      }
    }
  }
  
  
}
