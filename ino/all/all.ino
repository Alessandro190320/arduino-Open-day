#include <Adafruit_GFX.h>     //oled
#include <Adafruit_SSD1306.h> //oled
#include <Servo.h>            //servo
#include <SoftwareSerial.h>   //connection between 2 arduini

#define SCREEN_WIDTH 128
#define SCREEN_HEIGHT 8
#define SOFTRX 10
#define SOFTTX 11

Adafruit_SSD1306 display(SCREEN_WIDTH, SCREEN_HEIGHT);
int cnt;
int yi, yf;
int dy;

// -------------------------------------------------------CONNECTION------------------------------------------------------- //
#include <SPI.h>
#include <HttpClient.h>
#include <Ethernet.h>
#include <EthernetClient.h>

// --------------------------- //
// CAMBIA QUA PER INDIRIZZO IP //
// --------------------------- //
const char kHostname[] = "192.168.1.102"; // your pc's ip address

// --------------------------- //
// CAMBIA QUA PER LE RICHIESTE //
// --------------------------- //
//const char kPath[] = "/arduino-Open-day/required/selector.php?pump_status"; // php selector page path

byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED }; // mac address
const int kNetworkTimeout = 30 * 1000; // Number of milliseconds to wait without receiving any data before we give up
const int kNetworkDelay = 5000; // Number of milliseconds to wait if no data is available before trying again
// ------------------------------------------------------------------------------------------------------------------------- //

// ----------------PIN SETUP---------------- //
int pinRelay = 6;
int pinSemRed = 11;
int pinSemYellow = 13;
int pinSemGreen = 12;
int pinServo = 7;
int pinLed1 = 8;
int pinLed2 = 9;
int serialPin1=4;
int serialPin2=5;
// analog pin 0 utilizzato per la lettura valore fotovoltaico
// ----------------------------------------- //

// ----------------------------------SEMAPHORE-------------------------------------- //

//Uno transmitter
// Send two ints to a Nano (wheel speed setpoints)
// Connect pin5 Uno to pin 4 Nano
// Connect pin4 Uno to pin 5 Nano
// Receiver is Nano_reciever.ino



SoftwareSerial mySerial(serialPin1, serialPin2); // RX, TX

// ----------------------------------------------------------------------------------//

// ----------------SERVO---------------- //
byte data;        // VARIABILE DI TIPO BYTE CHE RICEVE IL VALORE INTERO PERCEPITO DAL PANNELLO(le prove hanno stabilito, con buona luce, valori buoni compresi tra 200 e 270, raramente oltre i 300)
int prec_data;    // VALORE PRECEDENTE LETTO DAL PANNELLO RISPETTO A QUELLO ATTUALE
// int SensorValue = 0;
int ServoGrado = 90; // VALORE INIZIALE DEL SERVOMOTORE(in gradi)
int Tolleranza = 5;  // NON MI SEMBRA DI AVERLA UTILIZZATA
int cntServo = 0;           // USATO PER CAPIRE SE CI TROVIAMO NEL PRIMO LOOP(0) O MENO, IN MODO DA SETTARE IL VALORE MAX DI LUCE RAGGIUNTO FINO AD ORA
Servo myservo;       // NOMINATIVO(VARIABILE) PER IDENTIFICARE IL SERVOMOTORE
// ----------------------------------------------- //

// ----------------FUNCTIONS---------------- //
String retrieveFromDatabase(String);
// ----------------------------------------- //

void setup() {
  // initialize serial communications at 9600 bps:
  Serial.begin(9600);


  //initialize ethernet shield

  while (Ethernet.begin(mac) != 1)
  {
    Serial.println("Error getting IP address via DHCP, trying again...");
    delay(15000);
  }


  //initialize oled
  if (!display.begin(SSD1306_SWITCHCAPVCC, 0x3C))
  {
    while (true)
      ;
  }
  //delay(2000);
  display.clearDisplay();
  display.display();

  // Setto il colore del testo a "bianco"
  display.setTextColor(WHITE);
  // Setto dimensione del testo
  display.setTextSize(1);
  // Sposto il cursore a metà altezza del display
  display.setCursor(0, 0);
  // Stampo una scritta
  display.println("INIT... ");
  //display.drawLine(0, 0, 100, 50, WHITE);
  // La mando in stampa
  display.display();
  //delay(2000);
  yi = 0;
  yf = 63;
  dy = 1;

  //initialize solarPanel / servomotor
  myservo.attach(pinServo);
  myservo.write(ServoGrado);
  prec_data = 220; // valore iniziale del prec_data accettabile in modo che da subito si ricerchi un valore medio alto
  cntServo = 0;         // variabile per verificare se il loop è la prima volta che gira oppure no


  //initialize pin
  pinMode(pinRelay, OUTPUT);
  pinMode(pinSemRed, OUTPUT);
  pinMode(pinSemYellow, OUTPUT);
  pinMode(pinSemGreen, OUTPUT);

  // communication with send arduino
  Serial.flush();
  mySerial.begin(9600);
  mySerial.flush();

}

void loop() {
  String returnedStr = "";

  //oled
  String strToShow = "Null";
  returnedStr = retrieveFromDatabase("?oled_status");
  //Serial.println(returnedStr);
  if (returnedStr == "On") {
    Serial.println("oled On");
    display.clearDisplay();
    display.display();
    display.setTextSize(1);
    display.setCursor(0, 0);
    strToShow = retrieveFromDatabase("?oled_string");
    display.println(strToShow);
    display.display();
    //delay(2000);
  }
  else {
    if (returnedStr == "Off") {
      Serial.println("oled Off");
      display.clearDisplay();
      display.display();
      display.setTextSize(1);
      display.setCursor(0, 0);
      display.println("disactived");
      display.display();
      //delay(2000);
    }
  }
  //*/

  // led1

  returnedStr = retrieveFromDatabase("?led1_status");
  if (returnedStr == "On") {
    Serial.println("led1 On");
    digitalWrite(pinLed1, HIGH);
  }
  else {
    if (returnedStr == "Off") {
      Serial.println("led1 Off");
      digitalWrite(pinLed1, LOW);
    }
  }
  //delay(2000);//*/

  // led2
    returnedStr = retrieveFromDatabase("?led2_status");
    if(returnedStr == "On"){
    Serial.println("led2 On");
    digitalWrite(pinLed2,HIGH);
    }
    else{
    if(returnedStr == "Off"){
      Serial.println("led2 Off");
      digitalWrite(pinLed2,LOW);
    }
    }
    //delay(2000);//*/

  // Pump
  returnedStr = retrieveFromDatabase("?pump_status");
  if (returnedStr == "On") {
    Serial.println("Pompetta On");
    digitalWrite(pinRelay, HIGH);
  }
  else {
    if (returnedStr == "Off") {
      Serial.println("Pompetta Off");
      digitalWrite(pinRelay, LOW);
    }
  }
  //delay(2000);//*/

  // semaphore - send to the second Arduino
  returnedStr = retrieveFromDatabase("?semaphore_status");
  if(returnedStr == "On"){
    mySerial.print(1);
    mySerial.print("\n");
  }
  else{
    if(returnedStr == "Off"){
      mySerial.print(0);
      mySerial.print("\n");
    }
  }
  /*
    returnedStr = retrieveFromDatabase("?semaphore_status");
    if(returnedStr == "On"){
    Serial.println("Semaphore On");
    digitalWrite(pinSemGreen, HIGH);
    delay(4000);
    digitalWrite(pinSemGreen, LOW);
    digitalWrite(pinSemYellow, HIGH);
    delay(2000);
    digitalWrite(pinSemYellow, LOW);
    digitalWrite(pinSemRed, HIGH);
    delay(4000);
    digitalWrite(pinSemRed, LOW);
    }
    else{
    if(returnedStr == "Off"){
      Serial.println("Semaphore Off");
      // lampeggio giallo ( spento )
      digitalWrite(pinSemGreen, LOW);
      digitalWrite(pinSemRed, LOW);

      for(int i=0; i<10; i++){
        digitalWrite(pinSemYellow, HIGH);
        delay(500); // ritardo
        digitalWrite(pinSemYellow, LOW);
        delay(500); // ritardo
      }
    }
    }//*/

  // solarPanel
  //delay(2000);
  returnedStr = retrieveFromDatabase("?solarPanel_status");
  if (returnedStr == "On") {
    Serial.println("solarPanel On");
    data = analogRead(0);
    //Serial.println("fatto");
    retrieveFromDatabase("?solarPanel_string=" + String(data));

    // sposatemento in caso il valore attuale del pannello(data) sia maggiore di prec_data(valore precedente)
    if ((prec_data - data) < 0)
    {
      if ((prec_data - data) < (-8))
        ServoGrado = ServoGrado + 15; // spostamento del servo grado
      else
      {
        if ((prec_data - data) < (0))
          // ServoGrado++;
          ServoGrado = ServoGrado + 5; // sposatamento del servo grado
      }
    }

    // sposatemento in caso il valore attuale del pannello(data) sia minore di prec_data(valore precedente)
    if ((prec_data - data) > 0)
    {
      if ((prec_data - data) > 8)
        ServoGrado = ServoGrado - 15;
      else
      {
        if ((prec_data - data) > 3)
          // ServoGrado-- ;
          ServoGrado = ServoGrado - 5;
      }
    }

    myservo.write(ServoGrado);

    // inizializzazione del cnt per capire se si tratta della prima volta che questo gira
    if (cntServo == 0)
    {
      if (data >= 150)
      {
        prec_data = data;
        cntServo++;
      }
    }
    // in caso contrario inserimento in prec_data del valore più alto trovato
    else
    {
      if (data > prec_data)
        prec_data = data;
    }
  }
  else {
    if (returnedStr == "Off") {
      Serial.println("solarPanel Off");
      cntServo = 0;
      ServoGrado = 90;
      myservo.write(ServoGrado);
    }
  }//*/
}



// -------------------------------------------------------FUNCTIONS------------------------------------------------------- //
String retrieveFromDatabase(String request) {
  int err = 0;
  String readedString;
  String kPath = "/arduino-Open-day/required/selector.php";
  kPath = kPath + request;

  EthernetClient c;
  HttpClient http(c);

  err = http.get(kHostname, kPath.c_str());
  if (err == 0)
  {
    err = http.skipResponseHeaders();
    if (err >= 0)
    {
      int bodyLen = http.contentLength();

      // Now we've got to the body, so we can print it out
      unsigned long timeoutStart = millis();

      char readedChar = ' ';
      while ((http.connected() || http.available()) && ((millis() - timeoutStart) < kNetworkTimeout) )
      {
        if (http.available())
        {
          // Print out this character
          readedChar = http.read();

          readedString = readedString + readedChar;
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
    Serial.print("Connect failed: ");
    Serial.println(err);
  }
  http.stop();
  c.stop();

  return readedString;
}
