"use strict"

/* СКРИПТ ВАЛИДАЦИИ ДЛЯ ФОРМ ВХОДА И РЕГИСТРАЦИИ */

var sign = document.getElementById('sign');
sign.addEventListener("click", validation_sign);

function validation_sign() {
    function validation_sign() { 
        var input_sign = document.getElementsByClassName('input_sign');
        if (input_sign[i].value == "") { 
        alert('Не все поля заполнены'); 
        } else { 
        } 
        if (input_sign[3].value != input_sign[4].value) { 
        alert("Пароли не совпадают!"); 
        } 
        }
}
var ins = document.getElementById('ins');
if(ins){
ins.addEventListener("click", validation_ins);
}
function validation_ins() {
    var input_in = document.getElementsByClassName('input_in');
    if (input_in[0].value == "" || input_in[1].value == "") {
        alert("Логин или пароль не заполнены!");
        return false;
    } else {

    }
}
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
    modal.style.display = "block";
}
span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



