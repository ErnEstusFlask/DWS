<?php
session_start();
// web/index.php

// carga del modelo y los controladores

require_once __DIR__ . '/../app/Config.php';
require_once __DIR__ . '/../app/Model.php';
require_once __DIR__ . '/../app/Controller.php';

// enrutamiento
$map = array(
'inicio' => array('controller' =>'Controller', 'action' =>'inicio'),
'logout' => array('controller' =>'Controller', 'action' =>'logout'),
'listar' => array('controller' =>'Controller', 'action' =>'listar'),
'listarM' => array('controller' =>'Controller', 'action' =>'listarM'),
'insertar' => array('controller' =>'Controller', 'action' =>'insertar'),
'buscar' => array('controller' =>'Controller', 'action' =>'buscarPorNombre'),
'ver' => array('controller' =>'Controller', 'action' =>'ver'),
'verM' => array('controller' =>'Controller', 'action' =>'verM'),
'buscarMensajesRec' => array('controller' =>'Controller', 'action' =>'buscarMensajesRec'),
'buscarMensajesSend' => array('controller' =>'Controller', 'action' =>'buscarMensajesSend'),
'enviar' => array('controller' =>'Controller', 'action' =>'enviarMensaje')
);

// Parseo de la ruta
if (isset($_GET['ctl'])) {
	if (isset($map[$_GET['ctl']])) {
		$ruta = $_GET['ctl'];
	} else {
			//Si la opción seleccionada no existe en el array de mapeo, mostramos pantalla de error
			header('Status: 404 Not Found');
			echo '<html><body><h1>Error 404: No existe la ruta <i>' .
			$_GET['ctl'] .'</p></body></html>';
			exit;
			}
	} else {
		//Si no se ha seleccionado nada mostraremos pantalla de inicio
		$ruta = 'inicio';
}

$controlador = $map[$ruta];
 //Cargamos el asociado a la acción seleccionada por el usuario 

// Ejecución del controlador asociado a la ruta
if (method_exists($controlador['controller'],$controlador['action'])) {
	call_user_func(array(new $controlador['controller'], $controlador['action']));
	} else {
		//Si no existe controlador asociado a la acción, mostramos pantalla de error
		header('Status: 404 Not Found');
		echo '<html><body><h1>Error 404: El controlador <i>' .
		$controlador['controller'] .'->' .	$controlador['action'] .'</i> no existe</h1></body></html>';
}
