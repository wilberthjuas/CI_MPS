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
<!--
<script type="text/javascript">
function imprimir() {
if (window.print) {
window.print();
} else {
alert("La función de impresion no esta soportada por su navegador.");
}
}
</script> -->
<html>
<html><link rel="shortcut icon" href="../../logop.png"/>
<head><title>Mutualidad MPS</title></head>
<link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">
<body onLoad="imprimir();">
<!--Cabecera-->
<!--Cabecera-->
<!--Cabecera-->
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
<p align="right" style="color:#2962FF; font-family: Arial;"><?php 
				  error_reporting(0);
				  $hoy= date("Y-m-d");
				   ?></p>
<table border=1>
<thead>
<div align="left"><img src="../../logop.png" width="200" height="200"></div>
<tr>
<p style=" font-family: Arial; font-size:32px; position:absolute; top:65px ;left:195px">MUTUAL DE MULTIPLATAFORMAS Y SIMILARES</p>
</tr>
</thead>
<tbody>
<tr>
<td style="position:absolute; top:100px ;left:680px; border:0.0px; background:#F00; font-size:28px;">CONTRATO-POLIZA</td>
<td style="position:absolute; top:180px ;left:30px; border:0.0px; width:920px ; background:#F00; font-size:28px;"><div align="center">POLIZA</div></td>
<td style="position:absolute; top:225px ;left:50px; border:0.0px; "><div align="center">FECHA INICIO</div></td>
<td style="position:absolute; top:250px ;left:50px; border:0.0px; "><div align="center">FECHA FINAL</div></td>
<td style="position:absolute; top:225px ;left:680px; border:0.0px; "><div align="center">PAGO INICIAL</div></td>
<td style="position:absolute; top:250px ;left:700px; border:0.0px; "><div align="center">PAGOS</div></td>
<td style="position:absolute; top:280px ;left:30px; border:0.0px; width:920px ; background:#F00; font-size:28px;"><div align="center">DATOS DEL VEHICULO</div></td>
<td style="position:absolute; top:320px ;left:50px; border:0.0px; "><div align="center">MARCA</div></td>
<td style="position:absolute; top:350px ;left:50px; border:0.0px; "><div align="center">TIPO</div></td>
<td style="position:absolute; top:380px ;left:50px; border:0.0px; "><div align="center">MODELO</div></td>
<td style="position:absolute; top:410px ;left:50px; border:0.0px; "><div align="center">PLACAS</div></td>
<td style="position:absolute; top:440px ;left:50px; border:0.0px; "><div align="center">VERSION</div></td>
<td style="position:absolute; top:320px ;left:600px; border:0.0px; "><div align="center">MOTOR</div></td>
<td style="position:absolute; top:350px ;left:600px; border:0.0px; "><div align="center">SERIE</div></td>
<td style="position:absolute; top:380px ;left:600px; border:0.0px; "><div align="center">USO</div></td>
<td style="position:absolute; top:410px ;left:600px; border:0.0px; "><div align="center">COLOR</div></td>
<td style="position:absolute; top:440px ;left:600px; border:0.0px; "><div align="center">OCUPANTES</div></td>
<td style="position:absolute; top:470px ;left:30px; border:0.0px; width:920px ; background:#F00; font-size:28px;"><div align="center">DATOS DEL ASEGURADO</div></td>
<td style="position:absolute; top:515px ;left:50px; border:0.0px; "><div align="center">PROPIETARIO</div></td>
<td style="position:absolute; top:545px ;left:50px; border:0.0px; "><div align="center">DOMICILIO</div></td>
<td style="position:absolute; top:515px ;left:600px; border:0.0px; "><div align="center">TELEFONO</div></td>
<td style="position:absolute; top:515px ;left:790px; border:0.0px; "><div align="center">CP</div></td>
<td style="position:absolute; top:570px ;left:30px; border:0.0px; width:920px ; background:#F00; font-size:28px;"><div align="center">COBERTURAS</div></td>
<td style="position:absolute; top:610px ;left:50px; border:0.0px; background:#D3D3D3 "><div align="center">COBERTURAS CONTRATADAS</div></td>
<td style="position:absolute; top:610px ;left:400px; border:0.0px; background:#D3D3D3"><div align="center">SUMA ASEGURADA</div></td>
<td style="position:absolute; top:610px ;left:700px; border:0.0px; background:#D3D3D3"><div align="center">DEDUCIBLES</div></td>
<td style="position:absolute; top:865px ;left:30px; border:0.0px; width:920px ; background:#F00; font-size:28px;"><div align="center">DETALLE DE POLIZA</div></td>
<?php
if($plataforma=="Multi Plataforma")
{
?>
<td style="position:absolute; top:895px ;left:10px; border:0.0px; width:920px ; background:#F00; font-size:28px;"><div align="center"></div></td>
<?php	
}
?>
<td style="position:absolute; top:900px ;left:75px; border:0.0px; "><div align="center">SE REQUIERE DE GPS OBLIGATORIO PARA VEHICULOS DE PLATAFORMAS, MAXIMO 8 DIAS PARA LA INSTALACION<BR> DESPUES DE LA CONTRATACION (SOLO PARA ESTADO DE JALISCO).<BR>NO MOVERSE DE LUGAR (SOLO POR INDICACIONES DE LA AUTORIDAD)<BR>NO TENER NINGUN ARREGLO CON TERCEROS<BR>NO ACEPTAR RESPONSABILIDAD (ESPERA AL AJUSTADOR)<BR>SUJETO A CONDICIONES DE CONTRATO-POLIZA</div></td>
<td style="position:absolute; top:1008px ;left:240px; border:0.0px; width:680px ; background:#F00; font-size:28px;"><div align="center">TELEFONO DE EMERGENCIA 3330345030 3334994220</div></td>
<td style="position:absolute; top:1045px ;left:340px; border:0.0px; font-size:22px; "><div align="center">OFICINAS GENERALES Y CENTRO DE VALUACION</div></td>
<td style="position:absolute; top:1070px ;left:305px; border:0.0px; font-size:22px; "><div align="center">AV. ARTESANOS #3745 COL. SAN MIGUEL DE HUENTITAN </div></td>
<td style="position:absolute; top:1095px ;left:450px; border:0.0px; font-size:22px; "><div align="center">GUADALAJARA, JALISCO</div></td>
<td style="position:absolute; top:1120px ;left:390px; border:0.0px; font-size:22px; "><div align="center">TELEFONOS: 3326875316 Y 3326875317</div></td>
</tr>
<div align="center">
<?php
while( $row = $result1->fetch_assoc() ){
$vendedor=$row['vendedor'];
$cobertura=$row['cobertura'];
$plataforma=$row['plataforma'];
?>
</div><br>
<tr>
<td style="position:absolute; top:180px ;left:550px; border:0.0px; background:#F00; font-size:28px;"><?php echo $row['folio'] ?></td>
<td style="position:absolute; top:225px ;left:190px; border:0.0px ; "><?php echo $row['expedicion'] ?></td>
<td style="position:absolute; top:250px ;left:190px; border:0.0px ;" ><?php echo $row['vigencia'] ?></td>
<td style="position:absolute; top:250px ;left:680px; border:0.0px ;" ><?php echo $row['plazo'] ?></td>
<td style="position:absolute; top:250px ;left:800px; border:0.0px ; background:#D3D3D3" ><?php echo $row['pagomensual'] ?></td>
<td style="position:absolute; top:225px ;left:800px; border:0.0px ; background:#D3D3D3" ><?php echo $row['pagoinicial'] ?></td>
<td style="position:absolute; top:320px ;left:190px; border:0.0px"><?php echo $row['marca'] ?></td>
<td style="position:absolute; top:350px ;left:190px; border:0.0px"><?php echo $row['tipo'] ?></td>
<td style="position:absolute; top:380px ;left:190px; border:0.0px"><?php echo $row['ano'] ?></td>
<td style="position:absolute; top:410px ;left:190px; border:0.0px"><?php echo $row['placas'] ?></td>
<td style="position:absolute; top:440px ;left:190px; border:0.0px"><?php echo $row['version'] ?></td>
<td style="position:absolute; top:320px ;left:750px; border:0.0px"><?php echo $row['nmotor'] ?></td>
<td style="position:absolute; top:350px ;left:750px; border:0.0px"><?php echo $row['serie'] ?></td>
<td style="position:absolute; top:380px ;left:750px; border:0.0px"><?php echo $row['plataforma'] ?></td>
<td style="position:absolute; top:410px ;left:750px; border:0.0px"><?php echo $row['color'] ?></td>
<td style="position:absolute; top:515px ;left:190px; border:0.0px"><?php echo $row['nombre'] ?></td>
<td style="position:absolute; top:545px ;left:190px; border:0.0px"><?php echo $row['domicilio'] . $row['exterior'] .  $row['col'] ?></td>
<td style="position:absolute; top:515px ;left:700px; border:0.0px"><?php echo $row['tel'] ?></td>
<td style="position:absolute; top:545px ;left:700px; border:0.0px"><?php echo $row['municipio'] ?></td>
<td style="position:absolute; top:515px ;left:830px; border:0.0px"><?php echo $row['cp'] ?></td>
</tr>
<div align="center">
<?php
}
}
?>
<div style="position:absolute; top:1090px ; left:10px">	
<?php	  
if($cobertura=="POLIZA PARTICULAR AMPLIA 140 MIL")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$700,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $140,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	  
if($cobertura=="POLIZA PARTICULAR AMPLIA 130 MIL")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$700,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $130,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="POLIZA PARTICULAR AMPLIA 120 MIL")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$700,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $120,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	 
if($cobertura=="POLIZA PARTICULAR AMPLIA 110 MIL")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$700,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $110,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0 .1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="POLIZA PARTICULAR AMPLIA 100 MIL")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$700,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $100,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	
if($cobertura=="POLIZA PARTICULAR AMPLIA 90 MIL")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$700,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $90,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="COTIZACION POLIZA MULTIPLATAFORMAS 4 MILLONES EN RC")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS CONDUCTOR"?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:840px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$3,000,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:420px; border:0.1px"><div>HASTA $150,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>35% VALOR DEL DA&Ntilde;O PROPIO</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>5000 UMAS</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:790px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>20%</div></td>
<td style="position:absolute; top:815px ; left:320px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:840px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:840px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="COTIZACION PARTICULAR RC ECONOMICA CON GRUA")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$700,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:450px; border:0.1px"><div>$50,000</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:715px ; left:355px; border:0.1px"><div>1 GRUA POR A&Ntilde;O MAXIMO 50 KM</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	  
if($cobertura=="COTIZACION MULTIPLATAFORMAS PROMO JULIO 2021")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS CONDUCTOR"?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:840px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$1,500,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:420px; border:0.1px"><div>HASTA $130,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>35% VALOR DEL DA&Ntilde;O PROPIO</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$250,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:790px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>20%</div></td>
<td style="position:absolute; top:815px ; left:320px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:840px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:840px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="COTIZACION DANOS A TERCEROS 4 MILLONES CON GRUA")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS CONDUCTOR"?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$4,000,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:450px; border:0.1px"><div>5000 UMAS</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:355px; border:0.1px"><div>1 GRUA POR A&Ntilde;O MAXIMO 50 KM</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="AMPLIA AUTOMOVIL PARTICULAR HASTA $50,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$700,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $50,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="AMPLIA AUTOMOVIL PARTICULAR HASTA $70,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$700,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $70,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="AMPLIA AUTOMOVIL PARTICULAR HASTA $80,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$700,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $80,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="VEHICULO PARTICULAR AMPLIA HASTA $60,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$700,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $60,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	  
if($cobertura=="TERCEROS CON GRUA PICKUP")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$450,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:715px ; left:355px; border:0.1px"><div>1 GRUA POR A&Ntilde;O MAXIMO 50 KM</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
               <?php	
}
?>
<?php	  
if($cobertura=="AMPLIA PICKUP HASTA $50,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$450,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $50,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	  
if($cobertura=="AMPLIA PICKUP HASTA $60,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$450,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $60,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="AMPLIA PICKUP HASTA $70,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$450,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $70,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	  
if($cobertura=="AMPLIA PICKUP HASTA $80,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$450,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $80,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	
if($cobertura=="AMPLIA PICKUP HASTA $90,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$450,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $90,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	  
if($cobertura=="AMPLIA PICKUP HASTA $100,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$450,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $100,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	  
if($cobertura=="AMPLIA PICKUP HASTA $110,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$450,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $110,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="AMPLIA PICKUP HASTA $120,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$450,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $120,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="AMPLIA PICKUP HASTA $130,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$450,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $130,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	 
if($cobertura=="AMPLIA PICKUP HASTA $140,000")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "MUERTE CONDUCTOR"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$450,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $140,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:430px; border:0.1px"><div>$50,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:815px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="AMPLIA MOTO")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$350,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>5% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:430px; border:0.1px"><div>$40,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="INTERMEDIA MOTO")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$350,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>$40,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:715px ; left:355px; border:0.1px"><div>1 GRUA POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="TERCEROS MOTO")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$350,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:665px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	  
if($cobertura=="MULTIPLATAFORMAS ECONOMICA")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$450,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $100,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>45% VALOR DA&Ntilde;O PROPIO</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$100,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php
if($cobertura=="MULTIPLATAFORMAS CD JUAREZ")
{
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$1,000,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>75 UMAS</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $100,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>15%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>10% VALOR COMERCIAL</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$100,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20% VALOR CRISTAL</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 50KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
}
?>
<?php	
	if($plataforma=="Multi Plataforma")
{
?>
<td style="position:absolute; top:140px ; left:420px; border:0.1px"><div>CONTRATO DE PROTECCION PARA SERVICIOS DE PLATAFORMA (APP)<BR> COBERTURA   AMPLIA CON CLAUSULAS DE SERVICIO ERT</div></td>
<?php	
}
?>   
<div style="position:absolute; top:970px; left:50px; width:100px"><img src="../../pie.jpg" width="160" height="159"></div> 
</body>
</html>