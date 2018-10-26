<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ej3</title>
</head>
<body>
	<p>
	<?php 
	/*
	Realiza una función sinEspacios que quita los espacios sobrantes de una cadena. Se considera
    espacio sobrante, los espacios al principio y final de cadena y cuando haya más de un espacio
    entre dos palabras.
	*/
	
	function sinEspacios (string $cad){
	    echo trim(preg_replace('/ +/'," " ,$cad));
	}
	
	sinEspacios("     asr sa  a  s asd  ");
	
	?>
</body>
</html>