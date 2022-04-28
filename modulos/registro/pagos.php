<?php
	//ERROR REPORTIN PARA ELIMINAR NOTICEs Y WARNINGs
	//error_reporting(E_ERROR | E_WARNING | E_PARSE);

    //CONEXION
	date_default_timezone_set('America/Mexico_City');
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
		
$pag=$_POST['pag'];
$fol=$_POST['fol'];
$cob=$_POST['cob'];	
$a=$_POST['folio'];
$mon=$_POST['mon'];	
$fec=date("Y-m-d");
$re=$_POST['re'];


  $query1 =  "SELECT * FROM datos   WHERE folio='$a'   ";   //WHERE  bit_estatus  <> '2'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";
  
  while( $row = $result1->fetch_assoc() ){
  
   $uno=$row['uno'];
   $dos=$row['dos'];
   $tres=$row['tres'];
   $cuatro=$row['cuatro'];
   $cinco=$row['cinco'];
   $seis=$row['seis'];
   $siete=$row['siete'];
   $ocho=$row['ocho'];
   $nueve=$row['nueve'];
   $diez=$row['diez'];
   $once=$row['once'];
   
  }

   
		
if($uno=="Pendiente" or $uno==""){
	
		$query = "UPDATE `mutua402_mps`.`datos` SET `uno` = '$pag' ,`cobra1` = '$cob',`folio1` = '$fol',`monto1` = '$mon',`fech1` = '$fec',`re1` = '$re'  WHERE `datos`.`folio` = '$a'; ";
					$result = mysqli_query($conexion,$query);
	}
	
	elseif(($dos=="Pendiente" or $dos=="") and $uno=="Pagado"){
		$query = "UPDATE `mutua402_mps`.`datos` SET `dos` = '$pag' ,`cobra2` = '$cob',`folio2` = '$fol',`monto2` = '$mon',`fech2` = '$fec',`re2` = '$re'  WHERE `datos`.`folio` = '$a'; ";
					$result = mysqli_query($conexion,$query);
	
	}
	elseif(($tres=="Pendiente" or $tres=="") and $dos=="Pagado"){
		$query = "UPDATE `mutua402_mps`.`datos` SET `tres` = '$pag' ,`cobra3` = '$cob',`folio3` = '$fol' ,`monto3` = '$mon',`fech3` = '$fec'  ,`re3` = '$re'WHERE `datos`.`folio` = '$a'; ";
					$result = mysqli_query($conexion,$query);
	
	}
	elseif(($cuatro=="Pendiente" or $cuatro=="") and $tres=="Pagado"){
		$query = "UPDATE `mutua402_mps`.`datos` SET `cuatro` = '$pag' ,`cobra4` = '$cob',`folio4` = '$fol' ,`monto4` = '$mon',`fech4` = '$fec',`re4` = '$re' WHERE `datos`.`folio` = '$a'; ";
					$result = mysqli_query($conexion,$query);
	
	}
	elseif(($cinco=="Pendiente" or $cinco=="") and $cuatro=="Pagado"){
		$query = "UPDATE `mutua402_mps`.`datos` SET `cinco` = '$pag' ,`cobra5` = '$cob',`folio5` = '$fol' ,`monto5` = '$mon',`fech5` = '$fec' ,`re5` = '$re' WHERE `datos`.`folio` = '$a'; ";
					$result = mysqli_query($conexion,$query);
	
	}
	elseif(($seis=="Pendiente" or $seis=="") and $cinco=="Pagado"){
		$query = "UPDATE `mutua402_mps`.`datos` SET `seis` = '$pag' ,`cobra6` = '$cob',`folio6` = '$fol' ,`monto6` = '$mon',`fech6` = '$fec' ,`re6` = '$re' WHERE `datos`.`folio` = '$a'; ";
					$result = mysqli_query($conexion,$query);
	
	}
	elseif(($siete=="Pendiente" or $siete=="") and $seis=="Pagado"){
		$query = "UPDATE `mutua402_mps`.`datos` SET `siete` = '$pag' ,`cobra7` = '$cob',`folio7` = '$fol' ,`monto7` = '$mon',`fech7` = '$fec' ,`re7` = '$re' WHERE `datos`.`folio` = '$a'; ";
					$result = mysqli_query($conexion,$query);
	
	}
	elseif(($ocho=="Pendiente" or $ocho=="") and $siete=="Pagado"){
		$query = "UPDATE `mutua402_mps`.`datos` SET `ocho` = '$pag' ,`cobra8` = '$cob',`folio8` = '$fol' ,`monto8` = '$mon',`fech8` = '$fec' ,`re8` = '$re' WHERE `datos`.`folio` = '$a'; ";
					$result = mysqli_query($conexion,$query);
	
	}
	elseif(($nueve=="Pendiente" or $nueve=="") and $ocho=="Pagado"){
		$query = "UPDATE `mutua402_mps`.`datos` SET `nueve` = '$pag' ,`cobra9` = '$cob',`folio9` = '$fol' ,`monto9` = '$mon',`fech9` = '$fec' ,`re9` = '$re' WHERE `datos`.`folio` = '$a'; ";
					$result = mysqli_query($conexion,$query);
	
	}
	elseif(($diez=="Pendiente" or $diez=="") and $nueve=="Pagado"){
		$query = "UPDATE `mutua402_mps`.`datos` SET `diez` = '$pag' ,`cobra10` = '$cob',`folio10` = '$fol' ,`monto10` = '$mon',`fech10` = '$fec' ,`re10` = '$re' WHERE `datos`.`folio` = '$a'; ";
					$result = mysqli_query($conexion,$query);
	
	}
	elseif(($once=="Pendiente" or $once=="") and $diez=="Pagado"){
		$query = "UPDATE `mutua402_mps`.`datos` SET `once` = '$pag' ,`cobra11` = '$cob',`folio11` = '$fol' ,`monto11` = '$mon',`fech11` = '$fec' ,`re11` = '$re' WHERE `datos`.`folio` = '$a'; ";
					$result = mysqli_query($conexion,$query);
	
	}
	else {
	echo "No existe Opcio";	
	}

header("Location: correcto.php");


echo $pag;
echo $fol;
echo $cob;
echo $a;

?>