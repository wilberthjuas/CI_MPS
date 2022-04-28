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
  
 
?>  
<html>
<html><link rel="shortcut icon" href="../../logop.png"/>
<head><title>Mutualidad MPS</title></head>
<link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">
<meta name="description" content="Quick search or Filter table using jQuery on the fly, dynamic search using jQuery and html table" />
<meta name="keywords" content="filter table, quick filter, html table, jQuery filter, jquery, jquery expression" />
<link rel="alternate" type="application/rss+xml" title="BLOGS@DiGiTSS RSS Feed" href="http://blogs.digitss.com/feed/" /> 
<link rel="alternate" type="application/atom+xml" title="BLOGS@DiGiTSS Atom Feed" href="http://blogs.digitss.com/feed/atom/" /> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
// When document is ready: this gets fired before body onload :)
$(document).ready(function(){
	// Write on keyup event of keyword input element
	$("#kwd_search").keyup(function(){
		// When value of the input is not blank
		if( $(this).val() != "")
		{
			// Show only matching TR, hide rest of them
			$("#my-table tbody>tr").hide();
			$("#my-table td:contains-ci('" + $(this).val() + "')").parent("tr").show();
		}
		else
		{
			// When there is no input or clean again, show everything back
			$("#my-table tbody>tr").show();
		}
	});
});
// jQuery expression for case-insensitive filter
$.extend($.expr[":"], 
{
    "contains-ci": function(elem, i, match, array) 
	{
		return (elem.textContent || elem.innerText || $(elem).text() || "").toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
	}
});

</script>
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

  $query1 = "SELECT * FROM datos  where  expedicion   ";   //WHERE estatus='0'
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
<br><br> BUSCAR: <input type="text" id="kwd_search" value=""  placeholder="Ingresa Placas Buscar"/>
                 <table id="my-table" border="1" style="border-collapse:collapse">
                </tr>
              <tbody>
                <tr><p style="color:#2962FF; font-family: Arial; "style="font-family:Arial;" aling="center">INFORMACION DELASEGURADO</p>
                   <td style="color:#2962FF; font-family: Arial; font-size:16;">POLIZA:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:16;">NOMBRE:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:16;">DIRECCION:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:16;">EXTERIOR:&nbsp;&nbsp;&nbsp;</td>
                 <td style="color:#2962FF; font-family: Arial; font-size:16;">TELEFONO:&nbsp;&nbsp;&nbsp;</td>
                 <td style="color:#2962FF; font-family: Arial; font-size:16;">MARCA:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:16; ">TIPO:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:16;">PLACAS:&nbsp;&nbsp;&nbsp;</td>
                     <td style="color:#2962FF; font-family: Arial; font-size:16;">SERIE:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:16;">AÑO:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:16;">EXPEDICION:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:16;">STATUS:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:16;">COMENTARIOS:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:16;">COBERTURA:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:16;">VENDEDOR:&nbsp;&nbsp;&nbsp;</td>
                  <td style="color:#2962FF; font-family: Arial; font-size:16;">MUNICIPIO:&nbsp;&nbsp;&nbsp;</td>
                 <td style="color:#2962FF; font-family: Arial; font-size:16;">COBRADOR:&nbsp;&nbsp;&nbsp;</td>
                    

                </tr>

                <div align="center">
                  <?php

      while( $row = $result1->fetch_assoc() ){
?>
                  
                </div><br>
                <tr>
                 <td><?php echo $row['folio'] ?></td>
                 <td><?php echo $row['nombre'] ?></td>
                 <td><?php echo $row['domicilio'] ?></td>
                 <td><?php echo $row['exterior'] ?></td>
                <td><?php echo $row['tel'] ?></td>
                 <td><?php echo $row['marca'] ?></td>
                 <td><?php echo $row['tipo'] ?></td>
                 <td><?php echo $row['placas'] ?></td>
                 <td><?php echo $row['serie'] ?></td>
                 <td><?php echo $row['ano'] ?></td>
                 <td><?php echo $row['expedicion'] ?></td>
                 <td><?php if ($row['bit']==0){
                     
                     echo "Activa";
                 }else {
                     
                     echo"Cancelada";
                 }
                 
                 
                 
                 ?></td>
                 <td><?php echo $row['mot'] ?></td>
                  <td><?php echo $row['cobertura'] ?></td>
                   <td><?php echo $row['vendedor'] ?></td>
                   <td><?php echo $row['municipio'] ?></td>
                   <td><?php echo $row['cobrador'] ?></td>
                 
                 
</tr>


                <div align="center">
                  <?php

     }

?>

 

 
                  
                </div>
</body>
</html>
