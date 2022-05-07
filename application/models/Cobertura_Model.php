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
        $data = array(
            'nombre' => $this->input->post('name'),
            'telefono' => $this->input->post('phone'),
            'correo' => $this->input->post('email')
        );
        return $this->db->insert('coberturas', $data);
    }


    public function update_cobertura($id) 
    {
        $data=array(
            'nombre' => $this->input->post('name'),
            'telefono' => $this->input->post('phone'),
            'correo' => $this->input->post('email')
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
}