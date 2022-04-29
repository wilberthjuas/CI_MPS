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

	//CABECERA DEL SITIO
$user=$_SESSION['type'];
$rootDir='../../';
$title="REGISTRAR PAGO";
require_once($rootDir.'public/html/header_template.php');
?>
<div class="card">
	<div class="card-body">
		<form method="post" name="registrar" action="../../inicio.php">
			<div class="mb-3">
				<p class="titulo-form">REGISTRO EXITOSO</p>
			</div>
			<button type="submit" class="btn btn-primary">Regresar</button> 
		</form>	
	</div>
</div>

<?php
      //PIE De PAGINA
require_once($rootDir.'public/html/footer_template.php');
?>