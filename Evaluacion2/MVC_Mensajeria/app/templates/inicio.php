<?php ob_start() ?>
<h1>Inicio</h1>
<h3> Fecha: <?php echo $params['fecha'] ?> </h3>
<?php echo $params['mensaje1'] ?>
<br/>
<?php echo $params['mensaje2'] ?>
<br/>
<?php if(isset($params['mensaje'])) :?>
<b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
<?php endif; ?>
<br/>
<form name="formInsertar" action="index.php?ctl=inicio" method="POST">
<table>
<tr>
<th>Nombre de Usuario</th>
<th>Contraseña</th>
</tr>
<tr>
<td><input type="text" name="nombre" value="<?php echo $params['nombre'] ?>" /></td>
<td><input type="text" name="contrasena" value="<?php echo $params['password'] ?>" /></td>
</tr>
</table>
<input type="submit" value="Loggearse" name="logged" />
</form>
<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
