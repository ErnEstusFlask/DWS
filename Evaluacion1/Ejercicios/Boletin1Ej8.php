<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 8</title>
</head>
<body>
	<p>
			<table border="1">
  				<tr>
    				<?php 
    				    $numero = 0;
  					    for ($i = 1; $i <= 10; $i++) {
  					        if ($i % 2 == 0) {
  					            echo "<tr bgcolor=#4ED4E4>";
  					        }
  					        else {
  					            echo "<tr>";
  					        }
  					        for ($x = 0; $x < 10; $x++) {
  					            $numero++;
  					            echo "<td height=20px width=20px>$numero</td>";
  					        }
  					        echo "</tr>";
  					    }
  					?>
			</table>
        </p>
</body>
</html>