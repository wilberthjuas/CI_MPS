<?php

class Cobrador_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_cobradorCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('descripcion', $this->input->get("search")); 
        }
        $query = $this->db->get("cobradores");
        return $query->result();
    }


    public function insert_cobrador()
    {    
        $data = array(
            'nombre' => $this->input->post('name'),
            'telefono' => $this->input->post('phone'),
            'correo' => $this->input->post('email')
        );
        return $this->db->insert('cobradores', $data);
    }


    public function update_cobrador($id) 
    {
        $data=array(
            'nombre' => $this->input->post('name'),
            'telefono' => $this->input->post('phone'),
            'correo' => $this->input->post('email')
        );
        if($id==0){
            return $this->db->insert('cobradores',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('cobradores',$data);
        }        
    }


    public function find_cobrador($id)
    {
        return $this->db->get_where('cobradores', array('id' => $id))->row();
    }


    public function delete_cobrador($id)
    {
        return $this->db->delete('cobradores', array('id' => $id));
    }
}