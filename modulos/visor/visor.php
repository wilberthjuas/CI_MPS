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
  $b = $_POST['tipo'];
 
?> 
<html>
<html><link rel="shortcut icon" href="../../logop.png"/>
<head><title>Mutualidad MPS</title></head>
<link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">
<body>

 

  <!--Cabecera-->
   
	<!--Cabecera-->
    
  	<!--Cabecera-->


	

<div style="position:absolute; top:100px; left:100px"><img src="../../logop.png" width="150" height="150"></div>
<div style="position:absolute; top:900px; left:400px"><img src="../../logop.png" width="153" height="150"></div>

<body>


       <?php

          if($b=="Folio"){
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
                  <p style="color:#2962FF; font-family: Arial; position:absolute; top:120px ;left:400px">CONTRATO DE POLIZA VEHICULAR</p>
                </tr>
              </thead>
              <tbody>
                <tr><p style="color:#2962FF; font-family: Arial; position:absolute; top:220px ;left:400px">INFORMACION DEL ASEGURADO</p>
                <td style="color:#2962FF; font-family: Arial; font-size:18; position:absolute; top:150px ;left:460px; border:0.0px">STATUS:&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:150px ;left:800px; border:0.0px">Poliza:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:250px ;left:100px; border:0.0px">Nombre:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12;position:absolute; top:270px ;left:100px; border:0.0px">Direccion:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12;position:absolute; top:270px ;left:440px; border:0.0px">Exterior:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12;position:absolute; top:290px ;left:100px; border:0.0px">Colonia&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:310px ;left:100px; border:0.0px">Codigo Postal:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12 ;position:absolute; top:270px ;left:550px; border:0.0px">Municipio:&nbsp;&nbsp;&nbsp;</td>
                 
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:290px ;left:550px; border:0.0px">Telefono:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:290px ;left:730px; border:0.0px">Telefono2:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:310px ;left:550px; border:0.0px">DomCom:&nbsp;&nbsp;&nbsp;</td>
                  
                 <p style="color:#2962FF; font-family: Arial; position:absolute; top:350px ;left:400px">Datos del Vehiculo Asegurado</p>
                  
        
                   <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:380px ;left:100px; border:0.0px">Marca:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:400px ;left:100px; border:0.0px">Placas:&nbsp;&nbsp;&nbsp;</td>
                     <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:420px ;left:100px; border:0.0px">Motor:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:380px ;left:400px; border:0.0px">Tipo:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:400px ;left:400px; border:0.0px">Version:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:380px ;left:600px; border:0.0px">A&ntilde;o:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:400px ;left:600px; border:0.0px">Serie:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:380px ;left:750px; border:0.0px">Color:&nbsp;&nbsp;&nbsp;</td>
                    
                    <p style="color:#2962FF; font-family: Arial; position:absolute; top:450px ;left:400px">Datos Generales</p>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:480px ;left:100px; border:0.0px">Expedicion:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:480px ;left:400px; border:0.0px">Vigencia:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:480px ;left:600px; border:0.0px">Cobertura:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:550px ;left:100px; border:0.0px">Cobertura Desglose:&nbsp;&nbsp;&nbsp;</td>
                  
                  <p style="color:#2962FF; font-family: Arial; position:absolute; top:810px ;left:450px">Costo Total</p>
                  
                 
                 
                    

                </tr>

                <div align="center">
                  <?php

      while( $row = $result1->fetch_assoc() ){
		  
		  $vendedor=$row['vendedor'];
		   $cobertura=$row['cobertura'];
?>
                  
                </div><br>
                <tr>
                    
                 <td style="position:absolute; top:170px ;left:810px; border:0.0px"><?php echo $row['folio'] ?></td>
                 
                 <td style="position:absolute; top:170px ;left:470px; border:0.0px"><?php if ($row['bit']==0){
                     
                     echo "Activa";
                 }else {
                     
                     echo"Cancelada";
                 }
                 
                 
                 
                 ?></td>
                 <td style="position:absolute; top:250px ;left:200px; border:0.0px ; "><?php echo $row['nombre'] ?></td>
                 <td style="position:absolute; top:270px ;left:200px; border:0.0px ;" ><?php echo $row['domicilio'] ?></td>
                 <td style="position:absolute; top:270px ;left:505px; border:0.0px ;" ><?php echo $row['exterior'] ?></td>
                 <td style="position:absolute; top:290px ;left:200px; border:0.0px ; "><?php echo $row['col'] ?></td>
                 <td style="position:absolute; top:310px ;left:200px; border:0.0px ; "><?php echo $row['cp'] ?></td>
                 <td style="position:absolute; top:270px ;left:620px; border:0.0px"><?php echo $row['municipio'] ?></td>
                  <td style="position:absolute; top:290px ;left:620px; border:0.0px"><?php echo $row['tel'] ?></td>
                  <td style="position:absolute; top:290px ;left:800px; border:0.0px"><?php echo $row['tel2'] ?></td>
                 <td style="position:absolute; top:310px ;left:620px; border:0.0px"><?php echo $row['domcom'] ?></td>
                 
                 <td style="position:absolute; top:380px ;left:200px; border:0.0px"><?php echo $row['marca'] ?></td>
                 <td style="position:absolute; top:400px ;left:200px; border:0.0px"><?php echo $row['placas'] ?></td>
                 <td style="position:absolute; top:420px ;left:200px; border:0.0px"><?php echo $row['nmotor'] ?></td>
                 
                 <td style="position:absolute; top:380px ;left:500px; border:0.0px"><?php echo $row['tipo'] ?></td>
                 <td style="position:absolute; top:400px ;left:500px; border:0.0px"><?php echo $row['version'] ?></td>
                 
                 <td style="position:absolute; top:380px ;left:650px; border:0.0px"><?php echo $row['ano'] ?></td>
                 <td style="position:absolute; top:400px ;left:650px; border:0.0px"><?php echo $row['serie'] ?></td>
                 
                 <td style="position:absolute; top:380px ;left:800px; border:0.0px"><?php echo $row['color'] ?></td>
                
                 <td style="position:absolute; top:480px ;left:200px; border:0.0px"><?php echo $row['expedicion'] ?></td>
                 
                 <td style="position:absolute; top:610px ;left:250px; border:0.0px; width:500px"><?php echo $row['rca'] ?></td>
                 <td style="position:absolute; top:630px ;left:250px; border:0.0px; width:500px"><?php echo $row['robo']?></td>
                 <td style="position:absolute; top:650px ;left:250px; border:0.0px; width:500px"><?php echo $row['dano']?></td>
                 <td style="position:absolute; top:670px ;left:250px; border:0.0px; width:500px"><?php echo $row['gastos'] ?></td>
                 <td style="position:absolute; top:690px ;left:250px; border:0.0px; width:500px"><?php echo $row['med'] ?></td>
                 <td style="position:absolute; top:710px ;left:250px; border:0.0px; width:500px"><?php echo $row['asis'] ?></td>
                 <td style="position:absolute; top:730px ;left:250px; border:0.0px; width:500px"><?php echo $row['cristal'] ?></td>
                 <td style="position:absolute; top:750px ;left:250px; border:0.0px; width:500px"><?php echo $row['vial'] ?></td>
                 <td style="position:absolute; top:790px ;left:250px; border:0.0px; width:500px"><?php echo $row['muerte'] ?></td>
                 <td style="position:absolute; top:480px ;left:500px; border:0.0px"><?php echo $row['vigencia'] ?></td>
                 <td style="position:absolute; top:480px ;left:700px; border:0.0px"><?php echo $row['cobertura'] ?></td>
                 
                 
                 <td style="position:absolute; top:830px ;left:365px; border:0.0px"><?php echo "$". $row['costo_total']."  (". $row['costo_letra'] ."  00/100 MXN)"  ?></td>
</tr>


                <div align="center">
                  <?php
				  
			
				  
				  
				  
				  
				  
				  

     }
		  }
		  ?>
	



 </div>
		 
		 
				  

<?php

          if($b=="Nombre"){
        ?>
 
  <?php

  $query1 = "SELECT * FROM datos   WHERE nombre='$a'   ";   //WHERE estatus='0'
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
                  <p style="color:#2962FF; font-family: Arial; position:absolute; top:120px ;left:400px">Contrato de Poliza Vehicular</p>
                </tr>
              </thead>
              <tbody>
                <tr><p style="color:#2962FF; font-family: Arial; position:absolute; top:220px ;left:400px">Informacion del Asegurado</p>
                   <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:150px ;left:800px; border:0.0px">Poliza:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:250px ;left:100px; border:0.0px">Nombre:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12;position:absolute; top:270px ;left:100px; border:0.0px">Direccion:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12;position:absolute; top:290px ;left:100px; border:0.0px">Colonia&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:310px ;left:100px; border:0.0px">Codigo Postal:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12 ;position:absolute; top:270px ;left:550px; border:0.0px">Municipio:&nbsp;&nbsp;&nbsp;</td>
                 
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:290px ;left:550px; border:0.0px">Telefono:&nbsp;&nbsp;&nbsp;</td>
                   <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:290px ;left:730px; border:0.0px">Telefono2:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:310px ;left:550px; border:0.0px">DomCom:&nbsp;&nbsp;&nbsp;</td>
                  
                 <p style="color:#2962FF; font-family: Arial; position:absolute; top:350px ;left:400px">Datos del Vehiculo Asegurado</p>
                  
        
                   <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:380px ;left:100px; border:0.0px">Marca:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:400px ;left:100px; border:0.0px">Placas:&nbsp;&nbsp;&nbsp;</td>
                     <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:420px ;left:100px; border:0.0px">Motor:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:380px ;left:400px; border:0.0px">Tipo:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:400px ;left:400px; border:0.0px">Version:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:380px ;left:600px; border:0.0px">A&ntilde;o:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:400px ;left:600px; border:0.0px">Serie:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:380px ;left:750px; border:0.0px">Color:&nbsp;&nbsp;&nbsp;</td>
                    
                    <p style="color:#2962FF; font-family: Arial; position:absolute; top:450px ;left:400px">Datos Generales</p>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:480px ;left:100px; border:0.0px">Expedicion:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:480px ;left:400px; border:0.0px">Vigencia:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:480px ;left:600px; border:0.0px">Cobertura:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:12; position:absolute; top:550px ;left:100px; border:0.0px">Cobertura Desglose:&nbsp;&nbsp;&nbsp;</td>
                  
                  <p style="color:#2962FF; font-family: Arial; position:absolute; top:810px ;left:450px">Costo Total</p>
                  
              
                    

                </tr>

                <div align="center">
                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
                </div><br>
                <tr>
                 <td style="position:absolute; top:170px ;left:810px; border:0.0px"><?php echo $row['folio'] ?></td>
                 <td style="position:absolute; top:250px ;left:200px; border:0.0px ; "><?php echo $row['nombre'] ?></td>
                 <td style="position:absolute; top:270px ;left:200px; border:0.0px ;" ><?php echo $row['domicilio'] ?></td>
                 <td style="position:absolute; top:290px ;left:200px; border:0.0px ; "><?php echo $row['col'] ?></td>
                 <td style="position:absolute; top:310px ;left:200px; border:0.0px ; "><?php echo $row['cp'] ?></td>
                 <td style="position:absolute; top:270px ;left:620px; border:0.0px"><?php echo $row['municipio'] ?></td>
                  <td style="position:absolute; top:290px ;left:620px; border:0.0px"><?php echo $row['tel'] ?></td>
                  <td style="position:absolute; top:290px ;left:800px; border:0.0px"><?php echo $row['tel2'] ?></td>
                 <td style="position:absolute; top:310px ;left:620px; border:0.0px"><?php echo $row['domcom'] ?></td>
                 
                 <td style="position:absolute; top:380px ;left:200px; border:0.0px"><?php echo $row['marca'] ?></td>
                 <td style="position:absolute; top:400px ;left:200px; border:0.0px"><?php echo $row['placas'] ?></td>
                 <td style="position:absolute; top:420px ;left:200px; border:0.0px"><?php echo $row['nmotor'] ?></td>
                 
                 <td style="position:absolute; top:380px ;left:500px; border:0.0px"><?php echo $row['tipo'] ?></td>
                 <td style="position:absolute; top:400px ;left:500px; border:0.0px"><?php echo $row['version'] ?></td>
                 
                 <td style="position:absolute; top:380px ;left:650px; border:0.0px"><?php echo $row['ano'] ?></td>
                 <td style="position:absolute; top:400px ;left:650px; border:0.0px"><?php echo $row['serie'] ?></td>
                 
                 <td style="position:absolute; top:380px ;left:800px; border:0.0px"><?php echo $row['color'] ?></td>
                
                 <td style="position:absolute; top:480px ;left:200px; border:0.0px"><?php echo $row['expedicion'] ?></td>
                 <td style="position:absolute; top:570px ;left:250px; border:0.0px; width:500px"><?php echo $row['desglose'] ?></td>
                 <td style="position:absolute; top:610px ;left:250px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL:  ". $row['asis'] ?></td>
                 <td style="position:absolute; top:630px ;left:250px; border:0.0px; width:500px"><?php echo "ROBO TOTAL:  ". $row['robo'] ?></td>
                 <td style="position:absolute; top:650px ;left:250px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES:  ". $row['dano'] ?></td>
                 <td style="position:absolute; top:670px ;left:250px; border:0.0px; width:500px"><?php echo "CRISTALES:  ". $row['cristal'] ?></td>
                 <td style="position:absolute; top:690px ;left:250px; border:0.0px; width:500px"><?php echo "R. C. A.:  ". $row['rca'] ?></td>
                 <td style="position:absolute; top:710px ;left:250px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS:  ". $row['gastos'] ?></td>
                 <td style="position:absolute; top:730px ;left:250px; border:0.0px; width:500px"><?php echo "GRUAS:  ". $row['grua'] ?></td>
                 
                 <td style="position:absolute; top:480px ;left:500px; border:0.0px"><?php echo $row['vigencia'] ?></td>
                 <td style="position:absolute; top:480px ;left:700px; border:0.0px"><?php echo $row['cobertura'] ?></td>
                 
                <td style="position:absolute; top:830px ;left:365px; border:0.0px"><?php echo "$". $row['costo_total']."  (". $row['costo_letra'] ."  00/100 MXN)"  ?></td>
</tr>


                <div align="center">
                  <?php

     }
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
              <table border=1 style="position:absolute; top:1100px; left:05px">
              <thead>
                <tr>
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
              <table border=1 style="position:absolute; top:1250px; left:05px">
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
                 <td><?php echo  $row['once']?> <br> <?php echo $row['folio11']?> <br><?php echo $row['cobra11']?> <br> <?php echo $row['monto10']?> <br> <?php echo $row['fech11'] ; ?> <br> <?php echo $row['re11']; ?></td>
                 
                </tr>


                <div align="center">
                  <?php

     }

?>

                </div>
</body>
</html>
