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

  <center><p style="color:black; font-family: Verdana; font-size:20;"style="font-family:Arial;" aling="center">GRUAS</p></center><br>

  


  <?php
  $query1 = "SELECT * FROM datos WHERE folio='$a'   ";   //WHERE  bit_estatus  <> '2'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";
  
  
  
  
  ?>
  
  <form id="form1" name="registrar" action="updategruas.php" method="post">
   


    <!--PINTAR LOS DATOS OBTENIDOS EN SELECT 2-->
    <center>
     
      <tr>
        <p align="right" style="color:#2962FF; font-family: Verdana;"><?php 
        error_reporting(0);
        $hoy= date("Y-m-d");
        echo $hoy;
        
        
      ?></p >
      
    </tr>
    <table style="border-collapse: collapse=2;" border="5"; width="auto">
      
      <thead>
        <tr>
          <p style="color:#2962FF; font-family: Arial;"></p>
        </tr>
      </thead>
      <tbody>
        <tr>
          
         
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Poliza:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Nombre:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Direccion:&nbsp;&nbsp;&nbsp;</div></td>
         
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Colonia:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Municipio:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Vehiculo:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Telefono:&nbsp;&nbsp;&nbsp;</div></td>
         
         
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Fecha:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Cobertura:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Placas:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Numero de Serie:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Numero de Motor:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Abono Mensual:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Vendedor:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Cobrador:&nbsp;&nbsp;&nbsp;</div></td>
         <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">A&ntilde;o de la Poliza:&nbsp;&nbsp;&nbsp;</div></td>
         
       </tr>
       
       
       <?php

       while( $row = $result1->fetch_assoc() ){
        ?>
        
      </div>
      
      <tr>
        
        
       <div align="center">
        
       </div>
       <td><div align="center">
         <input class="" type="text" name="folio" value="<?php echo $row['folio'] ?>" readonly/>
       </div></td> 
       <td><div align="center">
         <input class="" type="text" name="nombre" value="<?php echo $row['nombre'] ?>" readonly/>
       </div></td> 
       <td><div align="center">
         <input class="" type="text" size="70" name="domicilio"  value="<?php echo $row['domicilio']  ?>" readonly/>
       </div></td> 
       
       <td><div align="center">
         <input class="" type="text" name="col" value="<?php echo $row['col'] ?>"readonly/>
       </div></td> 
       <td><div align="center">
         <input class="" type="text" name="municipio" value="<?php echo $row['municipio'] ?>" readonly/>
       </div></td> 
       <td ><div align="center">
         <input class="" type="text" name="tipo" value="<?php echo $row['tipo'] ?>" readonly/>
       </div></td>
       <td><div align="center">
         <input class="" type="text" name="tel" value="<?php echo $row['tel'] ?>" readonly/>
       </div></td>
       
       <td><div align="center">
         <input class="" type="text" name="expedicion" value="<?php echo $row['expedicion'] ?>" readonly/>
       </div></td>
       <td><div align="center">
         <select class="" type="text" name="cobertura" value="<?php echo $row['cobertura'] ?>" readonly/>
           <option><?php echo $row['cobertura'] ?></option>
         </div></td>
         <td><div align="center">
           <input class="" type="text" name="placas" value="<?php echo $row['placas'] ?>" readonly/>
         </div></td>
         <td><div align="center">
           <input class="" type="text" name="serie" size="40" value="<?php echo $row['serie'] ?>" readonly/>
         </div></td>
         <td><div align="center">
           <input class="" type="text" name="nmotor" size="40" value="<?php echo $row['nmotor'] ?>" readonly/>
         </div></td>
         <td><div align="center">
           <input class="" type="text" name="pagomensual" value="<?php echo $row['pagomensual'] ?>" readonly/>
         </div></td>
         <td><div align="center">
           <input class="" type="text" name="vendedor" size="40" value="<?php echo $row['vendedor'] ?>" readonly/>
         </div></td>
         
         <td><div align="center">
           <input class="" type="text" name="cobrador"   size="40" value="<?php echo $row['cobrador'] ?>" readonly/>
         </div></td>
         <td><div align="center">
           <input class="" type="text" name="ano2" value="<?php echo $row['ano2'] ?>" readonly/>
         </div></td>
         
         
       </tr>


       
       <?php
     }
     ?>

     <?php
  $query1 = "SELECT * FROM datos WHERE folio='$a'   ";   //WHERE  bit_estatus  <> '2'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";
  
  ?>
  
  


  <table border=1>
    <thead>
      <tr>
        <p style="color:#2962FF; font-family: Verdana;"></p>
      </tr>
    </thead>
    <tbody>
      <tr>
        
       
       <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Grua 1:&nbsp;&nbsp;&nbsp;</div></td>
       <td style="color:#2962FF; font-family: Verdana; font-size:12;"><div align="center">Grua 2:&nbsp;&nbsp;&nbsp;</div></td>
       
     </tr>
     
     <?php

     while( $row = $result1->fetch_assoc() ){
      ?>
      
    </div>
    
    
    
    <tr>
      
      
     <div align="center">
      
      
      <?php
      if($row['com1']==""){
        
        ?>
        
        <td><div align="center">
         <input style="width:200px; height:150px"  type="text"   name="com1" value="" />
       </div></td> 
       <?php
     }else {
      
      ?>
      
      <td><div align="center"> 
       <input style="width:200px; height:150px"  type="text"   name="com1" value="<?php echo $row['com1'] ?>"  readonly/>
     </div></td> 
     
     <?php
   }
   
   if($row['com2']==""){
    
    ?>
    
    <td><div align="center">
     <input style="width:200px; height:150px" type="text" name="com2" value="" />
   </div></td> 
 </div></td> 
 <?php
}else {
  
  ?>
  <td><div align="center">
   <input style="width:200px; height:150px" type="text" name="com2" value="<?php echo $row['com2'] ?>"  readonly/>
 </div></td> 
 <?php
}

?>

</tr>



<?php
}
?>









</form>

<br><br><br><br>
<input style="position:absolute; top: 800px ; left: 1100px" type="submit" value="GUARDAR CAMBIOS" />

</body>

</html>
