<html>
	<head>
	</head>
	
	<body>
		
	<?php
	   function sinEspacios($frase){
	       $frase = str_replace('/\s+/', ' ', $frase);
	       return $frase;
	   }
	   
	   //Llamada sinTildes
	   $fraseConEspacios = "Los    gansos    pueden    ser    problem&aacuteticos";
	   $fraseSinEspacios = sinEspacios($fraseConEspacios);
	   echo $fraseConEspacios." => ".$fraseSinEspacios;
    ?>
	</body>
</html>