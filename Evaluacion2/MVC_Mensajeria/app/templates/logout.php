<?php ob_start() ;
if(isset($_SESSION["id_user"])){
	

session_destroy();
unset($_SESSION["id_user"]);
?>
<p>Se ha cerrado la sesion con exito<p>
<?php }else{
	echo "Para cerrar sesion debes estar loggeado.";
}?>
<?php $contenido = ob_get_clean() ?>

<?php include 'layout.php' ?>
