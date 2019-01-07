<?php ob_start() ?>

<table>
<tr>
<th>usuario</th>
<th>correo</th>
</tr>
<?php foreach ($params['usuarios'] as $usuario) :?>
<tr>
<td><a href="index.php?ctl=ver&id=<?php echo $usuario['id']?>">
<?php echo $usuario['name'] ?></a></td>
<td><?php echo $usuario['mail']?></td>
</tr>
<?php endforeach; ?>

</table>


<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
