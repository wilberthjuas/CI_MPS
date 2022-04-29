<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
session_start();
if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){
	$pintar_usaurio = strtoupper($_SESSION['usuario']);
}else{
	header("Location: ../../index.php");
	exit();
}
//CABECERA DEL SITIO
$user=$_SESSION['type'];
$rootDir='../../';
$title="BUSCAR GRÚA";
require_once($rootDir.'public/html/header_template.php');

?>
<div class="card-body">
	<form method="post" action="../../modulos/aprobacion/gruas.php">
		<div class="mb-3">
			<label class="form-label"><strong>Ingresa el folio de la póliza</strong></label>
			<input autocomplete="off" type="text" name="buscar" class="form-control" placeholder="Ingrese datos de búsqueda" required/>
		</div>
		<button type="submit" class="btn btn-primary">Enviar</button> 
	</form>
</div>


<?php
//PIE De PAGINA
require_once($rootDir.'public/html/footer_template.php');
?>

