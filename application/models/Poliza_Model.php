<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliza_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function savePoliza($save){
		$placas = $save['placas'];
		$serie 	= $save['serie'];
		$query = $this->db->query("SELECT * FROM datos WHERE placas='$placas' AND serie='$serie' ");
		if( $query->num_rows() == 0 ){	
			$cobertura = $save['cobertura'];
			
			$primas = $this->getPrimas($cobertura);
			$rca 	= $primas['rca'];
			$robo 	= $primas['robo'];
			$dano 	= $primas['dano'];
			$gastos = $primas['gastos'];
			$med 	= $primas['med'];
		    $asis 	= $primas['asis']; 
		    $cristal= $primas['cristal'];
			$vial 	= $primas['vial'];
			$muerte = $primas['muerte'];	

			$this->db->set('rca',$rca);
			$this->db->set('robo',$robo);
			$this->db->set('dano',$dano);
			$this->db->set('gastos',$gastos);
			$this->db->set('med',$med);
			$this->db->set('asis',$asis);
			$this->db->set('cristal',$cristal);
			$this->db->set('vial',$vial);
			$this->db->set('muerte',$muerte);
			$this->db->set('nombre',$save['nombre']);
			$this->db->set('domicilio',$save['domicilio']);
			$this->db->set('exterior',$save['exterior']);
			$this->db->set('entre',$save['entre']);
			$this->db->set('col',$save['col']);
			$this->db->set('municipio',$save['municipio']);
			$this->db->set('domcom','');
			$this->db->set('estado_civil','');
			$this->db->set('fecha_n','');
			$this->db->set('tel',$save['telefono']);
			$this->db->set('cp',$save['cp']);
			$this->db->set('marca',$save['marca']);
			$this->db->set('tipo',$save['tipo']);
			$this->db->set('ano',$save['ano']);
			$this->db->set('color',$save['color']);
			$this->db->set('placas',$placas);
			$this->db->set('version',$save['version']);
			$this->db->set('serie',$save['serie']);
			$this->db->set('nmotor',$save['nmotor']);
			$this->db->set('expedicion',$save['expedicion']);
			$this->db->set('vigencia',$save['vigencia']);
			$this->db->set('cobertura',$save['cobertura']);
			$this->db->set('deducible',$save['deducible']);
			$this->db->set('costo_total',$save['costo_total']);
			$this->db->set('plazo',$save['plazo']);
			$this->db->set('pagoinicial',$save['pagoinicial']);
			$this->db->set('pagomensual',$save['pagomensual']);
			$this->db->set('observaciones',$save['observaciones']);
			$this->db->set('captura',$save['captura']);
			$this->db->set('ediciones','');
			$this->db->set('fecha_modificacion',date("d-m-Y") );
			$this->db->set('desglose','');
			$this->db->set('vendedor',$save['vendedor']);
			$this->db->set('cobrador',$save['cobrador']);
			$this->db->set('ano2',date('Y'));
			$this->db->set('bit',0);
			$this->db->set('plataforma',$save['plataforma']);

			$this->db->insert('datos');
			return $this->db->insert_id();
		}
		else{
			return false;
		}
	}

	function getPolicy($policy){
		$query = $this->db->query("SELECT * FROM datos WHERE folio='$policy'");
    	return $query->result_array();
	}

	function updatePolicy($update){
		$cobertura = $update['cobertura'];
			
		$primas = $this->getPrimas($cobertura);
		$rca 	= $primas['rca'];
		$robo 	= $primas['robo'];
		$dano 	= $primas['dano'];
		$gastos = $primas['gastos'];
		$med 	= $primas['med'];
	    $asis 	= $primas['asis']; 
	    $cristal= $primas['cristal'];
		$vial 	= $primas['vial'];
		$muerte = $primas['muerte'];	

		$this->db->trans_start();
		$this->db->set('rca',$rca);
		$this->db->set('robo',$robo);
		$this->db->set('dano',$dano);
		$this->db->set('gastos',$gastos);
		$this->db->set('med',$med);
		$this->db->set('asis',$asis);
		$this->db->set('cristal',$cristal);
		$this->db->set('vial',$vial);
		$this->db->set('muerte',$muerte);
		$this->db->set('nombre',$update['nombre']);
		$this->db->set('domicilio',$update['domicilio']);
		$this->db->set('exterior',$update['exterior']);
		$this->db->set('entre',$update['entre']);
		$this->db->set('col',$update['col']);
		$this->db->set('municipio',$update['municipio']);
		$this->db->set('tel',$update['telefono']);
		$this->db->set('marca',$update['marca']);
		$this->db->set('tipo',$update['tipo']);
		$this->db->set('ano',$update['ano']);
		$this->db->set('color',$update['color']);
		$this->db->set('placas',$update['placas']);
		$this->db->set('version',$update['version']);
		$this->db->set('serie',$update['serie']);
		$this->db->set('nmotor',$update['nmotor']);
		$this->db->set('expedicion',$update['expedicion']);
		$this->db->set('vigencia',$update['vigencia']);
		$this->db->set('cobertura',$cobertura);
		$this->db->set('costo_total',$update['costo_total']);
		$this->db->set('pagomensual',$update['pagomensual']);
		$this->db->set('vendedor',$update['vendedor']);
		$this->db->set('cobrador',$update['cobrador']);
		$this->db->set('ano2',$update['ano2']);
		$this->db->set('plataforma',$update['plataforma']);

		$this->db->where('folio', $update['folio']);
		$this->db->update('datos');
		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	function fillCoberturas(){
		$coberturas = array(
			"POLIZA PARTICULAR AMPLIA 140 MIL",
			"POLIZA PARTICULAR AMPLIA 130 MIL",
			"POLIZA PARTICULAR AMPLIA 120 MIL",
			"POLIZA PARTICULAR AMPLIA 110 MIL",
			"POLIZA PARTICULAR AMPLIA 100 MIL",
			"POLIZA PARTICULAR AMPLIA 90 MIL",
			"VEHICULO PARTICULAR AMPLIA HASTA $60,000",
			"COTIZACION POLIZA MULTIPLATAFORMAS 4 MILLONES EN RC",
			"COTIZACION PARTICULAR RC ECONOMICA CON GRUA",
			"COTIZACION MULTIPLATAFORMAS PROMO JULIO 2021",
			"AMPLIA AUTOMOVIL PARTICULAR HASTA $50,000",
			"AMPLIA AUTOMOVIL PARTICULAR HASTA $70,000",
			"COBERTURA BASICA MULTIPLATAFORMA",
			"AMPLIA AUTOMOVIL PARTICULAR HASTA $80,000",
			"TERCEROS CON GRUA PICKUP",
			"AMPLIA PICKUP HASTA $50,000",
			"AMPLIA PICKUP HASTA $60,000",
			"AMPLIA PICKUP HASTA $70,000",
			"AMPLIA PICKUP HASTA $80,000",
			"AMPLIA PICKUP HASTA $90,000",
			"AMPLIA PICKUP HASTA $100,000",
			"AMPLIA PICKUP HASTA $110,000",
			"AMPLIA PICKUP HASTA $120,000",
			"AMPLIA PICKUP HASTA $130,000",
			"AMPLIA PICKUP HASTA $140,000",
			"AMPLIA MOTO",
			"INTERMEDIA MOTO",
			"TERCEROS MOTO"
		);

		foreach ($coberturas as $cobertura) {

			$this->db->like('cobertura', $cobertura);
			$query = $this->db->get("coberturas");
			if(empty($query->result())){
				$primas = $this->getPrimas($cobertura);
				$this->db->set('cobertura',	$cobertura);
				$this->db->set('rca',		$primas['rca']);
				$this->db->set('robo',		$primas['robo']);
				$this->db->set('dano',		$primas['dano']);
				$this->db->set('gastos',	$primas['gastos']);
				$this->db->set('medico',	$primas['med']);
				$this->db->set('asistencia',$primas['asis']);
				$this->db->set('cristal',	$primas['cristal']);
				$this->db->set('vial',		$primas['vial']);
				$this->db->set('muerte',	$primas['muerte']);

				$this->db->insert('coberturas');
			}
		}
		return true;
	}

	private function getPrimas($cobertura){
		$rca="";
		$robo="";
		$dano="";
		$gastos="";
		$med="";
        $asis=""; 
        $cristal="";
		$vial="";
		$muerte="";	
		switch ($cobertura) {
		    case "POLIZA PARTICULAR AMPLIA 140 MIL":
		        $rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
				$robo="ROBO TOTAL"."			        $140,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          Amparada"."		        20%";
				$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
		        break;
		    case "POLIZA PARTICULAR AMPLIA 130 MIL":
		        $rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
				$robo="ROBO TOTAL"."			        $130,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          Amparada"."		        20%";
				$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
		        break;
		    case "POLIZA PARTICULAR AMPLIA 120 MIL":
		        $rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
				$robo="ROBO TOTAL"."			        $120,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          Amparada"."		        20%";
				$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
		        break;
	        case "POLIZA PARTICULAR AMPLIA 110 MIL":
	        	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
				$robo="ROBO TOTAL"."			        $110,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          Amparada"."		        20%";
				$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
	        	break;
	        case "POLIZA PARTICULAR AMPLIA 100 MIL":
	        	$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
				$robo="ROBO TOTAL"."			        $100,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          Amparada"."		        20%";
				$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
	        	break;
        	case "POLIZA PARTICULAR AMPLIA 90 MIL":
        		$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
				$robo="ROBO TOTAL"."			        $90,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          Amparada"."		        20%";
				$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
	        	break;
        	case "VEHICULO PARTICULAR AMPLIA HASTA $60,000":
        		$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."         NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $60,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		     NO APLICA";
				$vial="ASISTENCIA VIAL"."	   2 GRUAS POR AÑO MAXIMO 50KM"."    NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
        		break;	
    		case "COTIZACION POLIZA MULTIPLATAFORMAS 4 MILLONES EN RC":
    			$rca="RESPONSABILIDAD CIVIL"."		    $4,000,000.00"."         NO APLICA";
				$robo="ROBO TOTAL"."			        $150,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		        15% ";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 5000 UMAS"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      $50,000.00"."          NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          Amparada"."		        20%";
				$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $50,000.00"."		     NO APLICA";
    			break;
			case "COTIZACION PARTICULAR RC ECONOMICA CON GRUA":
				$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        NO APLICA"."		     NO APLICA";
				$dano="DA&Ntilde;OS MATERIALES"."		NO APLICA"."		     NO APLICA ";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000"."             NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	    NO APLICA"."             NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			        NO APLICA"."		     NO APLICA";
				$vial="ASISTENCIA VIAL"."	    1 GRUA PO AÑO MAXIMO 50 KM"."	 NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "COTIZACION MULTIPLATAFORMAS PROMO JULIO 2021":
				$rca="RESPONSABILIDAD CIVIL"."		    $1,500,000.00"."         NO APLICA";
				$robo="ROBO TOTAL"."			        $130,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  15% VALOR DEL DA&Ntilde;O PROPIO";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $250,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      $50,000.00"."          NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          Amparada"."		        20%";
				$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO $2500 POR EVENTO"."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $50,000.00"."		     NO APLICA";
				break;
			case "AMPLIA AUTOMOVIL PARTICULAR HASTA $50,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $50,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "AMPLIA AUTOMOVIL PARTICULAR HASTA $70,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $70,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "COBERTURA BASICA MULTIPLATAFORMA":
				$rca="RESPONSABILIDAD CIVIL"."		    $350,000.00"."         NO APLICA";
				$robo="ROBO TOTAL"."			        $100,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $80,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."          NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          Amparada"."		        20%";
				$vial="ASISTENCIA VIAL"."	 2 GRUAS POR A&Ntilde;O MAXIMO 50KM POR EVENTO"."	NO APLICA";
				break;
			case "AMPLIA AUTOMOVIL PARTICULAR HASTA $80,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $700,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $80,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "TERCEROS CON GRUA PICKUP":
				$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        NO APLICA"."		     NO APLICA";
				$dano="DA&Ntilde;OS MATERIALES"."		NO APLICA"."		     NO APLICA ";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000"."             NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	    NO APLICA"."             NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			        NO APLICA"."		     NO APLICA";
				$vial="ASISTENCIA VIAL"."	    1 GRUA PO AÑO MAXIMO 50 KM"."	 NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "AMPLIA PICKUP HASTA $50,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $50,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "AMPLIA PICKUP HASTA $60,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $60,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "AMPLIA PICKUP HASTA $70,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $70,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "AMPLIA PICKUP HASTA $80,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $80,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "AMPLIA PICKUP HASTA $90,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $90,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "AMPLIA PICKUP HASTA $100,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $100,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "AMPLIA PICKUP HASTA $110,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $110,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "AMPLIA PICKUP HASTA $120,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $120,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "AMPLIA PICKUP HASTA $130,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $130,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "AMPLIA PICKUP HASTA $140,000":
				$rca="RESPONSABILIDAD CIVIL"."		    $450,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        HASTA $140,000.00"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  Amparada"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $50,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  Amparada"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				$muerte="MUERTE CONDUCTOR"."			 $30,000.00"."		     NO APLICA";
				break;
			case "AMPLIA MOTO":
				$rca="RESPONSABILIDAD CIVIL"."		    $350,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        AMPARADA"."		        10%";
				$dano="DA&Ntilde;OS MATERIALES"."		  AMPARADA"."		  5% VALOR COMERCIAL";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $40,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  AMPARADA"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        20%";
				$vial="ASISTENCIA VIAL"."	     2 GRUAS POR AÑO MAXIMO 50KM "."	NO APLICA";
				break;
			case "INTERMEDIA MOTO":
				$rca="RESPONSABILIDAD CIVIL"."		    $350,000.00"."           NO APLICA";
				$robo="ROBO TOTAL"."			        NO APLICA"."		        NO APLICA";
				$dano="DA&Ntilde;OS MATERIALES"."		  NO APLICA"." 
				NO APLICA";
				$gastos="GASTOS MEDICOS OCUPANTES"."	 $40,000.00"."          NO APLICA";
				$med="GASTOS MEDICOS CONDUCTOR"."	      NO APLICA"."           NO APLICA";
                $asis="ASESORIA LEGAL"."                  AMPARADA"."            NO APLICA"    ; 
                $cristal="CRISTALES"."			          NO APLICA"."		        NO APLICA";
				$vial="ASISTENCIA VIAL"."	     1 GRUA POR AÑO MAXIMO 50KM "."	NO APLICA";
				break;
			case "TERCEROS MOTO":
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
				break;
		}

		$response = array(
			'rca'=> $rca,
			'robo'=>$robo,
			'dano'=>$dano,
			'gastos'=>$gastos,
			'med'=>$med,
			'asis'=>$asis,
			'cristal'=>$cristal,
			'vial'=>$vial,
			'muerte'=>$muerte
		);
		return $response;
	}

}

/*
*/

/* End of file Poliza_Model.php */
/* Location: ./application/models/Poliza_Model.php */