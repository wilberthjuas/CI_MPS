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
<html><link rel="shortcut icon" href="../../logop.png"/>
<head><title>Mutualidad MPS</title></head>
<link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">
<link charset="utf-8">
<body>


	<!--Cabecera-->
    <?php
      //CABECERA DEL SITIO
      require_once('../../public/html/header.php');
    ?>
     <img src="../../logop.png" width="232" height="220">
  	<!--Cabecera-->
	<div class="espacio-header"></div>

	<form id="form1" name="form1" method="post" action="visor5.php">
	<div class="container">
		<div class="row">
			<div class="col-6 push-3">
				
				<div class="panel_head">
					<p class="titulo_panel"style="font-family:Broadway;" aling="center">INGRESA DATOS Y FORMA DE BUSQUEDA</p>
				</div>
				<div class="panel_body_footer">
					<div class="row">
						<br>
						<div class="col-10 push-1"></div>
					</div>
					<div class="row">
						<div class="col-10 push-1">
						<br><br><br>
								<form id="form1" name="form1" method="post" action="../../modulos/visor/visor.php">
									<div class="search_left">	
										<input autocomplete="off" required class="box_search" type="text" name="buscar" id="Numero de parte" placeholder="Ingrese Datos de Busqueda" />
									</div>
                                    <div class="search_left">	
										<select autocomplete="off" required="required" class="box_search" type="text" name="tipo" id="Numero de parte" />
                                        <option></option>
                                        <option>Folio</option>
                                        <option>Placas</option>
                                        <option>Nombre</option>
                                        </select>
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
    
    
    <
						</div>
					</div>
					<br><br><br><br><br><br>
				</div>
			</div>

		</div>
	</div><!--Fin container-->
	</form>   

</html>



