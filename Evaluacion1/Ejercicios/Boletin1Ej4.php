<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ejercicio 4</title>
</head>
<body>
	<p>
	<?php
	/*
	Programa que según el valor de una variable muestra un mensaje en la pantalla u otro.
    Por ejemplo si es una variable que almacena una cadena, los posibles valores serán
    arriba, abajo, medio, otros; el mensaje sería “Estoy arriba”, en el caso de que el valor
    de la variable fuera arriba y así sucesivamente.
	 */
    $iRandom = rand(0,5);
    switch ($iRandom) {
        case 0:
            echo "El número premiado es: 0";
            break;
            
        case 1:
            echo "El número premiado es: 1";
            break;
		                
		case 2:
		    echo "El número premiado es: 2";
		    break;
		                
		case 3:
		    echo "El número premiado es: 3";
		    break;
		                
		case 4:
		    echo "El número premiado es: 4";
		    break;
		    
		case 5:
		    echo "El número premiado es: 5";
		    break;
    }                
    ?>
</body>
</html>
