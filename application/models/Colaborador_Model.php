<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Colaborador_Model extends CI_Model{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('encryption');
    }

    public function getVendorData($mail){
        return $this->db->get_where('vendedores', array('correo' => $mail))->row();
    }


    public function setUser($user,$pwd,$mail){
        $queryV = $this->db->query("SELECT * FROM vendedores WHERE correo='$mail' ");
        if( $queryV->num_rows() > 0 ){ 
            $queryU = $this->db->query("SELECT * FROM cctuser WHERE user_name='$user' ");
            if( $queryU->num_rows() == 0){

                $vendor = $queryV->row();
                $this->db->set('user_name',     $user);
                $this->db->set('user_pass',     $pwd);
                $this->db->set('user_type',     '12');
                $this->db->set('puesto',        'vendedor');
                $this->db->set('nombre',        $vendor->nombre);
                $this->db->insert('cctuser');
                $this->db->insert_id();
                return true;
            }
            return false;
        }
        return false;
    }

    public function getEmailsV(){
        $query = $this->db->query("SELECT DISTINCT correo FROM vendedores");
        return $query->result_array();
    }

    public function getEmailsC(){
        $query = $this->db->query("SELECT DISTINCT correo FROM cobradores");
        return $query->result_array();
    }

    public function vendorMasiveR(){
        $correos = $this->getEmailsV();

        foreach( $correos as $mail ){
            $url = base_url().'Colaboradores/avtv/'.urlencode($mail['correo']);
            try {
                $destinatario = $mail['correo']; 
                $asunto = "REGISTRO PORTAL WEB";
                $cuerpo = ' 
                <html> 
                    <head> 
                       <title></title> 
                    </head> 
                    <body> 
                        <p> 
                            Favor de registrarse en la siguiente liga para poder acceder al portal web<br>
                            '.$url.'
                        </p> 
                    </body> 
                </html> '; 
                $headers = "MIME-Version: 1.0\r\n"; 
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                $headers .= "<noreply@noreply.com>\r\n"; 
                mail($destinatario,$asunto,$cuerpo,$headers);     
            } catch (Exception $e) {
                throw new Exception('Error al enviar el mail', 1);
            }
        }
        return true;
    }

    public function cMasiveR(){
        $correos = $this->getEmailsC();

        foreach( $correos as $mail ){
            $url = base_url().'Colaboradores/actc/'.urlencode($mail['correo']);
            try {
                $destinatario = $mail['correo']; 
                $asunto = "REGISTRO APP";
                $cuerpo = ' 
                <html> 
                    <head> 
                       <title></title> 
                    </head> 
                    <body> 
                        <p> 
                            Favor de registrarse en la siguiente liga para poder acceder a la aplicación móvil<br>
                            '.$url.'
                        </p> 
                    </body> 
                </html> '; 
                $headers = "MIME-Version: 1.0\r\n"; 
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
                $headers .= "<noreply@noreply.com>\r\n"; 
                mail($destinatario,$asunto,$cuerpo,$headers);     
            } catch (Exception $e) {
                throw new Exception('Error al enviar el mail', 1);
            }
        }
        return true;
    }

    public function createUserM($user, $pwd){
        $queryC = $this->db->query("SELECT * FROM cobradores WHERE correo='$user' ");
        if( $queryC->num_rows() > 0 ){ 
            $queryM = $this->db->query("SELECT * FROM cctapm WHERE user='$user' ");
            if( $queryM->num_rows() < 1){

                $cobrador = $queryC->row();
                $newPwd = $this->encryption->encrypt($pwd);
                $this->db->set('user',          $user);
                $this->db->set('password',      $newPwd);
                $this->db->set('cobrador',      $cobrador->id);
                $this->db->set('vendedor',      0);
                $this->db->set('ajustador',     0);
                $this->db->set('administrador', 0);
                $this->db->set('fecha_creacion',date("Y-m-d"));
                $this->db->set('fecha_modificacion',date("Y-m-d"));
                $this->db->insert('cctapm');

                return true;
                
            }

        }
        return false;
    }

}

?>