<?php ob_start(); 
if(isset($_SESSION["id_user"])){
?>

<table>
<tr>
<th>Para</th>
<th>De</th>
<th>Asunto</th>
<th>Descripcion</th>
</tr>
<?php foreach ($params['mensaje'] as $mensaje) :?>
<tr>
<td><?php echo $params['mensaje'][0]['id_rec']['name']?></td>
<td><?php echo $params['mensaje'][0]['id_send']['name']?></td>
<td><a href="index.php?ctl=verM&id_men=<?php echo $mensaje['id_men']?>">
<?php echo $mensaje['subject']?></a></td>
<td><?php echo $mensaje['mensaje']?></td>
</tr>
<?php endforeach; ?>

</table>
<?php }else{ 
	echo "Debes ser un usuario registrado para ver el contenido de esta pagina. Porfavor inicie sesion o registrese.";
}?>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
