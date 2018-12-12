<?php
include ('bGeneral.php');
$name=recoge('nombre');
$job=recoge('puesto');
$birth=recoge('nacim');
$salary=recoge('salario');
$locat=recoge('locList');

include ('ConexionDB.php');
$errores="";

try{
    $db = modelo::GetInstance();
    $dbPrep = $db->prepare('INSERT INTO empleados (nombre, puesto, fecha_nacimiento, salario, localidad) VALUES (:nombre, :puesto, :fecha_nacimiento, :salario, :localidad)');
    $parametros = array(":nombre"=> $name, ":puesto"=> $job, ":fecha_nacimiento"=> $birth,":salario"=> $salary,":localidad"=> $locat);
    $dbPrep->execute($parametros);
    /*
    $resultado = $db->query("SELECT id, nombre, puesto, fecha_nacimiento, salario, localidad FROM empleados");
    while ($registro = $resultado->fetch()){
        echo "Id: ".$registro['id']." // ";
        echo "Nombre: ".$registro['nombre']." // ";
        echo "Puesto: ".$registro['puesto']." // ";
        echo "Fecha Nacimiento: ".$registro['fecha_nacimiento']." // ";
        echo "Salario: ".$registro['salario']." // ";
        echo "Localidad: ".$registro['localidad']."<br>";
    }
    */
    
    $dbPrep2 = $db->prepare('SELECT nombre, puesto, fecha_nacimiento, salario, localidad FROM empleados WHERE nombre LIKE :nombre');
    $parametros2 = array(":nombre"=> $name);
    $dbPrep2->execute($parametros2);
    echo "<h2>Bienvenido</h2>";
    $registro = $dbPrep2->fetch();
    echo "Nombre: ".$registro['nombre']."<br>";
    echo "Puesto: ".$registro['puesto']."<br>";
    echo "Fecha Nacimiento: ".$registro['fecha_nacimiento']."<br>";
    echo "Salario: ".$registro['salario']."<br>";
    echo "Localidad: ".$registro['localidad']."<br>";
    
} catch (PDOException $e){
    error_log($e->getMessage() . microtime() . PHP_EOL, 3, "logdb.txt");
    
    $errores = "Ha sucedido un error en la consulta";
} catch (Error $e) {
    
    error_log($e->getMessage().microtime().PHP_EOL,3,"logerr.txt");
    $errores="Excepción error capturada <br>";
}
echo $errores;
?>