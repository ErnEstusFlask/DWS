<?php
    $num=$_REQUEST['numero'];
    if($num==null){
        echo "No se ha podido realizar lo que se pide";
    }else{
        if ($num%2==0){
            echo "El numero es par";
        }else{
            echo "El numero es impar";
        }
    }
    
?>