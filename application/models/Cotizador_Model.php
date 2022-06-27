<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Cotizador_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->database();
    }

    public function saveCotizacion($save){
        //CLIENTE
        $this->db->set('nombre',        $save->{'nombre'});
        $this->db->set('correo',        $save->{'correo'});
        $this->db->set('telefono',      $save->{'telefono'});
        $this->db->set('edad',          $save->{'edad'});
        $this->db->set('tipo',          $save->{'tipo'});
        $this->db->set('plataforma',    $save->{'plataforma'});
        $this->db->set('modelo',        $save->{'modelo'});
        $this->db->set('marca',         $save->{'marca'});
        $this->db->set('vehiculo',      $save->{'vehiculo'});
        $this->db->set('estatus',       'PENDIENTE');
        $this->db->set('fecha_creacion',date("Y-m-d"));
        $this->db->insert('cotizaciones');
        $idCliente = $this->db->insert_id();
        return $idCliente;
    }
}