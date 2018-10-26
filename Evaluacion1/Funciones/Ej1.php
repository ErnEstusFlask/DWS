<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Ej1</title>
</head>
<body>
	<p>
	<?php 
	/*
	 Realiza una funci�n capitales que pueda recibir tres par�metros: el nombre de un pa�s, la capital
    (si no recibe capital tomar� el valor Madrid) y el n�mero de habitantes (si no recibe este valor
    mostrar� �muchos�) y ll�mala para mostrar una frase con esos valores del tipo:
    La capital de Espa�a es Madrid y tiene muchos habitantes.
    La capital de Portugal es Lisboa y tiene muchos habitantes.
    La capital de Francia es Paris y tiene 6.000.000 habitantes.
    Ll�mala con diferente n�mero de argumentos para comprobar que toma correctamente los
    valores por defecto.
	*/
	
	function capitales (string $country, string $cap, int $pop){
	    if ($cap==null) {
	        $cap="Madrid";
	    }
	    if ($pop==null) {
	        $pop="muchos";
	    }
	    $frs = "<br>La capital de ".$country." es ".$cap." y tiene ".$pop." habitantes.<br>";
	    return $frs;
	}
	
	
	echo capitales("Uganda","Kampala",1507000);
	?>
</body>
</html>