<?php

class Estado_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function find_estado($id)
    {
        return $this->db->get_where('estados', array('id' => $id))->row();
    }
}