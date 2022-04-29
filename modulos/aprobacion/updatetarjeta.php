<?php
	error_reporting(E_ERROR | E_WARNING | E_PARSE);
  session_start();
  if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){
    $pintar_usaurio = strtoupper($_SESSION['usuario']);
  }else{
    header("Location: ../../index.php");
    exit();
  }
    //CONEXION
    require_once('../../conexion/conexion.php');
    mysqli_select_db($conexion, $database);
  
    
 		//NIVEL 1 ing
		$folio=$_POST['folio'];
		$fech1=$_POST['fech12'];
		$monto1=$_POST['monto1'];
		$monto2=$_POST['monto2'];
		$monto3=$_POST['monto3'];
    $monto4=$_POST['monto4'];
    $monto5=$_POST['monto5'];
	  $monto6=$_POST['monto6'];
	  $monto7=$_POST['monto7'];
	  $monto8=$_POST['monto8'];
		$monto9=$_POST['monto9'];
		$monto10=$_POST['monto10'];
		$monto11=$_POST['monto11'];
		
		$query = "UPDATE `mutua402_mps`.`datos` SET `fech1` = '$fech1',`monto1` = '$monto1' ,`monto2` = '$monto2' ,`monto3` = '$monto3' ,`monto4` = '$monto4' ,`monto5` = '$monto5' ,`monto6` = '$monto6' ,`monto7` = '$monto7' ,`monto8` = '$monto8' ,`monto9` = '$monto9' ,`monto10` = '$monto10', `monto11` = '$monto11' WHERE `datos`.`folio` = '$folio'; ";
	
					
					
		$result = mysqli_query($conexion,$query);
		print_r($result);

	//CABECERA DEL SITIO
$user=$_SESSION['type'];
$rootDir='../../';
$title="TARJETA";
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