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
$title="VISOR/IMPRESIÓN";
require_once($rootDir.'public/html/header_template.php');

?>
<div class="card-body">
	<form method="post" name="form1" action="visori.php">
		<div class="mb-3">
			<label class="form-label"><strong>Ingresa datos y forma de búsqueda</strong></label>
			<input autocomplete="off" type="text" name="buscar" class="form-control" placeholder="Ingrese datos de búsqueda" required/>
		</div>
		<form method="post"  name="form1" action="../../modulos/visor/visor.php">
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



<?php
      //PIE De PAGINA
require_once($rootDir.'public/html/footer_template.php');
?>



