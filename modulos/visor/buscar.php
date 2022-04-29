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

<?php
      //CABECERA DEL SITIO
$user=$_SESSION['type'];
$rootDir='../../';
$title="VISOR";
require_once($rootDir.'public/html/header_template.php');

?>
	<div class="card-body">
		<form method="post" action="visor.php">
			<div class="mb-3">
				<label class="form-label"><strong>Ingresa datos y forma de búsqueda</strong></label>
				<input autocomplete="off" type="text" name="buscar" class="form-control" placeholder="Ingrese datos de búsqueda" required/>
			</div>
			<div class="mb-3">
				<select class="form-control mb-3" autocomplete="off" required="required" type="text" name="tipo" id="Numero de parte" />
					<option disabled selected>Selecciona una opción</option>
					<option>Folio</option>
					<option>Placas</option>
					<option>Nombre</option>
				</select>
			</div>

			<button type="submit" class="btn btn-primary">Enviar</button> 
		 </form>
	</div>
	
<!--	<form id="form1" name="form1" method="post" action="visor.php">
	<div class="container">
		<div class="row">
			<div class="col-6 push-3">
				
				<div class="panel_head">
					<p class="titulo_panel"style="font-family:Broadway;" aling="center">INGRESA DATOS Y FORMA DE BUSQUEDA</p>
                
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
	</div>
	</form>   
    
    
    <
						</div>
					</div>
					<br><br><br><br><br><br>
				</div>
			</div>

		</div>
	</div>
	</form> -->   
<?php
      //PIE De PAGINA
require_once($rootDir.'public/html/footer_template.php');
?>





