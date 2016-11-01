<?php
	session_start();
	session_destroy();
	#header("Location: index.php"); 
 ?>

 <?php  require_once "menu.php";?>
 	Olet kirjautunut ulos.
 	<?php require_once "footer.php";?>