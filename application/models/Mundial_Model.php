<?php

class Mundial_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function registerJersey($folio, $nombre, $telefono)
    {
        $data = [
            'folio' => $folio,
            'nombre' => $nombre,
            'celular' => $telefono,
            'tipo' => "MUNDIAL_QATAR",
        ];

        $this->db->insert('playera', $data);
    
        return $this->db->insert_id();
    }

    public function getJerseys(){
        //$query = $this->db->get("playera");
        //return $query->result();

        $query = $this->db->query("
            SELECT 
                p.id,
                p.folio,
                p.nombre,
                p.celular,
                c.municipio
                FROM playera p
                LEFT JOIN polizas ON p.folio = polizas.id
                LEFT JOIN vehiculo ON polizas.id_vehiculo = vehiculo.id
                LEFT JOIN cliente c ON vehiculo.id_cliente = c.id
            ");
        return $query->result_array();
    }
    
}