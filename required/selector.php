<?php
    // all these are the cases to load site or data from database

    if(isset($_GET["semaphore_status"])) {
        $db = new mysqli("localhost","root","","scuola2223");   // creazione collegamento con il mio database
        $sql = "SELECT OnOff FROM arduino WHERE Descr = \"semaphore\"";    // creazione della query

        $rs = $db->query($sql);     // result che prende il collegamento e effetua la query

        // i do throught my rs until I found the Id that I want, and print the information
        $record =$rs->fetch_assoc();
        echo($record["OnOff"]);

        $db->close();   // chiudo la mia connessione
    }

    elseif(isset($_GET["oled_status"])) {
        $db = new mysqli("localhost","root","","scuola2223");   // creazione collegamento con il mio database
        $sql = "SELECT OnOff FROM arduino WHERE Descr = \"oled\"";    // creazione della query

        $rs = $db->query($sql);     // result che prende il collegamento e effetua la query

        // i do throught my rs until I found the Id that I want, and print the information
        $record =$rs->fetch_assoc();
        echo($record["OnOff"]);

        $db->close();   // chiudo la mia connessione
    }

    elseif(isset($_GET["oled_string"])) {
        $db = new mysqli("localhost","root","","scuola2223");   // creazione collegamento con il mio database
        $sql = "SELECT String FROM arduino WHERE Descr = \"oled\"";    // creazione della query

        $rs = $db->query($sql);     // result che prende il collegamento e effetua la query

        // i do throught my rs until I found the Id that I want, and print the information
        $record =$rs->fetch_assoc();
        echo($record["String"]);

        $db->close();   // chiudo la mia connessione
    }

    elseif(isset($_GET["pump_status"])) {
        $db = new mysqli("localhost","root","","scuola2223");   // creazione collegamento con il mio database
        $sql = "SELECT OnOff FROM arduino WHERE Descr = \"pump\"";    // creazione della query

        $rs = $db->query($sql);     // result che prende il collegamento e effetua la query

        // i do throught my rs until I found the Id that I want, and print the information
        $record =$rs->fetch_assoc();
        echo($record["OnOff"]);

        $db->close();   // chiudo la mia connessione
    }

    elseif(isset($_GET["solarPanel_status"])) {
        $db = new mysqli("localhost","root","","scuola2223");   // creazione collegamento con il mio database
        $sql = "SELECT OnOff FROM arduino WHERE Descr = \"solarPanel\"";    // creazione della query

        $rs = $db->query($sql);     // result che prende il collegamento e effetua la query

        // i do throught my rs until I found the Id that I want, and print the information
        $record =$rs->fetch_assoc();
        echo($record["OnOff"]);

        $db->close();   // chiudo la mia connessione
    }

     elseif(isset($_GET["solarPanel_string"])) {
        $value = $_GET["solarPanel_string"];
        $db = new mysqli("localhost","root","","scuola2223");   // creazione collegamento con il mio database
        $sql = "UPDATE arduino SET String = " + $value + " WHERE Descr = \"solarPanel\"";    // creazione della query

        $rs = $db->query($sql);     // result che prende il collegamento e effetua la query

        $db->close();   // chiudo la mia connessione
    }



?>
