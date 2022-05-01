<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Tarjeta_Model extends CI_Model {

    function getData($a,$b) {
        if($b=="Folio"){
            $query = "SELECT * FROM datos WHERE folio='$a' ";
        }
        elseif ($b=="Placas") {
            $query = "SELECT * FROM datos   WHERE placas='$a' ";
        }
        elseif ($b=="Nombre"){
            $query = "SELECT * FROM datos   WHERE nombre='$a' ";
        }
        $this->load->database();
        $queryExecute = $this->db->query($query);
        return $queryExecute->result_array();
      }

     
    function setGrua($com1,$com2,$folio) {
        $this->load->database();
        $query = $this->db->query("UPDATE datos SET com1 = '$com1',com2 = '$com2' WHERE datos.folio = '$folio'");
        return true;
    }

    function updateCard($folio,$fech,$monto){
        
	
        $fech1=$fech['fech1'];
        $fech2=$fech['fech2'];
        $fech3=$fech['fech3'];
        $fech4=$fech['fech4'];
        $fech5=$fech['fech5'];
        $fech6=$fech['fech6'];
        $fech7=$fech['fech7'];
        $fech8=$fech['fech8'];
        $fech9=$fech['fech9'];
        $fech10=$fech['fech10'];
        $fech11=$fech['fech11'];
        
        
        $monto1=$monto['monto1'];
        $monto2=$monto['monto2'];
        $monto3=$monto['monto3'];
        $monto4=$monto['monto4'];
        $monto5=$monto['monto5'];
        $monto6=$monto['monto6'];
        $monto7=$monto['monto7'];
        $monto8=$monto['monto8'];
        $monto9=$monto['monto9'];
        $monto10=$monto['monto10'];
        $monto11=$monto['monto11'];
        
                           
                           
        $query = "UPDATE `mutua402_mps`.`datos` SET `fech1` = '$fech1', `fech2` = '$fech2' , `fech3` = '$fech3' , `fech4` = '$fech4' , `fech5` = '$fech5' , `fech6` = '$fech6' , `fech7` = '$fech7' , `fech8` = '$fech8' , `fech9` = '$fech9' , `fech10` = '$fech10' , `fech11` = '$fech11' , `monto1` = '$monto1' , `monto2` = '$monto2' , `monto3` = '$monto3' , `monto4` = '$monto4' , `monto5` = '$monto5' , `monto6` = '$monto6' , `monto7` = '$monto7' , `monto8` = '$monto8' , `monto9` = '$monto9' , `monto10` = '$monto10', `monto11` = '$monto11' WHERE `datos`.`folio` = '$folio'; ";
        $this->load->database();
        $query_execute = $this->db->query($query);
        return true;
    }
}