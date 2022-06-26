<?php

class Solicitudes_Model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

     public function save_Solicitud($poliza, $fecha, $hora, $cobrador)
    {
        $data = [
            'poliza' => $poliza,
            'fecha' => $fecha,
            'hora' => $hora,
            'nombre_cobrador' => $cobrador
        ];

        $this->db->insert('solicitudes', $data);
    
        return $this->db->insert_id();
    }

    public function send_SolicitudMail($id, $nombre, $telefono, $fecha, $hora, $cobrador, $direccion, $poliza, $placas)
    {
        $destinatario = "mutualmpsgdl2021@gmail.com"; 
        $asunto = "Solicitar cobrador # ".$id; 
        $cuerpo = ' 
        <html> 
            <head> 
               <title></title> 
            </head> 
            <body> 
                <p> 
                    La persona '.$nombre.' con poliza'.$poliza.' solicita un cobrador para el día '.$fecha.' a las '.$hora.'<br>
                    El cobrador asignado a este cliente es: '.$cobrador.'<br><br>
                    Datos Cliente:<br>
                    Nombre '.$nombre.'<br>
                    Teléfono '.$telefono.'<br>
                    Dirección '.$direccion.'<br>
                    Poliza '.$poliza.'<br>
                    Placas '.$placas.'<br>
                </p> 
            </body> 
        </html> '; 
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $headers .= "<noreply@noreply.com>\r\n"; 
        mail($destinatario,$asunto,$cuerpo,$headers); 
    }

   
}