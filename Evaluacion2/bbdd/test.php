<?php
include ('ConexionDB.php');
$errores="";
try{
    $db = modelo::GetInstance();
    $resultado = $db->query("SELECT id, nombre, puesto, fecha_nacimiento, salario FROM empleados");
    while ($registro = $resultado->fetch()){
        echo "Id: ".$registro['id']." // ";
        echo "Nombre: ".$registro['nombre']." // ";
        echo "Puesto: ".$registro['puesto']." // ";
        echo "Fecha Nacimiento: ".$registro['fecha_nacimiento']." // ";
        echo "Salario: ".$registro['salario']."<br>";
    }
    
    $resultado1 = $db->query("SELECT * FROM empleados");
    while ($registro1 = $resultado1->fetchAll()){
        print_r($registro1);
    } 
    
} catch (PDOException $e){
    error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logdb.txt");
    
    $errores = "Ha sucedido un error en la consulta";
} catch (Error $e) {
    
    error_log($e->getMessage().microtime().PHP_EOL,3,"logerr.txt");
    $errores="Excepción error capturada <br>";
}
echo $errores;
/*
 * Ejercicio1.- Realiza un script que cargue todos los datos de la tabla empleados y los muestre en
 * pantalla incluyendo una línea separadora entre cada uno de ellos. 
 */


?>