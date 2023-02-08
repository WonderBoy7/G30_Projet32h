<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Proposition_Model extends CI_Model {

    function getAllProposition(){
        $msg=$this->db->query("SELECT * FROM proposition")->result_array();
        return $msg;
    }
    function getMyProposition($user1){
        $msg="SELECT * FROM proposition WHERE iduser1='%s'";
        $msg=sprintf($msg,$this->db->escape($user1));
        $reponse=$this->db->query($msg)->result_array();
        return $reponse;
    }
}