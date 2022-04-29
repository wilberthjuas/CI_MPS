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
$title="DESCARGA DE ARCHIVO EXCEL";
require_once($rootDir.'public/html/header_template.php');

?>
<form method="post" action="excel.php">
	<div class="card-body">
		<form method="post" action="../../modulos/visor/visor.php">
			<div class="mb-3">
				<label class="form-label"><strong>Ingresa fechas de búsqueda</strong></label>
				<input autocomplete="off" type="date" name="buscar1" class="form-control" placeholder="Ingrese datos de búsqueda" required/>
			</div>
			<div class="mb-3">
				<input autocomplete="off" type="date" name="buscar2" class="form-control" placeholder="Ingrese datos de búsqueda" required/>
			</div>

			<button type="submit" class="btn btn-primary">Enviar</button> 
		</form>
	</div>
</form>

<?php
      //PIE De PAGINA
require_once($rootDir.'public/html/footer_template.php');
?>
