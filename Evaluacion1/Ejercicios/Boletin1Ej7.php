<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 7</title>
</head>
<body>
	<p>
			<table border="1">
  				<tr>
    				<?php 
    				    $iRandom = rand(1,9);
    				    echo "<strong>Tabla del: $iRandom</strong> <br>";
    				    echo "<br>";
  					    for ($i = 1; $i < 10; $i++) {
  					        echo "<tr>";
  					        echo "<td width=50px>$iRandom x $i</td>";
  					        $calculo = $iRandom*$i;
  					        echo "<td width=50px>$calculo</td>";
  					        echo "</tr>";
  					    }
  					?>
			</table>
        </p>
</body>
</html>