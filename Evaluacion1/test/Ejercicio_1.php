<html>
	<head>
	</head>
	
	<body>
		
	<?php
        function capitales($nombrePais, $capitalPais, $habitantesPais) {
            
            if ($capitalPais==null) {
                $capitalPais="Madrid";
            }
            if ($habitantesPais==null) {
                $habitantesPais="muchos";
            }
            $fraseCompleta = "<br>La capital de ".$nombrePais." es ".$capitalPais." y tiene ".$habitantesPais." habitantes.<br>";
            return $fraseCompleta;
        } 
    
        //Llamada ESPA�A
        $llamadaES = capitales("Espa�a", null, null);
        echo $llamadaES;
        //Llamada PORTUGAL
        $llamadaPOR = capitales("Portugal", "Lisboa", null);
        echo $llamadaPOR;
        //Llamada FRANCIA       
        $llamadaFR = capitales("Francia", "Par�s", "6.000.000");
        echo $llamadaFR;
    ?>
	</body>
</html>