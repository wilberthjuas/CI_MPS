<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Poliza_Model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function savePoliza($save){
		$placas = strtoupper($save['placas']);
		$serie 	= strtoupper($save['serie']);
		//VALIDAR QUE LAS PLACAS NO EXITAN
		$query = $this->db->query("SELECT * FROM vehiculo WHERE UPPER(placas)='$placas' AND UPPER(serie)='$serie' ");
		if( $query->num_rows() == 0 ){	
		
			//CLIENTE
			$this->db->set('nombre',		$save['nombre']);
			$this->db->set('domicilio',		$save['domicilio']);
			$this->db->set('exterior',		$save['exterior']);
			$this->db->set('entre',			$save['entre']);
			$this->db->set('colonia',		$save['col']);
			$this->db->set('municipio',		$save['municipio']);
			$this->db->set('domcom',		'');
			$this->db->set('estado_civil',	'');
			$this->db->set('fecha_n',		'');
			$this->db->set('telefono',		$save['telefono']);
			$this->db->set('cp',			$save['cp']);
			$this->db->insert('cliente');
			$idCliente = $this->db->insert_id();

			//VEHICULO
			$this->db->set('id_cliente',	$idCliente);
			$this->db->set('marca',			$save['marca']);
			$this->db->set('tipo',			$save['tipo']);
			$this->db->set('ano',			$save['ano']);
			$this->db->set('color',			$save['color']);
			$this->db->set('placas',		$placas);
			$this->db->set('version',		$save['version']);
			$this->db->set('serie',			$serie);
			$this->db->set('nmotor',		$save['nmotor']);
			$this->db->set('ocupantes',		$save['ocupantes']);
			$this->db->insert('vehiculo');
			$idVehiculo = $this->db->insert_id();

			//POLIZA
			$this->db->set('id_vehiculo',		$idVehiculo);
			$this->db->set('id_cobertura',		$save['cobertura']);
			$this->db->set('expedicion',		$save['expedicion']);
			$this->db->set('vigencia',			$save['vigencia']);
			$this->db->set('deducible',			$save['deducible']);
			$this->db->set('costo_total',		$save['costo_total']);
			$this->db->set('plazo',				$save['plazo']);
			$this->db->set('pagoinicial',		$save['pagoinicial']);
			$this->db->set('pagomensual',		$save['pagomensual']);
			$this->db->set('observaciones',		$save['observaciones']);
			$this->db->set('captura',			$save['captura']);
			$this->db->set('ediciones',			'');
			$this->db->set('fecha_modificacion',date("d-m-Y") );
			$this->db->set('vendedor',			$save['vendedor']);
			$this->db->set('cobrador',			$save['cobrador']);
			$this->db->set('ano2',				date('Y'));
			$this->db->set('bit',				0);
			$this->db->set('motivo',			'');
			$this->db->set('plataforma',		$save['plataforma']);
			$this->db->insert('polizas');
			$idPoliza = $this->db->insert_id();

			//GENERAR ALGORITMO PARA PAGOS
			for ($i = 1; $i <= 12; $i++) {
			    $this->db->set('id_poliza',		$idPoliza);
				$this->db->set('num_pago',		$i);
				if($i == 1){
					$this->db->set('estatus',	'Pagado En Tarjeta');
					$this->db->set('monto',		substr($save['pagomensual'],1));
					$this->db->set('fecha',		date("Y-m-d"));
					$this->db->set('recibo',	date("Y-m-d"));
					$this->db->set('folio',		date("YmdHms"));
				}
				else{
					$this->db->set('estatus',	'Pendiente');	
				}
				
				$this->db->insert('pagos');
			}
			$save['idPoliza'] = $idPoliza;
			$number = $this->notifyNewPolicy($save);

			if($number){
				return $idPoliza;	
			}
			return false;
			

		}
		else{
			return false;
		}
	}

	public function getPolicy($poliza){
		$query = $this->db->query("
			SELECT 
	            p.id  AS 'folio',
	            c.nombre ,
	            c.domicilio ,
	            c.exterior ,
	            c.colonia,
	            c.municipio,
	            c.telefono,
	            v.marca ,
	            v.tipo,
	            v.ano ,
	            v.color,
	            v.placas ,
	            v.version,
	            v.serie,
	            v.nmotor,
	            v.ocupantes,
	            p.expedicion,
	            p.vigencia,
	            p.ano2,
	            p.id_cobertura as 'cobertura',
	            p.pagomensual,
	            p.costo_total,
	            p.vendedor,
	            p.cobrador,
	            p.plataforma
	        FROM polizas p 
	        INNER JOIN vehiculo v ON p.id_vehiculo = v.id 
	        INNER JOIN cliente c ON c.id = v.id_cliente 
	        WHERE p.id = $poliza
			");
    	return $query->result_array();
	}

	public function getMobileData($poliza){
		$qry = "
			SELECT 
                p.id  AS 'folio',
                c.nombre ,
                c.domicilio ,
                c.exterior ,
                c.colonia ,
                c.municipio ,
                c.telefono,
                c.cp,
                v.tipo,
                v.serie,
                v.nmotor,
                v.placas ,
                v.marca ,
                v.ano ,
                v.color ,
                v.version,
                p.id_cobertura,
                p.expedicion,
                p.vigencia,
                p.pagomensual ,
                p.vendedor,
                p.plazo ,
                p.pagoinicial,
                p.plataforma
            FROM polizas p 
            INNER JOIN vehiculo v ON p.id_vehiculo = v.id 
            INNER JOIN cliente c ON c.id = v.id_cliente
		";
		if(is_numeric($poliza)){
			$qry = $qry."WHERE p.id = $poliza AND p.`bit` = 0";
		}
		else {
			$qry = $qry."WHERE UPPER(v.placas) = UPPER('".$poliza."') AND p.`bit` = 0";
		}

		$query = $this->db->query($qry);
		return $query->result_array();
	}
	

	public function getCobertura($id){
		$query = $this->db->query("SELECT * FROM coberturas WHERE id = $id");
		return $query->result_array();
	}

	public function updatePolicy($update){
		$this->db->trans_start();
		$folio = $update['folio'];
		//POLIZA
		$this->db->set('expedicion',$update['expedicion']);
		$this->db->set('vigencia',$update['vigencia']);
		$this->db->set('id_cobertura',$update['cobertura']);
		$this->db->set('costo_total',$update['costo_total']);
		$this->db->set('pagomensual',$update['pagomensual']);
		$this->db->set('vendedor',$update['vendedor']);
		$this->db->set('cobrador',$update['cobrador']);
		$this->db->set('ano2',$update['ano2']);
		$this->db->set('plataforma',$update['plataforma']);
		$this->db->where('id', $folio);
		$this->db->update('polizas');

		$query = $this->db->query("SELECT id_vehiculo FROM polizas WHERE id = '$folio' ");
		$poliza = $query->row();

		//VEHICULO
		$this->db->set('marca',$update['marca']);
		$this->db->set('tipo',$update['tipo']);
		$this->db->set('ano',$update['ano']);
		$this->db->set('color',$update['color']);
		$this->db->set('placas',$update['placas']);
		$this->db->set('version',$update['version']);
		$this->db->set('serie',$update['serie']);
		$this->db->set('nmotor',$update['nmotor']);
		$this->db->set('ocupantes',$update['ocupantes']);
		$this->db->where('id', $poliza->id_vehiculo);
		$this->db->update('vehiculo');

		$query1 = $this->db->query("SELECT id_cliente FROM vehiculo WHERE id = $poliza->id_vehiculo ");
		$vehiculo = $query1->row();
		
		//CLIENTE
		$this->db->set('nombre',$update['nombre']);
		$this->db->set('domicilio',$update['domicilio']);
		$this->db->set('exterior',$update['exterior']);
		$this->db->set('entre',$update['entre']);
		$this->db->set('colonia',$update['col']);
		$this->db->set('municipio',$update['municipio']);
		$this->db->set('telefono',$update['telefono']);
		$this->db->where('id', $vehiculo->id_cliente);
		$this->db->update('cliente');

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

	function migrateData(){
		$query = $this->db->query("SELECT * FROM datos ");
		foreach ($query->result() as $row) {
			//VALIDATE 
			$this->db->where('id',$row->folio);
			$qry = $this->db->get('polizas');

			if( empty($qry->result()) ){
				$this->db->like('cobertura', $row->cobertura);
				$query1 = $this->db->get("coberturas");

				if( empty($query1->result()) ){
					$this->db->set('cobertura',	$row->cobertura);
					$this->db->set('rca',		$row->rca);
					$this->db->set('robo',		$row->robo);
					$this->db->set('dano',		$row->dano);
					$this->db->set('gastos',	$row->gastos);
					$this->db->set('medico',	$row->med);
					$this->db->set('asistencia',$row->asis);
					$this->db->set('cristal',	$row->cristal);
					$this->db->set('vial',		$row->vial);
					$this->db->set('muerte',	$row->muerte);

					$this->db->insert('coberturas');

					$idCobertura = $this->db->insert_id();
				}
				else{
					$cob = $query1->row();
					$idCobertura = $cob->id;
				}

				//INSERT CLIENTE
				$this->db->set('nombre',	$row->nombre);
				$this->db->set('domicilio',	$row->domicilio);
				$this->db->set('exterior',	$row->exterior);
				$this->db->set('entre',		$row->entre);
				$this->db->set('colonia',	$row->col);
				$this->db->set('municipio',	$row->municipio);
				$this->db->set('domcom',	$row->domcom);
				$this->db->set('estado_civil',$row->estado_civil);
				$this->db->set('fecha_n',	$row->fecha_n);
				$this->db->set('telefono',	$row->tel);
				$this->db->set('cp',		$row->cp);
				$this->db->insert('cliente');
				$idCliente = $this->db->insert_id();

				//INSERT VEHICULO
				$this->db->set('id_cliente',	$idCliente);
				$this->db->set('marca',			$row->marca);
				$this->db->set('tipo',			$row->tipo);
				$this->db->set('ano',			$row->ano);
				$this->db->set('color',			$row->color);
				$this->db->set('placas',		$row->placas);
				$this->db->set('version',		$row->version);
				$this->db->set('serie',			$row->serie);
				$this->db->set('nmotor',		$row->nmotor);
				$this->db->insert('vehiculo');
				$idVehiculo = $this->db->insert_id();

				//INSERT POLIZA
				$this->db->set('id_vehiculo',	$idVehiculo);
				$this->db->set('id_cobertura',	$idCobertura);
				$this->db->set('folio_prev',	$row->folio);
				$this->db->set('expedicion',	$row->expedicion);
				$this->db->set('vigencia',		$row->vigencia);
				$this->db->set('deducible',		$row->deducible);
				$this->db->set('costo_total',	$row->costo_total);
				$this->db->set('plazo',			$row->plazo);
				$this->db->set('pagoinicial',	$row->pagoinicial);
				$this->db->set('pagomensual',	$row->pagomensual);
				$this->db->set('observaciones',	$row->observaciones);
				$this->db->set('captura',		$row->captura);
				$this->db->set('ediciones',		$row->ediciones);
				$this->db->set('fecha_modificacion', $row->fecha_modificacion);
				$this->db->set('vendedor',		$row->vendedor);
				$this->db->set('cobrador',		$row->cobrador);
				$this->db->set('ano2',			$row->ano2);
				$this->db->set('bit',			$row->bit);
				$this->db->set('motivo',		$row->mot);
				$this->db->set('plataforma',	$row->plataforma);
				$this->db->set('id',			$row->folio);
				$this->db->insert('polizas');
				$idPoliza = $this->db->insert_id();

				//INSERT GRUAS
				//GRUA1
				if(strlen($row->grua1) > 0){
					$this->db->set('id_poliza',	$idPoliza);
					$this->db->set('grua',		$row->grua1);
					$this->db->set('comentario',$row->com1);
					$this->db->insert('gruas');	
				}
				
				//GRUA2
				if(strlen($row->grua2) > 0){
					$this->db->set('id_poliza',	$idPoliza);
					$this->db->set('grua',		$row->grua2);
					$this->db->set('comentario',$row->com2);
					$this->db->insert('gruas');	
				}
				

				//INSERT PAGOS
				$this->db->set('id_poliza',	$idPoliza);
				$this->db->set('num_pago',	'1');
				$this->db->set('estatus',	$row->uno);
				$this->db->set('folio',		$row->folio1);
				$this->db->set('monto',		$row->monto1);
				$this->db->set('cobrador',	$row->cobra1);
				$this->db->set('fecha',		$row->fech1);
				$this->db->set('recibo',	$row->re1);
				$this->db->insert('pagos');

				$this->db->set('id_poliza',	$idPoliza);
				$this->db->set('num_pago',	'2');
				$this->db->set('estatus',	$row->dos);
				$this->db->set('folio',		$row->folio2);
				$this->db->set('monto',		$row->monto2);
				$this->db->set('cobrador',	$row->cobra2);
				$this->db->set('fecha',		$row->fech2);
				$this->db->set('recibo',	$row->re2);
				$this->db->insert('pagos');

				$this->db->set('id_poliza',	$idPoliza);
				$this->db->set('num_pago',	'3');
				$this->db->set('estatus',	$row->tres);
				$this->db->set('folio',		$row->folio3);
				$this->db->set('monto',		$row->monto3);
				$this->db->set('cobrador',	$row->cobra3);
				$this->db->set('fecha',		$row->fech3);
				$this->db->set('recibo',	$row->re3);
				$this->db->insert('pagos');

				$this->db->set('id_poliza',	$idPoliza);
				$this->db->set('num_pago',	'4');
				$this->db->set('estatus',	$row->cuatro);
				$this->db->set('folio',		$row->folio4);
				$this->db->set('monto',		$row->monto4);
				$this->db->set('cobrador',	$row->cobra4);
				$this->db->set('fecha',		$row->fech4);
				$this->db->set('recibo',	$row->re4);
				$this->db->insert('pagos');

				$this->db->set('id_poliza',	$idPoliza);
				$this->db->set('num_pago',	'5');
				$this->db->set('estatus',	$row->cinco);
				$this->db->set('folio',		$row->folio5);
				$this->db->set('monto',		$row->monto5);
				$this->db->set('cobrador',	$row->cobra5);
				$this->db->set('fecha',		$row->fech5);
				$this->db->set('recibo',	$row->re5);
				$this->db->insert('pagos');

				$this->db->set('id_poliza',	$idPoliza);
				$this->db->set('num_pago',	'6');
				$this->db->set('estatus',	$row->seis);
				$this->db->set('folio',		$row->folio6);
				$this->db->set('monto',		$row->monto6);
				$this->db->set('cobrador',	$row->cobra6);
				$this->db->set('fecha',		$row->fech6);
				$this->db->set('recibo',	$row->re6);
				$this->db->insert('pagos');

				$this->db->set('id_poliza',	$idPoliza);
				$this->db->set('num_pago',	'7');
				$this->db->set('estatus',	$row->siete);
				$this->db->set('folio',		$row->folio7);
				$this->db->set('monto',		$row->monto7);
				$this->db->set('cobrador',	$row->cobra7);
				$this->db->set('fecha',		$row->fech7);
				$this->db->set('recibo',	$row->re7);
				$this->db->insert('pagos');

				$this->db->set('id_poliza',	$idPoliza);
				$this->db->set('num_pago',	'8');
				$this->db->set('estatus',	$row->ocho);
				$this->db->set('folio',		$row->folio8);
				$this->db->set('monto',		$row->monto8);
				$this->db->set('cobrador',	$row->cobra8);
				$this->db->set('fecha',		$row->fech8);
				$this->db->set('recibo',	$row->re8);
				$this->db->insert('pagos');

				$this->db->set('id_poliza',	$idPoliza);
				$this->db->set('num_pago',	'9');
				$this->db->set('estatus',	$row->nueve);
				$this->db->set('folio',		$row->folio9);
				$this->db->set('monto',		$row->monto9);
				$this->db->set('cobrador',	$row->cobra9);
				$this->db->set('fecha',		$row->fech9);
				$this->db->set('recibo',	$row->re9);
				$this->db->insert('pagos');

				$this->db->set('id_poliza',	$idPoliza);
				$this->db->set('num_pago',	'10');
				$this->db->set('estatus',	$row->diez);
				$this->db->set('folio',		$row->folio10);
				$this->db->set('monto',		$row->monto10);
				$this->db->set('cobrador',	$row->cobra10);
				$this->db->set('fecha',		$row->fech10);
				$this->db->set('recibo',	$row->re10);
				$this->db->insert('pagos');

				$this->db->set('id_poliza',	$idPoliza);
				$this->db->set('num_pago',	'11');
				$this->db->set('estatus',	$row->once);
				$this->db->set('folio',		$row->folio11);
				$this->db->set('monto',		$row->monto11);
				$this->db->set('cobrador',	$row->cobra11);
				$this->db->set('fecha',		$row->fech11);
				$this->db->set('recibo',	$row->re11);
				$this->db->insert('pagos');
			}
		}
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

	public function getPoliza_byClient($client_id)
	{
		$query = $this->db->select('P.*, V.placas')
					->from('polizas P')
					->join('vehiculo V', 'P.id_vehiculo = V.id')
					->join('cliente C', 'V.id_cliente = C.id')
					->where('V.id_cliente', $client_id)
					->get();

		return $query->row() ? $query->row() : [];  			
	}


	public function notifyNewPolicy($save){
		$query = $this->db->query("SELECT * FROM correos_notificacion WHERE tipo='POLIZA' ");
		$notifiaciones = $query->result();
		//$msg = "";
		foreach( $notifiaciones  as $not){
			try {
	            $destinatario = $not->correo; 
	            $asunto = "REGISTRO NUEVA POLIZA #".$save['idPoliza']; 
	            $cuerpo = ' 
	            <html> 
	                <head> 
	                   <title></title> 
	                </head> 
	                <body> 
	                    <p> 
	                        El usuario '.$save['captura'].' registro la poliza #'.$save['idPoliza'].' a nombre de '.$save['nombre'].'.<br>
	                        Para revisar los detalles de la poliza consulte <a href="https://multiplataformaysimilaresmps.com.mx/Visor/visorPolizaWeb/'.$save['idPoliza'].'">Aqui</a>
	                    </p> 
	                </body> 
	            </html> '; 
	            $headers = "MIME-Version: 1.0\r\n"; 
	            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	            $headers .= "<noreply@noreply.com>\r\n"; 
	            mail($destinatario,$asunto,$cuerpo,$headers);     
	        } catch (Exception $e) {
	            throw new Exception('Error al enviar el mail', 1);
	        }
	        //msg = $msg.$not->correo;
		}
		return true;
	}
}

/*
*/

/* End of file Poliza_Model.php */
/* Location: ./application/models/Poliza_Model.php */