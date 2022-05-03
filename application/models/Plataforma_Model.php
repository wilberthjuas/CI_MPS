<?php

class Plataforma_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_plataformaCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('descripcion', $this->input->get("search")); 
        }
        $query = $this->db->get("plataformas");
        return $query->result();
    }


    public function insert_plataforma()
    {    
        $data = array(
            'descripcion' => $this->input->post('description')
        );
        return $this->db->insert('plataformas', $data);
    }


    public function update_plataforma($id) 
    {
        $data=array(
            'descripcion'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('plataformas',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('plataformas',$data);
        }        
    }


    public function find_plataforma($id)
    {
        return $this->db->get_where('plataformas', array('id' => $id))->row();
    }


    public function delete_plataforma($id)
    {
        return $this->db->delete('plataformas', array('id' => $id));
    }
}
?>