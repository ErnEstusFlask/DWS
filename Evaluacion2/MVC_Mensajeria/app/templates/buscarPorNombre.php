<?php ob_start() ?>

<form name="formBusqueda" action="index.php?ctl=buscar" method="POST">

<table>
<tr>
<td>nombre usuario:</td>
<td><input type="text" name="nombre" value="<?php echo $params['nombre']?>">(puedes utilizar '%' como comodín)</td>

<td><input type="submit" value="buscar"></td>
</tr>
</table>

</table>

</form>

<?php if (count($params['resultado'])>0): ?>
<table>
<tr>
<th>Nombre</th>
<th>Correo</th>
</tr>
<?php foreach ($params['resultado'] as $usuario) : ?>
<tr>
<td><a href="index.php?ctl=ver&id=<?php echo $usuario['id_us'] ?>">
<?php echo $usuario['name'] ?></a></td>
<td><?php echo $usuario['mail'] ?></td>
</tr>
<?php endforeach; ?>

</table>
<?php endif; ?>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
