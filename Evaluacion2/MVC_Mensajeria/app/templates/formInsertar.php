<?php ob_start() ?>

<?php if(isset($params['mensaje'])) :?>
<b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
<?php endif; ?>
<br/>
<form name="formInsertar" action="index.php?ctl=insertar" method="POST">
<table>
<tr>
<th>Nombre</th>
<th>Contraseña</th>
<th>Correo</th>
</tr>
<tr>
<td><input type="text" name="nombre" value="<?php echo $params['nombre'] ?>" /></td>
<td><input type="text" name="contrasena" value="<?php echo $params['password'] ?>" /></td>
<td><input type="text" name="correo" value="<?php echo $params['mail'] ?>" /></td>
</tr>

</table>
<input type="submit" value="Registrar" name="insertar" />
</form>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
