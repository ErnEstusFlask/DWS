<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 1</title>
</head>
<body>
	<p>  				
	<?php
    /*
    Realizar una página PHP en la que introduzca una frase en una variable y a continuación muestre 
    el número de letras ‘a’ en esa cadena de la siguiente forma:
    ‘La bala mata la vaca’ 	→    muestra: 8
    ‘El oso osó asir a la osa’	→    muestra: 4
    */
	$frs = "La bala mata la vaca";
	
	$contador=mb_substr_count($frs, "a");
	
	echo $frs." -> Numero de letras: ".$contador;
	?>
	
</body>
</html>