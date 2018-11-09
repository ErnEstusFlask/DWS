<?php
include ('bGeneral.php');
include ('functions.php');

cabecera($_SERVER['PHP_SELF']);
echo "Ej1: <br>";
$ej1="09-11-1988";
echo ej1($ej1);
echo "<br>";
echo $ej1;
echo "<br><br>";


echo "Ej3: <br>";
$ej2="1988-11-09";
echo ej1($ej2);
echo "<br>";
echo $ej2;
echo "<br><br>";

echo "Ej3: <br>";
$ej3=time();
echo ej3($ej3,2);
echo "<br><br>";

echo "Ej4: <br>";
$ej4f1="07-08-1998";
$ej4f2="03-08-1998";
echo "Han pasado ".ej4($ej4f1,$ej4f2)." dias";
echo "<br><br>";
?>