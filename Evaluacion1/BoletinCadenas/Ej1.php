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
    1.- Escribe el código necedario para comprobar de forma sencilla si un texto es una dirección
    de correo válida. Daremos por válida cualquier cadena que tenga presentes los caracteres ‘@’ y
    ‘.’, que haya al menos 2 carácteres antes de @, 2 carácteres antes del . Y otros 2 después. Si la
    dirección es válida escribe por un lado el nombre de usuario y por otro el dominio de dicha
    dirección
    */
	$correo = "ernesto.aunon09@gmail.com";
	if(mb_strpos($correo,'@')!==false){
	    $explArroba = explode('@',$correo);
	    if(mb_strpos($explArroba[1],'.')!==false){
	        $explPunto = explode(".",$explArroba[1]);
	        echo "Nombre Email: <strong>$explArroba[0]</strong><br>";
	        echo "Dominio: <strong>$explPunto[0]</strong>";
	    }else{
	        echo "No incluye el caracter '.' despues de la arroba";
	    }
	}else{
	    echo "No incluye el caracter '@'";
	}
	?>
	
</body>
</html>
