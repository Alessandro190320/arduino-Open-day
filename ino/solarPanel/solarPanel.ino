// code solar Panel

#include <Servo.h> //LIBRERIA PER UTILIZZO DEL SERVOMOTORE

byte data;        // VARIABILE DI TIPO BYTE CHE RICEVE IL VALORE INTERO PERCEPITO DAL PANNELLO(le prove hanno stabilito, con buona luce, valori buoni compresi tra 200 e 270, raramente oltre i 300)
int ServoPin = 7; // PIN DEL SERVOMOTORE(VARIABILE)SU ARDUINO
int prec_data;    // VALORE PRECEDENTE LETTO DAL PANNELLO RISPETTO A QUELLO ATTUALE
// int SensorValue = 0;
int ServoGrado = 90; // VALORE INIZIALE DEL SERVOMOTORE(in gradi)
int Tolleranza = 5;  // NON MI SEMBRA DI AVERLA UTILIZZATA
int cnt;             // USATO PER CAPIRE SE CI TROVIAMO NEL PRIMO LOOP(0) O MENO, IN MODO DA SETTARE IL VALORE MAX DI LUCE RAGGIUNTO FINO AD ORA
Servo myservo;       // NOMINATIVO(VARIABILE) PER IDENTIFICARE IL SERVOMOTORE

// setup iniziale dei pin
void setup()
{
    myservo.attach(ServoPin);
    myservo.write(ServoGrado);
    prec_data = 220; // valore iniziale del prec_data accettabile in modo che da subito si ricerchi un valore medio alto
    cnt = 0;         // variabile per verificare se il loop è la prima volta che gira oppure no
    // INIZIALIZZAZIONE LED(semafori e case(rgb))
    pinMode(6, OUTPUT);
    pinMode(9, OUTPUT);
    pinMode(5, OUTPUT);
    pinMode(3, OUTPUT);
    pinMode(8, OUTPUT);
    pinMode(4, OUTPUT);
    pinMode(10, OUTPUT);
    pinMode(11, OUTPUT);
    pinMode(12, OUTPUT);
    pinMode(13, OUTPUT);
    Serial.begin(57600);
}

void loop()
{
    data = analogRead(0);

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

    // PRINT ON CONSOLE
    myservo.write(ServoGrado);
    Serial.print("Valore maggiore: ");
    Serial.print("\t");
    Serial.print(prec_data);
    Serial.print("\n");
    Serial.print("Valore attuale: ");
    Serial.print("\t");
    Serial.print(data);

    Serial.print("\n");

    // inizializzazione del cnt per capire se si tratta della prima volta che questo gira
    if (cnt == 0)
    {
        if (data >= 150)
        {
            prec_data = data;
            cnt++;
        }
    }
    // in caso contrario inserimento in prec_data del valore più alto trovato
    else
    {
        if (data > prec_data)
            prec_data = data;
    }
}