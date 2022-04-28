<?php
	error_reporting(0);

session_start();
	if(isset($_SESSION['usuario']) && isset($_SESSION['usuario'])){

	}else{
		header("Location: ../../index.php");
		exit();
	}

	

	//CONEXION A LA BASE DE DATOS
	require_once('../../conexion/conexion.php');
	mysqli_select_db($conexion, $database);

	//DECLARACION DE VARIABLES
	





	
	//ASIGNACION DE VARIABLES DESDE EL POST
	$nombre =$_POST['nombre'];
$domicilio =$_POST['domicilio'];
$exterior =$_POST['exterior'];
$entre =$_POST['entre'];
$col =$_POST['col'];
$municipio =$_POST['municipio'];
$domcom ="";
$estado_civil ="";
$fecha_n ="";
$tel =$_POST['tel'];
$tel2 ="";
$cp =$_POST['cp'];
$marca =$_POST['marca'];
$tipo =$_POST['tipo'];
$ano =$_POST['ano'];
$color =$_POST['color'];
$placas =$_POST['placas'];
$version =$_POST['version'];
$serie =$_POST['serie'];
$nmotor =$_POST['nmotor'];
$expedicion =$_POST['expedicion'];
$vigencia =$_POST['vigencia'];  
$vig=date("d-m-Y",strtotime($vigencia."+ 1 year"));
$cobertura =$_POST['cobertura'];
$deducible =$_POST['deducible'];
$costo_total =$_POST['costo_total'];
$costo_letra ="";
$plazo =$_POST['plazo'];
$pagoinicial =$_POST['pagoinicial'];
$pagomensual =$_POST['pagomensual'];
$observaciones =$_POST['observaciones'];
$vendedor =$_POST['vendedor'];
$cobrador =$_POST['cobrador'];
$plataforma =$_POST['plataforma'];
$captura =$_POST['captura'];
$ediciones ="" ;
$fecha_modificacion ="";

$ano2=date('Y');

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
elseif($cobertura=="COBERTURA BASICA MULTIPLATAFORMA")
{
	
	            $rca="RESPONSABILIDAD CIVIL"."		    $350,000.00"."         NO APLICA";
				$robo="ROBO TOTAL"."			        $100,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $80,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          Amparada"."		        20%";
				$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO 50KM POR EVENTO"."	NO APLICA";
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
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
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
$desglose="";

  $query1 = "SELECT * FROM datos   WHERE placas='$placas'  and serie='$serie'   ";   //WHERE estatus='0'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";
  
    while( $row = $result1->fetch_assoc() ){
       
	   $placas2=$row['placas'] ;
	   $serie2=$row['serie'] ;
	    $folio=$row['folio']+1 ;

	}
	
	
	if($placas2=="" and $serie2=="")
{
  

	
	
	$query1 = " INSERT INTO `mutua402_mps`.`datos` (

`nombre` ,
`domicilio` ,
`exterior` ,
`entre` ,
`col` ,
`municipio` ,
`domcom` ,
`estado_civil` ,
`fecha_n` ,
`tel` ,
`cp` ,
`marca` ,
`tipo` ,
`ano` ,
`color` ,
`placas` ,
`version` ,
`serie` ,
`nmotor` ,
`expedicion` ,
`vigencia` ,
`cobertura` ,
`deducible` ,
`costo_total` ,
`plazo` ,
`pagoinicial` ,
`pagomensual` ,
`observaciones` ,
`folio` ,
`captura` ,
`ediciones` ,
`fecha_modificacion` ,
`desglose`,`vendedor`,`cobrador`,`ano2`,`uno`,`dos`,`tres`,`cuatro`,`cinco`,`seis`,`siete`,`ocho`,`nueve`,`diez`,`tel2`,`costo_letra`,`asis`,`robo`,`dano`,`cristal`,`rca`,`gastos`,`grua`,`plataforma`,`vial`,`med`,`muerte`)
VALUES ('$nombre',
'$domicilio ',
'$exterior',
'$entre ',
'$col ',
'$municipio',
'$domcom ',
'$estado_civil ',
'$fecha_n ',
'$tel',
'$cp ',
'$marca',
'$tipo ',
'$ano ',
'$color ',
'$placas',
'$version ',
'$serie',
'$nmotor ',
'$expedicion ',
'$vigencia',
'$cobertura',
'$deducible ',
'$costo_total ',
'$plazo ',
'$pagoinicial ',
'$pagomensual',
'$observaciones ',
Null,
'$captura ',
'$ediciones ',
'$fecha_modificacion ',
'$desglose','$vendedor','$cobrador','$ano2','Pendiente','Pendiente','Pendiente','Pendiente','Pendiente','Pendiente','Pendiente','Pendiente','Pendiente','Pendiente','$tel2','$costo_letra','$asis','$robo','$dano','$cristal','$rca','$gastos','$grua','$plataforma','$vial','$med','$muerte')";
	
	
	$result = mysqli_query($conexion,$query1);
	mysqli_free_result($result);
	
	
	

	
	

                    $query1 = "SELECT * FROM datos    ";   //WHERE estatus='0'
  $result1 = mysqli_query($conexion,$query1);
  $resultado = "";
  
    while( $row = $result1->fetch_assoc() ){
       
	
	    $folio=$row['folio'] ;

	}
      
    ?>



 <?php
      //CABECERA DEL SITIO
      require_once('../../public/html/header.php');
      
	
      
    ?>
<link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">

  	<!--Cabecera-->
	<div class="espacio-header"></div>

	<form id="form1" name="registrar" action="../../inicio.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-4 push-4">
				<div class="panel">
				<div class="row">
					<br>
					
					
					<div class="col-10 push-1"><p class="titulo-form">REGISTRO EXITOSO FOLIO: <?php echo $folio;?>  </p></div>

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
      <?php
}
else{
     require_once('../../public/html/header.php');
	 ?>
     
     <link href="../../public/css/estilo.css" rel="stylesheet" type="text/css">

  	<!--Cabecera-->
	<div class="espacio-header"></div>
	<form id="form1" name="registrar" action="../../inicio.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-4 push-4">
				<div class="panel">
				<div class="row">
					<br>
      
						
					<div class="col-10 push-1"><p class="titulo-form">REGISTRO DUPLICADO</p></div>

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
      <?php
}
    ?>

	
</body>
</html>