<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ej4</title>
</head>
<body>
	<p>
	<?php 
	/*
	Realiza una función compCaseEsp que compare dos cadenas y que no sea sensible a mayúsculas
    ni acentos ni espacios sobrantes.
	*/
	function compCaseEsp($frs1, $frs2){
	    $frs2 = trim(preg_replace('/ +/'," " ,$frs2));
	    $cadTild = array("á","Á","é","É","í","Í","ó","Ó","ú","Ú");
	    $cadVoc = array("a","A","e","E","i","I","o","O","u","U");
	    $frs2 = str_replace ($cadTild, $cadVoc, $frs2);
	    $cadComp = strcasecmp ($frs1, $frs2);
	    return $cadComp;
	}
	
	$frs1 = "If we make it we can all sit back and laugh";
	$frs2 = "   If  wE make    ít We can all sIt   back and laugh   ";
	echo $frs1."<br>";
	echo $frs2."<br>";
	$compare = compCaseEsp($frs1, $frs2);
	
	if ($compare==0) {
	    echo "Las frases son iguales segun las condiciones impuestas.";
	} else {
	    echo "Las frases no son iguales segun las condiciones impuestas.";	}
	?>
</body>
</html>