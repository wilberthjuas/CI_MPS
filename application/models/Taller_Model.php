<?php

class Taller_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_tallerCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('descripcion', $this->input->get("search")); 
        }
        $query = $this->db->get("talleres");
        return $query->result();
    }


    public function insert_taller()
    {    
        $data = array(
            'nombre'    => $this->input->post('nombre'),
            'telefono'  => $this->input->post('telefono1'),
            'telefono2' => $this->input->post('telefono2'),
            'correo'    => $this->input->post('email'),
            'pagina'    => $this->input->post('pagina'),
            'direccion' => $this->input->post('direccion'),
            'colonia'   => $this->input->post('colonia'),
            'municipio' => $this->input->post('municipio'),
            'estado'    => $this->input->post('estado'),
            'cp'        => $this->input->post('cp'),
        );
        return $this->db->insert('talleres', $data);
    }


    public function update_taller($id) 
    {
        $data=array(
            'nombre'    => $this->input->post('nombre'),
            'telefono'  => $this->input->post('telefono1'),
            'telefono2' => $this->input->post('telefono2'),
            'correo'    => $this->input->post('email'),
            'pagina'    => $this->input->post('pagina'),
            'direccion' => $this->input->post('direccion'),
            'colonia'   => $this->input->post('colonia'),
            'municipio' => $this->input->post('municipio'),
            'estado'    => $this->input->post('estado'),
            'cp'        => $this->input->post('cp'),
        );
        if($id==0){
            return $this->db->insert('talleres',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('talleres',$data);
        }        
    }


    public function find_taller($id)
    {
        return $this->db->get_where('talleres', array('id' => $id))->row();
    }


    public function delete_taller($id)
    {
        return $this->db->delete('talleres', array('id' => $id));
    }

    public function get_Estados(){
        $query = $this->db->get("estados");
        return $query->result();
    }
}
?>