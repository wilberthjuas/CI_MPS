<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	session_start();
	if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){
		$pintar_usaurio = strtoupper($_SESSION['usuario']);
	}else{
		header("Location: ../../index.php");
		exit();
	}
?>
<html>
<html><link rel="shortcut icon" href="../../foto.jpg"/>
<head><title>Mutualidad MPS</title></head>
<link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">
<link charset="utf-8">
<body>


	<!--Cabecera-->
    <?php
      //CABECERA DEL SITIO
      require_once('../../public/html/header.php');
    ?>
  	<!--Cabecera-->
	<div class="espacio-header"></div>
 <img src="../../logop.png" width="232" height="220">
	<form id="form1" name="form1" method="post" action="gruas.php">
	<div class="container">
		<div class="row">
			<div class="col-6 push-3">
				
				<div class="panel_head">
					<p class="titulo_panel"style="font-family:Arial;" aling="center">INGRESA EL FOLIO DE LA POLIZA </p>
				</div>
				<div class="panel_body_footer">
					<div class="row">
						<br>
						<div class="col-10 push-1"></div>
					</div>
					<div class="row">
						<div class="col-10 push-1">
						<br><br><br>
								<form id="form1" name="form1" method="post" action="../../modulos/aprobacion/gruas.php">
									<div class="search_left">	
										<input autocomplete="off" required="required" class="box_search" type="text" name="buscar" id="Numero de parte" />
									</div>
									<div class="search_right">
										<input class="btn_search" type="submit" name="enviar" id="enviar" value="" />
									</div>	
								</form>
						</div>
					</div>
					<br><br><br><br><br><br>
				</div>
			</div>

		</div>
	</div><!--Fin container-->
	</form>   

</html>
