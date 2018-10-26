<html>
	<head>
	</head>
	
	<body>
		
	<?php
	   function compCaseEsp($frase1, $frase2){
	       //Quitar espacios inecesarios:
	       $frase2 = trim($frase2);
	       //Cambiar tildes:
	       $cadBuscar = array("á","Á","é","É","í","Í","ó","Ó","ú","Ú");
	       $cadPoner = array("a","A","e","E","i","I","o","O","u","U");
	       $frase2 = str_replace ($cadBuscar, $cadPoner, $frase2);
	       //Comparación sin contar Mayusculas y Minusculas
	       $codComp = strcasecmp ($frase1, $frase2);
	       return $codComp;
	   }
	   
	   $frase1 = "Los gansos pueden ser problematicos";
	   $frase2 = "       Los Gansos Pueden Ser Problemáticos       ";
	   echo "FRASE 1: ".$frase1."<br>";
	   echo "FRASE 2: ".$frase2."<br>";
	   $comparacion = compCaseEsp($frase1, $frase2);
	   
	   if ($comparacion==0) {
	       echo "<b><br><br>Las frases SI s&oacuten iguales, independientemente de sus tildes o may&uacutesculas!</b>";
	   } else {
	       echo "<b><br><br>Las frases NO s&oacuten iguales, independientemente de sus tildes o may&uacutesculas...</b>";
	   }
    ?>
	</body>
</html>