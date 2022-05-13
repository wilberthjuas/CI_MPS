<?php

class Emergencia_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_emergenciaCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('descripcion', $this->input->get("search")); 
        }
        $query = $this->db->get("emergencias");
        return $query->result();
    }

    public function get_emergenciaContactos(){
        $query = $this->db->query("
            SELECT id, (SELECT nombre FROM sucursales s WHERE s.id = e.id_sucursal) AS 'sucursal', nombre, telefono, descripcion  FROM emergencias e
            ");
        return $query->result();
    }

    public function insert_emergencia()
    {    
        $data = array(
            'nombre'    => $this->input->post('nombre'),
            'descripcion'=> $this->input->post('descripcion'),
            'telefono'  => $this->input->post('telefono1'),
            'telefono2' => $this->input->post('telefono2'),
            'id_sucursal' => $this->input->post('sucursal')
            
        );
        return $this->db->insert('emergencias', $data);
    }


    public function update_emergencia($id) 
    {
        $data=array(
            'nombre'    => $this->input->post('nombre'),
            'descripcion'=> $this->input->post('descripcion'),
            'telefono'  => $this->input->post('telefono1'),
            'telefono2' => $this->input->post('telefono2'),
            'id_sucursal' => $this->input->post('sucursal')
        );
        if($id==0){
            return $this->db->insert('emergencias',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('emergencias',$data);
        }        
    }


    public function find_emergencia($id)
    {
        return $this->db->query("SELECT id, (SELECT nombre FROM sucursales s WHERE s.id = e.id_sucursal) AS 'sucursal', nombre, telefono, telefono2, descripcion  FROM emergencias e WHERE e.id = $id ")->row();
    }

    public function find_edit_emergencia($id){
        return $this->db->get_where('emergencias', array('id' => $id))->row();
    }


    public function delete_emergencia($id)
    {
        return $this->db->delete('emergencias', array('id' => $id));
    }

    public function get_Sucursales(){
        $query = $this->db->get("sucursales");
        return $query->result();
    }
}
?>