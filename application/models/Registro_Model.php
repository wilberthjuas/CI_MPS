<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Registro_Model extends CI_Model {
  
  function getData($searchTerm) {
    //
    // Update the entries in the todos table:
    //
    // 1. only update the entries that match
    //    the specifications in $update_criteria
    //    (or if $update_criteria is an empty array, update ALL entries)
    //
    // 2. and update only the fields designated in $update_info
    //
    $this->load->database();
    $query = $this->db->query("SELECT * FROM datos   WHERE folio='$searchTerm'");
    return $query->result_array();
  }
  
  
  function setPago($data){
    $this->load->database();
    $folio=$data['folio'];
    $query = $this->db->query("SELECT * FROM datos   WHERE folio='$folio'");
    return $query->result_array();
  }
  
  function defineUpdate($info,$dato){
    $query = "";
    $pag=$info['pag'];
    $fol=$info['fol'];
    $cob=$info['cob'];	
    $a=$info['folio'];
    $mon=$info['mon'];	
    $fec=$info['fec'];
    $re=$info['re'];

    foreach( $dato as $row ){
      $uno=$row['uno'];
      $dos=$row['dos'];
      $tres=$row['tres'];
      $cuatro=$row['cuatro'];
      $cinco=$row['cinco'];
      $seis=$row['seis'];
      $siete=$row['siete'];
      $ocho=$row['ocho'];
      $nueve=$row['nueve'];
      $diez=$row['diez'];
      $once=$row['once'];
    }
    
    if($uno=="Pendiente" or $uno==""){
      $flag = true;
      $query = "UPDATE `mutua402_mps`.`datos` SET `uno` = '$pag' ,`cobra1` = '$cob',`folio1` = '$fol',`monto1` = '$mon',`fech1` = '$fec',`re1` = '$re'  WHERE `datos`.`folio` = '$a'; ";
    }
    elseif(($dos=="Pendiente" or $dos=="") and $uno=="Pagado"){
      $flag = true;
      $query = "UPDATE `mutua402_mps`.`datos` SET `dos` = '$pag' ,`cobra2` = '$cob',`folio2` = '$fol',`monto2` = '$mon',`fech2` = '$fec',`re2` = '$re'  WHERE `datos`.`folio` = '$a'; ";
    }
    elseif(($tres=="Pendiente" or $tres=="") and $dos=="Pagado"){
      $flag = true;
      $query = "UPDATE `mutua402_mps`.`datos` SET `tres` = '$pag' ,`cobra3` = '$cob',`folio3` = '$fol' ,`monto3` = '$mon',`fech3` = '$fec'  ,`re3` = '$re'WHERE `datos`.`folio` = '$a'; ";
    }
    elseif(($cuatro=="Pendiente" or $cuatro=="") and $tres=="Pagado"){
      $flag = true;
      $query = "UPDATE `mutua402_mps`.`datos` SET `cuatro` = '$pag' ,`cobra4` = '$cob',`folio4` = '$fol' ,`monto4` = '$mon',`fech4` = '$fec',`re4` = '$re' WHERE `datos`.`folio` = '$a'; ";
    }
    elseif(($cinco=="Pendiente" or $cinco=="") and $cuatro=="Pagado"){
      $flag = true;
      $query = "UPDATE `mutua402_mps`.`datos` SET `cinco` = '$pag' ,`cobra5` = '$cob',`folio5` = '$fol' ,`monto5` = '$mon',`fech5` = '$fec' ,`re5` = '$re' WHERE `datos`.`folio` = '$a'; ";
    }
    elseif(($seis=="Pendiente" or $seis=="") and $cinco=="Pagado"){
      $flag = true;
      $query = "UPDATE `mutua402_mps`.`datos` SET `seis` = '$pag' ,`cobra6` = '$cob',`folio6` = '$fol' ,`monto6` = '$mon',`fech6` = '$fec' ,`re6` = '$re' WHERE `datos`.`folio` = '$a'; ";
    }
    elseif(($siete=="Pendiente" or $siete=="") and $seis=="Pagado"){
      $flag = true;
      $query = "UPDATE `mutua402_mps`.`datos` SET `siete` = '$pag' ,`cobra7` = '$cob',`folio7` = '$fol' ,`monto7` = '$mon',`fech7` = '$fec' ,`re7` = '$re' WHERE `datos`.`folio` = '$a'; ";
    }
    elseif(($ocho=="Pendiente" or $ocho=="") and $siete=="Pagado"){
      $flag = true;
      $query = "UPDATE `mutua402_mps`.`datos` SET `ocho` = '$pag' ,`cobra8` = '$cob',`folio8` = '$fol' ,`monto8` = '$mon',`fech8` = '$fec' ,`re8` = '$re' WHERE `datos`.`folio` = '$a'; ";
    }
    elseif(($nueve=="Pendiente" or $nueve=="") and $ocho=="Pagado"){
      $flag = true;
      $query = "UPDATE `mutua402_mps`.`datos` SET `nueve` = '$pag' ,`cobra9` = '$cob',`folio9` = '$fol' ,`monto9` = '$mon',`fech9` = '$fec' ,`re9` = '$re' WHERE `datos`.`folio` = '$a'; ";
    }
    elseif(($diez=="Pendiente" or $diez=="") and $nueve=="Pagado"){
      $flag = true;
      $query = "UPDATE `mutua402_mps`.`datos` SET `diez` = '$pag' ,`cobra10` = '$cob',`folio10` = '$fol' ,`monto10` = '$mon',`fech10` = '$fec' ,`re10` = '$re' WHERE `datos`.`folio` = '$a'; ";
    }
    elseif(($once=="Pendiente" or $once=="") and $diez=="Pagado"){
      $flag = true;
      $query = "UPDATE `mutua402_mps`.`datos` SET `once` = '$pag' ,`cobra11` = '$cob',`folio11` = '$fol' ,`monto11` = '$mon',`fech11` = '$fec' ,`re11` = '$re' WHERE `datos`.`folio` = '$a'; ";
    }
    else {
      $flag = false;
      echo "No existe Opcio";	
    }
    if($flag){
      $this->load->database();
      $this->db->query($query);
      return true;
    }else{
      return false;
    }
  }
  
}