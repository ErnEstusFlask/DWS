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
    Declara un array de strings de nombre $jugador e introduce en él 5 elementos que sean
    "Crovic", "Antic", "Malic", "Zulic" y "Rostrich". A continuación usando el operador de concatenación
    haz que se muestre la frase: “La alineación del equipo está compuesta por Crovic, Antic, Malic,
    Zulic y Rostrich.”
    */
	$jugador = array("Crovic", "Antic", "Malic", "Zulic", "Rostrich");
	
	$mens = "La alineación del equipo está compuesta por ";
	for ($i = 0; $i < count($jugador); $i++) {
	    if(($i!=(count($jugador)-2))&&($i!=(count($jugador)-1))){
	        $mens = $mens . $jugador[$i] . ", "; 
	        
	    }else if($i==(count($jugador)-2)){
	        $mens = $mens . $jugador[$i] . " ";
	        
	    }else{
	        $mens = $mens ."y ". $jugador[$i] ;
	    }
	    
	}
	
	echo $mens;
	?>
</body>
</html>