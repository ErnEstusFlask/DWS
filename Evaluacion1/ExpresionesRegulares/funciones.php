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
    if (preg_match("/^[A-Z|a-z]+/" , $str)==true){
        return preg_match("/[\w_]{8,24}$/" , $str);
    }else{
        return false;
    }
}

function Ej5(string $str){
    return preg_match("/^[A-Z|a-z]+\w_{8,24}$/", $str);
}

