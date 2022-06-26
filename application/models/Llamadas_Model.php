<?php

class Llamadas_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function save_Llamada($nombre, $telefono, $fecha, $hora, $vendedor)
    {
        $data = [
            'nombre_cliente' => $nombre,
            'telefono' => $telefono,
            'fecha' => $fecha,
            'hora' => $hora,
            'nombre_vendedor' => $vendedor
        ];

        $this->db->insert('llamadas', $data);
    
        return $this->db->insert_id();
    }

    public function send_llamadaMail($id, $nombre, $telefono, $fecha, $hora, $vendedor)
    {
        try {
            $destinatario = "dimmsdale.7@gmail.com"; 
            $asunto = "Agendar llamada # ".$id; 
            $cuerpo = ' 
            <html> 
                <head> 
                   <title></title> 
                </head> 
                <body> 
                    <p> 
                        La persona '.$nombre.' solicita una llamada el día '.$fecha.' a las '.$hora.'<br>
                        Comunicarse al '.$telefono.'<br>
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