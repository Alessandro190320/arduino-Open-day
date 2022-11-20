// ------------------------------------------------------------------------ //
// Ho commentato tutte le chiamate alle funzioni del bottone in modo che //
// ogni volta che si aggiorna lo stato non venga mandato a False di default //
// ------------------------------------------------------------------------ //

// Btn 0
function on_off_0(type) {
    var btn = document.getElementsByClassName("btn-on-0")[0];
    var circle = document.getElementsByClassName("btn-on-circle-0")[0];
    var text = document.getElementsByClassName("btn-on-text-0")[0];
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
//on_off_0(false)

// Btn 1
function on_off_1(type) {
    var btn = document.getElementsByClassName("btn-on-1")[0];
    var circle = document.getElementsByClassName("btn-on-circle-1")[0];
    var text = document.getElementsByClassName("btn-on-text-1")[0];

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


// Btn 2

function on_off_2(type) {
var btn = document.getElementsByClassName("btn-on-2")[0];
var circle = document.getElementsByClassName("btn-on-circle-2")[0];
var text = document.getElementsByClassName("btn-on-text-2")[0];

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

// Btn 3
function on_off_3(type) {
var btn = document.getElementsByClassName("btn-on-3")[0];
var circle = document.getElementsByClassName("btn-on-circle-3")[0];
var text = document.getElementsByClassName("btn-on-text-3")[0];
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


// Btn 4

function on_off_4(type) {
    var btn = document.getElementsByClassName("btn-on-4")[0];
    var circle = document.getElementsByClassName("btn-on-circle-4")[0];
    var text = document.getElementsByClassName("btn-on-text-4")[0];

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


// Btn 5

function on_off_5(type) {
    var btn = document.getElementsByClassName("btn-on-5")[0];
    var circle = document.getElementsByClassName("btn-on-circle-5")[0];
    var text = document.getElementsByClassName("btn-on-text-5")[0];

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
