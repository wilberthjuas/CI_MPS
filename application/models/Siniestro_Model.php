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
        try {
            $destinatario = "mutualmpsgdl2021@gmail.com"; 
            $asunto = "SINIESTRO # ".$id; 
            $cuerpo = ' 
            <html> 
                <head> 
                   <title></title> 
                </head> 
                <body> 
                    <p> 
                        La póliza número '.$save->{'poliza'}.' resporta el siguiente SINIESTRO:<br>
                        Tipo: '.$save->{'tipo'}.'<br>
                        Teléfono:'.$telefono.'<br>
                        Dirección: '.$save->{'direccion'}.'<br>
                        Ubicación Aproximada: <a href="https://www.google.com/maps/search/?api=1&query='.$save->{'latitud'}.'%2C'.$save->{'longitud'}.'">Ubicacion</a><br>
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

    public function sendWhatsApp($id,$save,$telefono)
    {
        $number = $this->retunNumbers();
        $result = "";
        foreach ($number as $item) {
            $url = "https://graph.facebook.com/v13.0/100652392713098/messages";
            $customHeaders = ['Content-Type: application/json','Authorization: Bearer EAAaVxmkDltYBAHQnSQnwgNZB8U0Q8YK0Omw7uKatsGcdXV2tkbFCI23jWcu5Dbk10YL3yRjnuQRmwzEceZB4I3HOZCtvbxPZAw7mGxd2oOZA899M39R4qMJrfWjvC9HgptbHIHTVuEY04qwZAWBTQhmANc2iCHMZCYsEUc7IVQW464MC1JAg1Jyc6T5Ibl1l0eNZC6iFI6J9PwZDZD'];

            $msg = "SINIESTRO #$id con poliza #".$save->{'poliza'}." reporta un siniestro en la ubicacion:".$save->{'direccion'}.",el numero de contacto asiociado a esa poliza es el siguiente: ".$telefono;

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
        }
        
        return $result;
    }

    private function retunNumbers(){
        $number = array("523329387372", "523339554123", "523331052310", "523330345030", "523334994220");
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
}