<?php
$db_hostname="localhost";
$db_nombre="curso_php";
$db_usuario="root";
$db_clave="";
$db = new PDO('mysql:host='. $db_hostname.';dbname='.$db_nombre.'',$db_usuario,$db_clave);
$db->exec("set names utf8");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/*
 * Ejercicio1.- Realiza un script que cargue todos los datos de la tabla empleados y los muestre en
 * pantalla incluyendo una línea separadora entre cada uno de ellos. 
 */

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
?>