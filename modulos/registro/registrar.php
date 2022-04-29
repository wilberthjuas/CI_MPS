<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){
	$pintar_usaurio = strtoupper($_SESSION['usuario']);
}else{
	header("Location: index.php");
	exit();
}

$is=$_SESSION['id'];
$name=$_SESSION['name'];


//CABECERA DEL SITIO
$user=$_SESSION['type'];
$rootDir='../../';
$title="REGISTRO DE NUEVA PÓLIZA";
require_once($rootDir.'public/html/header_template.php');
require_once($rootDir.'conexion/conexion.php');
mysqli_select_db($conexion, $database);
?>


<div class="card-body">
	<form method="post" action="insertar.php" name="registrar">
		<div>
			<h2 class="card-body">Información del asegurado</h2>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Nombre</strong>
				</label>
				<input autocomplete="off" type="text" name="nombre" class="form-control" placeholder="Ingrese nombre del cliente" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Domicilio</strong>
				</label>
				<input autocomplete="off" type="text" name="domicilio" class="form-control" placeholder="Ingrese calle" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Exterior</strong>
				</label>
				<input autocomplete="off" type="text" name="exterior" class="form-control" placeholder="Ingrese número interior y/o exterior" required/>
			</div>	
		</div>
		<div class="row">
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>Cruces</strong>
				</label>
				<input autocomplete="off" type="text" name="entre" class="form-control" placeholder="Ingrese entre qué calles se localiza" required/>
			</div>
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>Colonia</strong>
				</label>
				<input autocomplete="off" type="text" name="col" class="form-control" placeholder="Ingrese nombre de la colonia" required/>
			</div>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Municipio</strong>
				</label>
				<input autocomplete="off" type="text" name="municipio" class="form-control" placeholder="Ingrese nombre de municipio o comunidad" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Teléfono</strong>
				</label>
				<input autocomplete="off" type="number" pattern="{1,10}" name="Teléfono" class="form-control" placeholder="Ingrese número celular o teléfono de casa" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Código postal</strong>
				</label>
				<input id="ip_cp" autocomplete="off" type="number" name="cp" class="form-control" placeholder="Ingrese código postal" required/>
			</div>
		</div>
		<div>
			<h2 class="card-body">Datos del vehículo</h2>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Marca</strong>
				</label>
				<input autocomplete="off" type="text" name="marca" class="form-control" placeholder="Ingrese marca del vehículo" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Tipo</strong>
				</label>
				<input autocomplete="off" type="text" name="tipo" class="form-control" placeholder="Ingrese el tipo de automóvil" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Año</strong>
				</label>
				<input autocomplete="off" type="number" name="ano" class="form-control" placeholder="Ingrese el año del vehículo" required/>
			</div>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Color</strong>
				</label>
				<input autocomplete="off" type="text" name="color" class="form-control" placeholder="Ingrese color del vehículo" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Placas</strong>
				</label>
				<input autocomplete="off" type="text" name="placas" class="form-control" placeholder="Ingrese los datos de la placa vehícular" style="text-transform: uppercase;" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Versión</strong>
				</label>
				<input autocomplete="off" type="text" name="version" class="form-control" placeholder="Ingrese la versión de autmóvil" required/>
			</div>
		</div>
		<div class="row">
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>No. serie</strong>
				</label>
				<input autocomplete="off" type="text" name="serie" class="form-control" placeholder="Ingrese número de serie" required/>
			</div>
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>No. motor</strong>
				</label>
				<input autocomplete="off" type="text" name="nmotor" class="form-control" placeholder="Ingrese número de motor" required/>
			</div>	
		</div>
		<div>
			<h2 class="card-body">Información de cobertura a contratar</h2>
		</div>
		<div class="row">
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>Expedición</strong>
				</label>
				<input autocomplete="off" type="date" min="1940-01-01"  name="expedicion" class="form-control" placeholder="Ingrese la fecha de expedición" required/>
			</div>
			<div class="mb-3 col-md-6">
				<label class="form-label">
					<strong>Vigencia</strong>
				</label>
				<input autocomplete="off" type="date" min="1940-01-01"  name="vigencia" class="form-control" placeholder="Ingrese la fecha de vigencia" required/>
			</div>
		</div>
		<div class="row">
			<div class="mb-3 mb-3 col-md-4">
				<label class="form-label">
					<strong>Cobertura</strong>
				</label>
				<select class="form-control mb-3" required="required" name="cobertura">
					<option disabled selected>Selecciona una opción</option>
					<option>MULTIPLATAFORMAS CD JUAREZ</option>
					<option>COTIZACION PARTICULAR RC ECONOMICA CON GRUA</option>
					<option>AMPLIA AUTOMOVIL PARTICULAR HASTA $50,000</option>
					<option>VEHICULO PARTICULAR AMPLIA HASTA $60,000</option>
					<option>AMPLIA AUTOMOVIL PARTICULAR HASTA $70,000</option>
					<option>AMPLIA AUTOMOVIL PARTICULAR HASTA $80,000</option>
					<option>POLIZA PARTICULAR AMPLIA 90 MIL</option>
					<option>POLIZA PARTICULAR AMPLIA 100 MIL</option>
					<option>POLIZA PARTICULAR AMPLIA 110 MIL</option>
					<option>POLIZA PARTICULAR AMPLIA 120 MIL</option>
					<option>POLIZA PARTICULAR AMPLIA 130 MIL</option>
					<option>POLIZA PARTICULAR AMPLIA 140 MIL</option>
					<option>TERCEROS CON GRUA PICKUP</option>
					<option>AMPLIA PICKUP HASTA $50,000</option>
					<option>AMPLIA PICKUP HASTA $60,000</option>
					<option>AMPLIA PICKUP HASTA $70,000</option>
					<option>AMPLIA PICKUP HASTA $80,000</option>
					<option>AMPLIA PICKUP HASTA $90,000</option>
					<option>AMPLIA PICKUP HASTA $100,000</option>
					<option>AMPLIA PICKUP HASTA $110,000</option>
					<option>AMPLIA PICKUP HASTA $120,000</option>
					<option>AMPLIA PICKUP HASTA $130,000</option>
					<option>AMPLIA PICKUP HASTA $140,000</option>
					<option>AMPLIA MOTO</option>
					<option>INTERMEDIA MOTO</option>
					<option>TERCEROS MOTO</option>
					<option>COTIZACION MULTIPLATAFORMAS PROMO JULIO 2021</option>
					<option>COTIZACION POLIZA MULTIPLATAFORMAS 4 MILLONES EN RC</option>
					<option>MULTIPLATAFORMAS ECONOMICA</option>
				</select>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Deducible</strong>
				</label>
				<select class="form-control mb-3" required="required" name="deducible" >
					<option disabled selected>Selecciona una opción</option>
					<option>Sí aplica</option>
					<option>No aplica</option>
				</select>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Costo total</strong>
				</label>
				<input autocomplete="off" type="text" name="costo_total" class="form-control" placeholder="Ingrese la cantidad" required/>
			</div>
		</div>
		<div class="mb-3">
			<label class="form-label">
				<strong>Observciones</strong>
			</label>
			<input autocomplete="off" type="textarea" name="observaciones" class="form-control" placeholder="Ingrese los comentarios de las observaciones" required/>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Pago inicial</strong>
				</label>
				<input autocomplete="off" type="number" name="pagoinicial" class="form-control" placeholder="Ingrese la cantidad" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Pago mensual</strong>
				</label>
				<input autocomplete="off" type="number" name="pagomensual" class="form-control" placeholder="Ingrese el monto mensual" required/>
			</div>
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Plazo</strong>
				</label>
				<input autocomplete="off" type="text" name="plazo" class="form-control" placeholder="Ingrese la fecha" required/>
			</div>
		</div>
		<input type="hidden" name="captura"  value="<?php echo"$name" ?>" /> 
		<div>
			<h2 class="card-body">Información de captura</h2>
		</div>
		<div class="row">
			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Vendedor</strong>
				</label>
				<select class="form-control mb-3" required="required" name="vendedor">
					<option disabled selected>Selecciona una opción</option>
					<option>MPS GDL</option>
					<option>Roberto Cruz</option>
					<option>Gerardo Partida</option>
					<option>Miguel Ortega</option>
					<option>Samuel Mohamed</option>
					<option>Armando Cruz</option>
					<option>Miguel Galindo</option>
					<option>Israel Chavez</option>
					<option>Gibran Rios</option>
					<option>Gerardo Montes</option>
					<option>Jonathan Medina</option>
					<option>Adolfo Talamantes</option>
					<option>Hugo Montano</option>
					<option>MPS CD JUAREZ</option>
					<option>Cesar Banderas</option>
					<option>Gerardo Juarez</option>
					<option>Laura Alvarez</option>
					<option>Daniel Juarez</option>
					<option>Diana Garcia</option>
					<option>Julian Martinez</option>
					<option>Sergio Garcia</option>
					<option>Salvador Reyes</option>
					<option>Cruz Gonzalez</option>
				</select>
			</div>

			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Cobrador</strong>
				</label>
				<select class="form-control mb-3" required="required" name="cobrador">
					<option disabled selected>Selecciona una opción</option>
					<option>Roberto Armando</option>
					<option>Samuel Mohamed</option>
					<option>Armando Cruz</option>
					<option>Miguel Galindo</option>
					<option>MPS CD JUAREZ</option>
				</select>
			</div>

			<div class="mb-3 col-md-4">
				<label class="form-label">
					<strong>Plataforma</strong>
				</label>
				<select class="form-control mb-3" required="required" name="cobrador">
					<option disabled selected>Selecciona una opción</option>
					<option>Multi Plataforma</option>
					<option>Uso Particular</option>
					<option>Servicio Publico</option>               
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Enviar</button> 
	</form>
</div>


<?php
      //PIE De PAGINA
require_once($rootDir.'public/html/footer_template.php');
?>