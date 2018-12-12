<?php
include ('bGeneral.php');
cabecera($_SERVER['PHP_SELF']);
$error = false;
if (! isset($_REQUEST['bAceptar'])) {
    ?>

<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD="post" id="bbdd">
Nombre:<input type="text" name="nombre" size="10"><br>
Puesto:<input type="text" name="puesto" size="10"><br>
Fecha Nacimiento:<input type="text" name="nacim" size="10"><br>
Salario:<input type="text" name="salario" size="10"><br>
Localidad:<select name="locList" form="bbdd">
  <option value="1">Yharnam</option>
  <option value="2 City">Ringed City</option>
  <option value="3">Lordran</option>
</select><br>
¿Recomendar amigos?<input type="checkbox" name="recommend"  onclick="friends()"><br>

<div id="fri" style="display:none">
Nombre:<input type="text" name="nombre1" size="10"><br>
Puesto:<input type="text" name="puesto1" size="10"><br>
Fecha Nacimiento:<input type="text" name="nacim1" size="10"><br>
Salario:<input type="text" name="salario1" size="10"><br>
Localidad:<select name="locList" form="bbdd">
  <option value="1">Yharnam</option>
  <option value="2 City">Ringed City</option>
  <option value="3">Lordran</option>
</select><br>
Nombre:<input type="text" name="nombre" size="10"><br>
Puesto:<input type="text" name="puesto" size="10"><br>
Fecha Nacimiento:<input type="text" name="nacim" size="10"><br>
Salario:<input type="text" name="salario" size="10"><br>
Localidad:<select name="locList" form="bbdd">
  <option value="1">Yharnam</option>
  <option value="2 City">Ringed City</option>
  <option value="3">Lordran</option>
</select><br>

</div>

<script>
function friends() {
  var checkBox = document.getElementById("recommend");
  var text = document.getElementById("fri");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}</script><br>
<?php 

?>
<input type="submit" value="Enviar" name="bAceptar">
</form>
</body>
</html>
<?php
} // En esta parte comprobamos los datos recibidos
else {
    $name=recoge('nombre');
    $job=recoge('puesto');
    $birth=recoge('nacim');
    $salary=recoge('salario');
    $locat=recoge('locList');
    
    if ((cTexto($name) == 0)) {
        $error = true;
    }
    if ((cTexto($job) == 0)) {
        $error = true;
    }
    if ((cNum($salary) == 0)) {
        $error = true;
    }
    if (isset($_POST['recomend'])) {
        ?>
    
    <?php 
    }
    if (! $error) {
        header("location:form_1.php?nombre=$name&nacim=$birth&puesto=$job&salario=$salary&locList=$locat");
    } else {
        
?>

<form ACTION="<?=$_SERVER ['PHP_SELF'] //el archivo actual?>"
	METHOD='post'>
	<p>Los datos que has introducido no están en el formato correcto</p>
	Nombre:<input type="text" name="nombre" size="10" VALUE="<?php
		echo $name;
        ?>"> <br> Puesto:<input type="text" name="puesto" size="10" VALUE="<?php
        echo $job;
        ?>"> <br> Fecha Nacimiento:<input type="text" name="nacim" size="10" VALUE="<?php
        echo $birth;
        ?>"> <br> Salario:<input type="text" name="salario" size="10" VALUE="<?php
        echo $salary;
        ?>"><br> Localidad:<select name="locList" form="bbdd">
          <option value="1">Yharnam</option>
          <option value="2 City">Ringed City</option>
          <option value="3">Lordran</option>
        </select><br>
		<?php
        echo '<input TYPE="submit" name="bAceptar" VALUE="aceptar">';
    }
}
?>
		  
</form>
<?php

pie();
?>