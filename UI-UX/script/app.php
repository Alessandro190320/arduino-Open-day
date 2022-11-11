// ------------------------------------------------------------------------ //
// Ho commentato tutte le chiamate alle funzioni del bottone in modo che //
// ogni volta che si aggiorna lo stato non venga mandato a False di default //
// ------------------------------------------------------------------------ //

// Btn 0
function on_off_0(type) {
var btn = document.getElementsByClassName("btn-on-0")[0];
var circle = document.getElementsByClassName("btn-on-circle-0")[0];
var text = document.getElementsByClassName("btn-on-text-0")[0];

<?php
$db = new mysqli("localhost", "root", "", "scuola2223");

$sql = "SELECT OnOff FROM arduino WHERE descr='semaphore'";
$rs = $db->query($sql);
$record = $rs->fetch_assoc();
$readed = $record['OnOff'];
if (strcmp($readed, "On") == 0) {
    $sql = "UPDATE arduino SET OnOff = 'Off' WHERE descr='semaphore'";
} else {
    $sql = "UPDATE arduino SET OnOff = 'On' WHERE descr='semaphore'";
}
$db->query($sql);
$db->close();
?>

if (!type) {
btn.style = "background-color: red;"
circle.style = "left: 40px;background-color: white;box-shadow: 0 0 10px #888;";
text.style = "right: 30px;color: white;";
text.innerText = "OFF";
}
else {
btn.style = "";
circle.style = "";
text.style = "";
text.innerText = "ON";
}
btn.setAttribute("onclick", "on_off_0(" + !type + ")");
}

<?php
/*
    $db = new mysqli("localhost", "root", "", "scuola2223");
    $sql = "SELECT OnOff FROM arduino WHERE descr=\"semaphore\"";
    $rs = $db->query($sql);
    $record = $rs->fetch_assoc();
    $readed = $record['OnOff'];
    if (strcmp($readed, "On")==0){
            echo("
                btn.style = \"background-color: red;\"
                circle.style = \"left: 40px;background-color: white;box-shadow: 0 0 10px #888;\";
                text.style = \"right: 30px;color: white;\";
                text.innerText = \"OFF\";
            ");
            //echo("on_off_0(true)");
        }
        else{
            if (strcmp($readed, "Off")==0){
                echo("
                    btn.style = \"\";
                    circle.style = \"\";
                    text.style = \"\";
                    text.innerText = \"ON\";
                ");
            }
        }
    $db->close();//*/
?>


// Btn 1

function on_off_1(type) {
var btn = document.getElementsByClassName("btn-on-1")[0];
var circle = document.getElementsByClassName("btn-on-circle-1")[0];
var text = document.getElementsByClassName("btn-on-text-1")[0];

<?php
/*
        $db = new mysqli("localhost", "root", "", "scuola2223");

        $sql = "SELECT OnOff FROM arduino WHERE descr='house1'";
        $rs = $db->query($sql);
        $record = $rs->fetch_assoc();
        $readed = $record['OnOff'];
        if (strcmp($readed, "On")==0){
            $sql = "UPDATE arduino SET OnOff = 'Off' WHERE descr='house1'";
        }
        else{
            $sql = "UPDATE arduino SET OnOff = 'On' WHERE descr='house1'";
        }
        $db->query($sql);
        $db->close();
        */
?>

if (!type) {
btn.style = "background-color: red;"
circle.style = "left: 40px;background-color: white;box-shadow: 0 0 10px #888;";
text.style = "right: 30px;color: white;";
text.innerText = "OFF";
}
else {
btn.style = "";
circle.style = "";
text.style = "";
text.innerText = "ON";
}
btn.setAttribute("onclick", "on_off_1(" + !type + ")");
}
//on_off_1(false)
<?php
/*
    $db = new mysqli("localhost", "root", "", "scuola2223");
    $sql = "SELECT OnOff FROM arduino WHERE descr='house1'";
    $rs = $db->query($sql);
    $record = $rs->fetch_assoc();
    $readed = $record['OnOff'];
    if (strcmp($readed, "On")==0){
            echo("on_off_1(false)");
        }
        else{
            if (strcmp($readed, "Off")==0){
                echo("on_off_1(true)");
            }
        }
    $db->close();*/
?>

// Btn 2

function on_off_2(type) {
var btn = document.getElementsByClassName("btn-on-2")[0];
var circle = document.getElementsByClassName("btn-on-circle-2")[0];
var text = document.getElementsByClassName("btn-on-text-2")[0];

<?php
/*
        $db = new mysqli("localhost", "root", "", "scuola2223");

        $sql = "SELECT OnOff FROM arduino WHERE descr='house2'";
        $rs = $db->query($sql);
        $record = $rs->fetch_assoc();
        $readed = $record['OnOff'];
        if (strcmp($readed, "On")==0){
            $sql = "UPDATE arduino SET OnOff = 'Off' WHERE descr='house2'";
        }
        else{
            $sql = "UPDATE arduino SET OnOff = 'On' WHERE descr='house2'";
        }
        $db->query($sql);
        $db->close();//*/
?>

if (!type) {
btn.style = "background-color: red;"
circle.style = "left: 40px;background-color: white;box-shadow: 0 0 10px #888;";
text.style = "right: 30px;color: white;";
text.innerText = "OFF";
}
else {
btn.style = "";
circle.style = "";
text.style = "";
text.innerText = "ON";
}
btn.setAttribute("onclick", "on_off_2(" + !type + ")");
}
//on_off_2(false)
<?php
/*
    $db = new mysqli("localhost", "root", "", "scuola2223");
    $sql = "SELECT OnOff FROM arduino WHERE descr='house2'";
    $rs = $db->query($sql);
    $record = $rs->fetch_assoc();
    $readed = $record['OnOff'];
    if (strcmp($readed, "On")==0){
            echo("on_off_2(false)");
        }
        else{
            if (strcmp($readed, "Off")==0){
                echo("on_off_2(true)");
            }
        }
    $db->close();//*/
?>

// Btn 3

function on_off_3(type) {
var btn = document.getElementsByClassName("btn-on-3")[0];
var circle = document.getElementsByClassName("btn-on-circle-3")[0];
var text = document.getElementsByClassName("btn-on-text-3")[0];


<?php
/*
        $db = new mysqli("localhost", "root", "", "scuola2223");
        $sql = "SELECT OnOff FROM arduino WHERE descr='pump'";
        $rs = $db->query($sql);
        $record = $rs->fetch_assoc();
        $readed = $record['OnOff'];
        if (strcmp($readed, "On")==0){
            $sql = "UPDATE arduino SET OnOff = 'Off' WHERE descr='pump'";
        }
        else{
            $sql = "UPDATE arduino SET OnOff = 'On' WHERE descr='pump'";
        }
        $db->query($sql);
        $db->close();//*/
?>

if (!type) {
btn.style = "background-color: red;"
circle.style = "left: 40px;background-color: white;box-shadow: 0 0 10px #888;";
text.style = "right: 30px;color: white;";
text.innerText = "OFF";
}
else {
btn.style = "";
circle.style = "";
text.style = "";
text.innerText = "ON";
}
btn.setAttribute("onclick", "on_off_3(" + !type + ")");
}
//on_off_3(false)

<?php
/*
    $db = new mysqli("localhost", "root", "", "scuola2223");
    $sql = "SELECT OnOff FROM arduino WHERE descr='pump'";
    $rs = $db->query($sql);
    $record = $rs->fetch_assoc();
    $readed = $record['OnOff'];
    if (strcmp($readed, "On")==0){
            echo("on_off_3(false)");
        }
        else{
            if (strcmp($readed, "Off")==0){
                echo("on_off_3(true)");
            }
        }
    $db->close();//*/
?>


// Btn 4

function on_off_4(type) {
var btn = document.getElementsByClassName("btn-on-4")[0];
var circle = document.getElementsByClassName("btn-on-circle-4")[0];
var text = document.getElementsByClassName("btn-on-text-4")[0];

<?php
/*
        $db = new mysqli("localhost", "root", "", "scuola2223");

        $sql = "SELECT OnOff FROM arduino WHERE descr='oled'";
        $rs = $db->query($sql);
        $record = $rs->fetch_assoc();
        $readed = $record['OnOff'];
        if (strcmp($readed, "On")==0){
            $sql = "UPDATE arduino SET OnOff = 'Off' WHERE descr='oled'";
        }
        else{
            $sql = "UPDATE arduino SET OnOff = 'On' WHERE descr='oled'";
        }
        $db->query($sql);
        $db->close();//*/
?>

if (!type) {
btn.style = "background-color: red;"
circle.style = "left: 40px;background-color: white;box-shadow: 0 0 10px #888;";
text.style = "right: 30px;color: white;";
text.innerText = "OFF";
}
else {
btn.style = "";
circle.style = "";
text.style = "";
text.innerText = "ON";
}
btn.setAttribute("onclick", "on_off_4(" + !type + ")");
}
//on_off_4(false)
<?php
/*
    $db = new mysqli("localhost", "root", "", "scuola2223");
    $sql = "SELECT OnOff FROM arduino WHERE descr='oled'";
    $rs = $db->query($sql);
    $record = $rs->fetch_assoc();
    $readed = $record['OnOff'];
    if (strcmp($readed, "On")==0){
            echo("on_off_4(false)");
        }
        else{
            if (strcmp($readed, "Off")==0){
                echo("on_off_4(true)");
            }
        }
    $db->close();//*/
?>

// Btn 5

function on_off_5(type) {
var btn = document.getElementsByClassName("btn-on-5")[0];
var circle = document.getElementsByClassName("btn-on-circle-5")[0];
var text = document.getElementsByClassName("btn-on-text-5")[0];

<?php
/*
        $db = new mysqli("localhost", "root", "", "scuola2223");

        $sql = "SELECT OnOff FROM arduino WHERE descr='solarPanel'";
        $rs = $db->query($sql);
        $record = $rs->fetch_assoc();
        $readed = $record['OnOff'];
        if (strcmp($readed, "On")==0){
            $sql = "UPDATE arduino SET OnOff = 'Off' WHERE descr='solarPanel'";
        }
        else{
            $sql = "UPDATE arduino SET OnOff = 'On' WHERE descr='solarPanel'";
        }
        $db->query($sql);
        $db->close();//*/
?>

if (!type) {
btn.style = "background-color: red;"
circle.style = "left: 40px;background-color: white;box-shadow: 0 0 10px #888;";
text.style = "right: 30px;color: white;";
text.innerText = "OFF";
}
else {
btn.style = "";
circle.style = "";
text.style = "";
text.innerText = "ON";
}
btn.setAttribute("onclick", "on_off_5(" + !type + ")");
}
//on_off_5(false)
<?php
/*
    $db = new mysqli("localhost", "root", "", "scuola2223");
    $sql = "SELECT OnOff FROM arduino WHERE descr='solarPanel'";
    $rs = $db->query($sql);
    $record = $rs->fetch_assoc();
    $readed = $record['OnOff'];
    if (strcmp($readed, "On")==0){
            echo("on_off_5(false)");
        }
        else{
            if (strcmp($readed, "Off")==0){
                echo("on_off_5(true)");
            }
        }
    $db->close();//*/
?>

// funzione barra
/*
function dynamicBar(value) {

var bar = document.getElementsByClassName("progress-bar");

//console.log(value);
percent = (value * 100) / 400; // calcolo la percentuale

// circle.style = "left: 40px;background-color: white;box-shadow: 0 0 10px #888;";

//str = "width: " + percent.toString() + "%;";
str1 = "aria-valuenow: " + String(percent) + ";";

//bar.style.width = "12%";
bar.style.width = percent.toString() + "%";
}*/
