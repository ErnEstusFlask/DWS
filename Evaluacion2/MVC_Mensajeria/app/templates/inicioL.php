<?php ob_start() ;
header('Location: index.php?ctl=ver&id='+($_SESSION["id_user"]));
?>
<h1><?php echo $params['name'] ?></h1>
<table border="1">

<tr>
<td>Correo</td>
<td><?php echo $usuario['mail'] ?></td>

</tr>
</table>


<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
