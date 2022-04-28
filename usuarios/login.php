<?php
ob_start();
require_once('../../conexion/conexion.php');
  

	//error_reporting(E_ERROR | E_WARNING | E_PARSE);


	$usuario = $_POST['nombre'];
	$pass = $_POST['password'];
  	mysqli_select_db($conexion, $database);
  	$resultado_login = $conexion->query("SELECT * FROM cctuser WHERE `user_name`  = '$usuario' ");
  	$row = $resultado_login->fetch_assoc();
  	

  	if($row['user_pass'] === "$pass" && $row['user_name'] === "$usuario" ){
  		session_start();
  		echo $_SESSION['usuario'] = $usuario;
  		echo $_SESSION['type'] = $row['user_type'];
		echo $_SESSION['id'] = $row['user_id'];
		echo $_SESSION['name'] = $row['nombre'];
  		header("Location: ../../inicio.php");
  	}else{
  		header("Location: ../../index.php");
  	}

ob_end_flush();
?>