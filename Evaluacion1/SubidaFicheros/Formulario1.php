<?php
include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$error = false;
if (! isset($_REQUEST['bAceptar'])) {
?>

<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD="post">
NOMBRE:<input type="text" name="nombre" size="10"><br>
EDAD:<input type="text" name="edad" size="10"><br>
EMAIL:<input type="text" name="correo" size="10"><br>
<input type="submit" value="Enviar" name="bAceptar">
</form>
</body>
</html>
<?php
} // En esta parte comprobamos los datos recibidos
else {
    $name=$_REQUEST['nombre'];
    $age=$_REQUEST['edad'];
    $mail=$_REQUEST['correo'];
    $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
    
    if ((cTexto($name) == 0)) {
        $error = true;
    }
    if ((cNum($age) == 0)) {
        $error = true;
    }
    if (! $error) {
        header("location:form_1.php?nombre=$name&edad=$age&correo=$mail");
    } else {
        
        ?>
<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD='post'>
	<p>Los datos que has introducido no están en el formato correcto</p>
	NOMBRE:<input type="text" name="nombre" size="10" VALUE="<?php
		echo $name;
        ?>"> <br> EDAD:<input type="text" name="edad" size="10" VALUE="<?php
		echo $age;
        ?>"> <br> EMAIL:<input type="text" name="correo" size="10" VALUE="<?php
		echo $mail;
        ?>">
		<?php
        echo '<input TYPE="submit" name="bAceptar" VALUE="aceptar">';
    }
}
?>
		  
</form>
<?php

pie();
?>