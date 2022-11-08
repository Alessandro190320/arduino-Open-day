// code semaphore

int Rosso = 11;
int Giallo = 12;
int Verde = 13;
int Bot = 3;
int BotStato = LOW; // parto con il semaforo spento
int lettura = LOW;

void setup()
{
    pinMode(Rosso, OUTPUT);
    pinMode(Giallo, OUTPUT);
    pinMode(Verde, OUTPUT);
    pinMode(Bot, INPUT);
}

void loop()
{
    lettura = digitalRead(Bot);

    if (lettura != BotStato and lettura == HIGH) // se viene rillevata una variazione
    {
        // ciclo semaforo acceso
        digitalWrite(Verde, HIGH);
        delay(4000);
        digitalWrite(Verde, LOW);
        digitalWrite(Giallo, HIGH);
        delay(1000);
        digitalWrite(Giallo, LOW);
        digitalWrite(Rosso, HIGH);
        delay(4000);
        digitalWrite(Rosso, LOW);
    }
    else
    {
        // lampeggio giallo ( spento )
        digitalWrite(Verde, LOW);
        digitalWrite(Rosso, LOW);
        digitalWrite(Giallo, HIGH);
        delay(500); // ritardo
        digitalWrite(Giallo, LOW);
        delay(500); // ritardo
    }

    BotStato = lettura; // aggiorno lo stato del bottone
}