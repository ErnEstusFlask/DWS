<html>
	<head>
	</head>
	
	<body>
		
	<?php
	
	//Funcion eliminar TILDES
	   function sinTildes($frase){
	       $cadBuscar = array("�","�","�","�","�","�","�","�","�","�");
	       $cadPoner = array("a","A","e","E","i","I","o","O","u","U");
	       $frase = str_replace ($cadBuscar, $cadPoner, $frase);
	       return $frase;
	   }
	   
    //Funci�n eliminar ESPACIOS   
	   function sinEspacios($frase){
	       $frase = str_replace('/\s+/', ' ', $frase);
	       return $frase;
	   }
	   
	//Funci�n para comparar dos cadenas haciendo uso de 
	//sinTildes, sinEspacios y sin distinguir Mayus. de Minus.  
	   function compCaseEsp($frase1, $frase2){
	       //Quitar espacios inecesarios:
	       $frase2 = trim($frase2);
	       //Cambiar tildes:
	       $cadBuscar = array("�","�","�","�","�","�","�","�","�","�");
	       $cadPoner = array("a","A","e","E","i","I","o","O","u","U");
	       $frase2 = str_replace ($cadBuscar, $cadPoner, $frase2);
	       //Comparaci�n sin contar Mayusculas y Minusculas
	       $codComp = strcasecmp ($frase1, $frase2);
	       return $codComp;
	   }
    ?>
	</body>
</html>