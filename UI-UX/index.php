<!DOCTYPE html5>
<html>

<?php
$page = $_SERVER['PHP_SELF'];
$sec = "6000000000000000000000000000000";
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Progetto arduino</title>
    <meta http-equiv="refresh" content="<?php echo $sec ?>;URL='<?php echo $page ?>'">
</head>

<body>



    <div class="backgd">



        <div class="container text-center">
            <div class="container text-center">
                <div class="col-md-12">
                    <h1 class="titolo">SMARTCITY</h1>
                </div>
            </div>

            <div class="container text-center">
                <div class="row" style="padding-top: 5%;">
                    <div class="col-sm-6 col-xl-6">
                        <div class="box">
                            <div class="row" style="padding-top: 15%;">
                                <div class="col-sm-3 col-xl-3"></div>
                                <div class="col-sm-3 col-xl-3">
                                    <?php
                                    $db = new mysqli("localhost", "root", "", "scuola2223");
                                    $sql = "SELECT OnOff FROM arduino WHERE descr=\"semaphore\"";
                                    $rs = $db->query($sql);
                                    $record = $rs->fetch_assoc();
                                    $readed = $record['OnOff'];
                                    if (strcmp($readed, "Off") == 0) {
                                        echo ("
                                                        <p class=\"btn-on-0\" style=\"background-color: red;\" onclick=\"on_off_0(true)\">
                                                            <span class=\"btn-on-circle-0\" style=\"left: 40px;background-color: white;box-shadow: 0 0 10px #888;\"></span>
                                                            <span class=\"btn-on-text-0\" style=\"right: 30px;color: white;\">OFF</span>
                                                        </p>
                                                    ");
                                    } else {
                                        if (strcmp($readed, "On") == 0) {
                                            echo ("
                                                            <p class=\"btn-on-0\" onclick=\"on_off_0(false)\">
                                                                <span class=\"btn-on-circle-0\"></span>
                                                                <span class=\"btn-on-text-0\">ON</span>
                                                            </p>
                                                        ");
                                        }
                                    }
                                    $db->close();
                                    ?>
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <h4 style="color:white">SEMAFORO</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                        <div class="box">
                            <div class="row" style="padding-top: 15%;">
                                <div class="col-sm-3 col-xl-3"></div>
                                <div class="col-sm-3 col-xl-3">
                                    <?php
                                    $db = new mysqli("localhost", "root", "", "scuola2223");
                                    $sql = "SELECT OnOff FROM arduino WHERE descr=\"led1\"";
                                    $rs = $db->query($sql);
                                    $record = $rs->fetch_assoc();
                                    $readed = $record['OnOff'];
                                    if (strcmp($readed, "Off") == 0) {
                                        echo ("
                                                        <p class=\"btn-on-1\" style=\"background-color: red;\" onclick=\"on_off_1(true)\">
                                                            <span class=\"btn-on-circle-1\" style=\"left: 40px;background-color: white;box-shadow: 0 0 10px #888;\"></span>
                                                            <span class=\"btn-on-text-1\" style=\"right: 30px;color: white;\">OFF</span>
                                                        </p>
                                                    ");
                                    } else {
                                        if (strcmp($readed, "On") == 0) {
                                            echo ("
                                                            <p class=\"btn-on-1\" onclick=\"on_off_1(false)\">
                                                                <span class=\"btn-on-circle-1\"></span>
                                                                <span class=\"btn-on-text-1\">ON</span>
                                                            </p>
                                                        ");
                                        }
                                    }
                                    $db->close();
                                    ?>
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <h4 style="color:white">CASA 1</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3"></div>
                            </div>
                            <div class="row" style="padding-top: 5%;">
                                <div class="col-sm-3 col-xl-3"></div>
                                <div class="col-sm-3 col-xl-3">
                                    <?php
                                    $db = new mysqli("localhost", "root", "", "scuola2223");
                                    $sql = "SELECT OnOff FROM arduino WHERE descr=\"led2\"";
                                    $rs = $db->query($sql);
                                    $record = $rs->fetch_assoc();
                                    $readed = $record['OnOff'];
                                    if (strcmp($readed, "Off") == 0) {
                                        echo ("
                                                        <p class=\"btn-on-2\" style=\"background-color: red;\" onclick=\"on_off_2(true)\">
                                                            <span class=\"btn-on-circle-2\" style=\"left: 40px;background-color: white;box-shadow: 0 0 10px #888;\"></span>
                                                            <span class=\"btn-on-text-2\" style=\"right: 30px;color: white;\">OFF</span>
                                                        </p>
                                                    ");
                                    } else {
                                        if (strcmp($readed, "On") == 0) {
                                            echo ("
                                                            <p class=\"btn-on-2\" onclick=\"on_off_2(false)\">
                                                                <span class=\"btn-on-circle-2\"></span>
                                                                <span class=\"btn-on-text-2\">ON</span>
                                                            </p>
                                                        ");
                                        }
                                    }
                                    $db->close();
                                    ?>

                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <h4 style="color:white">CASA 2</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3"></div>
                            </div>
                            <!-- BOTTONE 1 - led1 -->
                            <!-- BOTTONE 2 - led2 -->
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 5%;">
                    <div class="col-sm-6 col-xl-6 ">
                        <div class="box">
                            <div class="row" style="padding-top: 15%;">
                                <div class="col-sm-3 col-xl-3"></div>
                                <div class="col-sm-3 col-xl-3">
                                    <?php
                                    $db = new mysqli("localhost", "root", "", "scuola2223");
                                    $sql = "SELECT OnOff FROM arduino WHERE descr=\"pump\"";
                                    $rs = $db->query($sql);
                                    $record = $rs->fetch_assoc();
                                    $readed = $record['OnOff'];
                                    if (strcmp($readed, "Off") == 0) {
                                        echo ("
                                                        <p class=\"btn-on-3\" style=\"background-color: red;\" onclick=\"on_off_3(true)\">
                                                            <span class=\"btn-on-circle-3\" style=\"left: 40px;background-color: white;box-shadow: 0 0 10px #888;\"></span>
                                                            <span class=\"btn-on-text-3\" style=\"right: 30px;color: white;\">OFF</span>
                                                        </p>
                                                    ");
                                    } else {
                                        if (strcmp($readed, "On") == 0) {
                                            echo ("
                                                            <p class=\"btn-on-3\" onclick=\"on_off_3(false)\">
                                                                <span class=\"btn-on-circle-3\"></span>
                                                                <span class=\"btn-on-text-3\">ON</span>
                                                            </p>
                                                        ");
                                        }
                                    }
                                    $db->close();
                                    ?>
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <h4 style="color:white">FIUME</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3"></div>
                            </div>
                            <!-- BOTTONE 3 - pump -->
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6 ">
                        <div class="box">
                            <div class="row" style="padding-top: 15%;">
                                <div class="col-sm-3 col-xl-3"></div>
                                <div class="col-sm-3 col-xl-3">
                                    <?php
                                    $db = new mysqli("localhost", "root", "", "scuola2223");
                                    $sql = "SELECT OnOff FROM arduino WHERE descr=\"oled\"";
                                    $rs = $db->query($sql);
                                    $record = $rs->fetch_assoc();
                                    $readed = $record['OnOff'];
                                    if (strcmp($readed, "Off") == 0) {
                                        echo ("
                                            <p class=\"btn-on-4\" style=\"background-color: red;\" onclick=\"on_off_4(true)\">
                                                <span class=\"btn-on-circle-4\" style=\"left: 40px;background-color: white;box-shadow: 0 0 10px #888;\"></span>
                                                <span class=\"btn-on-text-4\" style=\"right: 30px;color: white;\">OFF</span>
                                            </p>
                                        ");
                                    } else {
                                        if (strcmp($readed, "On") == 0) {
                                            echo ("
                                                <p class=\"btn-on-4\" onclick=\"on_off_4(false)\">
                                                    <span class=\"btn-on-circle-4\"></span>
                                                    <span class=\"btn-on-text-4\">ON</span>
                                                </p>
                                            ");
                                        }
                                    }
                                    $db->close();
                                    ?>
                                </div>
                                <div class="col-sm-3 col-xl-5">
                                    <h4 style="color:white">OLED SCHERMO</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3"></div>
                                <div class="row " style="padding-top: 8%;">
                                    <div class="col-sm-2 col-xl-2"></div>

                                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                        <!--
                                        <div class="col-sm-4 col-xl-4">
                                            <label for="" class="visually-hidden" title="prova"></label>
                                            <input type="text" class="form-control" id="" placeholder="Inserisci nome" maxlength="10" name="oledTextInput">
                                            <button type="submit" class="btn btn-success mb-3">INVIA</button>
                                        </div>-->
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Inserisci nome" aria-label="Recipient's username" maxlength="10" aria-describedby="basic-addon2" name="oledTextInput">
                                            <div class="input-group-append">
                                                <button class="btn btn-success" type="submit">INVIA</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="col-sm-4 col-xl-4"></div>
                                    <div class="col-sm-2 col-xl-2"></div>
                                </div>

                                <!-- <form class="row g-3">
                                            <div class="col-5">
                                                <button type="submit" class="btn btn-success mb-3">INVIA</button>
                                            </div>
                                        </form> -->
                            </div>
                            <!-- BOTTONE 4 -->
                            <!-- <p class="btn-on-4" onclick="on_off_4()">
                                        <span class="btn-on-circle-4"></span>
                                        <span class="btn-on-text-4">ON</span>
                                    </p>
                                    OLED screen -->
                        </div>
                    </div>
                </div>
                </br></br>
                <div class="col-sm-6 col-xl-6 ">
                    <div class="box2">
                        <div class="row" style="padding-top: 5%;">
                            <div class="col-sm-3 col-xl-3"></div>
                            <div class="col-sm-3 col-xl-3">
                                <?php
                                $db = new mysqli("localhost", "root", "", "scuola2223");
                                $sql = "SELECT OnOff FROM arduino WHERE descr=\"solarPanel\"";
                                $rs = $db->query($sql);
                                $record = $rs->fetch_assoc();
                                $readed = $record['OnOff'];
                                if (strcmp($readed, "Off") == 0) {
                                    echo ("
                                                    <p class=\"btn-on-5\" style=\"background-color: red;\" onclick=\"on_off_5(true)\">
                                                        <span class=\"btn-on-circle-5\" style=\"left: 40px;background-color: white;box-shadow: 0 0 10px #888;\"></span>
                                                        <span class=\"btn-on-text-5\" style=\"right: 30px;color: white;\">OFF</span>
                                                    </p>
                                                ");
                                } else {
                                    if (strcmp($readed, "On") == 0) {
                                        echo ("
                                                        <p class=\"btn-on-5\" onclick=\"on_off_5(false)\">
                                                            <span class=\"btn-on-circle-5\"></span>
                                                            <span class=\"btn-on-text-5\">ON</span>
                                                        </p>
                                                    ");
                                    }
                                }
                                $db->close();
                                ?>
                            </div>
                            <div class="col-sm-3 col-xl-3">
                                <h4 style="color:white">PANNELLO SOLARE</h4>
                            </div>
                            <div class="col-sm-3 col-xl-3"></div>
                            </br>
                            <!--
                                    <div class="row " style="padding-top: 3%;">
                                        <div class="col-sm-2 col-xl-2">

                                        </div>
                                        <div class="col-sm-2 col-xl-3">
                                            <h4 style="color:white">VALORE MASSIMO</h4>
                                        </div>

                                        <div class="col-sm-4 col-xl-4">
                                            <label for="" class="visually-hidden" title="prova"></label>
                                            <input type="text" class="form-control" id="" placeholder=" ">
                                        </div>
                                    </div>
                                -->
                            <!--
                                    <div class="row" style="padding-top: 1.5%;">
                                    <div class="col-sm-2 col-xl-3">
                                        <h4 style="color:white">VALORE ATTUALE</h4>
                                    </div>
                                -->

                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                <?php
                                $db = new mysqli("localhost", "root", "", "scuola2223");
                                $sql = "SELECT String FROM arduino WHERE descr='solarPanel'";
                                $rs = $db->query($sql);

                                $record = $rs->fetch_assoc();

                                //intval( $string )
                                echo ("
                                    <div class=\"col-sm-0 col-xl-11\" style=\"padding-left: 8%;\">
                                        <div class=\"progress-bar progress-bar-striped\" style=\"min-width: 20px;\"> </div>
                                        <!--<button onclick=\"dynamicBar(
                                ");
                                $newPercentage = intval($record['String']) * 100 / 400;
                                //echo($newPercentage);
                                echo ("
                                    )\"> prova</button>-->
                                    </div>
                                ");

                                echo ("
                                    <script>
                                        var i = 0;
                                        var bar = document.querySelector(\".progress-bar\");
                                        function makeProgress(){
                                            if(i < $newPercentage){
                                                i = i + 1;
                                                bar.style.width = i + \"%\";
                                                bar.innerText = \"⚡ \" + i + \"% ⚡\"  ;
                                            }

                                            // Wait for sometime before running this script again
                                            setTimeout(\"makeProgress()\", $newPercentage);
                                        }
                                        makeProgress();
                                    </script>
                                ");

                                $db->close();
                                ?>
                            </form>
                            <!--
                                    <div class="col-sm-4 col-xl-4">
                                        <label for="" class="visually-hidden" title="prova"></label>
                                        <input type="text" class="form-control" id="" placeholder=" ">
                                    </div>
                                -->
                        </div>
                    </div>
                    <!--
                            <form class="row g-3">
                                <div class="col-5">
                                    <button type="submit" class="btn btn-success mb-3">INVIA</button>
                                </div>
                            </form>
                        -->
                </div>
                <!-- BOTTONE 4 - oled -->
            </div>
        </div>
        <br /><br />
    </div>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $value = $_POST['oledTextInput'];
        $db = new mysqli("localhost", "root", "", "scuola2223");   // creazione collegamento con il mio database
        $sql = "UPDATE arduino SET String = \"$value\" WHERE Descr = \"oled\"";    // creazione della query

        $rs = $db->query($sql);     // result che prende il collegamento e effetua la query

        $db->close();   // chiudo la mia connessione

        Header('Location: ' . $_SERVER['PHP_SELF']);
        exit(); //optional
    } //*/
    ?>

    <!-- SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./script/app.php"></script>

</body>

</html>
