<?php
  
header("Content-Type: application/xls");    	
header("Content-Disposition: attachment; filename=documento_exportado_" .date('Y:m:d:m:s').".xls");
header("Pragma: no-cache"); 
header("Expires: 0");
 
?>  
<html>
<html><link rel="shortcut icon" href="../../logop.png"/>
<head><title>Mutualidad MPS</title></head>
<body>

<!--PINTAR LOS DATOS OBTENIDOS EN SELECT 2-->
  
  <table border=1>
    <tbody>
      <tr>
        <p style="color:#2962FF; font-family: Arial; "style="font-family:Arial;" aling="center">INFORMACION DELASEGURADO</p>
         <td style="color:#2962FF; font-family: Arial; font-size:16;">POLIZA:&nbsp;&nbsp;&nbsp;</td>
         <td style="color:#2962FF; font-family: Arial; font-size:16;">COSTO:&nbsp;&nbsp;&nbsp;</td>
         <td style="color:#2962FF; font-family: Arial; font-size:16;">1ER PAGO:&nbsp;&nbsp;&nbsp;</td>
         <td style="color:#2962FF; font-family: Arial; font-size:16;">PLACAS:&nbsp;&nbsp;&nbsp;</td>
         <td style="color:#2962FF; font-family: Arial; font-size:16;">11 MENSUALIDADES:&nbsp;&nbsp;&nbsp;</td>
         <td style="color:#2962FF; font-family: Arial; font-size:16;">VENDEDOR:&nbsp;&nbsp;&nbsp;</td>
      </tr>
      <?php
        while( $row = $result1->fetch_assoc() ){
      ?>
      <tr>
        <td><?php echo $row['folio'] ?></td>
        <td><?php echo $row['costo_total'] ?></td>
        <td><?php echo $row['pagoinicial'] ?></td>
        <td><?php echo $row['placas'] ?></td>
        <td><?php echo $row['plazo'] ?></td>
        <td><?php echo $row['vendedor'] ?></td>
      </tr>
      <?php
        }
      ?>

</body>
</html>