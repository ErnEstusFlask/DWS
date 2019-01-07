<?php
//Aqui pondremos las funciones de validación de los campos

function validarDatos($nombre, $contrasena, $correo)
{
    return (is_string($nombre) &
        is_string($contrasena) &
        is_string($correo));
}


function recoge($var)
{
    if (isset($_REQUEST[$var]))
        $tmp=strip_tags(sinEspacios($_REQUEST[$var]));
        else
            $tmp= "";
            
            return $tmp;
}

function sinEspacios($frase) {
    $texto = trim(preg_replace('/ +/', ' ', $frase));
    return $texto;
}
?>