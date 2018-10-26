<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 1</title>
</head>
<body>
	<p>
	<table border="1">
  				
	<?php
    /*
    Crea un array de dos dimensiones, de manera que en una dimensión contenga
    el tipo de colores (fuerte o suave) y en la otra 3 colores de cada tipo. Muestra
    una tabla como la siguiente recorriendo el array:
    
    Colores fuertes: Rojo:FF0000 Verde:00FF00 Azul: 0000FF
    Colores suaves: Rosa:FE9ABC Amarillo:FDF189 Malva:BC8F8F

    Dado el array anterior comprueba si en él se encuentra el color “FF88CC” y el color
    “FF0000” usando la función in_array. Añade la definición y descripción de la función
    */
	$coloresF = array("Rojo" => "FF0000", "Verde" => "00FF00", "Azul" => "0000FF");
	$coloresS = array("Rosa" => "FE9ABC", "Amraillo" => "FDF189", "Malva" => "BC8F8F");
	$colores = array("Colores fuertes" => $coloresF, "Colores suaves" => $coloresS);
	
	foreach($colores as $type => $color) {
	    echo "<tr>";
	    echo "<td>" . "$type" . ": </td>";
	    foreach($color as $colors => $hex) {
	        
	        echo "<td bgcolor=$hex>"."$colors = $hex" . "</td>";
	    }
	    echo "</tr>";
	}
	
	if ((in_array("FF88CC", $coloresF))||in_array("FF88CC", $coloresS)) {
	    echo "Tiene el color FF88CC<br>";
	}else{
	    echo "No tiene el color FF88CC<br>";
	}
	if ((in_array("FF0000", $coloresF))||in_array("FF0000", $coloresS)) {
	    echo "Tiene el color FF88CC<br>";
	}else{
	    echo "No tiene el color FF88CC<br>";
	}
	?>
	</table>
	
</body>
</html>

