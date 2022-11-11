-- sql code for creating the first table
CREATE TABLE arduino(
    Id INTEGER UNSIGNED AUTO_INCREMENT NOT NULL,
    Descr VARCHAR(20) NOT NULL,
    OnOff VARCHAR(3) NOT NULL, -- solo On o Off (!!--CASE SENSITIVE--!!)
    String VARCHAR(20),

    PRIMARY KEY(Id)
);

-- codice per inserire componente nella tabella creata
INSERT INTO arduino(Id, Descr, OnOff, String)
VALUES(1, "pump", 'On', ""); -- example of a led 

INSERT INTO arduino(Id, Descr, OnOff, String)
VALUES(2, "semaphore", 'On', ""); -- example of a led 

INSERT INTO arduino(Id, Descr, OnOff, String)
VALUES(3, "solarPanel", 'On', "300"); -- example of a led 

INSERT INTO arduino(Id, Descr, OnOff, String)
VALUES(4, "oled", 'On', "sono sul oled"); -- example of a led 
