<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 3</title>
</head>
<body>
	<p>
	<?php
    /*
    Escriba un programa que muestre la imagen de un animal al azar. Para ello tendrás que
    guardar en una carpeta las imágenes de varios animales.
    */
	$bisonte="img\bisonte.jpg";
	$lobo="img\lobo.jpg";
	$cangrejo="img\cangrejo.jpg";
	$images= array($bisonte,$lobo,$cangrejo);
			
	echo "<img src=Animales/" . $images[rand(0,2)] . "></img>";
	
	?>
</body>
</html>