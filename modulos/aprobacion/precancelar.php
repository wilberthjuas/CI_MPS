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
$title="CANCELAR/REACTIVAR PÓLIZA";
require_once($rootDir.'public/html/header_template.php');

?>
<form method="post" action="cancelar.php">
	<div class="card-body">
		<form method="post" action="../../modulos/aprobacion/aprobacion.php">
			<div class="mb-3">
				<label class="form-label"><strong>Ingresa el folio de la póliza, la acción a realizar y motivo</strong></label>
				<input autocomplete="off" type="text" name="buscar" class="form-control" placeholder="Ingrese folio de búsqueda" required/>
			</div>
			<div class="mb-3">
				<select class="form-control mb-3" autocomplete="off" required="required" type="text" name="accion" id="Numero de parte" />
				<option disabled selected>Seleccione acción</option>
				<option>Cancelar</option>
				<option>Reactivar</option>
			</select>
		</div>
		<div class="mb-3">
			<input autocomplete="off" type="textarea" name="mot" class="form-control" placeholder="Ingresa motivo" required/>
		</div>
		<button type="submit" class="btn btn-primary">Enviar</button> 
	</form>
</div>
</form>

<?php
      //PIE De PAGINA
require_once($rootDir.'public/html/footer_template.php');
?>
