<?php
	//ERROR REPORTIN PARA ELIMINAR NOTICEs Y WARNINGs
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	//CONEXION
    require_once('conexion/conexion.php');
    mysqli_select_db($conexion, $database);
    //SESSIONES DE USUARIO
		session_start();
			ob_start();
		if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){
      		$pintar_usaurio = strtoupper($_SESSION['usuario']);
		}else{
			//REDIRECION A INDEX Y EJECUTO EXIT
			header("Location: index.php");
			exit();
		}
			ob_start();
?>
<html>
    <html><link rel="shortcut icon" href="logop.png"/>
<link href="public/css/estilo.css" rel="stylesheet" type="text/css">
<body

	<!--Cabecera-->
    <?php
      //CABECERA DEL SITIO
     require_once('public/html/header_1.php');
 $user=$_SESSION['type'];
   ?>
  	<!--Cabecera-->
	<div class="container">
		<div class="row">
			<div class="col-1 push-5">
				<p></p>
			</div>
		</div>
	</div><!--Fin container-->
	<br><br><br><br>
<body>
<div align="center"><img src="logop.png" width="554" height="554"></div>	
<html>
<head><title>Mutualidad MPS </title></head>
<link href="public/css/estilo.css" rel="stylesheet" type="text/css">
<body>
</body>
</html