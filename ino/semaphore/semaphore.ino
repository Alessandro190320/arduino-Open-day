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
        digitalWrite(Rosso, HIGH);
        digitalWrite(Verde, HIGH);
        digitalWrite(Giallo, HIGH);
    }
    else
    {
        // lampeggio giallo ( spento )
    }

    BotStato = lettura; // aggiorno lo stato del bottone
}