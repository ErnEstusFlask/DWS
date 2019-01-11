<?php
include ('libs/utils.php');

class Controller
{

	public function inicio()
	{
	    if(isset($_SESSION["id_user"])){
	    	$ayy=$_SESSION["id_user"];
	        header("Location: index.php?ctl=ver&id=$ayy");
	    }else{
	        $m = new Model();
	        $params = array(
	            'nombre' => '',
	            'password' => '',
	            'mensaje1' => 'Bienvenido al servicio de mensajeria',
	            'mensaje2' => 'Porfavor inicie sesion o registrese para acceder a las funciones del servicio',
	            'fecha' => date('d-m-y'),
	            'mensaje'=>''
	        );
	        if (isset ($_POST['logged'])) {
	            $nombre=recoge('nombre');
	            $contrasena=recoge('contrasena');
	            // comprobar campos formulario
	            if (validarDatosL($nombre, $contrasena)) {
	                $id=$m->login($nombre, $contrasena);
	                $tId=$id[0]['id_us'][0];
	                if ($tId!=false){
	                    $_SESSION["id_user"]=$tId;
	                    
	                    header("Location: index.php?ctl=ver&id=$tId");
	                }else {
	                    $params = array(
	                        'nombre' => $nombre,
	                        'password' => $contrasena,
	                        'mensaje1' => 'Bienvenido al servicio de mensajeria',
	                        'mensaje2' => 'Porfavor inicie sesion o registrese para acceder a las funciones del servicio',
	                        'fecha' => date('d-m-y'),
	                    );
	                    $params['mensaje'] = 'No se ha podido iniciar sesion. Revisa el formulario';
	                }
	            } else {
	                $params = array(
	                    'nombre' => $nombre,
	                    'password' => $contrasena,
	                    'mensaje1' => 'Bienvenido al servicio de mensajeria',
	                    'mensaje2' => 'Porfavor inicie sesion o registrese para acceder a las funciones del servicio',
	                    'fecha' => date('d-m-y'),
	                );
	                $params['mensaje'] = 'Usuario o contraseña incorrectos. Revise los datos';
	            }
	        }
	        
	        require __DIR__ . '/templates/inicio.php';
	    }
	}
	public function logout()
	{
		
		$m = new Model();
	
	
		require __DIR__ . '/templates/logout.php';
	}
	
	public function listar()
	{
		//Al crear el objeto, conectamos con la BD con los parámetros de config.php
		$m = new Model();
		
		//Llamamos al método dameUsuarios del modelo y cargaremos los resultados en el array $params
		$params = array(
		    'usuarios' => $m->dameUsuarios(),
		);
		
		require __DIR__ . '/templates/mostrarUsuarios.php';
	}
	
	public function listarM()
	{
	    $m = new Model();
	    
	    $params = array(
	        'mensaje' => $m->dameMensajes(),
	    );
	    $sender=$params['mensaje'][0]['id_send'];
	    $reciver=$params['mensaje'][0]['id_rec'];
	    $params['mensaje'][0]['id_send']=$m->dameUsuario($sender);
	    $params['mensaje'][0]['id_rec']=$m->dameUsuario($reciver);
	    require __DIR__ . '/templates/mostrarMensajes.php';
	}

	public function insertar()
	{
		$params = array(
				'nombre' => '',
				'password' => '',
				'mail' => '',
		        'mensaje'=>''
		);

		$m = new Model();

		if (isset ($_POST['insertar'])) {
		    $nombre=recoge('nombre');
		    $contrasena=recoge('contrasena');
		    $correo=recoge('correo');
			// comprobar campos formulario
		    if (validarDatos($nombre, $contrasena,$correo)) {
		        if ($m->insertarUsuario($nombre, $contrasena, $correo)){
								header('Location: index.php?ctl=listar');
						}else {
							$params = array(
    								'nombre' => $nombre,
    						        'password' => $contrasena,
    						        'mail' => $correo,
							);
							$params['mensaje'] = 'No se ha podido registrar el usuario. Revisa el formulario';
						}
					} else {
					    $params = array(
    					        'nombre' => $nombre,
    					        'password' => $contrasena,
    					        'mail' => $correo,
					    );
						$params['mensaje'] = 'Hay datos que no son correctos. Revisa el formulario';
					}
		}

		require __DIR__ . '/templates/formInsertar.php';
	}

	public function enviarMensaje()
	{
	    $params = array(
	        'rec' => '',
	        'subject' => '',
	        'mensajeria' => ''
	    );
	    
	    $m = new Model();
	    
	    if (isset ($_POST['enviar'])) {
	        $destinatario=recoge('rec');
	        $asunto=recoge('subject');
	        $mensaje=recoge('mensajeria');
	        // comprobar campos formulario
	        if (validarDatosM($destinatario, $asunto, $mensaje)) {
	            if ($m->enviarMensaje($destinatario, $asunto, $mensaje)){
	                header('Location: index.php?ctl=enviar');//cambiar a mensajes enviados por el usuario
	            }else {
	                $params = array(
	                    'rec' => $destinatario,
	                    'subject' => $asunto,
	                    'mensajeria' => $mensaje
	                );
	                $params['mensaje'] = 'No se ha podido enviar el mensaje. Revisa el formulario';
	            }
	        } else {
	            $params = array(
	                'rec' => $destinatario,
	                'subject' => $asunto,
	                'mensajeria' => $mensaje
	            );
	            $params['mensaje'] = 'Hay datos que no son correctos. Revisa el formulario';
	        }
	    }
	    
	    require __DIR__ . '/templates/enviarMensaje.php';
	}
	
	public function buscarPorNombre()
	{
		$params = array(
				'nombre' => '',
				'resultado' => array(),
		);

		$m = new Model();

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		    $nombre=recoge("nombre");
			$params['nombre'] = $nombre;
			$params['resultado'] = $m->buscarUsuariosPorNombre($nombre);
		}
		require __DIR__ . '/templates/buscarPorNombre.php';
	}
	
	public function buscarMensajesRec()
	{
	    $params = array(
	        'rec' => '',
	        'resultado' => array(),
	    );
	    
	    $m = new Model();
	    
	    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	        
	        	        
	        $rec=recoge("rec");
	        $params['rec'] = $rec;
	        $params['resultado'] = $m->buscarMensajeRec($rec);
	    }
	    
	    require __DIR__ . '/templates/buscarMensajesRec.php';
	}
	
	public function buscarMensajesSend()
	{
		$m = new Model();
	    $params = array(
	        'rec' => '',
	        'resultado' => array(),
    		'mensaje' => $m->dameMensajes(),
	    );
	    
	    
	    
	    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    	
	    	$reciver=$params['mensaje'][0]['id_rec'];
	    	$params['mensaje'][0]['id_rec']=$m->dameUsuario($reciver);
	        $params['resultado'] = $m->buscarMensajeSend($_SESSION["id_user"]);
	    }
	    
	    require __DIR__ . '/templates/buscarMensajesSend.php';
	}
    
	public function ver()
	{
		if (!isset($_GET['id'])) {
			$params = array(
					'mensaje' => 'No has seleccionado ningun elemento que mostrar',
					'fecha' => date('d-m-y'),
			);
			require __DIR__ . '/templates/inicio.php';
		
		}else{
		    
    		$id = recoge('id');
    
    		$m = new Model();
    
    		$usuario = $m->dameUsuario($id);
    
    		$params = $usuario;
    		//Si la consulta no ha devuelto resultados volvemos a la página de inicio
    		if (empty($params))
    		{
    			$params = array(
    					'mensaje' => 'No hay usuario que mostar',
    					'fecha' => date('d-m-y'),
    			);
    			require __DIR__ . '/templates/inicio.php';
    		}
    		else
    
    			require __DIR__ . '/templates/verUsuario.php';
		}
	}
	
	public function verM()
	{
	    if (!isset($_GET['id_men'])) {
	        $params = array(
	            'mensaje' => 'No has seleccionado ningun elemento que mostrar',
	            'fecha' => date('d-m-y'),
	        );
	        require __DIR__ . '/templates/inicio.php';
	        
	    }else{
	        
	        $id = recoge('id_men');
	        
	        $m = new Model();
	        
	        $mensaje = $m->dameMensaje($id);
	        
	        $params = $mensaje;
	        //Si la consulta no ha devuelto resultados volvemos a la página de inicio
	        if (empty($params))
	        {
	            $params = array(
	                'mensaje' => 'No hay mensaje que mostar',
	                'fecha' => date('d-m-y'),
	            );
	            require __DIR__ . '/templates/inicio.php';
	        }
	        else
	            
	            require __DIR__ . '/templates/verMensaje.php';
	    }
	}

}
?>
