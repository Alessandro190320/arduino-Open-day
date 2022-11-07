<?php
    // all these are the cases to load site or data from database

    //! ------------------------------------------------------------------------------------------------------------
    if(isset($_GET["led_status"])) {

        $db = new mysqli("localhost","root","","scuola2223");   // creazione collegamento con il mio database
        $sql = "SELECT * FROM arduino";    // creazione della query

        $rs = $db->query($sql);     // result che prende il collegamento e effetua la query

        // i do throught my rs until I found the Id that I want, and print the information
        while($record = $rs->fetch_assoc()){
            if ($record['descr']== "led"){  //change Id for your use
                echo($record['OnOff']); //which information of the row you want, in this case on off <- you cna found the default table on github
                break;
            }
        }

        $db->close();   // chiudo la mia connessione
    }
    //! ------------------------------------------------------------------------------------------------------------

	elseif(isset($_GET["cambiastatociaociaosonocoglione"])){
		echo("Sono Speciale");
	}

    // -------------------------------------- //
    // IF NO VARIABLES  -> load normally below//
    // -------------------------------------- //
    else{
        // load site
    }


?>
