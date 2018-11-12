<?php
include ('bGeneral.php');
include ('functions.php');

cabecera($_SERVER['PHP_SELF']);

echo "Ej1: <br>";
$dirEj1="pruebas";
$arrayDir= devuelveDir($dirEj1);
echo "<br>";
echo $arrayDir;
echo "<br><br>";

?>