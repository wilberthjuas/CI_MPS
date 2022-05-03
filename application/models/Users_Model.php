<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model{
    
    public function login($user, $password)
    {
        $this->db->where('user_name', $user);
        $this->db->where('user_pass', $password);
        
        $query = $this->db->get('cctuser');

        if($query->num_rows() == 1) {
            return $query->row();
        }

        return false;
    }
}
?>