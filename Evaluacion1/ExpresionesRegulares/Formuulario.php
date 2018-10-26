<?php
include ('bGeneral.php');
include ('funciones.php');
cabecera($_SERVER['PHP_SELF']);
if (! isset($_REQUEST['bAceptar'])) {
    ?>

<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD="post">
CADENA:<input type="text" name="cad" size="10"><br>
EJERCICIO:
<select name="ejer">
  <option value="ej1">Ej1</option>
  <option value="ej2">Ej2</option>
  <option value="ej3">Ej3</option>
  <option value="ej4">Ej4</option>
</select><br>
<input type="submit" value="Enviar" name="bAceptar">
</form>
</body>
</html>
<?php
} // En esta parte comprobamos los datos recibidos
else {
    $cad=$_REQUEST['cad'];
    $ejerType=$_REQUEST['ejer'];
    
    if($ejerType=="ej1"){
        if ((Ej1($cad) == true)) {
            echo "Coincide";
        }else{
            echo "No coincide";;
        }
    }else if($ejerType=="ej2"){
        if ((Ej2($cad) == true)) {
            echo "Coincide";
        }else{
            echo "No coincide";;
        }
    }else if($ejerType=="ej3"){
        if ((Ej1($cad) == true)) {
            echo "Coincide";
        }else{
            echo "No coincide";;
        }
    }else if($ejerType=="ej4"){
        if ((Ej1($cad) == true)) {
            echo "Coincide";
        }else{
            echo "No coincide";;
        }
    }
}
?>
		  
</form>
<?php

pie();
?>