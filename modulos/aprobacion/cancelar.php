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
		
	 
	$folio=$_POST['buscar'];
	$accion=$_POST['accion'];
	$mot=$_POST['mot'];
	
			
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