<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Siniestro_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->database();
    }

    public function report($save){
        //CLIENTE
        $this->db->set('estatus',       'PENDIENTE');
        $this->db->set('fecha_creacion',date("Y-m-d"));
        $this->db->set('hora_creacion', date("h:i:s"));
        $this->db->set('id_poliza',     $save->{'poliza'});
        $this->db->set('tipo',          $save->{'tipo'});
        $this->db->set('direccion',     $save->{'direccion'});
        $this->db->set('latitud',       $save->{'latitud'});
        $this->db->set('longitud',      $save->{'longitud'});
        $this->db->insert('siniestros');
        $idSiniestro = $this->db->insert_id();
        return $idSiniestro;
    }
}