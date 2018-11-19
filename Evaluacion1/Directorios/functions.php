<?php
/*
 * Realiza una función devuelveDir que recorre un directorio devolviendo los nombre de los
 * ficheros que contiene, sólo nombre de los ficheros. Devolvemos un array.
 */
function devuelveDir($ruta){
    $directorio =opendir($ruta);
    $arrayFiles=array();
    $cont=0;
    while (false !==($archivo = readdir($directorio))) {
        $tempFilNam= $ruta."\\".$archivo;
        if (is_file($tempFilNam)) {
            $arrayFiles[$cont]=$archivo;
            $cont++;
        }
    }
    return $arrayFiles;
}
/*
 * Realiza una función
 * devuelveDirSubdir que recorre un directorio y sus subdirectorios devuelve el
 * nombre de los ficheros que contienen cada uno de ellos. Devolvemos el
 * nombre con la ruta completa. Devolvemos array.
 */

function devuelveDirSubdir($ruta){
    $directorio =opendir($ruta);
    $arrayFiles=array();
    $cont=0;
    while ($archivo = readdir($directorio)) {
        $tempFilNam= $ruta."\\".$archivo;
        if (is_file($tempFilNam)) {
            $arrayFiles[$cont]=$archivo;
            $cont++;
        }if (is_dir($tempFilNam)) {
            if(false==strpos($tempFilNam, ".")){
                $subDir =opendir($tempFilNam);
                $subRuta = $tempFilNam;
                while ($archivo = readdir($subDir)) {
                    $tempFilNam= $subRuta."\\".$archivo;
                    if (is_file($tempFilNam)) {
                        $arrayFiles[$cont]=$archivo;
                    }if (is_dir($tempFilNam)) {
                        if(false==strpos($tempFilNam, ".")){
                            $arrayFiles[$cont]=$archivo;
                            $cont++;
                        }
                    }
                }
            }
        }
    }
    return $arrayFiles;
}
?>