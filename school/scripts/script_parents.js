"use strict"

/* СКРИПТ ДЛЯ ВКЛАДОК В РАЗДЕЛЕ РОДИТЕЛЯМ */

var parents_button = document.getElementsByClassName('parents_button');
var parents_info = document.getElementsByClassName('parents_info');
for (var i = 0; i < parents_button.length; i++) {
    parents_button[i].addEventListener("click", show_hide_info);
}

function show_hide_info() {
    var atr = this.getAttribute("data-index");
    if (atr == "1") {
        this.style.backgroundColor = "black";
        this.style.color = "white";
        parents_info[0].style.display = "block";
        parents_info[1].style.display = "none";
        parents_info[2].style.display = "none";
        parents_button[1].style.backgroundColor = "#bdd1e2";
        parents_button[1].style.color = "black";
        parents_button[2].style.backgroundColor = "#bdd1e2";
        parents_button[2].style.color = "black";
    } 
    if (atr == "2") {
        this.style.backgroundColor = "black";
        this.style.color = "white";
        parents_info[1].style.display = "block";
        parents_info[0].style.display = "none";
        parents_info[2].style.display = "none";
        parents_button[0].style.backgroundColor = "#bdd1e2";
        parents_button[0].style.color = "black";
        parents_button[2].style.backgroundColor = "#bdd1e2";
        parents_button[2].style.color = "black";
    } 
    if (atr == "3") {
        this.style.backgroundColor = "black";
        this.style.color = "white";
        parents_info[2].style.display = "block";
        parents_info[0].style.display = "none";
        parents_info[1].style.display = "none";
        parents_button[0].style.backgroundColor = "#bdd1e2";
        parents_button[0].style.color = "black";
        parents_button[1].style.backgroundColor = "#bdd1e2";
        parents_button[1].style.color = "black";
    }
}