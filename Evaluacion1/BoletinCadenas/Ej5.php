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
    Dada la cadena "El abecedario completo es algo largo y detallarlo exhaustivamente es
    costoso", mostrar la cadena donde todas las a hayan sido sustituídas por el símbolo *. Por
    ejemplo en lugar de <<El abecedario…>> se habrá de mostrar <<El *beced*rio…>>
    */
	$cadena = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
	$cadena1 = mb_strtolower($cadena);
	
	$cadena2 = str_replace("a", "*", $cadena1);
	
	echo $cadena2;
	?>
	
</body>
</html>