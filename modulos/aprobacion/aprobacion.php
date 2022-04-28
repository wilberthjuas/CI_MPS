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
    <!--Cabecera-->
 
 <img src="../../logop.png" width="232" height="220">

  <center><p style="color:black; font-family: Verdana; font-size:20;"style="font-family:Arial;" aling="center">ACTUALIZAR POLIZA</p></center><br>

  


<?php
  $query1 = "SELECT * FROM datos WHERE folio='$a'   ";   //WHERE  bit_estatus  <> '2'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";
  
 
  
   
  ?>
 
  <form id="form1" name="registrar" action="update.php" method="post">
   


<!--PINTAR LOS DATOS OBTENIDOS EN SELECT 2-->
            <center>
         
            <tr>
                  <p align="right" style="color:#2962FF; font-family: Verdana;"><?php 
				  error_reporting(0);
				  $hoy= date("Y-m-d");
				  echo $hoy;
				  
				  
				   ?></p>
    </tr>
              <table border=1>
    <thead>
                <tr>
                  <p style="color:#2962FF; font-family: Arial;"></p>
                </tr>
              </thead>
              <tbody style="width:auto">
                <tr>
                    
             
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Poliza:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Nombre:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Direccion:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Exterior:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Colonia:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Municipio:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Marca:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Vehiculo:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Año:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Version:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Telefono:&nbsp;&nbsp;&nbsp;</div></td>
               
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Fecha:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Vigencia:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Cobertura:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Placas:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Numero de Serie:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Numero de Motor:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Abono Mensual:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Vendedor:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Cobrador:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">A&ntilde;o de la Poliza:&nbsp;&nbsp;&nbsp;</div></td>
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Costo Total:&nbsp;&nbsp;&nbsp;</div></td>
              
                  <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Color:&nbsp;&nbsp;&nbsp;</div></td>
                   <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Plataforma:&nbsp;&nbsp;&nbsp;</div></td>
                   </tr>
                 
                   
                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
                </div>
                
                </tbody>
                    
                  <tbody style="width:auto">   
                <tr>
                
                          
                   <div align="center">
                    
                   </div>
                   <td><div align="center">
                     <input class="" type="text" name="folio" value="<?php echo $row['folio'] ?>" readonly/>
                   </div></td> 
                    <td><div align="center">
                     <input class="" type="text" name="nombre" value="<?php echo $row['nombre'] ?>" />
                   </div></td> 
                    <td><div align="center">
                     <input class="" type="text" size="70" name="domicilio"  value="<?php echo $row['domicilio']  ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" size="70" name="exterior"  value="<?php echo $row['exterior']  ?>" />
                   </div></td>
                    <td><div align="center">
                     <input class="" type="text" name="col" value="<?php echo $row['col'] ?>"/>
                   </div></td> 
                    <td><div align="center">
                     <input class="" type="text" name="municipio" value="<?php echo $row['municipio'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="marca" value="<?php echo $row['marca'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="tipo" value="<?php echo $row['tipo'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="ano" value="<?php echo $row['ano'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="version" value="<?php echo $row['version'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="tel" value="<?php echo $row['tel'] ?>" />
                   </div></td>
                  
                     <td><div align="center">
                     <input class="" type="text" name="expedicion" value="<?php echo $row['expedicion'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="vigencia" value="<?php echo $row['vigencia'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <select class="" type="text" name="cobertura" value="<?php echo $row['cobertura'] ?>" />
                     <option><?php echo $row['cobertura'] ?></option>
                    <option></option>
                       <option>MULTIPLATAFORMAS CD JUAREZ</option>
                       <option>COTIZACION PARTICULAR RC ECONOMICA CON GRUA</option>
                       <option>AMPLIA AUTOMOVIL PARTICULAR HASTA $50,000</option>
                       <option>VEHICULO PARTICULAR AMPLIA HASTA $60,000</option>
                       <option>AMPLIA AUTOMOVIL PARTICULAR HASTA $70,000</option>
                       <option>AMPLIA AUTOMOVIL PARTICULAR HASTA $80,000</option>
                       <option>POLIZA PARTICULAR AMPLIA 90 MIL</option>
                       <option>POLIZA PARTICULAR AMPLIA 100 MIL</option>
                       <option>POLIZA PARTICULAR AMPLIA 110 MIL</option>
                       <option>POLIZA PARTICULAR AMPLIA 120 MIL</option>
                       <option>POLIZA PARTICULAR AMPLIA 130 MIL</option>
                       <option>POLIZA PARTICULAR AMPLIA 140 MIL</option>
                       <option>TERCEROS CON GRUA PICKUP</option>
                       <option>AMPLIA PICKUP HASTA $50,000</option>
                       <option>AMPLIA PICKUP HASTA $60,000</option>
                       <option>AMPLIA PICKUP HASTA $70,000</option>
                       <option>AMPLIA PICKUP HASTA $80,000</option>
                       <option>AMPLIA PICKUP HASTA $90,000</option>
                       <option>AMPLIA PICKUP HASTA $100,000</option>
                       <option>AMPLIA PICKUP HASTA $110,000</option>
                       <option>AMPLIA PICKUP HASTA $120,000</option>
                       <option>AMPLIA PICKUP HASTA $130,000</option>
                       <option>AMPLIA PICKUP HASTA $140,000</option>
                       <option>AMPLIA MOTO</option>
                       <option>INTERMEDIA MOTO</option>
                       <option>TERCEROS MOTO</option>
                       <option>COTIZACION MULTIPLATAFORMAS PROMO JULIO 2021</option>
                       <option>COTIZACION POLIZA MULTIPLATAFORMAS 4 MILLONES EN RC</option>
                       <option>MULTIPLATAFORMAS ECONOMICA</option>
                     </select>
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="placas" value="<?php echo $row['placas'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="serie" size="40" value="<?php echo $row['serie'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="nmotor" size="40" value="<?php echo $row['nmotor'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="pagomensual" value="<?php echo $row['pagomensual'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="vendedor" size="40" value="<?php echo $row['vendedor'] ?>" />
                   </div></td>
                   
                   <td><div align="center">
                     <input class="" type="text" name="cobrador"   size="40" value="<?php echo $row['cobrador'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="ano2" value="<?php echo $row['ano2'] ?>" />
                   </div></td>
                   
                   <td><div align="center">
                     <input class="" type="text" name="costo_total" value="<?php echo $row['costo_total'] ?>" />
                   </div></td>
                  
                    <td><div align="center">
                     <input class="" type="text" name="color" value="<?php echo $row['color'] ?>" />
                   </div></td>
                   <td><div align="center">
                     <input class="" type="text" name="plataforma" value="<?php echo $row['plataforma'] ?>" />
                   </div></td>
                    
              
                </tr>
</tbody>

                <?php
	  }
?>
             
 </form>

<br><br><br><br>
  <input style="position:absolute; top: 800px ; left: 1100px" type="submit" value="GUARDAR CAMBIOS" />

</body>
 
  </html>
