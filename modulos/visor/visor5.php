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
    <?php
      //CABECERA DEL SITIO
      require_once('../../public/html/header.php');
    ?>

	<!--Cabecera-->
    
  	<!--Cabecera-->


<body>
   <form  name="tarjeta" action="../aprobacion/updatetarjeta.php" method="post">

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
         
        
     
                
                
                 
                    

            

                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
         <table border="0" bordercolor="#FFFFFF">
                <tr>
                 <td style="position:absolute; top:100px ; left:10px; font-family: 'Bodoni MT Condensed'; font-size:20;">NOMBRE: <?php echo $row['nombre'] ?> </td>
                 <td style="color:#000000; font-family:'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:100px ; left:350px">POLIZA: <?php echo $row['folio'] ?></td>
</tr>
                     <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:120px ; left:10px">DIRECCION: <?php echo $row['domicilio'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:120px ; left:280px"><?php echo $row['exterior'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:140px ; left:350px">FECHA: <?php echo $row['expedicion'] ?></td>
                  </tr>
                  <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:140px ; left:10px">CRUCES: <?php echo $row['entre'] ?></td>
                
                    <tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:160px ; left:10px">COLONIA: <?php echo $row['col'] ?></td>
                
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:180px ; left:10px">MUNICIPIO: <?php echo $row['municipio'] ?></td>
                
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:200px ; left:10px">COBERTURA: <?php echo $row['cobertura'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:160px ; left:350px">PLACAS: <?php echo $row['placas'] ?></td>
                

                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px; position:absolute; top:220px ; left:10px">VEHICULO: <?php echo $row['marca']   ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed';
                font-size:20;  border:0.0px; position:absolute; top:220px ;
                left:165px"> <?php echo $row['tipo']   ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed';
                font-size:20;  border:0.0px; position:absolute; top:220px ;
                left:245px"> <?php echo $row['color']   ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed';
                font-size:20;  border:0.0px; position:absolute; top:220px ;
                left:320px"> <?php echo $row['ano']   ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed';
                font-size:20; border:0.0px ; position:absolute; top:180px ; left:350px">ABONO M: <?php echo $row['pagomensual'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:240px ; left:10px">TELEFONO: <?php echo $row['tel'] ?></td>
                
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:240px ; left:150px">TELEFONO2: <?php echo $row['tel2'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:220px ; left:350px">VENDEDOR: <?php echo $row['vendedor'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000F; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:240px ; left:350px">COBRADOR: <?php echo $row['cobrador'] ?></td>
                
                   </tr>
                   
                   
                   <tr>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:20;  position:absolute; top:270px ; left:30px ; ">FECHA</td>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:20; position:absolute; top:270px ; left:120px ;  ">NOTA o COMENTARIO </td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:20; position:absolute; top:270px ; left:290px; ">ABONO</td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:20; position:absolute; top:270px ; left:400px;  ">SALDO</td>
                
                   </tr>
                   </table>
                   <table border="1">
                         <tr>
                      <input type="hidden" name="folio" value=" <?php echo $a ?>";</td>
                      
                <td style="position:absolute; top:290px ; left:10px; "><input type="text" name="fech12" value=" <?php echo $row['fech1'] ?>"></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:290px ; left:100px;   "><input type="text" name="uno" value="" readonly></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:290px ;  left:250px;    "><input type="text" name="monto1" value="<?php echo $row['monto1'] ?>"></td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:290px ; left:350px;  "><input   type="text" name="" value="" width=""></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:310px ; left:10px "><input type="text" name="fech2" value=" <?php echo date("Y-m-d",strtotime($row['fech1']."+ 1 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:310px ; left:100px;  "><input type="text" name="dos" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:310px ; left:250px; "><input type="text" name="monto2" value="<?php echo $row['monto2'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:310px ; left:350px;    "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:330px ; left:10px "><input type="text" name="fech3" value=" <?php echo date("Y-m-d",strtotime($row['fech1']."+ 2 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:330px ; left:100px;  "><input type="text" name="tres" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:330px ; left:250px; "><input type="text" name="monto3" value="<?php echo $row['monto3'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:330px ; left:350px;  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:350px ; left:10px"><input type="text" name="fech4" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 3 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:350px ; left:100px;  "><input type="text" name="cuatro" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;   position:absolute; top:350px ; left:250px;"><input type="text" name="monto4" value="<?php echo $row['monto4'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:350px ; left:350px;  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:370px ; left:10px"><input type="text" name="fech5" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 4 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:370px ; left:100px; "><input type="text" name="cinco" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:370px ; left:250px;  "><input type="text" name="monto5" value="<?php echo $row['monto5'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:370px ; left:350px;    "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:390px ; left:10px"><input type="text" name="fech6" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 5 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:390px ; left:100px;"><input type="text" name="seis" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:390px ; left:250px;  "><input type="text" name="monto6" value="<?php echo $row['monto6'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:390px ; left:350px;   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:410px ; left:10px"><input type="text" name="fech7" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 6 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:410px ; left:100px; "><input type="text" name="siete" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:410px ; left:250px; "><input type="text" name="monto7" value="<?php echo $row['monto7'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:410px ; left:350px;  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:430px ; left:10px"><input type="text" name="fech8" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 7 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:430px ; left:100px;  "><input type="text" name="ocho" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:430px ; left:250px;  "><input type="text" name="monto8" value="<?php echo $row['monto8'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:430px ; left:350px; "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:450px ; left:10px"><input type="text" name="fech9" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 8 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:450px ; left:100px; "><input type="text" name="nueve" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:450px ; left:250px;  "><input type="text" name="monto9" value="<?php echo $row['monto9'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:450px ; left:350px;   "><input type="text" name="" value="";</td></td>
                        </tr>
<tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:470px ; left:10px"><input type="text" name="fech10" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 9 month"));  ?>"; readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:470px ; left:100px; "><input type="text" name="diez" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:470px ; left:250px;  "><input type="text" name="monto10" value="<?php echo $row['monto10'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:470px ; left:350px;   "><input type="text" name="" value="";</td></td>
                        </tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:10px"><input type="text" name="fech11" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 10 month"));  ?>"; readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:100px; "><input type="text" name="once" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:490px ; left:250px;  "><input type="text" name="monto11" value="<?php echo $row['monto10'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:10px"><input type="text" name="fech11" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 11 month"));  ?>"; readonly</td>
                 <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:100px; "><input type="text" name="once" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:510px ; left:250px;  "><input type="text" name="monto11" value="<?php echo $row['monto10'] ?>";</td>
                
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:350px;   "><input type="text" name="" value="";</td></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:350px;   "><input type="text" name="" value="";</td></td>
                        </tr>
                
                      
                    
                          <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:24;  border:0.0px; position:absolute; top:530px ; left:10px;  ">GRACIAS POR SU CONFIANZA       TOTAL A PAGAR POLIZA<?php echo $row['costo_total'] ?></td>
            
                   
                        



<div align="center">
</table>
                  <?php

     
		  }
		  
		  
?>




  <?php

  $query1 = "SELECT * FROM datos   WHERE folio='$a'   ";   //WHERE estatus='0'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";

  ?>

            <center>

                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
         <table border="0" bordercolor="#FFFFFF">
                <tr>
                 <td style="position:absolute; top:100px ; left:610px; font-family: 'Bodoni MT Condensed'; font-size:20;">NOMBRE: <?php echo $row['nombre'] ?> </td>
                 <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:100px ; left:930px">POLIZA: <?php echo $row['folio'] ?></td>
</tr>
                     <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:120px ; left:610px">DIRECCION: <?php echo $row['domicilio'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:120px ; left:870px"><?php echo $row['exterior'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:140px ; left:930px">FECHA: <?php echo $row['expedicion'] ?></td>
                  </tr>
                   <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:140px ; left:610px">CRUCES: <?php echo $row['entre'] ?></td>
                
                    <tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:160px ; left:610px">COLONIA: <?php echo $row['col'] ?></td>
                
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:180px ; left:610px">MUNICIPIO: <?php echo $row['municipio'] ?></td>
                
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:200px ; left:610px">COBERTURA: <?php echo $row['cobertura'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:160px ; left:930px">PLACAS: <?php echo $row['placas'] ?></td>
                

                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px; position:absolute; top:220px ; left:610px">VEHICULO: <?php echo $row['marca']   ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed';
                font-size:20;  border:0.0px; position:absolute; top:220px ;
                left:755px"><?php echo $row['tipo']   ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed';
                font-size:20;  border:0.0px; position:absolute; top:220px ;
                left:825px"><?php echo $row['color']   ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed';
                font-size:20;  border:0.0px; position:absolute; top:220px ;
                left:900px"><?php echo $row['ano']   ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:180px ; left:930px">ABONO M: <?php echo $row['pagomensual'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:240px ; left:610px">TELEFONO: <?php echo $row['tel'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20;  border:0.0px ; position:absolute; top:240px ; left:760px">TELEFONO2: <?php echo $row['tel2'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:220px ; left:930px">VENDEDOR: <?php echo $row['vendedor'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000F; font-family: 'Bodoni MT Condensed'; font-size:20; border:0.0px ; position:absolute; top:240px ; left:930px">COBRADOR: <?php echo $row['cobrador'] ?></td>
                
                   </tr>
                   
                   
                   <tr>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:20;  position:absolute; top:270px ; left:630px ; ">FECHA</td>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:20; position:absolute; top:270px ; left:720px ;  ">NOTA o COMENTARIO</td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:20; position:absolute; top:270px ; left:875px; ">ABONO</td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:20; position:absolute; top:270px ; left:1000px;  ">SALDO</td>
                
                   </tr>
                    </table>
                    <table border="1">
                         <tr>
                      <input type="hidden" name="folio" value=" <?php echo $a ?>";</td>
                      
                <td style="position:absolute; top:290px ; left:610px; width:155px"><input type="text" name="fech1" value=" <?php echo $row['fech1'] ?>"></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:290px ; left:700px;width:200px; height:200px  "><input type="text" name="uno" value="" readonly></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:290px ; left:850px;   "><input type="text" name="monto1" value="<?php echo $row['monto1'] ?>"></td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:290px ; left:950px;   "><input  type="text" name="" value="" width=""></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:310px ; left:610px "><input type="text" name="fech2" value=" <?php echo date("Y-m-d",strtotime($row['fech1']."+ 1 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:310px ; left:700px;  "><input type="text" name="dos" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:310px ; left:850px;  "><input type="text" name="monto2" value="<?php echo $row['monto2'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:310px ; left:950px;    "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:330px ; left:610px "><input type="text" name="fech3" value=" <?php echo date("Y-m-d",strtotime($row['fech1']."+ 2 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:330px ; left:700px;  "><input type="text" name="tres" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:330px ; left:850px;   "><input type="text" name="monto3" value="<?php echo $row['monto3'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:330px ; left:950px;   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:350px ; left:610px"><input type="text" name="fech4" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 3 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:350px ; left:700px; "><input type="text" name="cuatro" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;   position:absolute; top:350px ; left:850px; "><input type="text" name="monto4" value="<?php echo $row['monto4'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:350px ; left:950px;   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:370px ; left:610px"><input type="text" name="fech5" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 4 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:370px ; left:700px; "><input type="text" name="cinco" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:370px ; left:850px;  "><input type="text" name="monto5" value="<?php echo $row['monto5'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:370px ; left:950px;    "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:390px ; left:610px"><input type="text" name="fech6" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 5 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:390px ; left:700px; "><input type="text" name="seis" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:390px ; left:850px;  "><input type="text" name="monto6" value="<?php echo $row['monto6'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:390px ; left:950px;   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:410px ; left:610px"><input type="text" name="fech7" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 6 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:410px ; left:700px;  "><input type="text" name="siete" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:410px ; left:850px; "><input type="text" name="monto7" value="<?php echo $row['monto7'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:410px ; left:950px;   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:430px ; left:610px"><input type="text" name="fech8" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 7 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:430px ; left:700px; "><input type="text" name="ocho" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:430px ; left:850px; "><input type="text" name="monto8" value="<?php echo $row['monto8'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size22;  position:absolute; top:430px ; left:950px;  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:450px ; left:610px"><input type="text" name="fech9" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 8 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;position:absolute; top:450px ; left:700px;  "><input type="text" name="nueve" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:450px ; left:850px; "><input type="text" name="monto9" value="<?php echo $row['monto9'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:450px ; left:950px;   "><input type="text" name="" value="";</td></td>
                        </tr>
<tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:470px ; left:610px"><input type="text" name="fech10" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 9 month"));  ?>"; readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:470px ; left:700px; "><input type="text" name="diez" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:470px ; left:850px;  "><input type="text" name="monto10" value="<?php echo $row['monto10'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:470px ; left:950px;   "><input type="text" name="" value="";</td></td>
                        </tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:610px"><input type="text" name="fech11" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 10 month"));  ?>"; readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:700px; "><input type="text" name="once" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:490px ; left:850px;  "><input type="text" name="monto11" value="<?php echo $row['monto10'] ?>";</td>
                 <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:700px; "><input type="text" name="once" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:490px ; left:850px;  "><input type="text" name="monto11" value="<?php echo $row['monto10'] ?>";</td>
                
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:950px;   "><input type="text" name="" value="";</td></td>
                
                 <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:610px"><input type="text" name="fech11" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 11 month"));  ?>"; readonly</td>
                 <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:700px; "><input type="text" name="once" value="";</td>
                 <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:510px ; left:850px;  "><input type="text" name="monto11" value="<?php echo $row['monto10'] ?>";</td>
                  <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:510px ; left:850px;  "><input type="text" name="monto11" value="<?php echo $row['monto10'] ?>";</td>
                   
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:950px;   "><input type="text" name="" value="";</td></td>
                 
                
                        </tr>
                
                    
                          <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:24;  border:0.0px; position:absolute; top:530px ; left:610px;  ">GRACIAS POR SU CONFIANZA       TOTAL A PAGAR POLIZA<?php echo $row['costo_total'] ?></td>
            
                   
                        
 </table>


<div align="center">
                  <?php

     
		  }
		  }
		  
?>
 
 
       <?php

          if($b=="Placas"){
        ?>
 
  <?php

  $query1 = "SELECT * FROM datos   WHERE placas='$a'   ";   //WHERE estatus='0'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";

  ?>
 


            

                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
         <table>
                <tr>
                 <td style="position:absolute; top:300px ; left:10px; font-family: 'Bodoni MT Condensed'; font-size:14;">NOMBRE: <?php echo $row['nombre'] ?> </td>
                 <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14; border:0.0px ; position:absolute; top:300px ; left:310px">POLIZA: <?php echo $row['folio'] ?></td>
</tr>
                     <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14;  border:0.0px ; position:absolute; top:320px ; left:10px">DIRECCION: <?php echo $row['domicilio'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14; border:0.0px ; position:absolute; top:320px ; left:290px">FECHA: <?php echo $row['expedicion'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14; border:0.0px ; position:absolute; top:340px ; left:10px">CRUCE: <?php echo $row['entre'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14; border:0.0px ; position:absolute; top:340px ; left:290px">ID.CLiente:;</td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14;  border:0.0px ; position:absolute; top:360px ; left:10px">COLONIA: <?php echo $row['col'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14; border:0.0px ; position:absolute; top:360px ; left:290px">COBERTURA: <?php echo $row['cobertura'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14;  border:0.0px ; position:absolute; top:380px ; left:10px">MUNICIPIO: <?php echo $row['municipio'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14; border:0.0px ; position:absolute; top:380px ; left:290px">PLACAS: <?php echo $row['placas'] ?></td>
                

                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14;  border:0.0px; position:absolute; top:400px ; left:10px">VEHICULO: <?php echo $row['marca']   ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14; border:0.0px ; position:absolute; top:400px ; left:290px">ABONO M: <?php echo $row['pagomensual'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14;  border:0.0px ; position:absolute; top:420px ; left:10px">TELEFONO: <?php echo $row['tel'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14; border:0.0px ; position:absolute; top:420px ; left:290px">VENDEDOR: <?php echo $row['vendedor'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14;  border:0.0px ; position:absolute; top:440px ; left:10px">DOM COM:<?php echo $row['domcom'] ?></td>
                <td style="color:#000000F; font-family: 'Bodoni MT Condensed'; font-size:14; border:0.0px ; position:absolute; top:440px ; left:290px">COBRADOR: <?php echo $row['cobrador'] ?></td>
                
                   </tr>
                   
                   
                   <tr>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:14;  position:absolute; top:470px ; left:10px ; ">FECHA:</td>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:14; position:absolute; top:470px ; left:100px ;  ">NOTA o COMENTARIO: </td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:14; position:absolute; top:470px ; left:280px; ">ABONO:</td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:14; position:absolute; top:470px ; left:440px;  ">SALDO:</td>
                
                   </tr>
                         <tr>
                      <input type="hidden" name="folio" value=" <?php echo $a ?>";</td>
                      
                <td style="position:absolute; top:490px ; left:10px; width:155px"><input type="text" name="fech1" value=" <?php echo $row['fech1'] ?>"></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:490px ; left:100px; "><input type="text" name="uno" value="" readonly></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:490px ; left:250px;   "><input type="text" name="monto1" value="<?php echo $row['monto1'] ?>"></td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:490px ; left:390px;   "><input  width="50%" type="text" name="" value="" width=""></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:510px ; left:10px "><input type="text" name="fech2" value=" <?php echo date("Y-m-d",strtotime($row['fech1']."+ 1 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:510px ; left:100px; width:160px "><input type="text" name="dos" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:510px ; left:250px; width:160px "><input type="text" name="monto2" value="<?php echo $row['monto2'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:510px ; left:390px; width:100px   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:530px ; left:10px "><input type="text" name="fech3" value=" <?php echo date("Y-m-d",strtotime($row['fech1']."+ 2 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:530px ; left:100px; width:160px "><input type="text" name="tres" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:530px ; left:250px; width:160px  "><input type="text" name="monto3" value="<?php echo $row['monto3'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:530px ; left:390px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:550px ; left:10px"><input type="text" name="fech4" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 3 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:550px ; left:100px; width:160px "><input type="text" name="cuatro" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;   position:absolute; top:550px ; left:250px; width:160px"><input type="text" name="monto4" value="<?php echo $row['monto4'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:550px ; left:390px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:570px ; left:10px"><input type="text" name="fech5" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 4 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:570px ; left:100px; width:160px"><input type="text" name="cinco" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:570px ; left:250px; width:160px "><input type="text" name="monto5" value="<?php echo $row['monto5'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:570px ; left:390px; width:100px   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:590px ; left:10px"><input type="text" name="fech6" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 5 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:590px ; left:100px; width:160px"><input type="text" name="seis" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:590px ; left:250px; width:160px "><input type="text" name="monto6" value="<?php echo $row['monto6'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:590px ; left:390px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:610px ; left:10px"><input type="text" name="fech7" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 6 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:610px ; left:100px; width:160px "><input type="text" name="siete" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:610px ; left:250px; width:160px "><input type="text" name="monto7" value="<?php echo $row['monto7'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:610px ; left:390px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:630px ; left:10px"><input type="text" name="fech8" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 7 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:630px ; left:100px; width:160px "><input type="text" name="ocho" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:630px ; left:250px; width:160px "><input type="text" name="monto8" value="<?php echo $row['monto8'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:630px ; left:390px; width:100px "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:650px ; left:10px"><input type="text" name="fech9" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 8 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:650px ; left:100px; width:160px "><input type="text" name="nueve" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:650px ; left:250px; width:160px "><input type="text" name="monto9" value="<?php echo $row['monto9'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:650px ; left:390px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
<tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:670px ; left:10px"><input type="text" name="fech10" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 9 month"));  ?>"; readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:670px ; left:100px; width:160px"><input type="text" name="diez" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:670px ; left:250px; width:160px "><input type="text" name="monto10" value="<?php echo $row['monto10'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:670px ; left:390px; width:100px  "><input type="text" name="" value="";</td></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:100px; "><input type="text" name="once" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:490px ; left:250px;  "><input type="text" name="monto11" value="<?php echo $row['monto10'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:350px;   "><input type="text" name="" value="";</td></td>
                        </tr>
               
                        
                        
                          <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14;  border:0.0px; position:absolute; top:690px ; left:10px;  ">Gracias por su preferencia  Total a Pagar Poliza : <?php echo $row['costo_total'] ?></td>
            
                   
                        



<div align="center">
                  <?php

     
		  }
		  
		  
?>




  <?php

  $query1 = "SELECT * FROM datos   WHERE placas='$a'   ";   //WHERE estatus='0'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";

  ?>

            <center>

                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
         <table>
                <tr>
                 <td style="position:absolute; top:300px ; left:610px; font-family: 'Bodoni MT Condensed'; font-size:10;">NOMBRE: <?php echo $row['nombre'] ?> </td>
                 <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:300px ; left:915px">POLIZA: <?php echo $row['folio'] ?></td>
</tr>
                     <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:320px ; left:610px">DIRECCION: <?php echo $row['domicilio'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:320px ; left:915px">FECHA: <?php echo $row['expedicion'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:340px ; left:610px">CRUCE: <?php echo $row['entre'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:340px ; left:915px">ID.CLiente:;</td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:360px ; left:610px">COLONIA: <?php echo $row['col'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:360px ; left:915px">COBERTURA: <?php echo $row['cobertura'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:380px ; left:610px">MUNICIPIO: <?php echo $row['municipio'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:380px ; left:915px">PLACAS: <?php echo $row['placas'] ?></td>
                

                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px; position:absolute; top:400px ; left:610px">VEHICULO: <?php echo $row['marca']   ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:400px ; left:915px">ABONO M: <?php echo $row['pagomensual'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:420px ; left:610px">TELEFONO: <?php echo $row['tel'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:420px ; left:915px">VENDEDOR: <?php echo $row['vendedor'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:440px ; left:610px">DOM COM:<?php echo $row['domcom'] ?></td>
                <td style="color:#000000F; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:440px ; left:915px">COBRADOR: <?php echo $row['cobrador'] ?></td>
                
                   </tr>
                   
                   
                   <tr>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:470px ; left:610px ; ">FECHA:</td>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:470px ; left:700px ;  ">NOTA o COMENTARIO: </td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:470px ; left:880px; ">ABONO:</td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:470px ; left:1020px;  ">SALDO:</td>
                
                   </tr>
                         <tr>
                      <input type="hidden" name="folio" value=" <?php echo $a ?>";</td>
                      
                <td style="position:absolute; top:490px ; left:610px; width:155px"><input type="text" name="fech1" value=" <?php echo $row['fech1'] ?>"></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:490px ; left:700px; "><input type="text" name="uno" value="" readonly></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:490px ; left:850px;   "><input type="text" name="monto1" value="<?php echo $row['monto1'] ?>"></td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:490px ; left:990px;   "><input  width="50%" type="text" name="" value="" width=""></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:510px ; left:610px "><input type="text" name="fech2" value=" <?php echo date("Y-m-d",strtotime($row['fech1']."+ 1 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:510px ; left:700px; width:160px "><input type="text" name="dos" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:510px ; left:850px; width:160px "><input type="text" name="monto2" value="<?php echo $row['monto2'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:510px ; left:990px; width:100px   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:530px ; left:610px "><input type="text" name="fech3" value=" <?php echo date("Y-m-d",strtotime($row['fech1']."+ 2 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:530px ; left:700px; width:160px "><input type="text" name="tres" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:530px ; left:850px; width:160px  "><input type="text" name="monto3" value="<?php echo $row['monto3'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:530px ; left:990px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:550px ; left:610px"><input type="text" name="fech4" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 3 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:550px ; left:700px; width:160px "><input type="text" name="cuatro" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;   position:absolute; top:550px ; left:850px; width:160px"><input type="text" name="monto4" value="<?php echo $row['monto4'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:550px ; left:990px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:570px ; left:610px"><input type="text" name="fech5" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 4 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:570px ; left:700px; width:160px"><input type="text" name="cinco" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:570px ; left:850px; width:160px "><input type="text" name="monto5" value="<?php echo $row['monto5'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:570px ; left:990px; width:100px   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:590px ; left:610px"><input type="text" name="fech6" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 5 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:590px ; left:700px; width:160px"><input type="text" name="seis" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:590px ; left:850px; width:160px "><input type="text" name="monto6" value="<?php echo $row['monto6'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:590px ; left:990px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:610px ; left:610px"><input type="text" name="fech7" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 6 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:610px ; left:700px; width:160px "><input type="text" name="siete" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:610px ; left:850px; width:160px "><input type="text" name="monto7" value="<?php echo $row['monto7'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:610px ; left:990px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:630px ; left:610px"><input type="text" name="fech8" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 7 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:630px ; left:700px; width:160px "><input type="text" name="ocho" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:630px ; left:850px; width:160px "><input type="text" name="monto8" value="<?php echo $row['monto8'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:630px ; left:990px; width:100px "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:650px ; left:610px"><input type="text" name="fech9" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 8 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:650px ; left:700px; width:160px "><input type="text" name="nueve" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:650px ; left:850px; width:160px "><input type="text" name="monto9" value="<?php echo $row['monto9'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:650px ; left:990px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
<tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:670px ; left:610px"><input type="text" name="fech10" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 9 month"));  ?>"; readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:670px ; left:700px; width:160px"><input type="text" name="diez" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:670px ; left:850px; width:160px "><input type="text" name="monto10" value="<?php echo $row['monto10'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:670px ; left:990px; width:100px  "><input type="text" name="" value="";</td></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:100px; "><input type="text" name="once" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:490px ; left:250px;  "><input type="text" name="monto11" value="<?php echo $row['monto10'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:350px;   "><input type="text" name="" value="";</td></td>
                        </tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:10px"><input type="text" name="fech11" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 11 month"));  ?>"; readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:100px; "><input type="text" name="doce" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:510px ; left:250px;  "><input type="text" name="monto12" value="<?php echo $row['monto10'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:510px ; left:350px;   "><input type="text" name="" value="";</td></td>
                        </tr>
                        
                        
                       
                      
                    
                          <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14;  border:0.0px; position:absolute; top:690px ; left:610px;  ">Gracias por su preferencia  Total a Pagar Poliza : <?php echo $row['costo_total'] ?></td>
            
                   
                        



<div align="center">
                  <?php

     
		  }
		  
		  }
?>

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
         
        
     
                
                
                 
                    

            

                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
         <table>
                <tr>
                 <td style="position:absolute; top:300px ; left:10px; font-family: 'Bodoni MT Condensed'; font-size:10;">NOMBRE: <?php echo $row['nombre'] ?> </td>
                 <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:300px ; left:290px">POLIZA: <?php echo $row['folio'] ?></td>
</tr>
                     <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:320px ; left:10px">DIRECCION: <?php echo $row['domicilio'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:320px ; left:290px">FECHA: <?php echo $row['expedicion'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:340px ; left:10px">CRUCE: <?php echo $row['entre'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:340px ; left:290px">ID.CLiente:;</td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:360px ; left:10px">COLONIA: <?php echo $row['col'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:360px ; left:290px">COBERTURA: <?php echo $row['cobertura'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:380px ; left:10px">MUNICIPIO: <?php echo $row['municipio'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:380px ; left:290px">PLACAS: <?php echo $row['placas'] ?></td>
                

                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px; position:absolute; top:400px ; left:10px">VEHICULO: <?php echo $row['marca']   ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:400px ; left:290px">ABONO M: <?php echo $row['pagomensual'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:420px ; left:10px">TELEFONO: <?php echo $row['tel'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:420px ; left:290px">VENDEDOR: <?php echo $row['vendedor'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:440px ; left:10px">DOM COM:<?php echo $row['domcom'] ?></td>
                <td style="color:#000000F; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:440px ; left:310px">COBRADOR: <?php echo $row['cobrador'] ?></td>
                
                   </tr>
                   
                   
                   <tr>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:470px ; left:10px ; ">FECHA:</td>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:470px ; left:100px ;  ">NOTA o COMENTARIO: </td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:470px ; left:280px; ">ABONO:</td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:470px ; left:420px;  ">SALDO:</td>
                
                   </tr>
                         <tr>
                      <input type="hidden" name="folio" value=" <?php echo $a ?>";</td>
                      
                <td style="position:absolute; top:490px ; left:10px; width:155px"><input type="text" name="fech1" value=" <?php echo $row['fech1'] ?>"></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:490px ; left:100px; "><input type="text" name="uno" value="" readonly></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:490px ; left:250px;   "><input type="text" name="monto1" value="<?php echo $row['monto1'] ?>"></td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:490px ; left:390px;   "><input  width="50%" type="text" name="" value="" width=""></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:510px ; left:10px "><input type="text" name="fech2" value=" <?php echo date("Y-m-d",strtotime($row['fech1']."+ 1 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:510px ; left:100px; width:160px "><input type="text" name="dos" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:510px ; left:250px; width:160px "><input type="text" name="monto2" value="<?php echo $row['monto2'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:510px ; left:390px; width:100px   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:530px ; left:10px "><input type="text" name="fech3" value=" <?php echo date("Y-m-d",strtotime($row['fech1']."+ 2 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:530px ; left:100px; width:160px "><input type="text" name="tres" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:530px ; left:250px; width:160px  "><input type="text" name="monto3" value="<?php echo $row['monto3'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:530px ; left:390px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:550px ; left:10px"><input type="text" name="fech4" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 3 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:550px ; left:100px; width:160px "><input type="text" name="cuatro" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;   position:absolute; top:550px ; left:250px; width:160px"><input type="text" name="monto4" value="<?php echo $row['monto4'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:550px ; left:390px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:570px ; left:10px"><input type="text" name="fech5" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 4 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:570px ; left:100px; width:160px"><input type="text" name="cinco" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:570px ; left:250px; width:160px "><input type="text" name="monto5" value="<?php echo $row['monto5'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:570px ; left:390px; width:100px   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:590px ; left:10px"><input type="text" name="fech6" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 5 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:590px ; left:100px; width:160px"><input type="text" name="seis" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:590px ; left:250px; width:160px "><input type="text" name="monto6" value="<?php echo $row['monto6'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:590px ; left:390px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:610px ; left:10px"><input type="text" name="fech7" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 6 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:610px ; left:100px; width:160px "><input type="text" name="siete" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:610px ; left:250px; width:160px "><input type="text" name="monto7" value="<?php echo $row['monto7'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:610px ; left:390px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:630px ; left:10px"><input type="text" name="fech8" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 7 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:630px ; left:100px; width:160px "><input type="text" name="ocho" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:630px ; left:250px; width:160px "><input type="text" name="monto8" value="<?php echo $row['monto8'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:630px ; left:390px; width:100px "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:650px ; left:10px"><input type="text" name="fech9" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 8 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:650px ; left:100px; width:160px "><input type="text" name="nueve" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:650px ; left:250px; width:160px "><input type="text" name="monto9" value="<?php echo $row['monto9'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:650px ; left:390px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
<tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:670px ; left:10px"><input type="text" name="fech10" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 9 month"));  ?>"; readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:670px ; left:100px; width:160px"><input type="text" name="diez" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:670px ; left:250px; width:160px "><input type="text" name="monto10" value="<?php echo $row['monto10'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:670px ; left:390px; width:100px  "><input type="text" name="" value="";</td></td>
                     <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:100px; "><input type="text" name="once" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:490px ; left:250px;  "><input type="text" name="monto11" value="<?php echo $row['monto10'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:350px;   "><input type="text" name="" value="";</td></td>
                        </tr>
                
                    
                          <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14;  border:0.0px; position:absolute; top:690px ; left:10px;  ">Gracias por su preferencia  Total a Pagar Poliza : <?php echo $row['costo_total'] ?></td>
            
                   
                        



<div align="center">
                  <?php

     
		  }
		  
		  
?>




  <?php

  $query1 = "SELECT * FROM datos   WHERE nombre='$a'   ";   //WHERE estatus='0'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";

  ?>

            <center>

                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
         <table>
                <tr>
                 <td style="position:absolute; top:300px ; left:610px; font-family: 'Bodoni MT Condensed'; font-size:10;">NOMBRE: <?php echo $row['nombre'] ?> </td>
                 <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:300px ; left:910px">POLIZA: <?php echo $row['folio'] ?></td>
</tr>
                     <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:320px ; left:610px">DIRECCION: <?php echo $row['domicilio'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:320px ; left:910px">FECHA: <?php echo $row['expedicion'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:340px ; left:610px">CRUCE: <?php echo $row['entre'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:340px ; left:910px">ID.CLiente:;</td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:360px ; left:610px">COLONIA: <?php echo $row['col'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:360px ; left:910px">COBERTURA: <?php echo $row['cobertura'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:380px ; left:610px">MUNICIPIO: <?php echo $row['municipio'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:380px ; left:910px">PLACAS: <?php echo $row['placas'] ?></td>
                

                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px; position:absolute; top:400px ; left:610px">VEHICULO: <?php echo $row['marca']   ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:400px ; left:910px">ABONO M: <?php echo $row['pagomensual'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:420px ; left:610px">TELEFONO: <?php echo $row['tel'] ?></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:420px ; left:910px">VENDEDOR: <?php echo $row['vendedor'] ?></td>
                  </tr>
                    <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  border:0.0px ; position:absolute; top:440px ; left:610px">DOM COM:<?php echo $row['domcom'] ?></td>
                <td style="color:#000000F; font-family: 'Bodoni MT Condensed'; font-size:10; border:0.0px ; position:absolute; top:440px ; left:910px">COBRADOR: <?php echo $row['cobrador'] ?></td>
                
                   </tr>
                   
                   
                   <tr>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:470px ; left:610px ; ">FECHA:</td>
                <td style="font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:470px ; left:700px ;  ">NOTA o COMENTARIO: </td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:470px ; left:880px; ">ABONO:</td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:470px ; left:1020px;  ">SALDO:</td>
                
                   </tr>
                         <tr>
                      <input type="hidden" name="folio" value=" <?php echo $a ?>";</td>
                      
                <td style="position:absolute; top:490px ; left:610px; width:155px"><input type="text" name="fech1" value=" <?php echo $row['fech1'] ?>"></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:490px ; left:700px; "><input type="text" name="uno" value="" readonly></td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:490px ; left:850px;   "><input type="text" name="monto1" value="<?php echo $row['monto1'] ?>"></td>
                <td style=" font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:490px ; left:990px;   "><input  width="50%" type="text" name="" value="" width=""></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:510px ; left:610px "><input type="text" name="fech2" value=" <?php echo date("Y-m-d",strtotime($row['fech1']."+ 1 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:510px ; left:700px; width:160px "><input type="text" name="dos" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:510px ; left:850px; width:160px "><input type="text" name="monto2" value="<?php echo $row['monto2'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:510px ; left:990px; width:100px   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:530px ; left:610px "><input type="text" name="fech3" value=" <?php echo date("Y-m-d",strtotime($row['fech1']."+ 2 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:530px ; left:700px; width:160px "><input type="text" name="tres" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:530px ; left:850px; width:160px  "><input type="text" name="monto3" value="<?php echo $row['monto3'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:530px ; left:990px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:550px ; left:610px"><input type="text" name="fech4" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 3 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:550px ; left:700px; width:160px "><input type="text" name="cuatro" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;   position:absolute; top:550px ; left:850px; width:160px"><input type="text" name="monto4" value="<?php echo $row['monto4'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:550px ; left:990px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:570px ; left:610px"><input type="text" name="fech5" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 4 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:570px ; left:700px; width:160px"><input type="text" name="cinco" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:570px ; left:850px; width:160px "><input type="text" name="monto5" value="<?php echo $row['monto5'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:570px ; left:990px; width:100px   "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:590px ; left:610px"><input type="text" name="fech6" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 5 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:590px ; left:700px; width:160px"><input type="text" name="seis" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:590px ; left:850px; width:160px "><input type="text" name="monto6" value="<?php echo $row['monto6'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:590px ; left:990px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:610px ; left:610px"><input type="text" name="fech7" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 6 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:610px ; left:700px; width:160px "><input type="text" name="siete" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:610px ; left:850px; width:160px "><input type="text" name="monto7" value="<?php echo $row['monto7'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:610px ; left:990px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:630px ; left:610px"><input type="text" name="fech8" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 7 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:630px ; left:700px; width:160px "><input type="text" name="ocho" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:630px ; left:850px; width:160px "><input type="text" name="monto8" value="<?php echo $row['monto8'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:630px ; left:990px; width:100px "><input type="text" name="" value="";</td></td>
                        </tr>
                        <tr>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:650px ; left:610px"><input type="text" name="fech9" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 8 month"));  ?>";readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;position:absolute; top:650px ; left:700px; width:160px "><input type="text" name="nueve" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:650px ; left:850px; width:160px "><input type="text" name="monto9" value="<?php echo $row['monto9'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:650px ; left:990px; width:100px  "><input type="text" name="" value="";</td></td>
                        </tr>
<tr>
               <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:670px ; left:610px"><input type="text" name="fech10" value="<?php echo date("Y-m-d",strtotime($row['fech1']."+ 9 month"));  ?>"; readonly</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:670px ; left:700px; width:160px"><input type="text" name="diez" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10;  position:absolute; top:670px ; left:850px; width:160px "><input type="text" name="monto10" value="<?php echo $row['monto10'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:10; position:absolute; top:670px ; left:990px; width:100px  "><input type="text" name="" value="";</td></td>
                     <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:100px; "><input type="text" name="once" value="";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22;  position:absolute; top:490px ; left:250px;  "><input type="text" name="monto11" value="<?php echo $row['monto10'] ?>";</td>
                <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:22; position:absolute; top:490px ; left:350px;   "><input type="text" name="" value="";</td></td>
                        </tr>
               
                    
                          <td style="color:#000000; font-family: 'Bodoni MT Condensed'; font-size:14;  border:0.0px; position:absolute; top:690px ; left:610px;  ">Gracias por su preferencia  Total a Pagar Poliza : <?php echo $row['costo_total'] ?></td>
            
                   
                        



<div align="center">
                  <?php

     
		  }
		  
		  }
?>
 
 
 
</form>

<br><br><br><br>
  <input class="botom"  style="position:absolute; top: 300px ; left: 1250px; width:200px ";  type="submit" value="GUARDAR CAMBIOS" />
 
             
                </div>
</body>
</html>
