<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 6</title>
</head>
<body>
	<p>
			<table border="1">
  				<tr>
    				<td>---</td>
    				<td bgcolor="4ED4E4"><strong>1</strong></td>
    				<td bgcolor="4ED4E4"><strong>2</strong></td>
    				<td bgcolor="4ED4E4"><strong>3</strong></td>
    				<td bgcolor="4ED4E4"><strong>4</strong></td>
    				<td bgcolor="4ED4E4"><strong>5</strong></td>
    				<td bgcolor="4ED4E4"><strong>6</strong></td>
    				<td bgcolor="4ED4E4"><strong>7</strong></td>
    				<td bgcolor="4ED4E4"><strong>8</strong></td>
    				<td bgcolor="4ED4E4"><strong>9</strong></td>
  				</tr>
  				<tr>
  					<?php 
  					    for ($i = 1; $i < 10; $i++) {
  					        echo "<tr>";
  					        echo "<td bgcolor=\"4ED4E4\"><strong>$i</strong></td>";
  					        for ($x = 1; $x < 10; $x++) {
  					            $calculo = $i*$x;
  					            echo "<td>$calculo</td>";
  					        }
  					        echo "</tr>";
  					    }
  					?>
  				</tr>
			</table>
        </p>
</body>
</html>