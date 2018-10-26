<html>
	<head>
	</head>
	
	<body>
		
	<?php
	   function sinTildes($frase){
	       $cadBuscar = array("á","Á","é","É","í","Í","ó","Ó","ú","Ú");
	       $cadPoner = array("a","A","e","E","i","I","o","O","u","U");
	       $frase = str_replace ($cadBuscar, $cadPoner, $frase);
	       return $frase;
	   }
	   
	   //Llamada sinTildes
	   $fraseConTildes = "Qué oración más simpática!";
	   $fraseSinTildes = sinTildes($fraseConTildes);
	   echo $fraseConTildes." => ".$fraseSinTildes;
    ?>
	</body>
</html>