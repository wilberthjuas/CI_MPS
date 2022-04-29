<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  session_start();
  if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){

  }else{
    header("Location: ../../index.php");
    exit();
  }
  	//	header ("Content-type: application/vnd.ms-excel");
 // header ("Content-Disposition : attachment;
         //  filename=Mutual.xls");
         
         header("Content-Type: application/xls");    
	
header("Content-Disposition: attachment; filename=documento_exportado_" .date('Y:m:d:m:s').".xls");
header("Pragma: no-cache"); 
header("Expires: 0");
 
  //CONEXION
  require_once('../../conexion/conexion.php');
  mysqli_select_db($conexion, $database);
  $a = $_POST['buscar1'];
  $b = $_POST['buscar2'];
  
 
 
?>  
<html>
<html><link rel="shortcut icon" href="../../logop.png"/>
<head><title>Mutualidad MPS</title></head>
<link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">
 

<body>



  <!--Cabecera-->
    <?php
      //CABECERA DEL SITIO
      require_once('../../public/html/header.php');
    ?>
 <img src="../../logop.png" width="232" height="220">
	<!--Cabecera-->
    
  	<!--Cabecera-->


	



<body>


  <?php

  $query1 = "SELECT * FROM datos  where  expedicion BETWEEN '$a' and '$b'   ";   //WHERE estatus='0'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";

  ?>
 
  
   


<!--PINTAR LOS DATOS OBTENIDOS EN SELECT 2-->
            <center>
         
            <tr>
                  <p align="right" style="color:#2962FF; font-family: Arial;"><?php 
				  error_reporting(0);
				  $hoy= date("Y-m-d");
			
				  
				  
				   ?></p>
                </tr>
              <table border=1>
              <thead>
               
              </thead>
              <tr>

                </tr>
              <tbody>
                <tr><p style="color:#2962FF; font-family: Arial; "style="font-family:Arial;" aling="center">INFORMACION DELASEGURADO</p>
                   <td style="color:#2962FF; font-family: Arial; font-size:16;">POLIZA:&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Arial; font-size:16;">COSTO:&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Arial; font-size:16;">1ER PAGO:&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Arial; font-size:16;">PLACAS:&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Arial; font-size:16;">11 MENSUALIDADES:&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Arial; font-size:16;">VENDEDOR:&nbsp;&nbsp;&nbsp;</td>
               
                    

                </tr>

                <div align="center">
                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
                </div><br>
                <tr>
                 <td><?php echo $row['folio'] ?></td>
                 <td><?php echo $row['costo_total'] ?></td>
                 <td><?php echo $row['pagoinicial'] ?></td>
                 <td><?php echo $row['placas'] ?></td>
                 <td><?php echo $row['plazo'] ?></td>
                 <td><?php echo $row['vendedor'] ?></td>
 
                 
                 
</tr>


                <div align="center">
                  <?php

     }

?>

 

 
                  
                </div>
</body>
</html>
