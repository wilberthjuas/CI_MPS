<?php
	//ERROR REPORTIN PARA ELIMINAR NOTICEs Y WARNINGs
	//error_reporting(E_ERROR | E_WARNING | E_PARSE);
	error_reporting(0);

    //CONEXION
    require_once('../../conexion/conexion.php');
    mysqli_select_db($conexion, $database);
  
    //SESSIONES DE USUARIO
    session_start();
    if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){

    }else{
      //REDIRECION A INDEX Y EJECUTO EXIT
      header("Location: ../../index.php");
      //exit();
    }
 
 		//NIVEL 1 ing
		
	 
	$folio=$_POST['folio'];

	$com1=$_POST['com1'];
	$com2=$_POST['com2'];
	$query = "UPDATE `mutua402_mps`.`datos` SET `com1` = '$com1',`com2` = '$com2'  
					WHERE `datos`.`folio` = '$folio'; ";
			
	$result = mysqli_query($conexion,$query);
	print_r($result);

//CABECERA DEL SITIO
  $user=$_SESSION['type'];
  $rootDir='../../';
  $title="GRUAS";
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