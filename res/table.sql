-- sql code for creating the first table
CREATE TABLE arduino(
    id INTEGER UNSIGNED AUTO_INCREMENT,
    feature INTEGER(1),
    dev_id INTEGER(1),
    onoff VARCHAR (255),

    PRIMARY KEY(id)
);

-- codice per inserire componente nella tabella creata
INSERT INTO arduino(feature, dev_id, val)
VALUES(0, 0, 'OFF'); -- example of a led 

-- by @nicolasBaratella