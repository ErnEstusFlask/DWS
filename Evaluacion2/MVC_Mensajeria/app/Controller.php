<?php
include ('libs/utils.php');

class Controller
{

	public function inicio()
	{
		$params = array(
				'mensaje' => 'Bienvenido al servicio de mensajeria',
				'fecha' => date('d-m-y'),
		);
		require __DIR__ . '/templates/inicio.php';
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

	public function insertar()
	{
		$params = array(
				'nombre' => '',
				'password' => '',
				'mail' => ''
		);

		$m = new Model();

		if (isset ($_POST['insertar'])) {
		    $nombre=recoge('nombre');
		    $contrasena=recoge('contrasena');
		    $correo=recoge('correo');
		    echo $contrasena;
		    echo $correo;
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
							$params['mensaje'] = 'No se ha podido insertar el usuario. Revisa el formulario';
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
	/*
	public function buscarPorEnergia()
	{
	    $params = array(
	        'energia' => '',
	        'resultado' => array(),
	    );
	    
	    $m = new Model();
	    
	    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	        $energia=recoge("energia");
	        $params['energia'] = $energia;
	        $params['resultado'] = $m->buscarAlimentosPorEnergia($energia);
	    }
	    
	    require __DIR__ . '/templates/buscarPorEnergia.php';
	}
    */
	public function ver()
	{
		if (!isset($_GET['id_us'])) {
			$params = array(
					'mensaje' => 'No has seleccionado ningun elemento que mostrar',
					'fecha' => date('d-m-y'),
			);
			require __DIR__ . '/templates/inicio.php';
		}

		$id = recoge('id_us');

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
	
	public function enviarMensaje()
	{
	    $params = array(
	        'nombre' => '',
	        'password' => '',
	        'mail' => ''
	    );
	    
	    $m = new Model();
	    
	    if (isset ($_POST['insertar'])) {
	        $nombre=recoge('nombre');
	        $contrasena=recoge('contrasena');
	        $correo=recoge('correo');
	        echo $contrasena;
	        echo $correo;
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
	                $params['mensaje'] = 'No se ha podido insertar el usuario. Revisa el formulario';
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

}
?>
