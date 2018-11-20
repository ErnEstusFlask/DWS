<?php
/*
 * Realiza una función devuelveDir que recorre un directorio devolviendo los nombre de los
 * ficheros que contiene, sólo nombre de los ficheros. Devolvemos un array.
 */
function devuelveDir($ruta){
    $directorio =opendir($ruta);
    $arrayFiles=array();
    while (false !==($archivo = readdir($directorio))) {
        $tempFilNam= $ruta."\\".$archivo;
        if (is_file($tempFilNam)) {
            array_push($arrayFiles,$archivo);
        }
    }
    closedir($directorio);
    return $arrayFiles;
}
/*
 * Realiza una función devuelveDirSubdir que recorre un directorio y sus subdirectorios
 * devuelve el nombre de los ficheros que contienen cada uno de ellos. Devolvemos el
 * nombre con la ruta completa. Devolvemos array.
 */

function devuelveDirSubdir($ruta){
    $directorio =opendir($ruta);
    $arrayFiles=array();
    while ($archivo = readdir($directorio)) {
        $tempFilNam= $ruta."\\".$archivo;
        if ($archivo!="." && $archivo!=".." && is_dir($tempFilNam)){
            $arrayFiles = array_merge(devuelveDirSubdir($tempFilNam),$arrayFiles);
        }elseif(is_file($tempFilNam)){
            $arrayFiles[] = $tempFilNam;
        }
    }
    closedir($directorio);
    return $arrayFiles;
}
/*
 * Realiza una función devuelveDirSubdirM que recorre un directorio y sus subdirectorios
 * devolviendo los nombres de los ficheros que contienen cada uno de ellos, discriminando
 * donde está contenido cada uno de ellos. Devuelve array multidimensional.
 */

function devuelveDirSubdirM($ruta){
    $directorio =opendir($ruta);
    $arrayFiles=array();
    while ($archivo = readdir($directorio)) {
        $tempFilNam= $ruta."\\".$archivo;
        if ($archivo!="." && $archivo!=".." && is_dir($tempFilNam)){
            $arrayFiles[$archivo]= devuelveDirSubdirM($tempFilNam);
        }elseif(is_file($tempFilNam)){
            $arrayFiles[]= $archivo;
        }
    }
    closedir($directorio);
    return $arrayFiles;
}
/*
 * Realiza una función que muestre el contenido de un array multidimensional.
 */

function MostrarArrayMult($arrayDir){
    for($i = 0; $i < count($arrayDir); $i++) {
        $keys = array_keys($arrayDir);
        if(is_array($arrayDir[$keys[$i]])){
            foreach($arrayDir[$keys[$i]] as $key => $value) {
                echo $key . " : " . $value . "<br>";
            }
        }else{
            echo $arrayDir[$i]."<br>";
        }
    }
}
?>