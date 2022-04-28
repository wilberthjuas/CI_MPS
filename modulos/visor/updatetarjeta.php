<?php
	//ERROR REPORTIN PARA ELIMINAR NOTICEs Y WARNINGs
	//error_reporting(E_ERROR | E_WARNING | E_PARSE);

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
	
 $fech1=$_POST['fech1'];
 $fech2=$_POST['fech2'];
 $fech3=$_POST['fech3'];
 $fech4=$_POST['fech4'];
 $fech5=$_POST['fech5'];
 $fech6=$_POST['fech6'];
 $fech7=$_POST['fech7'];
 $fech8=$_POST['fech8'];
 $fech9=$_POST['fech9'];
 $fech10=$_POST['fech10'];
 $fech11=$_POST['fech11'];
 
 $uno=$_POST['uno'];
 $dos=$_POST['dos'];
 $tres=$_POST['tres'];
 $cuatro=$_POST['cuatro'];
 $cinco=$_POST['cinco'];
 $seis=$_POST['seis'];
 $siete=$_POST['siete'];
 $ocho=$_POST['ocho'];
 $nueve=$_POST['nueve'];
 $diez=$_POST['diez'];
 $once=$_POST['once'];
 
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
 

					echo "<br>";
					echo "<br>";
					
					
					$query = "UPDATE `mutua402_mps`.`datos` SET `fech1` = '$fech1', `fech2` = '$fech2' , `fech3` = '$fech3' , `fech4` = '$fech4' , `fech5` = '$fech5' , `fech6` = '$fech6' , `fech7` = '$fech7' , `fech8` = '$fech8' , `fech9` = '$fech9' , `fech10` = '$fech10' , `fech11` = '$fech11' , `uno` = '$uno' , `dos` = '$dos' , `tres` = '$tres' , `cuatro` = '$cuatro' , `cinco` = '$cinco' , `seis` = '$seis' , `siete` = '$siete' , `ocho` = '$ocho' , `nueve` = '$nueve' , `diez` = '$diez' , `once` = '$once' , `monto1` = '$monto1' , `monto2` = '$monto2' , `monto3` = '$monto3' , `monto4` = '$monto4' , `monto5` = '$monto5' , `monto6` = '$monto6' , `monto7` = '$monto7' , `monto8` = '$monto8' , `monto9` = '$monto9' , `monto10` = '$monto10', `monto11` = '$monto11' WHERE `datos`.`folio` = '$folio'; ";
	
					
					
					$result = mysqli_query($conexion,$query);
					print_r($result);

	



?>
	<div class="espacio-header"></div>
<link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">
	<form id="form1" name="registrar" action="../../inicio.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-4 push-4">
				<div class="panel">
				<div class="row">
					<br>
					<div class="col-10 push-1"><p class="titulo-form">REGISTRO EXITOSO</p></div>

				</div>
					<div class="row">
						<br><br>
						<div class="col-6 push-5"><input  class="botom" type="submit" value="REGRESAR" /></div>
					</div>
					<br><br>

				</div>
			</div>

		</div>
	</div><!--Fin container-->
	</form>
	
</body>
</html>