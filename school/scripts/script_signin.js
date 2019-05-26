"use strict"

/* СКРИПТ ВАЛИДАЦИИ ДЛЯ ФОРМ ВХОДА И РЕГИСТРАЦИИ */

var sign = document.getElementById('sign');
sign.addEventListener("click", validation_sign);

function validation_sign() {
    var input_sign = document.getElementsByClassName('input_sign');
    if (input_sign[3].value != input_sign[4].value) {
        alert("Пароли не совпадают!");
        return false;
    } else {
        for (var i = 0; i < input_sign.length; i++) {
            if (input_sign[i].value == "") {
                input_sign[i].style.borderColor = "red";
                return false;
            } else {
                
            }
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



