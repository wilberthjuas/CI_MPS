<?php
	//ERROR REPORTIN PARA ELIMINAR NOTICEs Y WARNINGs
	//error_reporting(E_ERROR | E_WARNING | E_PARSE);

    //CONEXION
require_once('../../conexion/conexion.php');
mysqli_select_db($conexion, $database);

    //SESSIONES DE USUARIO
session_start();
if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){
	$pintar_usaurio = strtoupper($_SESSION['usuario']);
}else{
      //REDIRECION A INDEX Y EJECUTO EXIT
	header("Location: ../../index.php");
      //exit();
}

$folio  =$_POST['buscar'];
$accion =$_POST['accion'];
$mot 	  =$_POST['mot'];


if($accion=="Cancelar"){
	$query = "UPDATE `mutua402_mps`.`datos` SET `bit` = '1',`mot` = '$mot' WHERE `datos`.`folio` = '$folio'; ";
	$result = mysqli_query($conexion,$query);
	print_r($result);
}

if($accion=="Reactivar"){
	$query = "UPDATE `mutua402_mps`.`datos` SET `bit` = '0' ,`mot` = '$mot' WHERE `datos`.`folio` = '$folio'; ";
	$result = mysqli_query($conexion,$query);
	print_r($result);
}

//CABECERA DEL SITIO
$user=$_SESSION['type'];
$rootDir='../../';
$title="CANCELAR/REACTIVAR";
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