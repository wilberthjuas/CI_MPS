<?php

class Cobertura_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_coberturaCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('descripcion', $this->input->get("search")); 
        }
        $query = $this->db->get("coberturas");
        return $query->result();
    }


    public function insert_cobertura()
    {    
        $data=array(
            'cobertura' => $this->input->post('cobertura'),
            'rca' => $this->input->post('rca'),
            'robo' => $this->input->post('robo'),
            'dano' => $this->input->post('dano'),
            'gastos' => $this->input->post('gastos'),
            'medico' => $this->input->post('medico'),
            'asistencia' => $this->input->post('asistencia'),
            'cristal' => $this->input->post('cristal'),
            'vial' => $this->input->post('vial'),
            'muerte' => $this->input->post('muerte')
        );
        return $this->db->insert('coberturas', $data);
    }


    public function update_cobertura($id) 
    {
        $data=array(
            'cobertura' => $this->input->post('cobertura'),
            'rca' => $this->input->post('rca'),
            'robo' => $this->input->post('robo'),
            'dano' => $this->input->post('dano'),
            'gastos' => $this->input->post('gastos'),
            'medico' => $this->input->post('medico'),
            'asistencia' => $this->input->post('asistencia'),
            'cristal' => $this->input->post('cristal'),
            'vial' => $this->input->post('vial'),
            'muerte' => $this->input->post('muerte')
        );
        if($id==0){
            return $this->db->insert('coberturas',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('coberturas',$data);
        }        
    }


    public function find_cobertura($id)
    {
        return $this->db->get_where('coberturas', array('id' => $id))->row();
    }


    public function delete_cobertura($id)
    {
        return $this->db->delete('coberturas', array('id' => $id));
    }


    public function getCoberturasDesc(){
        try{
            $query = $this->db->query("SELECT id, cobertura FROM coberturas ");
            return $query->result();
        }
        catch( Exception $e){
            return false;
        }
    }
}