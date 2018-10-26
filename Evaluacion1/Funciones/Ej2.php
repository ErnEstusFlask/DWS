<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ej2</title>
</head>
<body>
	<p>
	<?php 
	/*
	Realiza una función sinTildes que reciba una cadena y devuelva la misma función pero con las
    vocales sin tildes.
	*/
	
	function sinTildes (string $frs){
	    $cadTild = array("á","Á","é","É","í","Í","ó","Ó","ú","Ú");
	    $cadVoc = array("a","A","e","E","i","I","o","O","u","U");
	    $frs = str_replace ($cadTild, $cadVoc, $frs);
	    return $frs;
	}
	
	?>
</body>
</html>