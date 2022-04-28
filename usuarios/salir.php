<?php
	session_start();
	if($_SESSION['usuario']){
		unset($_SESSION['usuario']);
		unset($_SESSION['type']);
		session_destroy();
	}
	header("Location: ../../index.php");
?>