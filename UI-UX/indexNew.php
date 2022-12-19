<!doctype html>
<html lang="it">
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

        // string OLED
        if(isset($_POST['oledTextInput'])){
            $value = $_POST['oledTextInput'];
            $sql = "UPDATE arduino SET String = \"$value\" WHERE Descr = \"oled\"";
            $rs = $db->query($sql);
            Header('Location: ' . $_SERVER['PHP_SELF']);
            exit(); //optional
        }

        $db->close();
    ?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/style.css">
        <title>Progetto arduino</title>
    </head>
    <body class="bgImage">

        </div>
        <div class="container">
            <h1 class="titolo text-center">SMARTCITY</h1>

            <div class="container">
                <div class="row pt-5">

                    <!-- SEMAFORO -->
                    <div class="col">
                        <div class="container-sm rounded-5 shadow mt-3 p-4 glassEffect" data-tilt data-tilt-glare data-tilt-max-glare="0.5">
                            <div class="row p-5 align-items-center justify-content-around">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3">
                                    <form method="post">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="submit" class="btn glassEffectRedButton" name="Off_0" value="Off_0">Off</button>
                                            <button type="submit" class="btn glassEffectGreenButton" name="On_0" value="On_0">On</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-3">
                                    <h4 style="color:white">SEMAFORO</h4>
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                        </div>
                    </div>

                    <!-- CASA 1/2 -->
                    <div class="col">
                        <div class="container-sm rounded-5 shadow mt-3 p-4 glassEffect" data-tilt data-tilt-glare data-tilt-max-glare="0.5">
                            <div class="row p-3 align-items-center justify-content-around">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3">
                                    <form method="post">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="submit" class="btn glassEffectRedButton" name="Off_1" value="Off_1">Off</button>
                                            <button type="submit" class="btn glassEffectGreenButton" name="On_1" value="On_1">On</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-3">
                                    <h4 style="color:white">CASA 1</h4>
                                </div>
                                <div class="col-sm-3"></div>
                            </div>

                            <div class="row p-3 align-items-center justify-content-around">
                                <div class="col-sm-3 col-xl-3"></div>
                                <div class="col-sm-3 col-xl-3">
                                    <form method="post">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="submit" class="btn glassEffectRedButton" name="Off_2" value="Off_2">Off</button>
                                            <button type="submit" class="btn glassEffectGreenButton" name="On_2" value="On_2">On</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <h4 style="color:white">CASA 2</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-5">

                    <!--FIUME-->
                    <div class="col">
                        <div class="container-sm rounded-5 shadow mt-3 p-4 glassEffect" data-tilt data-tilt-glare data-tilt-max-glare="0.5">
                            <div class="row p-5">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-3">
                                    <form method="post">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="submit" class="btn glassEffectRedButton" name="Off_3" value="Off_3">Off</button>
                                            <button type="submit" class="btn glassEffectGreenButton" name="On_3" value="On_3">On</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-3">
                                    <h4 style="color:white">FIUME</h4>
                                </div>
                                <div class="col-sm-3"></div>
                            </div>
                        </div>
                    </div><!--END FIUME-->

                    <!--SCHERMO OLED-->
                    <div class="col">
                        <div class="container-sm rounded-5 shadow mt-3 p-4 glassEffect" data-tilt data-tilt-glare data-tilt-max-glare="0.5">
                            <div class="row p-3 align-items-center justify-content-around">
                                <div class="col-sm-3 col-xl-3"></div>
                                <div class="col-sm-3 col-xl-3">
                                    <form method="post">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="submit" class="btn glassEffectRedButton" name="Off_4" value="Off_4">Off</button>
                                            <button type="submit" class="btn glassEffectGreenButton" name="On_4" value="On_4">On</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-3 col-xl-5">
                                    <h4 style="color:white">OLED SCHERMO</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3"></div>
                            </div>

                            <div class="row p-3 align-items-center justify-content-around">
                                <div class="col">
                                    <form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">
                                        <div class="input-group">
                                            <input type="text" class="form-control glassEffectTextInput" placeholder="Inserisci nome" aria-label="Recipient's username" maxlength="10" aria-describedby="basic-addon2" name="oledTextInput">
                                            <div class="input-group-append">
                                                <button class="btn glassEffectGreenButton" type="submit">INVIA</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--PANNELLO SOLARE-->
                <div class="row pt-5">
                    <div class="container-sm rounded-5 shadow mt-3 p-4 glassEffect" data-tilt data-tilt-glare data-tilt-max-glare="0.5">
                        <div class="row p-5">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3">
                                <form method="post">
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="submit" class="btn glassEffectRedButton" name="Off_5" value="Off_5">Off</button>
                                        <button type="submit" class="btn glassEffectGreenButton" name="On_5" value="On_5">On</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-3">
                                <h4 style="color:white">PANNELLO SOLARE</h4>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="progress ml-5 mr-5 mb-3 glassEffect" style=" height: 30px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--END PANNELLO SOLARE-->
            </div>
        </div>

        <!-- SCRIPTS -->
        <?php
            $db = new mysqli("localhost", "root", "", "scuola2223");
            $sql = "SELECT String FROM arduino WHERE descr='solarPanel'";
            $rs = $db->query($sql);
            $record = $rs->fetch_assoc();
            $newPercentage = intval($record['String']) * 100 / 400;
            $db->close();

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
        ?>
        <script type="text/javascript" src="./script/vanilla-tilt.js"></script> <!--vanilla tilt js-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>