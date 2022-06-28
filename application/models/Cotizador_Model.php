<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Cotizador_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->database();
    }

    public function saveCotizacion($save){
        //CLIENTE
        $this->db->set('nombre',        $save->{'nombre'});
        $this->db->set('correo',        $save->{'correo'});
        $this->db->set('telefono',      $save->{'telefono'});
        $this->db->set('edad',          $save->{'edad'});
        $this->db->set('municipio',     $save->{'municipio'});
        $this->db->set('tipo',          $save->{'tipo'});
        $this->db->set('plataforma',    $save->{'plataforma'});
        $this->db->set('modelo',        $save->{'modelo'});
        $this->db->set('marca',         $save->{'marca'});
        $this->db->set('vehiculo',      $save->{'vehiculo'});
        $this->db->set('estatus',       'PENDIENTE');
        $this->db->set('fecha_creacion',date("Y-m-d"));
        $this->db->insert('cotizaciones');
        $idCliente = $this->db->insert_id();
        return $idCliente;
    }

     public function send_cotizacionMail($id, $save, $vendedor)
    {

        
        try {
            $destinatario = "mutualmpsgdl2021@gmail.com"; 
            $asunto = "Cotización Mobile # ".$id; 
            $cuerpo = ' 
            <html> 
                <head> 
                   <title></title> 
                </head> 
                <body> 
                    <p> 
                        La siguiente persona solicita una cotización con lo siguientes datos:<br>
                        Nombre:<bold>'.$save->{'nombre'}.'</bold><br>
                        Edad:<bold>'.$save->{'edad'}.'</bold><br>
                        Correo:<bold>'.$save->{'correo'}.'</bold><br>
                        Número:<bold>'.$save->{'telefono'}.'</bold><br>
                        Municipio:<bold>'.$save->{'municipio'}.'</bold><br>
                        Tipo:<bold>'.$save->{'tipo'}.'</bold><br>
                        Plataforma:<bold>'.$save->{'plataforma'}.'</bold><br>
                        Modelo:<bold>'.$save->{'modelo'}.'</bold><br>
                        Marca:<bold>'.$save->{'marca'}.'</bold><br>
                        Vehiculo:<bold>'.$save->{'vehiculo'}.'</bold><br>
                        Esta oportunidad de venta fue asignada al vendedor '.$vendedor.'
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
}