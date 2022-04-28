<!doctype html>
<html>
<head><title>PREREGISTRO</title></head>
<link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">
<body>
	
	<?php
	//INICIALIZACION DE VARIABLES
	$error1 = "";
	$error2 = "";
	$error3 = "";
	$error4 = "";

	session_start();
	if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){
		$pintar_usaurio = strtoupper($_SESSION['usuario']);
	}else{
		header("Location: index.php");
		exit();
	}
	?>

	<!--Cabecera-->
    <?php
      //CABECERA DEL SITIO
      require_once('../../public/html/header.php');
    ?>
  	<!--Cabecera-->
	<div class="espacio-header"></div>

	<form id="form1" name="registrar" action="../../inicio.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-4 push-4">
				<div class="panel">
				<div class="row">
					<br>
					<div class="col-10 push-1"><p class="titulo-form">REGISTRO EXITOSO</p></div>

				</div>
					<div class="row">
						<br><br>
						<div class="col-6 push-5"><input  class="botom" type="submit" value="REGRESAR" /></div>
					</div>
					<br><br>

				</div>
			</div>

		</div>
	</div><!--Fin container-->
	</form>
	
</body>
</html>