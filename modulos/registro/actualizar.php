<?php
  error_reporting(E_ERROR | E_WARNING | E_PARSE);
  session_start();
  if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){

  }else{
    header("Location: ../../index.php");
    exit();
  }
  //CONEXION
  require_once('../../conexion/conexion.php');
  mysqli_select_db($conexion, $database);
  $a = $_POST['buscar'];

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


	<div class="container">
		<div class="row">
			<div class="col-1 push-5">
				<p></p>
			</div>
		</div>
	</div><!--Fin container-->
	<br><br>


<body>


  <?php

  $query1 = "SELECT * FROM datos   WHERE folio='$a'   ";   //WHERE estatus='0'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";

  ?>
 
  
   


<!--PINTAR LOS DATOS OBTENIDOS EN SELECT 2-->
            <center>
         
            <tr>
                  <p align="right" style="color:#2962FF; font-family: Arial;"><?php 
				  error_reporting(0);
				  $hoy= date("Y-m-d");
				  echo $hoy;
				  
				  
				   ?></p>
                </tr>
              <table border=1>
              <thead>
                <tr>
                  <p style="color:#2962FF; font-family: Verdana;"style="font-family:Arial;" aling="center">DATOS DE POLIZA</p>
                </tr>
              </thead>
              <tbody>
                  <td style="color:#2962FF; font-family: Verdana; font-size:18;">STATUS:&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;">POLIZA:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">NOMBRE:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">DIRECCION:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">EXTERIOR:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">CRUCE&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">COLONIA:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">MUNICIPIO:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">VEHICULO:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">TELEFONO:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">DOMCOM:&nbsp;&nbsp;&nbsp;</td>
                 
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">FECHA:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">COBERTURA:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">PLACAS:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">ABONO MENSUAL:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">VENDEDOR:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">COBRADOR:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;">A&ntilde;O POLIZA:&nbsp;&nbsp;&nbsp;</td>
                   
                  
                  
                    

                </tr>

                <div align="center">
                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
                </div>
                <tr>
                    <td><?php if ($row['bit']==0){
                     
                     echo "Activa";
                 }else {
                     
                     echo"Cancelada";
                 }
                 
                 
                 
                 ?></td>
                 <td><?php echo $row['folio'] ?></td>
                 <td><?php echo $row['nombre'] ?></td>
                 <td><?php echo $row['domicilio'] ?></td>
                 <td><?php echo $row['exterior'] ?></td>
                 <td><?php echo $row['entre'] ?></td>
                 <td><?php echo $row['col'] ?></td>
                 <td><?php echo $row['municipio'] ?></td>
                 <td><?php echo $row['tipo'] ?></td>
                 <td><?php echo $row['tel2'] ?></td>
                 <td><?php echo $row['domcom'] ?></td>
                
                 <td><?php echo $row['expedicion'] ?></td>
                 <td><?php echo $row['cobertura'] ?></td>
                 <td><?php echo $row['placas'] ?></td>
                 <td><?php echo $row['pagomensual'] ?></td>
                 <td><?php echo $row['vendedor'] ?></td>
                 <td><?php echo $row['cobrador'] ?></td>
                 <td><?php echo $row['ano2'] ?></td>
                 
                </tr>


                <div align="center">
                  <?php

     }

?>

  <?php

  $query1 = "SELECT * FROM datos   WHERE folio='$a'   ";   //WHERE estatus='0'
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
                <tr>
                  <p style="color:#2962FF; font-family: Verdana;"style="font-family:Arial;" aling="center">PAGOS</p>
                </tr>
              </thead>
              <tbody>
                <tr>
                   
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;">UNO/FOLIO/COBRADOR/MONTO/FECHA/RECIBO&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;">DOS/FOLIO/COBRADOR/MONTO/FECHA/RECIBO&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;">TRES/FOLIO/COBRADOR/MONTO/FECHA/RECIBO&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;">CUATRO/FOLIO/COBRADOR/MONTO/FECHA/RECIBO&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;">CINCO/FOLIO/COBRADOR/MONTO/FECHA/RECIBO&nbsp;&nbsp;&nbsp;</td>
                 
             
                  
                    
                   
                   
                  
                 
                    

                </tr>

                <div align="center">
                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
                </div>
                <tr>
                 <td><?php echo  $row['uno'] ?> <br> <?php echo $row['folio1']?> <br><?php echo $row['cobra1']?> <br> <?php echo $row['monto1']?> <br> <?php echo $row['fech1'] ; ?><br> <?php echo $row['re1']; ?></td>
                 <td><?php echo  $row['dos']?> <br> <?php echo $row['folio2']?> <br><?php echo $row['cobra2'] ?> <br> <?php echo $row['monto2']?> <br> <?php echo $row['fech2']; ?><br> <?php echo $row['re2'];  ?></td>
                 <td><?php echo  $row['tres']?> <br> <?php echo $row['folio3']?> <br><?php echo $row['cobra3']?> <br> <?php echo $row['monto3']?> <br> <?php echo $row['fech3'] ; ?><br> <?php echo $row['re3']; ?></td>
                 <td><?php echo  $row['cuatro']?> <br> <?php echo $row['folio4']?> <br><?php echo $row['cobra4']?> <br> <?php echo  $row['monto4']?> <br> <?php echo $row['fech4'] ; ?><br> <?php echo $row['re4']; ?></td>
                 <td><?php echo  $row['cinco']?> <br> <?php echo $row['folio5']?> <br><?php echo $row['cobra5'] ?> <br> <?php echo $row['monto5']?> <br> <?php echo $row['fech5']; ?><br> <?php echo $row['re5']; ?></td>
                 
       
                </tr>


                <div align="center">
                  <?php

     }

?>


<?php

  $query1 = "SELECT * FROM datos   WHERE folio='$a'   ";   //WHERE estatus='0'
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
                <tr>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                   
                 
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;">SEIS/FOLIO/COBRADOR/MONTO/FECHA/RECIBO&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;">SIETE/FOLIO/COBRADOR/MONTO/FECHA/RECIBO&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;">OCHO/FOLIO/COBRADOR/MONTO/FECHA/RECIBO&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;">NUEVE/FOLIO/COBRADOR/MONTO/FECHA/RECIBO&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;">DIEZ/FOLIO/COBRADOR/MONTO/FECHA/RECIBO&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;">ONCE/FOLIO/COBRADOR/MONTO/FECHA/RECIBO&nbsp;&nbsp;&nbsp;</td>
             
                  
                    
                   
                   
                  
                 
                    

                </tr>

                <div align="center">
                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
                </div>
                <tr>
                
                 <td><?php echo  $row['seis']?> <br> <?php echo $row['folio6']?> <br><?php echo $row['cobra6'] ?> <br> <?php echo $row['monto6']?> <br> <?php echo $row['fech6']; ?> <br> <?php echo $row['re6']; ?></td>
                 <td><?php echo  $row['siete']?> <br> <?php echo $row['folio7']?> <br><?php echo $row['cobra7']?> <br> <?php echo $row['monto7']?> <br> <?php echo $row['fech7'] ; ?> <br> <?php echo $row['re7']; ?></td>
                 <td><?php echo  $row['ocho']?> <br> <?php echo $row['folio8']?> <br><?php echo $row['cobra8'] ?> <br> <?php echo $row['monto8']?> <br> <?php echo $row['fech8']; ?> <br> <?php echo $row['re8']; ?></td>
                 <td><?php echo  $row['nueve']?> <br> <?php echo $row['folio9']?> <br><?php echo $row['cobra9']?> <br> <?php echo $row['monto9']?> <br> <?php echo $row['fech9'] ; ?> <br> <?php echo $row['re9']; ?></td>
                 <td><?php echo  $row['diez']?> <br> <?php echo $row['folio10']?> <br><?php echo $row['cobra10']?> <br> <?php echo $row['monto10']?> <br> <?php echo $row['fech10'] ; ?> <br> <?php echo $row['re10']; ?></td>
                 <td><?php echo  $row['once']?> <br> <?php echo $row['folio11']?> <br><?php echo $row['cobra11']?> <br> <?php echo $row['monto11']?> <br> <?php echo $row['fech11'] ; ?> <br> <?php echo $row['re11']; ?></td>
                 
                </tr>


                <div align="center">
                  <?php

     }

?>








<?php
  $query1 =  "SELECT * FROM datos   WHERE folio='$a'   ";   //WHERE  bit_estatus  <> '2'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";
  
 
  
   
  ?>
 
  <form id="form1" name="registrar" action="pagos.php" method="post">
   


<!--PINTAR LOS DATOS OBTENIDOS EN SELECT 2-->
            <center>
         
            <tr>
                  <p align="right" style="color:#2962FF; font-family: Verdana;"><?php 
				  error_reporting(0);
                ?></p>
    </tr>
              <table border=1>
    <thead>
                <tr><br><br><br><br>
                 
                </tr>
              </thead>
              <tbody>
                <tr>
                    
                  
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">PAGO</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">FOLIO</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">COBRADOR</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">MONTO</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">FECHA DE RECIBO</div></td>
                  
             

             
               </tr>

                <div align="center">
                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
                </div>
                
                
                <tr>
                
                          
                   <div align="center">
                    
                   </div>
                   
                  
                   <td><div align="center">
                 
                   
                     <select   type="text" name="pag" />
                     <option></option>
                     <option>Pagado</option>
                     </select>
                     </td>
                     <td>
                     <input  type="text" name="fol" placeholder="INGRESE FOLIO DE COBRO"   />
                     </td>
                      <td><input  type="text" name="cob" placeholder="INGRESE COBRADOR"   />
                      
                        </td>
                   </div>
                   <td>
                   <input  type="text" name="mon" placeholder="Ingrese Monto"   />
                   </td>
                    
                    <td>
                   <input  type="date" name="re"    />
                   </td>
           
                    <input  type="hidden" name="folio" value="<?php echo $a; ?> " readonly />
                  

               
                 </tr>
                 
   
                  <?php

     }

?>
         
                </div>
             
<br><br><br>
<div style="position:absolute; top:1050px; left:550px; h">  <input class="botom" type="submit" value="GUARDAR CAMBIOS" />
                  
   </form><br>                
                  
                  
                </div>
</body>
</html>
