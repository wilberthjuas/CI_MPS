<?php

class Promocion_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_promocionCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('descripcion', $this->input->get("search")); 
        }
        $query = $this->db->get("promociones");
        return $query->result();
    }


    public function insert_promocion($fileName)
    {    
        $data = array(
            'descripcion' => $this->input->post('description'),
            'titulo' => $this->input->post('titulo'),
            'banner' => $fileName

        );
        return $this->db->insert('promociones', $data);
    }


    public function update_promocion($id) 
    {
        $data=array(
            'descripcion'=> $this->input->post('description')
        );
        if($id==0){
            return $this->db->insert('promociones',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('promociones',$data);
        }        
    }


    public function find_promocion($id)
    {
        return $this->db->get_where('promociones', array('id' => $id))->row();
    }


    public function delete_promocion($id)
    {
        return $this->db->delete('promociones', array('id' => $id));
    }
}
?>