<!DOCTYPE html5>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Progetto arduino</title>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
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
                                <div class="col-sm-3 col-xl-3">
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <p class="btn-on-0" onclick="on_off_0()">
                                        <span class="btn-on-circle-0"></span>
                                        <span class="btn-on-text-0">ON</span>
                                    </p>
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <h4 style="color:white">SEMAFORO</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                </div>
                            </div>

                            <!-- BOTTONE 0 -->
                            <!-- <p class="btn-on-0" onclick="on_off_0()">
                                    <span class="btn-on-text-0">ON</span>
                                    <span class="btn-on-circle-0"></span>
                                </p>
                                semaphore -->
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6">
                        <div class=" box">
                            <div class="row" style="padding-top: 15%;">
                                <div class="col-sm-3 col-xl-3">
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <p class="btn-on-1" onclick="on_off_1()">
                                        <span class="btn-on-circle-1"></span>
                                        <span class="btn-on-text-1">ON</span>
                                    </p>
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <h4 style="color:white">CASA 1</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                </div>
                            </div>
                            <div class="row" style="padding-top: 5%;">
                                <div class="col-sm-3 col-xl-3">
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <p class="btn-on-2" onclick="on_off_2()">
                                        <span class="btn-on-circle-2"></span>
                                        <span class="btn-on-text-2">ON</span>
                                    </p>
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <h4 style="color:white">CASA 2</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                </div>
                            </div>
                            <!-- BOTTONE 1 -->
                            <!-- <p class="btn-on-1" onclick="on_off_1()">
                                    <span class="btn-on-circle-1"></span>
                                    <span class="btn-on-text-1">ON</span>
                                </p>
                                led 1
                                BOTTONE 2 -->
                            <!-- <p class="btn-on-2" onclick="on_off_2()">
                                    <span class="btn-on-circle-2"></span>
                                    <span class="btn-on-text-2">ON</span>
                                </p>
                                led 2  -->
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 5%;">
                    <div class="col-sm-6 col-xl-6 ">
                        <div class="box">
                            <div class="row" style="padding-top: 15%;">
                                <div class="col-sm-3 col-xl-3">

                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <p class="btn-on-3" onclick="on_off_3()">
                                        <span class="btn-on-circle-3"></span>
                                        <span class="btn-on-text-3">ON</span>
                                    </p>
                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <h4 style="color:white">FIUME</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3">

                                </div>
                            </div>
                            <!-- BOTTONE 3 -->
                            <!-- <p class="btn-on-3" onclick="on_off_3()">
                                    <span class="btn-on-circle-3"></span>
                                    <span class="btn-on-text-3">ON</span>
                                </p>
                                river -->
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-6 ">
                        <div class="box">
                            <div class="row" style="padding-top: 15%;">
                                <div class="col-sm-3 col-xl-3">

                                </div>
                                <div class="col-sm-3 col-xl-3">
                                    <p class="btn-on-4" onclick="on_off_4()">
                                        <span class="btn-on-circle-4"></span>
                                        <span class="btn-on-text-4">ON</span>
                                    </p>
                                </div>
                                <div class="col-sm-3 col-xl-5">
                                    <h4 style="color:white">OLED SCHERMO</h4>
                                </div>
                                <div class="col-sm-3 col-xl-3">

                                </div>
                                <div class="row " style="padding-top: 8%;">
                                    <div class="col-sm-2 col-xl-2">

                                    </div>
                                    <div class="col-sm-4 col-xl-4">
                                        <label for="" class="visually-hidden" title="prova"></label>
                                        <input type="text" class="form-control" id="" placeholder="Inserisci nome">
                                    </div>
                                    <div class="col-sm-4 col-xl-4">
                                        <button type="submit" class="btn btn-success mb-3">INVIA</button>
                                    </div>
                                    <div class="col-sm-2 col-xl-2">

                                    </div>
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
                            <div class="col-sm-3 col-xl-3">

                            </div>
                            <div class="col-sm-3 col-xl-3">
                                <p class="btn-on-5" onclick="on_off_5()">
                                    <span class="btn-on-circle-5"></span>
                                    <span class="btn-on-text-5">ON</span>
                                </p>
                            </div>
                            <div class="col-sm-3 col-xl-3">
                                <h4 style="color:white">PANNELLO SOLARE</h4>
                            </div>
                            <div class="col-sm-3 col-xl-3">

                            </div>
                            </br>
                            <!---
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
                            <!--<div class="row" style="padding-top: 1.5%;">
                                <div class="col-sm-2 col-xl-3">
                                    <h4 style="color:white">VALORE ATTUALE</h4>
                                </div>-->
                            
                            <div class="progess">
                                <div class="col-sm-0 col-xl-11" style="padding-left: 8%;">
                                    <div class="progress-bar" role="progressbar" aria-label="Example with label"
                                        style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        100%</div>
                                    <!-- Bottone di prova per provare js 
                                        <button onclick="dynamicBar(300)"> prova</button> --> 
                                </div>
                            </div>
                            
                            
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    $db = new mysqli("localhost", "root", "", "scuola2223");
                                    $sql = "UPDATE arduino SET OnOff = 'Off' WHERE descr='0'";
                                    $rs = $db->query($sql);

                                    $db->close();
                                    
                                </form>
                                    

                            <!--<div class="col-sm-4 col-xl-4">
                                        <label for="" class="visually-hidden" title="prova"></label>
                                        <input type="text" class="form-control" id="" placeholder=" ">
                                    </div>-->
                        </div>
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
        <br /><br />
    </div>
    </div>
    <!-- SCRIPT-->
    <script src="./script/app.js"></script>
    </div>

</body>

</html>