<html>
	<head>
	</head>
	
	<body>
		
	<?php
	   function sinTildes($frase){
	       $cadBuscar = array("�","�","�","�","�","�","�","�","�","�");
	       $cadPoner = array("a","A","e","E","i","I","o","O","u","U");
	       $frase = str_replace ($cadBuscar, $cadPoner, $frase);
	       return $frase;
	   }
	   
	   //Llamada sinTildes
	   $fraseConTildes = "Qu� oraci�n m�s simp�tica!";
	   $fraseSinTildes = sinTildes($fraseConTildes);
	   echo $fraseConTildes." => ".$fraseSinTildes;
    ?>
	</body>
</html>