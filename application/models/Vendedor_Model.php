<?php

class Vendedor_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_vendedorCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('descripcion', $this->input->get("search")); 
        }
        $query = $this->db->get("vendedores");
        return $query->result();
    }


    public function insert_vendedor()
    {    
        $data = array(
            'nombre' => $this->input->post('name'),
            'telefono' => $this->input->post('phone'),
            'correo' => $this->input->post('email')
        );
        return $this->db->insert('vendedores', $data);
    }


    public function update_vendedor($id) 
    {
        $data=array(
            'nombre' => $this->input->post('name'),
            'telefono' => $this->input->post('phone'),
            'correo' => $this->input->post('email')
        );
        if($id==0){
            return $this->db->insert('vendedores',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('vendedores',$data);
        }        
    }


    public function find_vendedor($id)
    {
        return $this->db->get_where('vendedores', array('id' => $id))->row();
    }


    public function delete_vendedor($id)
    {
        return $this->db->delete('vendedores', array('id' => $id));
    }
}