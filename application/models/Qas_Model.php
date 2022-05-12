<?php

class Qas_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_qasCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('pregunta', $this->input->get("search")); 
        }
        $query = $this->db->get("qas");
        return $query->result();
    }


    public function insert_qas()
    {    
        $data = array(
            'pregunta' => $this->input->post('pregunta'),
            'respuesta' => $this->input->post('respuesta'),
        );
        return $this->db->insert('qas', $data);
    }


    public function update_qas($id) 
    {
        $data=array(
            'pregunta' => $this->input->post('pregunta'),
            'respuesta' => $this->input->post('respuesta'),
        );
        if($id==0){
            return $this->db->insert('qas',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('qas',$data);
        }        
    }


    public function find_qas($id)
    {
        return $this->db->get_where('qas', array('id' => $id))->row();
    }


    public function delete_qas($id)
    {
        return $this->db->delete('qas', array('id' => $id));
    }
}
?>