<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Siniestro_Model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->database();
    }

    public function report($save){
        //CLIENTE
        $this->db->set('estatus',       'PENDIENTE');
        $this->db->set('fecha_creacion',date("Y-m-d"));
        $this->db->set('hora_creacion', date("h:i:s"));
        $this->db->set('id_poliza',     $save->{'poliza'});
        $this->db->set('tipo',          $save->{'tipo'});
        $this->db->set('direccion',     $save->{'direccion'});
        $this->db->set('latitud',       $save->{'latitud'});
        $this->db->set('longitud',      $save->{'longitud'});
        $this->db->insert('siniestros');
        $idSiniestro = $this->db->insert_id();
        return $idSiniestro;
    }


    public function reportAccident($id,$save,$telefono){
        $driverPhone = "";
        if(property_exists($save, 'telefono'))
        {
            $driverPhone = $save->{'telefono'};
        }else {
            $driverPhone = "N/A";
        }

        try {
            $destinatario = "mutualmpsgdl2021@gmail.com"; 
            $asunto = "SINIESTRO #1000".$id; 
            $info = '   <tr>         
                            <td colspan="12">
                                La póliza número '.$save->{'poliza'}.' resporta el siguiente SINIESTRO:
                            </td>
                        </tr>
                        <tr>         
                            <td colspan="4">
                                Tipo:
                            </td>
                            <td colspan="8">
                                La póliza número '.$save->{'tipo'}.'
                            </td>
                        </tr>
                        <tr>         
                            <td colspan="4">
                            Teléfono:
                            </td>
                            <td colspan="8">
                                La póliza número '.$telefono.'
                            </td>
                        </tr>
                        <tr>         
                            <td colspan="4">
                                Teléfono del conductor:
                            </td>
                            <td colspan="8">
                                La póliza número '.$driverPhone.'
                            </td>
                        </tr>
                        <tr>         
                            <td colspan="4">
                                Dirección:
                            </td>
                            <td colspan="8">
                                La póliza número '.$save->{'direccion'}.'
                            </td>
                        </tr>
                        <tr>         
                            <td colspan="4">
                                Ubicación Aproximada:
                            </td>
                            <td colspan="8">
                                <a href="https://www.google.com/maps/search/?api=1&query='.$save->{'latitud'}.'%2C'.$save->{'longitud'}.'">Ubicacion</a><br>
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
        } catch (Exception $e) {
            throw new Exception('Error al enviar el mail', 1);
        }
    }

    public function sendWhatsApp($id,$save,$telefono){

        $url = "https://fcm.googleapis.com/fcm/send";

        $headers = array( "Authorization: key=AAAAqLX08o8:APA91bHrsOiB4fy-i6rMoHucL8bv6iQqXsULm0EYLrhW2tdQSKGYrA5jC2EBlbuwO0zggPmSWYh2w6tcKDoRPrJHvEQ3uAxUQ-zLQs0zqjfVxwZHA-Vod0q8VCV9yzZDp5dwL7v2yAfw","Content-Type: application/json");

        $driverPhone = "";
        if(property_exists($save, 'telefono'))
        {
            $driverPhone = $save->{'telefono'};
        }else {
            $driverPhone = "N/A";
        }

        $notification= new stdClass();
        $notification->title = "SINIESTRO #1000$id";
        $notification->body = "SINIESTRO #1000$id con poliza #".$save->{'poliza'}." reporta un siniestro en la ubicacion:".$save->{'direccion'}.", El numero de contacto asiociado a esa poliza es el siguiente: ".$telefono.", El numero del conductor es el siguiente: ".$driverPhone;

        $obj0 = new stdClass();
        $obj0->notification = $notification;
        $obj0->direct_book_ok = true;
        $obj0->to = "/topics/RolAdmin";

        $res = $this->call($url,"POST",json_encode($obj0),$headers);
        return $res;
        /*$driverPhone = "";
        if(property_exists($save, 'telefono'))
        {
            $driverPhone = $save->{'telefono'};
        }else {
            $driverPhone = "N/A";
        }


        $number = $this->retunNumbers();
        $result = "";
        foreach ($number as $item) {
            $url = "https://graph.facebook.com/v13.0/105771648864613/messages";
            $customHeaders = ['Content-Type: application/json','XXXX'];

            $msg = "SINIESTRO #1000$id con poliza #".$save->{'poliza'}." reporta un siniestro en la ubicacion:".$save->{'direccion'}.", El numero de contacto asiociado a esa poliza es el siguiente: ".$telefono.", El numero del conductor es el siguiente: ".$driverPhone;

            $language = new stdClass();
            $language->code = "en";

            $b = new stdClass();
            $b->name = "siniestro";
            $b->language = $language;
            

            $obj0 = new stdClass();
            $obj0->messaging_product = "whatsapp";
            $obj0->to = $item;
            $obj0->type = "template";
            $obj0->template = $b;

            $res = $this->call($url,"POST",json_encode($obj0),$customHeaders);
            $result = $result.$res;




            $body = new stdClass();
            $body->latitude = $save->{'latitud'};
            $body->longitude = $save->{'longitud'};
            $body->name = $save->{'direccion'};
            $body->address =$save->{'direccion'};

            $obj1 = new stdClass();
            $obj1->messaging_product = "whatsapp";
            $obj1->preview_url = false;
            $obj1->recipient_type = "individual";
            $obj1->to = $item;
            $obj1->type = "location";
            $obj1->location = $body;

            $res = $this->call($url,"POST",json_encode($obj1),$customHeaders);
            $result = $result.$res;

            $body2 = new stdClass();
            $body2->body =$msg;

            $obj2 = new stdClass();
            $obj2->messaging_product = "whatsapp";
            $obj2->preview_url = false;
            $obj2->recipient_type = "individual";
            $obj2->to = $item;
            $obj2->type = "text";
            $obj2->text = $body2;

            $res = $this->call($url,"POST",json_encode($obj2),$customHeaders);
            $result = $result.$res;
        }*/
        
        return $result;
    }

    private function retunNumbers(){
        $number = array("523329387372", "523339554123", "523331052310", "523330345030", "523334994220","525563162231");
        return $number;
    }


    public function call( $url, $method = "POST", $postFields, $customHeaders)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method );
        if( $postFields ){
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields );
        }
        if( $customHeaders ){
            curl_setopt($ch, CURLOPT_HTTPHEADER, $customHeaders);
        }
        /*if($this->verify_peer !== NULL){
            curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, $this->verify_peer);
        }*/
        /*if($this->verify_host !== NULL){
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, $this->verify_host);
        }*/
        
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        /*if($this->curl_timeout){
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->curl_timeout);
        }*/

        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        /*curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        if( $this->login ){
            curl_setopt($ch, CURLOPT_USERPWD, "{$this->login}:{$this->pass}");
        }*/

        $result = curl_exec($ch);
        $errors = curl_error($ch);
        curl_close($ch);
        if($errors){
            throw new \Exception("Curl error: {$errors}", 1);
        }
        return $result;
    }


    public function initializeWhats(){
        $number = $this->retunNumbers();
        $result = "";

        foreach ($number as $item) {
            $url = "https://graph.facebook.com/v13.0/105771648864613/messages";
            $customHeaders = ['Content-Type: application/json','XXXX'];

            $language = new stdClass();
            $language->code = "en";

            $body = new stdClass();
            $body->name = "presentacion";
            $body->language = $language;
            

            $obj1 = new stdClass();
            $obj1->messaging_product = "whatsapp";
            $obj1->to = $item;
            $obj1->type = "template";
            $obj1->template = $body;

            $res = $this->call($url,"POST",json_encode($obj1),$customHeaders);
            $result = $result.$res;
        }
        
        return $result;

    }

}






