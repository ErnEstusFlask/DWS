<?php ob_start() ?>

<h1><?php echo $params['subject'] ?></h1>
<table border="1">

<tr>
<td>Descripcion:</td>
<td><?php echo $mensaje['mensaje'] ?></td>
</tr>
</table>


<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
