// code pump
int bot = 10;
int lettura = LOW; 
int stato = LOW; 

int rel = 6; 

void setup()
{
    pinMode(bot, INPUT); 
    pinMode(rel, OUTPUT);
}

void loop()
{
   lettura = digitalRead(bot); 
   if ( lettura != stato and lettura == HIGH ) 
   {
    digitalWrite(bot,HIGH); 
   }

   stato = lettura; 
   delay(10);
}
