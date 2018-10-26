<html>
	<head>
	</head>
	
	<body>
		
	<?php
	   function negrita($frase){
	       return '<b>'.$frase.'</b>';
	   }
	   
	   $frase = 'Los gansos pueden ser problem&aacuteticos';
	   $fraseEnBold = negrita($frase);
	   echo $frase.' => '.$fraseEnBold;
    ?>
	</body>
</html>