<?php

class Cliente_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getClient_byID($client_id)
    {
        $query = $this->db->select('*')
                    ->from('cliente')
                    ->where('id', $client_id)
                    ->get();

        return $query->row() ? $query->row() : [];             
    }
}