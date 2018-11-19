<?php
include ('bGeneral.php');
include ('functions.php');

cabecera($_SERVER['PHP_SELF']);

echo "Fun1: <br>";
$dirFun1="pruebas";
$arrayDir= devuelveDir($dirFun1);
for($i=0;$i<count($arrayDir);$i++){
    echo $arrayDir[$i]."<br>";
}
echo "<br>";

echo "Fun2: <br>";
$dirFun2="pruebas";
$arrayDir= devuelveDirSubdir($dirFun2);
for($i=0;$i<count($arrayDir);$i++){
    echo $arrayDir[$i]."<br>";
}
echo "<br><br>";

?>