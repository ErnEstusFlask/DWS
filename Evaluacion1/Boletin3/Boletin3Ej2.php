<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 2</title>
</head>
<body>
	<p>
	<table border="1">
  				
	<?php
    /*
    Crea un array bidimensional que contenga los nombres de cinco alumnos y las
    calificaciones de tres materias (servidor, cliente y diseño por ejemplo). El primer índice
    puede ser el número de lista y los segundos pueden ser de tipo asociativo. Añade a
    cada materia la nota de los alumnos matriculados.
    
        a) Muestra la información en formato tabla, puedes utilizar una tabla para cada
           materia.
           
        b) Muestra la nota media de cada materia y la de cada alumno.
    */
	$alumnos = array("Pedro" => array("Servidor" => 5, "Cliente" => 7, "Diseño" => 8),
	    "Pablo" => array("Servidor" => 6, "Cliente" => 9, "Diseño" => 3),
	    "Julia" => array("Servidor" => 4, "Cliente" => 2, "Diseño" => 4),
	    "Rafa" => array("Servidor" => 9, "Cliente" => 6, "Diseño" => 10),
	    "Carlos" => array("Servidor" => 8, "Cliente" => 9, "Diseño" => 1));
	$media=0;
	foreach($alumnos as $name => $des) {
	    echo "<tr>";
	    print "<td>" . "$name" . ": </td>";
	    foreach($des as $subj => $grade) {
	        $media=$media+$grade;
	        print "<td>"."$subj = $grade" . "</td>";
	    }
	    echo "</tr>";
	}
	$media=$media/count($alumnos);
	   print "<td>Nota media: ".($grade) . "</td>";
	
	?>
	</table>
	
</body>
</html>