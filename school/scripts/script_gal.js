"use strict"

/* СКРИПТ ДЛЯ ГАЛЛЕРЕИИ, ГАЛЛЕРЕЯ ПРОСТЕТСКАЯ */

var img_gal = document.getElementsByClassName("img_gal");

var big_img = document.getElementsByClassName("big_img");

for (var i = 0; i < img_gal.length; i++) {
    img_gal[i].addEventListener("click", show_photo);
}

function show_photo() {
    var atr = this.getAttribute("data-index");
    big_img[atr].style.display = "block";
}

