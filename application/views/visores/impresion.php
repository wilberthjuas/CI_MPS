<html>
<html><link rel="shortcut icon" href="<?php echo $url; ?>images/logop.png"/>
<head><title>Mutualidad MPS</title></head>
<link href="<?php echo $url?>css/estilo.css" rel="stylesheet" type="text/css">
<body>

<body>
<?php
$plataforma=$result1[0]['plataforma'];
if($b=="Folio"){
?>
<!--PINTAR LOS DATOS OBTENIDOS EN SELECT 2-->
<center>
<p align="right" style="color:#2962FF; font-family: Arial;"><?php error_reporting(0);$hoy= date("Y-m-d");?></p>
<table border=1>
<thead>
<div align="left"><img src="<?php echo $url?>images/logop.png" width="200" height="200"></div>
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
<td style="position:absolute; top:1008px ;left:240px; border:0.0px; width:680px ; background:#F00; font-size:24px;"><div align="center">TELEFONO DE EMERGENCIA 3330345030 3334994220</div></td>
<td style="position:absolute; top:1045px ;left:340px; border:0.0px; "><div align="center">OFICINAS GENERALES Y CENTRO DE VALUACION</div></td>
<td style="position:absolute; top:1065px ;left:305px; border:0.0px; "><div align="center">AV. ARTESANOS #3745 COL. SAN MIGUEL DE HUENTITAN </div></td>
<td style="position:absolute; top:1083px ;left:450px; border:0.0px; "><div align="center">GUADALAJARA, JALISCO</div></td>
<td style="position:absolute; top:1100px ;left:390px; border:0.0px; "><div align="center">TELEFONOS: 3326875316 Y 3326875317</div></td>
<td style="position:absolute; top:1130px ;left:60px; border:0.0px; font-size:22px;"><div align="center">BBVA Número de cuenta: 011 789 6573, BBVA Cuenta CLABE: 012 320 001 178 965 731</div></td>
<td style="position:absolute; top:1160px ;left:60px; border:0.0px; font-size:22px;"><div align="center">BanBajio Número de cuenta: 349 912 990 201, BanBajio Cuenta CLABE: 030 320 900 029 644 776</div></td>
</tr>
<td style="position:absolute; top:1185px ;left:75px; border:0.0px; font-size:22px;"><div align="center"><i>*Depósitos únicamente en ventanilla o practicaja</i></div></td>
</tr>
<div align="center">
<?php
foreach($result1 as $row ){
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
<td style="position:absolute; top:408px ;left:750px; border:0.0px"><?php echo $row['color'] ?></td>
<td style="position:absolute; top:438px ;left:750px; border:0.0px"><?php echo $row['ocupantes']?></td>
<td style="position:absolute; top:515px ;left:190px; border:0.0px"><?php echo $row['nombre'] ?></td>
<td style="position:absolute; top:545px ;left:190px; border:0.0px"><?php echo $row['domicilio'] . $row['exterior'] .  $row['colonia'] ?></td>
<td style="position:absolute; top:515px ;left:700px; border:0.0px"><?php echo $row['telefono'] ?></td>
<td style="position:absolute; top:545px ;left:700px; border:0.0px"><?php echo $row['municipio'] ?></td>
<td style="position:absolute; top:515px ;left:830px; border:0.0px"><?php echo $row['cp'] ?></td>
</tr>
<div align="center">
<?php
}
}//AQUI TERMINA 1ER ID
?>
<div style="position:absolute; top:1090px ; left:10px">	
<?php	  

switch ($cobertura) 
{
	case "COTIZACION POLIZA MULTIPLATAFORMAS 4 MILLONES EN RC":
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
//}
break;
?>
<?php
//if($cobertura=="COTIZACION PARTICULAR RC ECONOMICA CON GRUA")
//{
case "COTIZACION PARTICULAR RC ECONOMICA CON GRUA":
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
//}
break;
?>
<?php
//if($cobertura=="INTERMEDIA PARTICULAR  VALLARTA 1 GRUA")
//{
case "INTERMEDIA PARTICULAR  VALLARTA 1 GRUA":
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
<td style="position:absolute; top:715px ; left:355px; border:0.1px"><div>1 GRUA POR A&Ntilde;O MAXIMO 30 KM</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
//}
break;
?>
<?php	  
//if($cobertura=="COTIZACION MULTIPLATAFORMAS PROMO JULIO 2021")
//{
case "COTIZACION MULTIPLATAFORMAS PROMO JULIO 2021":
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
//}
break;
?>
<?php
//if($cobertura=="COTIZACION DANOS A TERCEROS 4 MILLONES CON GRUA")
//{
case "COTIZACION DANOS A TERCEROS 4 MILLONES CON GRUA":
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
//}
break;
?>
<?php	  
//if($cobertura=="TERCEROS CON GRUA PICKUP")
//{
case "TERCEROS CON GRUA PICKUP":
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
//}
break;
?>
<?php	  
//if($cobertura=="INTERMEDIA PICKUP   VALLARTA 1 GRUA")
//{
case "INTERMEDIA PICKUP   VALLARTA 1 GRUA":
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
<td style="position:absolute; top:715px ; left:355px; border:0.1px"><div>1 GRUA POR A&Ntilde;O MAXIMO 30 KM</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>$30,000.00</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
//}
break;
?>

<?php
//if($cobertura=="INTERMEDIA MOTO")
//{
case "INTERMEDIA MOTO":
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
//}
break;
?>
<?php
//if($cobertura=="INTERMEDIA MOTO VALLARTA")
//{
case "INTERMEDIA MOTO VALLARTA":
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
<td style="position:absolute; top:715px ; left:355px; border:0.1px"><div>1 GRUA POR A&Ntilde;O MAXIMO 30KM </div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
//}
break;
?>
<?php
//if($cobertura=="TERCEROS MOTO")
//{
case "TERCEROS MOTO":
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$350,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:665px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
//}
break;
?>
<?php	  
//if($cobertura=="MULTIPLATAFORMAS ECONOMICA")
//{
case "MULTIPLATAFORMAS ECONOMICA":
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
//}
break;
?>
<?php	  
//if($cobertura=="MULTIPLATAFORMAS VALLARTA")
//{
case "MULTIPLATAFORMAS VALLARTA":
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
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 30KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
//}
break;
?>
<?php
//if($cobertura=="MULTIPLATAFORMAS CD JUAREZ")
//{
case "MULTIPLATAFORMAS CD JUAREZ":
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
//}
break;
?>
<?php
//if($cobertura=="MULTIPLATAFORMA JUAREZ/LEON PROMO")
//{
case "MULTIPLATAFORMA JUAREZ/LEON PROMO":
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px"><?php echo "RESPONSABILIDAD CIVIL" ?></td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px"><?php echo "ROBO TOTAL" ?></td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$1,000,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>NO APLICA</div></td> 
<td style="position:absolute; top:665px ; left:430px; border:0.1px"><div>HASTA $100,000.00</div></td> 
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>5%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>35% VALOR DEL DAÑO PROPIO</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>$100,000.00</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>20%</div></td>
<td style="position:absolute; top:790px ; left:355px; border:0.1px"><div>2 GRUAS POR A&Ntilde;O MAXIMO 35KM </div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
//}
break;
?>
<?php
//if($cobertura=="PREMIUM LEON")
//{
case "PREMIUM LEON":
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px">RESPONSABILIDAD CIVIL</td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px">ROBO TOTAL</td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px"><?php echo "DA&Ntilde;OS MATERIALES" ?></td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS OCUPANTES" ?></td>
<td style="position:absolute; top:740px ;left:50px; border:0.0px; width:500px"><?php echo "GASTOS MEDICOS CONDUCTOR"?></td>
<td style="position:absolute; top:765px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA LEGAL" ?></td>
<td style="position:absolute; top:790px ;left:50px; border:0.0px; width:500px"><?php echo "CRISTALES"?></td>
<td style="position:absolute; top:815px ;left:50px; border:0.0px; width:500px"><?php echo "ASISTENCIA VIAL"?></td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$3,000,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>50 UMAS</div></td> 
<td style="position:absolute; top:665px ; left:420px; border:0.1px"><div>VALOR COMERCIAL</div></td>
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10%</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>VALOR COMERCIAL</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>10%</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>10,185 UMAS</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>10 UMA</div></td>
<td style="position:absolute; top:740px ; left:450px; border:0.1px"><div>10,180 UMA</div></td> 
<td style="position:absolute; top:740px ; left:700px; border:0.1px"><div>10 UMA</div></td>
<td style="position:absolute; top:765px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:765px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:790px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:790px ; left:700px; border:0.1px"><div>20%</div></td>
<td style="position:absolute; top:815px ; left:320px; border:0.1px"><div>1 GRUAS POR A&Ntilde;O MAXIMO 30KM</div></td> 
<td style="position:absolute; top:815px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<td style="position:absolute; top:840px ; left:450px; border:0.1px"><div></div></td> 
<td style="position:absolute; top:840px ; left:700px; border:0.1px"><div></div></td>
<?php	
//}
break;
?>
<?php	
//	if($cobertura=="DAÑOS 3ROS LEÓN APP")
//{
case "DAÑOS 3ROS LEÓN APP":
?>
<td style="position:absolute; top:640px ;left:50px; border:0.0px; width:500px">RESPONSABILIDAD CIVIL</td>
<td style="position:absolute; top:665px ;left:50px; border:0.0px; width:500px">GASTOS MEDICOS OCUPANTES</td>
<td style="position:absolute; top:690px ;left:50px; border:0.0px; width:500px">GASTOS MEDICOS CONDUCTOR</td>
<td style="position:absolute; top:715px ;left:50px; border:0.0px; width:500px">ASISTENCIA LEGAL</td>
<td style="position:absolute; top:640px ; left:450px; border:0.1px"><div>$3,000,000.00</div></td> 
<td style="position:absolute; top:640px ; left:700px; border:0.1px"><div>50 UMAS</div></td> 
<td style="position:absolute; top:665px ; left:450px; border:0.1px"><div>10,185 UMA</div></td>
<td style="position:absolute; top:665px ; left:700px; border:0.1px"><div>10 UMA</div></td> 
<td style="position:absolute; top:690px ; left:450px; border:0.1px"><div>10,180 UMA</div></td> 
<td style="position:absolute; top:690px ; left:700px; border:0.1px"><div>10 UMA</div></td>
<td style="position:absolute; top:715px ; left:450px; border:0.1px"><div>AMPARADA</div></td> 
<td style="position:absolute; top:715px ; left:700px; border:0.1px"><div>NO APLICA</div></td>
<?php	
break;
?> 
<?php	
default:
	foreach($primas as $pr ){
		$patron1 = '/[^\w$%,.&;Ññ]/i';
		$patron2 = '/(::){2,}/i';
		$replacement = '-';
		$x = 640;
		if($pr['rca'] != ""){
			$rca = preg_replace($patron1, "::", $pr['rca']);
			$rca = preg_replace($patron2, $replacement, $rca);
			$rca = str_replace("::", ' ', $rca);
			$rca = explode($replacement,$rca);
		
		?>
		<td style="position:absolute; top:<?php echo $x; ?>px ;left:50px; border:0.0px;">
			<?php echo trim($rca[0]); ?>
		</td>
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:400px; border:0.1px">
			<?php echo trim($rca[1]); ?>
		</td> 
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:700px; border:0.1px">
			<?php echo trim($rca[2]); ?>
		</td>
		
		<?php
		$x = $x + 25;
		}

		if($pr['robo'] != ""){
			$robo = preg_replace($patron1, "::", $pr['robo']);
			$robo = preg_replace($patron2, $replacement, $robo);
			$robo = str_replace("::", ' ', $robo);
			$robo = explode($replacement,  $robo);

		?>
		<td style="position:absolute; top:<?php echo $x; ?>px ;left:50px; border:0.0px;">
			<?php echo trim($robo[0]); ?>
		</td>
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:400px; border:0.1px">
			<?php echo trim($robo[1]); ?>
		</td> 
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:700px; border:0.1px">
			<?php echo trim($robo[2]); ?>
		</td>
		
		<?php
		$x = $x + 25;
		}

		if($pr['dano'] != ""){
			$dano = preg_replace($patron1, "::", $pr['dano']);
			$dano = preg_replace($patron2, $replacement, $dano);
			$dano = str_replace("::", ' ', $dano);
			$dano = explode($replacement,  $dano);
		?>
		<td style="position:absolute; top:<?php echo $x; ?>px ;left:50px; border:0.0px;">
			<?php echo trim($dano[0]); ?>
		</td>
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:400px; border:0.1px">
			<?php echo trim($dano[1]); ?>
		</td> 
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:700px; border:0.1px">
			<?php echo trim($dano[2]); ?>
		</td>
		
		<?php
		$x = $x + 25;
		}

		if($pr['gastos'] != ""){
			$gastos = preg_replace($patron1, "::", $pr['gastos']);
			$gastos = preg_replace($patron2, $replacement, $gastos);
			$gastos = str_replace("::", ' ', $gastos);
			$gastos = explode($replacement,  $gastos);

		?>
		<td style="position:absolute; top:<?php echo $x; ?>px ;left:50px; border:0.0px;">
			<?php echo trim($gastos[0]); ?>
		</td>
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:400px; border:0.1px">
			<?php echo trim($gastos[1]); ?>
		</td> 
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:700px; border:0.1px">
			<?php echo trim($gastos[2]); ?>
		</td>
		
		<?php
		$x = $x + 25;
		}

		if($pr['medico'] != ""){
			$medico = preg_replace($patron1, "::", $pr['medico']);
			$medico = preg_replace($patron2, $replacement, $medico);
			$medico = str_replace("::", ' ', $medico);
			$medico = explode($replacement,  $medico);

		?>
		<td style="position:absolute; top:<?php echo $x; ?>px ;left:50px; border:0.0px;">
			<?php echo trim($medico[0]); ?>
		</td>
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:400px; border:0.1px">
			<?php echo trim($medico[1]); ?>
		</td> 
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:700px; border:0.1px">
			<?php echo trim($medico[2]); ?>
		</td>
		
		<?php
		$x = $x + 25;
		}	

		if($pr['asistencia'] != ""){
			$asistencia = preg_replace($patron1, "::", $pr['asistencia']);
			$asistencia = preg_replace($patron2, $replacement, $asistencia);
			$asistencia = str_replace("::", ' ', $asistencia);
			$asistencia = explode($replacement,  $asistencia);

		?>
		<td style="position:absolute; top:<?php echo $x; ?>px ;left:50px; border:0.0px;">
			<?php echo trim($asistencia[0]); ?>
		</td>
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:400px; border:0.1px">
			<?php echo trim($asistencia[1]); ?>
		</td> 
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:700px; border:0.1px">
			<?php echo trim($asistencia[2]); ?>
		</td>
		
		<?php
		$x = $x + 25;
		}

		if($pr['cristal'] != ""){
			$cristal = preg_replace($patron1, "::", $pr['cristal']);
			$cristal = preg_replace($patron2, $replacement, $cristal);
			$cristal = str_replace("::", ' ', $cristal);
			$cristal = explode($replacement,  $cristal);

		?>
		<td style="position:absolute; top:<?php echo $x; ?>px ;left:50px; border:0.0px;">
			<?php echo trim($cristal[0]); ?>
		</td>
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:400px; border:0.1px">
			<?php echo trim($cristal[1]); ?>
		</td> 
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:700px; border:0.1px">
			<?php echo trim($cristal[2]); ?>
		</td>
		
		<?php
		$x = $x + 25;
		}


		if($pr['vial'] != ""){
			$vial = preg_replace($patron1, "::", $pr['vial']);
			$vial = preg_replace($patron2, $replacement, $vial);
			$vial = str_replace("::", ' ', $vial);
			$vial = explode($replacement,  $vial);

		?>
		<td style="position:absolute; top:<?php echo $x; ?>px ;left:50px; border:0.0px;">
			<?php echo trim($vial[0]); ?>
		</td>
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:400px; border:0.1px">
			<?php echo trim($vial[1]); ?>
		</td> 
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:700px; border:0.1px">
			<?php echo trim($vial[2]); ?>
		</td>
		
		<?php
		$x = $x + 25;
		}


		if($pr['muerte'] != ""){
			$muerte = preg_replace($patron1, "::", $pr['muerte']);
			$muerte = preg_replace($patron2, $replacement, $muerte);
			$muerte = str_replace("::", ' ', $muerte);
			$muerte = explode($replacement,  $muerte);

		?>
		<td style="position:absolute; top:<?php echo $x; ?>px ;left:50px; border:0.0px;">
			<?php echo trim($muerte[0]); ?>
		</td>
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:400px; border:0.1px">
			<?php echo trim($muerte[1]); ?>
		</td> 
		<td style="position:absolute; top:<?php echo $x; ?>px ; left:700px; border:0.1px">
			<?php echo trim($muerte[2]); ?>
		</td>
		
		<?php
		$x = $x + 25;
		}
	}
	break;
}
?> 

<?php	
	if($plataforma=="Multi Plataforma")
{
?>
<td style="position:absolute; top:140px ; left:420px; border:0.1px"><div>CONTRATO DE PROTECCION PARA SERVICIOS DE PLATAFORMA (APP)<BR> COBERTURA  AMPLIA CON CLAUSULAS DE SERVICIO ERT</div></td>
<?php	
}
?>   
<div style="position:absolute; top:970px; left:50px; width:100px">
	<img src="<?php echo $url?>images/pie.jpg" width="160" height="159">
</div>
</body>
</html>