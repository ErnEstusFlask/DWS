<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Ejemplo 2</title> 
</head> 
<body> 
    <p> 
<?php
$numeros= array("uno.jpg","dos.jpg","tres.jpg","cuatro.jpg","cinco.jpg","seis.jpg");
    echo "<img src=Animales/" . $numeros[rand(0,5)] . "></img>";
?>
</p> 
</body> 
</html> 