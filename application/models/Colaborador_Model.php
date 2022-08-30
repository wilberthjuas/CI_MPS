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
                $info = '
                    <tr> 
                        <td colspan="12"> 
                            Favor de registrarse en la siguiente liga para poder acceder al portal web<br>
                            '.$url.'
                        </td> 
                    </tr>';
                $cuerpo = '<table style="width: 450px;margin: auto;color:black;">
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
        return true;
    }

    public function cMasiveR(){
        $correos = $this->getEmailsC();

        foreach( $correos as $mail ){
            $url = base_url().'Colaboradores/actc/'.urlencode($mail['correo']);
            try {
                $destinatario = $mail['correo']; 
                $asunto = "REGISTRO APP";
                $info = ' 
                        <tr colspan="12"> 
                            Favor de registrarse en la siguiente liga para poder acceder a la aplicación móvil<br>
                            '.$url.'
                        </tr> ';
                $cuerpo = '<table style="width: 450px;margin: auto;color:black;">
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

    public function getUser($request){
        $user = $request->{'user'};
        $pwd =  $request->{'pwd'};

        if($user && $pwd){
            $query = $this->db->query("SELECT id_user,user,cobrador,vendedor,ajustador,administrador, password FROM cctapm WHERE user ='$user' ");

            if( $query->num_rows() > 0){
                $usuario = $query->row(); 
                $pwd2 = $this->encryption->decrypt($usuario->password);
                if( $pwd == $pwd2){
                    unset($usuario->password);
                    $queryC = $this->db->query("SELECT * FROM cobradores WHERE id='$usuario->cobrador' ");
                    if( $queryC->num_rows() > 0){
                        $usuario->cobrador = $queryC->row();
                    }else{
                        $usuario->cobrador = null;
                    }

                    $queryV = $this->db->query("SELECT * FROM vendedores WHERE id='$usuario->vendedor' ");
                    if( $queryV->num_rows() > 0){
                        $usuario->vendedor = $queryV->row();
                    }else{
                        $usuario->vendedor = null;
                    }


                    //TODO AGREGAR OPCION PARA AJUSTADORES
                    $usuario->ajustador = null;

                    return $usuario;
                }
                
                
            }
            
        }
        return false;
        
    }

    public function savePayment($request){
        try{
            $poliza = $request->{'poliza'};
            $query = $this->db->query("SELECT * FROM polizas WHERE id ='$poliza' ");
            if( $query->num_rows() > 0 ){
                $cobrador = $request->{'cobrador'};
                $queryC = $this->db->query("SELECT * FROM cctapm WHERE id_user='$cobrador' ");
                if( $queryC->num_rows() > 0){
                    $this->db->set('poliza',        $request->{'poliza'});
                    $this->db->set('tipo',          $request->{'tipo'});
                    $this->db->set('cantidad',      $request->{'cantidad'});
                    $this->db->set('cobrador',      $request->{'cobrador'});
                    $this->db->set('estatus',       "REGISTRADO");
                    $this->db->insert('pagos_transaccion');  
                    $idPayment = $this->db->insert_id();  

                    if($idPayment && $request->{'tipo'} == 1){
                        $poliza = $request->{'poliza'};
                        $queryP = $this->db->query("SELECT * FROM pagos WHERE id_poliza = '$poliza' ORDER BY id ASC ");
                        $pagos = $queryP->result_array();


                        $collector = $queryC->row();
                        $id_cobrador = $collector->cobrador;
                        $queryCC = $this->db->query("SELECT nombre FROM cobradores WHERE id = '$id_cobrador' ");
                        $names = $queryCC->row();

                        foreach( $pagos as $pago ){
                          if($pago['estatus'] == "Pendiente" OR $pago['estatus']== ""){

                            $this->db->set('estatus','Pagado');
                            $this->db->set('folio',date("YmdHms"));
                            $this->db->set('monto',$request->{'cantidad'});
                            $this->db->set('cobrador',$names->nombre);
                            $this->db->set('fecha',date("Y-m-d"));
                            $this->db->set('recibo',date("Y-m-d"));
                            $this->db->where('id', $pago['id']);
                            $this->db->update('pagos');

                            
                            $this->db->set('estatus', "PAGADO");
                            $this->db->set('id_pago', $pago['id']);
                            $this->db->set('fecha_modificacion',date("Y-m-d H:m:s"));
                            $this->db->where('id_payment', $idPayment);
                            $this->db->update('pagos_transaccion');
                            break;
                          }
                          
                        }
                    }
                    else{
                        $this->db->set('estatus', "VALIDACION PENDIENTE");
                        $this->db->set('fecha_modificacion',date("Y-m-d H:m:s"));
                        $this->db->where('id_payment', $idPayment);
                        $this->db->update('pagos_transaccion');
                    }
                    return true;
                }
            }
            return false;
        }catch (Exception $e) {
            return false;
        }

        
    }

}

?>