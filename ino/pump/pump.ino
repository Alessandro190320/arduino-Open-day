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
const char kPath[] = "/arduino-Open-day/required/selector.php?pump_status"; // php selector page path

byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED }; // mac address

const int kNetworkTimeout = 30*1000; // Number of milliseconds to wait without receiving any data before we give up

const int kNetworkDelay = 5000; // Number of milliseconds to wait if no data is available before trying again

const int stringDim = 20;

int rel = 6; 

void setup()
{
  // initialize serial communications at 9600 bps:
  Serial.begin(9600); 
  
  pinMode(bot, INPUT); 
  pinMode(rel, OUTPUT);

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
    digitalWrite(rel,HIGH);
    // attivo rele
  }
  else{
    if(strcmp(readedString, "Off")==0){
      digitalWrite(rel,LOW);
      // disattiva rele
    }
  }
  
  delay(10000);
}
