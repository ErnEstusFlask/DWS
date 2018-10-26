<?php
    $num1=$_REQUEST['numero1'];
    $num2=$_REQUEST['numero2'];
    $oper=$_REQUEST['operacion'];
    if($num1==null||$num2==null||$oper==null){
        echo "No se ha podido realizar lo que se pide";
    }else{
        if($oper=="suma"){
            $res=$num1+$num2;
            echo "El resultado de realizar la suma de los números $num1 y $num2 es $res";
        }else if($oper=="resta"){
            $res=$num1-$num2;
            echo "El resultado de realizar la resta de los números $num1 y $num2 es $res";
        }else if($oper=="producto"){
            $res=$num1*$num2;
            echo "El resultado de realizar el producto de los números $num1 y $num2 es $res";
        }else if($oper=="cociente"){
            $res=$num1/$num2;
            echo "El resultado de realizar el cociente de los números $num1 y $num2 es $res";
        }
    }
    
?>