<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="<?php echo 'css/'.Config::$mvc_vis_css ?>" />

</head>
<body>
<div id="cabecera">
<h1>Servicio de mensajeria</h1>
</div>

<div id="menu">
<hr/>
<a href="index.php?ctl=inicio">Inicio</a> |
<a href="index.php?ctl=listar">Ver Usuarios</a> |
<a href="index.php?ctl=listarM">Bandeja de entrada</a> |
<a href="index.php?ctl=insertar">Registrarse</a> |
<a href="index.php?ctl=enviar">Enviar Mensaje</a> |
<a href="index.php?ctl=buscar">Buscar Usuario</a> |
<a href="index.php?ctl=buscarMensajesSend">Mensajes Enviados</a> |
<a href="index.php?ctl=buscarMensajesRec">Buscar Mensajes por Destinatario</a> |
<a href="index.php?ctl=logout">Cerrar Sesion</a>
<hr/>
</div>

<div id="contenido">
<?php echo $contenido ?>
</div>

<div id="pie">
<hr/>
<div align="center">- servicio mensajeria -</div>
</div>
</body>
</html>
