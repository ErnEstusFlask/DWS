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
    costoso", indicar cuántas veces aparece cada vocal usando funciones para cadenas PHP.
    */
	$frs = "El abecedario completo es algo largo y detallarlo exhaustivamente es costoso";
	$vocales = array(
	    "a" => mb_substr_count($frs, "a"),
	    "e" => mb_substr_count($frs, "e"),
	    "i" => mb_substr_count($frs, "i"),
	    "o" => mb_substr_count($frs, "o"),
	    "u" => mb_substr_count($frs, "u")
	);
	
	echo "$frs</br>";
	foreach ($vocales as $letra => $valor) {
	    echo "La vocal $letra aparece $valor veces</br>";
	}
	?>
	
</body>
</html>