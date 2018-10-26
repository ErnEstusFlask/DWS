<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 2</title>
</head>
<body>
	<p>
	<?php
    /*
    Escriba un programa que muestre una tirada de dado al azar y escriba en letras el valor
    obtenido. Necesitáis la función rand
    */
	
	$dado= array("uno","dos","tres","cuatro","cinco","seis");
	
	$random = rand(0,5);
	echo "Has sacado un $dado[$random]";
	?>
</body>
</html>