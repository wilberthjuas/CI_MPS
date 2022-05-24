<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Tarjeta_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->database();
    }

    public function getData($a,$b) {
        $query = "
            SELECT 
                p.id            AS 'folio',
                c.nombre ,
                c.domicilio ,
                c.exterior ,
                c.colonia ,
                c.municipio ,
                c.telefono,
                c.entre,
                v.tipo,
                v.placas ,
                v.marca,
                v.color,
                v.ano,
                (SELECT cb.cobertura FROM coberturas cb WHERE cb.id = p.id_cobertura  ) AS 'cobertura',
                p.expedicion,
                p.ano2,
                p.pagomensual ,
                p.vendedor,
                p.cobrador,
                p.costo_total
            FROM polizas p 
            INNER JOIN vehiculo v ON p.id_vehiculo = v.id 
            INNER JOIN cliente c ON c.id = v.id_cliente";



        if($b=="Folio"){
            $query = $query." WHERE p.id ='$a' ";
        }
        elseif ($b=="Placas") {
            $query = $query." WHERE v.placas='$a' ";
        }
        elseif ($b=="Nombre"){
            $query = $query." WHERE c.nombre='$a' ";
        }
    
        $queryExecute = $this->db->query($query);
        return $queryExecute->result_array();
      }

    public function getPayments($folio){
        $query = $this->db->query("SELECT * FROM pagos WHERE id_poliza = $folio");
        return $query->result_array();
    } 

    public function setGrua($com1,$com2,$folio) {
        $query = $this->db->query("UPDATE datos SET com1 = '$com1',com2 = '$com2' WHERE datos.folio = '$folio'");
        return true;
    }

    public function updateCard($folio,$fech,$monto){
        
        $this->db->set('fecha', $fech);
        $this->db->set('monto', $monto);
        $this->db->where('id', $folio);
        $this->db->update('pagos'); 
        
        return true;
    }

    /*public function set12payments(){
        $query = $this->db->query("SELECT id_poliza, COUNT(*) as cuenta  FROM pagos p group by id_poliza");
        $result = $query->result_array();
        foreach ($result as $pago) {
            if($pago['cuenta'] < 12){
                $this->db->set('id_poliza',     $pago['id_poliza']);
                $this->db->set('num_pago',      12);
                $this->db->set('estatus',       'Pendiente');
                $this->db->insert('pagos');
            }
        }

        return true;
    }*/
}