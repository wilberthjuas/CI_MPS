<?php
	//ERROR REPORTIN PARA ELIMINAR NOTICEs Y WARNINGs
	//error_reporting(E_ERROR | E_WARNING | E_PARSE);
error_reporting(0);
    //CONEXION
require_once('../../conexion/conexion.php');
mysqli_select_db($conexion, $database);

    //SESSIONES DE USUARIO
session_start();
if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){
	$pintar_usaurio = strtoupper($_SESSION['usuario']);
}else{
      //REDIRECION A INDEX Y EJECUTO EXIT
	header("Location: ../../index.php");
}

 		//NIVEL 1 ing


$folio			=$_POST['folio'];
$nombre			=$_POST['nombre'];
$domicilio	=$_POST['domicilio'];
$exterior		=$_POST['exterior'];
$entre			=$_POST['entre'];
$col 				=$_POST['col'];
$municipio	=$_POST['municipio'];
$tipo				=$_POST['tipo'];
$tel 				=$_POST['tel'];

$expedicion	=$_POST['expedicion'];
$vigencia 	=$_POST['vigencia'];
$cobertura 	=$_POST['cobertura'];
$placas 		=$_POST['placas'];
$serie 			=$_POST['serie'];
$nmotor 		=$_POST['nmotor'];
$pagomensual=$_POST['pagomensual'];
$vendedor 	=$_POST['vendedor'];
$cobrador 	=$_POST['cobrador'];
$ano2  			=$_POST['ano2'];

$costo_total=$_POST['costo_total'];

$color 			=$_POST['color'];
$ano  			=$_POST['ano'];
$version  	=$_POST['version'];
$marca 			=$_POST['marca'];
$plataforma =$_POST['plataforma'];


if($cobertura=="POLIZA PARTICULAR AMPLIA 140 MIL")
{


	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
	$robo="ROBO TOTAL"."			        $140,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          Amparada"."		        20%";
	$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";





}
elseif($cobertura=="POLIZA PARTICULAR AMPLIA 130 MIL")
{
	
	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
	$robo="ROBO TOTAL"."			        $130,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          Amparada"."		        20%";
	$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
	
	
}
elseif($cobertura=="POLIZA PARTICULAR AMPLIA 120 MIL")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
	$robo="ROBO TOTAL"."			        $120,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          Amparada"."		        20%";
	$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
	
	

}

elseif($cobertura=="POLIZA PARTICULAR AMPLIA 110 MIL")
{
	
	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
	$robo="ROBO TOTAL"."			        $110,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          Amparada"."		        20%";
	$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
	
	
}
elseif($cobertura=="POLIZA PARTICULAR AMPLIA 100 MIL")
{
	
	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
	$robo="ROBO TOTAL"."			        $100,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          Amparada"."		        20%";
	$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="POLIZA PARTICULAR AMPLIA 90 MIL")
{
	
	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
	$robo="ROBO TOTAL"."			        $90,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          Amparada"."		        20%";
	$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="VEHICULO PARTICULAR AMPLIA HASTA $60,000")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $60,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		     NO APLICA";
	$vial="ASISTENCIA VIAL"."	   2 GRUAS POR AÑO MAXIMO 50KM"."    NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
	
	

}


elseif($cobertura=="COTIZACION POLIZA MULTIPLATAFORMAS 4 MILLONES EN RC")
{

	$rca="RESPONSABILIDAD CIVIL"."		    $4,000,000.00"."         NO APLICA";
	$robo="ROBO TOTAL"."			        $150,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		        15% ";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 5000 UMAS"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      $50,000.00"."          NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          Amparada"."		        20%";
	$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $50,000.00"."		     NO APLICA";


}
elseif($cobertura=="COTIZACION PARTICULAR RC ECONOMICA CON GRUA")
{
	
	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        NO APLICA"."		     NO APLICA";
	$dano="DA&Ntilde;OS MATERIALES"."		NO APLICA"."		     NO APLICA ";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000"."             NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	    NO APLICA"."             NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			        NO APLICA"."		     NO APLICA";
	$vial="ASISTENCIA VIAL"."	    1 GRUA PO AÑO MAXIMO 50 KM"."	 NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
	
	
}
elseif($cobertura=="COTIZACION MULTIPLATAFORMAS PROMO JULIO 2021")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $1,500,000.00"."         NO APLICA";
	$robo="ROBO TOTAL"."			        $130,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  15% VALOR DEL DA&Ntilde;O PROPIO";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $250,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      $50,000.00"."          NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          Amparada"."		        20%";
	$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $50,000.00"."		     NO APLICA";
	
	

}

elseif($cobertura=="AMPLIA AUTOMOVIL PARTICULAR HASTA $50,000")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $50,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA AUTOMOVIL PARTICULAR HASTA $70,000")
{
	
	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $70,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA AUTOMOVIL PARTICULAR HASTA $80,000")
{
	
	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $80,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="TERCEROS CON GRUA PICKUP")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        NO APLICA"."		     NO APLICA";
	$dano="DA&Ntilde;OS MATERIALES"."		NO APLICA"."		     NO APLICA ";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000"."             NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	    NO APLICA"."             NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			        NO APLICA"."		     NO APLICA";
	$vial="ASISTENCIA VIAL"."	    1 GRUA PO AÑO MAXIMO 50 KM"."	 NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA PICKUP HASTA $50,000")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $50,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA PICKUP HASTA $60,000")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $60,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA PICKUP HASTA $70,000")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $70,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA PICKUP HASTA $80,000")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $80,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA PICKUP HASTA $90,000")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $90,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA PICKUP HASTA $100,000")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $100,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA PICKUP HASTA $110,000")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $110,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA PICKUP HASTA $120,000")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $120,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA PICKUP HASTA $130,000")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $130,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA PICKUP HASTA $140,000")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $140,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
	$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";

	

}
elseif($cobertura=="AMPLIA MOTO")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $350,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        AMPARADA"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  AMPARADA"."		  5% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $40,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  AMPARADA"."            NO APLICA"    ; 

	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";

}
elseif($cobertura=="INTERMEDIA MOTO")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $350,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        NO APLICA"."		        NO APLICA";
	$dano="DA&Ntilde;OS MATERIALES"."		  NO APLICA"." 
	NO APLICA";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $40,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  AMPARADA"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        NO APLICA";
	$vial="ASISTENCIA VIAL"."	     1 GRUA POR AÑO MAXIMO 50KM "."	NO APLICA";

}
elseif($cobertura=="TERCEROS MOTO")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $350,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        NO APLICA"."		        NO APLICA";
	$dano="DA&Ntilde;OS MATERIALES"."		  NO APLICA"." 
	NO APLICA";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 NO APLICA"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  AMPARADA"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        NO APLICA";
	$vial="ASISTENCIA VIAL"."	              NO APLICA"."	
	NO APLICA";

}
elseif($cobertura=="MULTIPLATAFORMAS ECONOMICA")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
	$robo="ROBO TOTAL"."			        HASTA $100,000.00"."		        10%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  35% VALOR DAA&Ntilde;O PROPIO";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $100,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";

}
elseif($cobertura=="MULTIPLATAFORMAS CD JUAREZ")
{
	$rca="RESPONSABILIDAD CIVIL"."		    $1,000,000.00"."           75 UMAS";
	$robo="ROBO TOTAL"."			        HASTA $100,000.00"."		        15%";
	$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  10% VALOR COMERCIAL";
	$gastos="GASTOS MEDICOS OCUPANTES"."	 $100,000.00"."          NO APLICA";
	$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
	$asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
	$cristal="CRISTALES"."			          NO APLICA"."		        20%";
	$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";

}
				$query = "UPDATE `mutua402_mps`.`datos` SET 
					
					`nombre` = '$nombre'
					,`domicilio` = '$domicilio'
					,`exterior` = '$exterior'
					,`entre` = '$entre'
					,`col` = '$col'
					,`municipio` = '$municipio'
					,`tipo` = '$tipo'
					,`tel` = '$tel'
					
					,`vigencia` = '$vigencia'
					,`cobertura` = '$cobertura'
					,`placas` = '$placas'
					,`serie` = '$serie'
					,`nmotor` = '$nmotor'
					,`pagomensual` = '$pagomensual'
					,`vendedor` = '$vendedor'  
					,`cobrador` = '$cobrador'  
					,`ano2` = '$ano2'  
					,`costo_total` = '$costo_total' 
					
					,`color` = '$color'  
					,`ano` = '$ano' 
					,`version` = '$version' 
					,`marca` = '$marca' 
					,`plataforma` = '$plataforma' 
					,`expedicion` = '$expedicion' 

					WHERE `datos`.`folio` = '$folio'; ";
					$result = mysqli_query($conexion,$query);
					print_r($result);
?>
	<div class="espacio-header"></div>
<link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">
	<form id="form1" name="registrar" action="../../inicio.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-4 push-4">
				<div class="panel">
				<div class="row">
					<br>
					<div class="col-10 push-1"><p class="titulo-form">REGISTRO EXITOSO</p></div>

				</div>
					<div class="row">
						<br><br>
						<div class="col-6 push-5"><input  class="botom" type="submit" value="REGRESAR" /></div>
					</div>
					<br><br>

				</div>
			</div>

		</div>
	</div><!--Fin container-->
	</form>
	
</body>
</html>