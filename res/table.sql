-- codice sql per la creazione della prima tabella.
CREATE TABLE arduino2223(
    id INTEGER UNSIGNED AUTO_INCREMENT,
    feature INTEGER(1),
    dev_id INTEGER(1),
    onoff VARCHAR (7),

    PRIMARY KEY(id)
);

-- codice per inserire componente nella tabella creata
INSERT INTO arduino2223(feature, dev_id, val)
VALUES(0, 0, 'OFF'); -- example of a led 

-- by @nicolasBaratella