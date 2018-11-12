<?php
/*
 * Realiza una función devuelveDir que recorre un directorio devolviendo los nombre de los
 * ficheros que contiene, sólo nombre de los ficheros. Devolvemos un array.
 */
function devuelveDir($ruta){
    $directorio =opendir($ruta);
    $arrayFiles[];
    $cont=0;
    while ($archivo = readdir($directorio)) {
        $arrayFiles[$cont]=$achivo;
        $cont++;
    }
}
?>