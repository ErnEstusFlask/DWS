<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ej6</title>
</head>
<body>
	<p>
	<?php 
	/*
	Realiza una función negrita que reciba como parámetro un texto y lo devuelva en negrita.
	*/
	function negrita($frs){
	    return '<b>'.$frs.'</b>';
	}
	
	$frs = "If we make it we can all sit back and laugh";
	$frsBold = negrita($frs);
	echo $frs.' => '.$frsBold;
	?>
</body>
</html>