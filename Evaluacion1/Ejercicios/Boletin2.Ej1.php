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
    Crea un array con índice numérico $dias con los días de la semana y muestra todas sus
    parejas índices/valores mediante un bucle foreach y for. 
    */
	$dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
	
	for ($i = 0; $i < count($dias); $i++) {
	    echo "$i = $dias[$i]<br>";
	}
	
	foreach($dias as $key => $val) {
	    print "$key = $val <br>";
	}
	
	
	?>
</body>
</html>