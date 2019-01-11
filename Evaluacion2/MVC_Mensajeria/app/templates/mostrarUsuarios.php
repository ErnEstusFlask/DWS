<?php ob_start(); 
if(isset($_SESSION["id_user"])){
?>
<table>
<tr>
<th>usuario</th>
<th>correo</th>
</tr>
<?php foreach ($params['usuarios'] as $usuario) :?>
<tr>
<td><a href="index.php?ctl=ver&id=<?php echo $usuario['id_us']?>">
<?php echo $usuario['name']?></a></td>
<td><?php echo $usuario['mail']?></td>
</tr>
<?php endforeach; ?>

</table>
<?php }else{
	echo "Debes ser un usuario registrado para ver el contenido de esta pagina. Porfavor inicie sesion o registrese.";
}?>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
