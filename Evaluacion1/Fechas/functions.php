<?php 
/*
 * 1. Realiza una función que acepte una fecha como cadena con el formato dd-mm-aaaa
 * compruebe si la fecha es correcta y nos devuelva la fecha en formato UNIX.
 */
function ej1($var){
    if(strlen($var)!=10){
        return False;
    }
    $dia=intval($var[0].$var[1]);
    $mes=intval($var[3].$var[4]);
    $año=intval($var[6].$var[7].$var[8].$var[9]);
    if(checkdate ($mes ,$dia ,$año)=='true'){
        return mktime(0,0,0,$mes,$dia,$año);
    }else{
        return "Fecha incorrecta";
    }  
}
/*
 * 2. Realiza una función que acepte una fecha como cadena con el formato aaaa-mm-dd
 * compruebe si la fecha es correcta y nos devuelva la fecha en formato UNIX
 */
function ej2($var){
    if(strlen($var)!=10){
        return False;
    }
    $dia=$var[8].$var[9];
    $mes=$var[5].$var[6];
    $año=$var[0].$var[1].$var[2].$var[3];
    if(checkdate ($mes ,$dia ,$año)==true){
        return mktime(0,0,0,$mes,$dia,$año);
    }else{
        return "Fecha incorrecta";
    }
}
/*
 * 3. Realiza una función que reciba la fecha en formato UNIX y devuelva la fecha en
 * formato dd-mm-aaaa y aaaa-mm-dd según un segundo argumento que le pasemos a
 * la función.
 */
function ej3($var,$format){
    if($format==1){
        return date("d-m-Y",$var);
    }
    else if($format==2){
        return date("Y-m-d",$var);
    }
}
/*
 * 4. Realiza una función que nos devuelva el nº de días que han pasado entre dos fechas.
 * Hay que tener en cuenta que tendremos que validar las fechas antes o durante la
 * función.
 */
function ej4($fech1,$fech2){
    $dia1=intval($fech1[0].$fech1[1]);
    $mes1=intval($fech1[3].$fech1[4]);
    $año1=intval($fech1[6].$fech1[7].$fech1[8].$fech1[9]);
    if(checkdate ($mes1 ,$dia1 ,$año1)==true){
        $fecha1=mktime(0,0,0,$mes1,$dia1,$año1);
    }else{
        return "Fecha incorrecta";
    }
    
    
    $dia2=intval($fech2[0].$fech2[1]);
    $mes2=intval($fech2[3].$fech2[4]);
    $año2=intval($fech2[6].$fech2[7].$fech2[8].$fech2[9]);
    if(checkdate ($mes2 ,$dia2 ,$año2)==true){
        $fecha2=mktime(0,0,0,$mes2,$dia2,$año2);
    }else{
        return "Fecha incorrecta";
    }
    $dif=$fecha1-$fecha2;
    
    $diffD= date("j",$dif);
    return $diffD-1;
}

?>