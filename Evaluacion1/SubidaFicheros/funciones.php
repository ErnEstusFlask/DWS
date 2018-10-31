<?php

function Ej1(string $str){
    return preg_match("/^[0-9]{5}$/", $str);
}

function Ej2(string $str){
    $str=sinEspacios($str);
    return preg_match("/^\+34[0-9]{9}$/", $str);
}

function Ej3(string $str){
    return preg_match("/^[avenida|calle|paseo]{1}[a-z]+/i", $str);
}

function Ej4(string $str){
    return preg_match("/^[A-Za-z][\w]{6,7}[a-zA-Z0-9]$/", $str);
}

function Ej5(string $str){
    return preg_match("/^[A-Za-z][\w.]{2,}@[A-Za-z.]+[A-Za-z]{2,}$/", $str);
}

