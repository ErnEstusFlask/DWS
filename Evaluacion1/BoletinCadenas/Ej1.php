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
    1.- Escribe el c�digo necedario para comprobar de forma sencilla si un texto es una direcci�n
    de correo v�lida. Daremos por v�lida cualquier cadena que tenga presentes los caracteres �@� y
    �.�, que haya al menos 2 car�cteres antes de @, 2 car�cteres antes del . Y otros 2 despu�s. Si la
    direcci�n es v�lida escribe por un lado el nombre de usuario y por otro el dominio de dicha
    direcci�n
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
