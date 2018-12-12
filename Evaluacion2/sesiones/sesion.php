<?php
/*
 * Realiza una página de registro que permita dar de alta a un usuario y que este pueda
 * añadir hasta dos amigos dando su email y nombre. La introducción de los datos en la
 * BD la harás usando transacciones, de manera que hacemos las dos inserciones o ninguna.
 * Encripta la contraseña en la BD
 * Una vez dado de alta permite loguearse en el sistema, de manera que una vez logueado
 * pase a una página privada de bienvenida donde tengamos un enlace para descargarnos
 * en PDF la lista de usuarios del sistema (nombre e email ). Desde la página de bienvenida
 * debes permitir salir.
 * Ten en cuenta todos los aspectos de seguridad vistos hasta ahora.
 */
 
 sesion.start();
 $_SESSION
?>