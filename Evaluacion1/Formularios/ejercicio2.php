<?php
    $num=$_REQUEST['numero'];
    if($num==null){
        echo "No se ha podido realizar lo que se pide";
    }else{
        echo "TABLA DE MULTIPLICAR DEL: <b>$num</b> <br>";
        for ($i = 1; $i < 11; $i++) {
            echo "$i x <b>$num</b> = ";
            $calculo = $num*$i;
            echo $calculo."<br>";
        }
        echo "<a href=Ejercicio2.html>Volver</a>";
    }
?>