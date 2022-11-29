<!DOCTYPE html5>
<html>

    <?php
        $page = $_SERVER['PHP_SELF'];
        $db = new mysqli("localhost", "root", "", "scuola2223");

        // button semaphore
        if(isset($_POST['On_0'])){
            $sql = "UPDATE arduino SET OnOff = \"On\" WHERE Descr=\"semaphore\";";
            $rs = $db->query($sql);
        }
        if(isset($_POST['Off_0'])){
            $sql = "UPDATE arduino SET OnOff = \"Off\" WHERE Descr=\"semaphore\";";
            $rs = $db->query($sql);
        }

        // button led1
        if(isset($_POST['On_1'])){
            $sql = "UPDATE arduino SET OnOff = \"On\" WHERE Descr=\"led1\";";
            $rs = $db->query($sql);
        }
        if(isset($_POST['Off_1'])){
            $sql = "UPDATE arduino SET OnOff = \"Off\" WHERE Descr=\"led1\";";
            $rs = $db->query($sql);
        }

        // button led2
        if(isset($_POST['On_2'])){
            $sql = "UPDATE arduino SET OnOff = \"On\" WHERE Descr=\"led2\";";
            $rs = $db->query($sql);
        }
        if(isset($_POST['Off_2'])){
            $sql = "UPDATE arduino SET OnOff = \"Off\" WHERE Descr=\"led2\";";
            $rs = $db->query($sql);
        }

        // button pump
        if(isset($_POST['On_3'])){
            $sql = "UPDATE arduino SET OnOff = \"On\" WHERE Descr=\"pump\";";
            $rs = $db->query($sql);
        }
        if(isset($_POST['Off_3'])){
            $sql = "UPDATE arduino SET OnOff = \"Off\" WHERE Descr=\"pump\";";
            $rs = $db->query($sql);
        }

        // button oled
        if(isset($_POST['On_4'])){
            $sql = "UPDATE arduino SET OnOff = \"On\" WHERE Descr=\"oled\";";
            $rs = $db->query($sql);
        }
        if(isset($_POST['Off_4'])){
            $sql = "UPDATE arduino SET OnOff = \"Off\" WHERE Descr=\"oled\";";
            $rs = $db->query($sql);
        }

        // button solarPanel
        if(isset($_POST['On_5'])){
            $sql = "UPDATE arduino SET OnOff = \"On\" WHERE Descr=\"solarPanel\";";
            $rs = $db->query($sql);
        }
        if(isset($_POST['Off_5'])){
            $sql = "UPDATE arduino SET OnOff = \"Off\" WHERE Descr=\"solarPanel\";";
            $rs = $db->query($sql);
        }

        $db->close();
    ?>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./style/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Progetto arduino</title>
        <!--<meta http-equiv="refresh" content="<?php //echo $sec ?>;URL='<?php //echo $page ?>'">-->
    </head>

    <body>
        <div class="backgd">
            <div class="container">
                <div class="container">
                    <div class="col-md-12">
                        <h1 class="titolo">SMARTCITY</h1>
                    </div>
                </div>

                <div class="container">
                    <div class="row" style="padding-top: 5%;">
                        <div class="col-md-6">
                            <div class="box">
                                <div class="row" style="padding-top: 15%;">
                                    <div class="col-sm-3 col-xl-3"></div>
                                    <div class="col-sm-3 col-xl-3">
                                        <form method="post">
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button type="submit" class="btn btn-danger" name="Off_0" value="Off_0">Off</button>
                                                <button type="submit" class="btn btn-success" name="On_0" value="On_0">On</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-3 col-xl-3">
                                        <h4 style="color:white">SEMAFORO</h4>
                                    </div>
                                    <div class="col-sm-3 col-xl-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box">
                                <div class="row" style="padding-top: 15%;">
                                    <div class="col-sm-3 col-xl-3"></div>
                                    <div class="col-sm-3 col-xl-3">
                                        <form method="post">
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button type="submit" class="btn btn-danger" name="Off_1" value="Off_1">Off</button>
                                                <button type="submit" class="btn btn-success" name="On_1" value="On_1">On</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-3 col-xl-3">
                                        <h4 style="color:white">CASA 1</h4>
                                    </div>
                                    <div class="col-sm-3 col-xl-3"></div>
                                </div>
                                <div class="row" style="padding-top: 5%;">
                                    <div class="col-sm-3 col-xl-3"></div>
                                    <div class="col-sm-3 col-xl-3">
                                        <form method="post">
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button type="submit" class="btn btn-danger" name="Off_2" value="Off_2">Off</button>
                                                <button type="submit" class="btn btn-success" name="On_2" value="On_2">On</button>
                                            </div>
                                        </form>
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
                                        <form method="post">
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button type="submit" class="btn btn-danger" name="Off_3" value="Off_3">Off</button>
                                                <button type="submit" class="btn btn-success" name="On_3" value="On_3">On</button>
                                            </div>
                                        </form>
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
                                        <form method="post">
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button type="submit" class="btn btn-danger" name="Off_4" value="Off_4">Off</button>
                                                <button type="submit" class="btn btn-success" name="On_4" value="On_4">On</button>
                                            </div>
                                        </form>
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
                                </div>
                                <!-- BOTTONE 4 -->
                            </div>
                        </div>
                    </div>
                    </br></br>
                    <div class="col-sm-6 col-xl-6 ">
                        <div class="box2">
                            <div class="row" style="padding-top: 5%;">
                                <div class="col-sm-3 col-xl-3"></div>
                                <div class="col-sm-3 col-xl-3">
                                    <form method="post">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="submit" class="btn btn-danger" name="Off_5" value="Off_5">Off</button>
                                            <button type="submit" class="btn btn-success" name="On_5" value="On_5">On</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <h4 style="color:white">PANNELLO SOLARE</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3"></div>
                                </br>

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
                            </div>
                        </div>
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
    </body>

</html>
