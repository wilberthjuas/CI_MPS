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
            $destinatario = "mutualmpsgdl2021@gmail.com"; 
            $asunto = "Agendar llamada # ".$id; 
            $info = ' 
                    <tr> 
                        <td colspan="12">
                            La persona '.$nombre.' solicita una llamada el día '.$fecha.' a las '.$hora.'
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12">
                            Comunicarse al '.$telefono.'<br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12">
                            Esta oportunidad de venta fue asignada al vendedor '.$vendedor.'
                        </td>
                    </tr>
                   ';
            $cuerpo ='<table style="width: 450px;margin: auto;color:black;">
            <tbody style="background: #efeeed;text-align: center;">
                <tr>
                    <th colspan="6"> NOTIFICACION MPS </th>
                    <th colspan="6"> <img src="https://multiplataformaysimilaresmps.com.mx/images/mps_circle.png" style="width:64px;height: 64px;"/> </th>
                </tr>
                '.$info.'
            </tbody>
        </table>';
            $headers = "MIME-Version: 1.0\r\n"; 
            $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
            $headers .= "<noreply@noreply.com>\r\n"; 
            mail($destinatario,$asunto,$cuerpo,$headers);     
        } catch (Exception $e) {
            throw new Exception('Error al enviar el mail', 1);
        }
    }
}