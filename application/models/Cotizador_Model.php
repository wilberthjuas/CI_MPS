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
            $info = '
                   
                        <tr>
                            <td colspan="12">
                                La siguiente persona solicita una cotización con lo siguientes datos:
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Nombre:</td>
                            <td colspan="8">
                                <bold>'.$save->{'nombre'}.'</bold>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Edad:</td>
                            <td colspan="8">
                                <bold>'.$save->{'edad'}.'</bold><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Correo:</td>
                            <td colspan="8">
                                <bold>'.$save->{'correo'}.'</bold><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Número:</td>
                            <td colspan="8">
                                <bold>'.$save->{'telefono'}.'</bold><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Municipio:</td>
                            <td colspan="8">
                                <bold>'.$save->{'municipio'}.'</bold><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Tipo:</td>
                            <td colspan="8">
                                <bold>'.$save->{'tipo'}.'</bold><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Plataforma:</td>
                            <td colspan="8">
                                <bold>'.$save->{'plataforma'}.'</bold><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Modelo:</td>
                            <td colspan="8">
                                <bold>'.$save->{'modelo'}.'</bold><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Marca:</td>
                            <td colspan="8">
                                <bold>'.$save->{'marca'}.'</bold><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Vehiculo:</td>
                            <td colspan="8">
                                <bold>'.$save->{'vehiculo'}.'</bold><br>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="12"> Esta oportunidad de venta fue asignada al vendedor '.$vendedor.'</td>
                        </tr>
                   ';
            $cuerpo =   '<table style="width: 450px;margin: auto;color:black;">
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