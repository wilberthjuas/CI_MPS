<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Registro_Model extends CI_Model {
  
  public function __construct()
  {
    parent::__construct();
    //Do your magic here
    $this->load->database();
  }

  public function getData($searchTerm) {
    
    $query = $this->db->query("
      SELECT 
              p.id  AS 'folio',
              c.nombre ,
              c.domicilio ,
              c.exterior ,
              c.colonia,
              c.municipio,
              c.telefono,
              v.tipo,
              v.placas ,
              v.serie,
              v.nmotor,
              p.expedicion,
              p.ano2,
              (SELECT cobertura FROM coberturas WHERE id = p.id_cobertura ) as 'cobertura',
              p.pagomensual,
              p.vendedor,
              p.cobrador,
              p.bit
          FROM polizas p 
          INNER JOIN vehiculo v ON p.id_vehiculo = v.id 
          INNER JOIN cliente c ON c.id = v.id_cliente 
          WHERE p.id = $searchTerm
      ");
    return $query->result_array();
  }

  
  public function defineUpdate($info){
    $query = "";
    $pag=$info['pag'];
    $fol=$info['fol'];
    $cob=$info['cob'];	
    $a=$info['folio'];
    $mon=$info['mon'];	
    $fec=$info['fec'];
    $re=$info['re'];
    

    $query = $this->db->query("SELECT * FROM pagos WHERE id_poliza = '$a' ORDER BY id ASC ");
    $pagos = $query->result_array();
    foreach( $pagos as $pago ){
      if($pago['estatus'] == "Pendiente" OR $pago['estatus']== ""){

        $this->db->set('estatus',$pag);
        $this->db->set('folio',$fol);
        $this->db->set('monto',$mon);
        $this->db->set('cobrador',$cob);
        $this->db->set('fecha',$fec);
        $this->db->set('recibo',$re);
        $this->db->where('id', $pago['id']);
        $this->db->update('pagos');
        return true;
      }
    }
    return false;
  }
  
}