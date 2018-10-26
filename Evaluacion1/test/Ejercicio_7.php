<html>
	<?php
	   function cabecera($v_title){
	       if ($v_title == null) {
	           $v_title = basename(__FILE__, '.php');
	       }
	       echo '<head>';
	       echo '<title>'.$v_title;
	   }
	   
	   function pie() {
	       echo '</title';
	       echo '</head>';
	   }
	   
	   $titulo = 'Ejercicio 7 - Funciones';
	   cabecera($titulo);
	   //$titulo_null = null;
	   //cabecera($titulo_null);
	   pie();
    ?>
    <body>
	</body>
</html>

