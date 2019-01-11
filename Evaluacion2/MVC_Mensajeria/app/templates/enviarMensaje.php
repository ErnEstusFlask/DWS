<?php ob_start() ?>
<?php //if (! isset($_REQUEST['bEnviar'])){ ?>
<?php if(isset($params['mensaje'])) :?>
<b><span style="color: red;"><?php echo $params['mensaje'] ?></span></b>
<?php endif; ?>
    <form name="formBusqueda" action="index.php?ctl=enviar" method="POST">

    <table>
    <tr>
    <td>Destinatario:</td>
    <td><input type="text" name="rec" value="<?php echo $params['rec']?>"></td>
    </tr>
    <tr>
    <td>Asunto:</td>
    <td><input type="text" name="subject" value="<?php echo $params['subject']?>"></td>
    </tr>
    <tr>
    <td colspan="4"><textarea rows="8" cols="50" name="mensajeria" value="<?php echo $params['mensaje']?>"></textarea></td>
    </tr>
    <tr>
    <td><input type="submit" value="Enviar" name="enviar"></td>
    </tr>
    </table>
    
    </form>
<?php /*
}else{
    echo "Mensaje enviado";
}*/?>

<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
