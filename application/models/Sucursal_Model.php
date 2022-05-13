<?php

class Sucursal_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_sucursalCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('descripcion', $this->input->get("search")); 
        }
        $query = $this->db->get("sucursales");
        return $query->result();
    }


    public function insert_sucursal()
    {    
        $data = array(
            'nombre'    => $this->input->post('nombre'),
            'descripcion'=> $this->input->post('descripcion'),
            'telefono'  => $this->input->post('telefono1'),
            'telefono2' => $this->input->post('telefono2'),
            'direccion' => $this->input->post('direccion'),
            'colonia'   => $this->input->post('colonia'),
            'municipio' => $this->input->post('municipio'),
            'estado'    => $this->input->post('estado'),
            'cp'        => $this->input->post('cp'),
        );
        return $this->db->insert('sucursales', $data);
    }


    public function update_sucursal($id) 
    {
        $data=array(
            'nombre'    => $this->input->post('nombre'),
            'descripcion'=> $this->input->post('descripcion'),
            'telefono'  => $this->input->post('telefono1'),
            'telefono2' => $this->input->post('telefono2'),
            'direccion' => $this->input->post('direccion'),
            'colonia'   => $this->input->post('colonia'),
            'municipio' => $this->input->post('municipio'),
            'estado'    => $this->input->post('estado'),
            'cp'        => $this->input->post('cp'),
        );
        if($id==0){
            return $this->db->insert('sucursales',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('sucursales',$data);
        }        
    }


    public function find_sucursal($id)
    {
        return $this->db->get_where('sucursales', array('id' => $id))->row();
    }


    public function delete_sucursal($id)
    {
        return $this->db->delete('sucursales', array('id' => $id));
    }

    public function get_Estados(){
        $query = $this->db->get("estados");
        return $query->result();
    }
}
?>