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
    Realiza una archivo PHP en la que se introduzca una frase en una variable. Muestra por
    pantalla las dos primeras palabras de esa frase.
    */
	$cad ="La       bala    mata   la vaca";
	$cad = trim($cad);
	$cad = trim(preg_replace('/ +/', ' ', $cad));
	if ($cad != "") {
	    $array = explode(" ", $cad);
	    
	    if (count($array) >= 2) {
	        echo "Frase correcta<br>";
	        echo "\"$array[0]\"<br>";
	        echo "\"$array[1]\"<br><br>";
	    } else {
	        echo "Frase demasiado corta: \"$cad\"<br><br>";
	    }
	}
    else {
        echo "Frase en blanco: \"$cad\"<br><br>";
    }
	?>
	
</body>
</html>