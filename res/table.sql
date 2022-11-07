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
VALUES(0, 0, 'On', ""); -- example of a led 

