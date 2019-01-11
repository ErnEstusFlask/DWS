<?php ob_start(); 
if(isset($_SESSION["id_user"])){
?>

<form name="formBusqueda" action="index.php?ctl=buscarMensajesSend" method="POST">

<table>
<tr>
<td>Emisor:</td>
<td><input type="text" name="send" value="<?php echo $params['send']?>">(puedes utilizar '%' como comodín)</td>
</tr>
<td><input type="submit" value="Buscar"></td>
</tr>
</table>

</table>

</form>

<?php if (count($params['resultado'])>0): ?>
<table>
<tr>
<th>Emisor</th>
<th>Asunto</th>
<th>Mensaje</th>
</tr>
<?php foreach ($params['resultado'] as $mensaje) : ?>
<tr>
<td><a href="index.php?ctl=verM&id_men=<?php echo $mensaje['id_men'] ?>">
<?php echo $mensaje['id_send'] ?></a></td>
<td><?php echo $mensaje['subject'] ?></td>
<td><?php echo $mensaje['mensaje'] ?></td>
</tr>
<?php endforeach; ?>

</table>
<?php endif; ?>
<?php }else{
	echo "Debes ser un usuario registrado para ver el contenido de esta pagina. Porfavor inicie sesion o registrese.";
}?>
<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
