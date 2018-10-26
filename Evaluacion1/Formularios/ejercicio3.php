<?php
    $menor=$_REQUEST['menor'];
    $mayor=$_REQUEST['mayor'];
    $cont=$mayor;
    if($menor==null||$mayor==null){
        echo "No se ha podido realizar lo que se pide";
    }else{
        echo "LISTA DE PARES DE NUMEROS DE: <b>$menor</b> Y <b>$mayor</b><br>";
        for ($i = $menor; $i <= $mayor; $i++) {
            echo "($i,$cont) ";
            $cont--;
        }
        echo "<br><a href=Ejercicio3.html>Volver</a>";
    }
    
?>