<?php

class Consejo_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_consejoCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('descripcion', $this->input->get("search")); 
        }
        $query = $this->db->get("consejos");
        return $query->result();
    }


    public function insert_consejo()
    {    
        $data = array(
            'descripcion' => $this->input->post('description'),
            'titulo' => $this->input->post('titulo')
        );
        return $this->db->insert('consejos', $data);
    }


    public function update_consejo($id) 
    {
        $data=array(
            'descripcion'=> $this->input->post('description'),
            'titulo' => $this->input->post('titulo')
        );
        if($id==0){
            return $this->db->insert('consejos',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('consejos',$data);
        }        
    }


    public function find_consejo($id)
    {
        return $this->db->get_where('consejos', array('id' => $id))->row();
    }


    public function delete_consejo($id)
    {
        return $this->db->delete('consejos', array('id' => $id));
    }
}
?>