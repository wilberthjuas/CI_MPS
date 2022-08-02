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
        $info = ' 
                <tr>
                    <td colspan="12">
                        La persona '.$nombre.' con poliza'.$poliza.' solicita un cobrador para el día '.$fecha.' a las '.$hora.'<br>
                        El cobrador asignado a este cliente es: '.$cobrador.'
                    </td>
                </tr>
                <tr>
                    <td colspan="12">
                        Datos Cliente
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        Nombre:
                    </td>
                    <td colspan="8">
                        '.$nombre.'
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                    Teléfono:
                    </td>
                    <td colspan="8">
                        '.$telefono.'
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                    Dirección:
                    </td>
                    <td colspan="8">
                        '.$direccion.'
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                    Poliza:
                    </td>
                    <td colspan="8">
                        '.$poliza.'
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                    Placas:
                    </td>
                    <td colspan="8">
                        '.$placas.'
                    </td>
                </tr>';

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
    }

   
}