<?php

class Municipio_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_municipioCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('descripcion', $this->input->get("search")); 
        }
        $query = $this->db->get("municipios");
        return $query->result();
    }


    public function insert_municipio()
    {    
        $data = array(
            'descripcion' => $this->input->post('description')
        );
        return $this->db->insert('municipios', $data);
    }


    public function update_municipio($id) 
    {
        $data=array(
            'descripcion'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('municipios',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('municipios',$data);
        }        
    }


    public function find_municipio($id)
    {
        return $this->db->get_where('municipios', array('id' => $id))->row();
    }


    public function delete_municipio($id)
    {
        return $this->db->delete('municipios', array('id' => $id));
    }
}
?>