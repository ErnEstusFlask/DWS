<?php ob_start() ?>

<table>
<tr>
<th>Asunto</th>
<th>Descripcion</th>
</tr>
<?php foreach ($params['mensaje'] as $mensaje) :?>
<tr>
<td><a href="index.php?ctl=verM&id_men=<?php echo $mensaje['id_men']?>">
<?php echo $mensaje['subject']?></a></td>
<td><?php echo $mensaje['mensaje']?></td>
</tr>
<?php endforeach; ?>

</table>


<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
