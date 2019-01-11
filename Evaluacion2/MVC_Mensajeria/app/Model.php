<?php


class Model extends PDO
{

    protected $conexion;

    public function __construct()
    {
        try {
            
            $this->conexion = new PDO('mysql:host=' . Config::$mvc_bd_hostname . ';dbname=' . Config::$mvc_bd_nombre . '', Config::$mvc_bd_usuario, Config::$mvc_bd_clave);
            // Realiza el enlace con la BD en utf-8
            $this->conexion->exec("set names utf8");
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "<p>Error: No puede conectarse con la base de datos.</p>\n";
            echo "<p>Error: " . $e->getMessage();
        }
    }

    public function login($nombre, $contrasena)
    {
        try {
        	$consulta = "select password from usuario where name like 'admin'";
        	
        	$result = $this->conexion->prepare($consulta);
        	
        	//$result->bindParam(':nombre', $nombre);
        	$result->execute();
        	$pwd=$result->fetchAll();
        	$tPwd=$pwd[0]['password'][0];
        	
        	if(password_verify($tPwd, $hash)){
        		$consulta = "select id_us from usuario where name like 'admin'";
        		
        		$result = $this->conexion->prepare($consulta);
        		
        		//$result->bindParam(':nombre', $nombre);
        		$result->execute();
        		return $result->fetchAll();
        	}else{
        		return false;
        	}
            
            
        } catch (PDOException $e) {
            
            return false;
        }
    }
   

    public function dameUsuarios()
    {
        try {
            
            $consulta = "select * from usuario order by id_us desc";
            $result = $this->conexion->query($consulta);
            return $result->fetchAll();
           
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    public function dameMensajes()
    {
        try {
            
            $consulta = "select * from mensaje order by id_men desc";
            $result = $this->conexion->query($consulta);
            return $result->fetchAll();
            
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }

    public function buscarUsuariosPorNombre($nombre)
    {
        try {
        $consulta = "select * from usuario where name like :nombre order by id_us desc";
        
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(':nombre', $nombre);
        $result->execute();
           
        return $result->fetchAll();
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    public function buscarMensajeRec($rec)
    {
        try {
            $consulta = "select * from mensaje where id_rec like :idr order by id_men desc";
            
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(':idr', $rec);
            $result->execute();
            
            return $result->fetchAll();
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    public function buscarMensajeSend($send)
    {
        try {
            $consulta = "select * from mensaje where id_send like :ids order by id_men desc";
            
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(':ids', $send);
            $result->execute();
            
            return $result->fetchAll();
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    public function dameUsuario($id)
    {
        try {
            $consulta = "select * from usuario where id_us=:id";
            
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(':id', $id);
            $result->execute();
            return $result->fetch();
            
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }
    
    public function dameMensaje($id)
    {
        try {
            $consulta = "select * from mensaje where id_men=:id";
            
            $result = $this->conexion->prepare($consulta);
            $result->bindParam(':id', $id);
            $result->execute();
            return $result->fetch();
            
        } catch (PDOException $e) {
            
            echo "<p>Error: " . $e->getMessage();
        }
    }
   
    
    //añadir validador para no repetir usuario/correo
    public function insertarUsuario($name, $pass, $mail)
    {
    	$hash = password_hash($pass, PASSWORD_DEFAULT, [15]);
        $consulta = "insert into usuario (name, password, mail) values (?, ?, ?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $name);
        $result->bindParam(2, $hash);
        $result->bindParam(3, $mail);
        $result->execute();
                
        return $result;
    }

    public function enviarMensaje($send, $rec, $subj, $mensaje)
    {
        $consulta = "insert into mensaje (id_send, id_rec, subject, mensaje) values (?, ?, ?, ?)";
        $result = $this->conexion->prepare($consulta);
        $result->bindParam(1, $send);
        $result->bindParam(2, $rec);
        $result->bindParam(3, $subj);
        $result->bindParam(4, $mensaje);
        $result->execute();
        
        return $result;
    }
    
}
?>
