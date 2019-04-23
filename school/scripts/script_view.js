"use strict"

/* СКРИПТ ДЛЯ ВЕРСИИ ДЛЯ СЛАБОВИДЯЩИХ */

var view_show = document.getElementById("view_show");
var view = document.getElementById("view");
var font = document.getElementsByClassName("font");
var color = document.getElementsByClassName("color");
var font_size, background_color;

view_show.addEventListener("click", show_view);

function show_view(){
    if (this.value == "Отменить") {
        window.location.reload();
    } else {
        view.style.display = "block";
    }
}

for (var i = 0; i < font.length; i++) {
    font[i].addEventListener("click", learn_font);
}

for (var i = 0; i < color.length; i++) {
    color[i].addEventListener("click", learn_color);
}

function learn_font(){
    var atr = this.getAttribute("data-font");
    if (atr == 0) {
        font_size = "30px";
    }
    if (atr == 1) {
        font_size = "34px";
    }
    if (atr == 2) {
        font_size = "38px";
    }
}

function learn_color(){
    var atr_color = this.getAttribute("data-color");
    if (atr_color == 0) {
        background_color = "black";
    }
    if (atr_color == 1) 
    {
        background_color = "white";
    }
    if (atr_color == 2) 
    {
        active();
    }
}

function active(){
    view.style.display = "none";
    view_show.value = "Отменить";
    var body = document.getElementById("body"); 
    body.style.background = background_color;
    var div = document.getElementsByTagName("div");
    var header = document.getElementsByTagName("header");
    var hr = document.getElementsByTagName("hr");


    for (var i = 0; i < hr.length; i++) {
        hr[i].style.display = "none";
    }

    for (var i = 0; i < header.length; i++) {
        header[i].style.background = background_color;
    }

    for (var i = 0; i < div.length; i++) {
        div[i].style.background = background_color;
    }

    var link = document.getElementsByClassName("link");
    var p = document.getElementsByTagName("p");
    var label = document.getElementsByTagName("label");
    var h3 = document.getElementsByTagName("h3");
    var h4 = document.getElementsByTagName("h4");
    var h1 = document.getElementsByTagName("h1");
    var a = document.getElementsByTagName("a");
    var td = document.getElementsByTagName("td");
    var li = document.getElementsByTagName("li");

    if (background_color == "white") {

        for (var i = 0; i < link.length; i++) {
            link[i].style.color = "black";
            link[i].style.fontSize = "font_size";
        }

        for (var i = 0; i < p.length; i++) {
            p[i].style.fontSize = font_size;
            p[i].style.color = "black";
        }
    
        for (var i = 0; i < label.length; i++) {
            label[i].style.fontSize = font_size;
            label[i].style.color = "black";
        }
    
        for (var i = 0; i < h3.length; i++) {
            h3[i].style.fontSize = font_size;
            h3[i].style.color = "black";
        }
    
        for (var i = 0; i < h4.length; i++) {
            h4[i].style.fontSize = font_size;
            h4[i].style.color = "black";
        }

        for (var i = 0; i < h1.length; i++) {
            h1[i].style.color = "black";
        }
    
        for (var i = 0; i < a.length; i++) {
            a[i].style.fontSize = font_size;
            a[i].style.color = "black";
        }
    
        for (var i = 0; i < td.length; i++) {
            td[i].style.fontSize = font_size;
            td[i].style.color = "black";
        }

        for (var i = 0; i < li.length; i++) {
            li[i].style.fontSize = font_size;
            li[i].style.color = "black";
        }

    } else {

        for (var i = 0; i < link.length; i++) {
            link[i].style.color = "white";
            link[i].style.fontSize = "font_size";
        }

        for (var i = 0; i < p.length; i++) {
            p[i].style.fontSize = font_size;
            p[i].style.color = "white";
        }
    
        for (var i = 0; i < label.length; i++) {
            label[i].style.fontSize = font_size;
            label[i].style.color = "white";
        }
    
        for (var i = 0; i < h3.length; i++) {
            h3[i].style.fontSize = font_size;
            h3[i].style.color = "white";
        }
    
        for (var i = 0; i < h4.length; i++) {
            h4[i].style.fontSize = font_size;
            h4[i].style.color = "white";
        }

        for (var i = 0; i < h1.length; i++) {
            h1[i].style.color = "black";
        }
    
        for (var i = 0; i < a.length; i++) {
            a[i].style.fontSize = font_size;
            a[i].style.color = "white";
        }
    
        for (var i = 0; i < td.length; i++) {
            td[i].style.fontSize = font_size;
            td[i].style.color = "white";
        }

        for (var i = 0; i < td.length; i++) {
            td[i].style.fontSize = font_size;
            td[i].style.color = "white";
        }
    }

    
}