<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function getAllObject($id = 2)
	{
		$query = $this->db->query('SELECT * FROM dataobjet WHERE iduser != '.$id);
		return $query->result_array();
	}
    
    public function getMyObject($id = 2)
	{
		$query = $this->db->query('SELECT * FROM dataobjet WHERE iduser = '.$id);
		return $query->result_array();
	}

	public function checkUser($email = '', $pass = ''){
		$query = $this->db->query('SELECT * FROM user ');
		$stmt = $query->result_array();
		foreach ($stmt as $temp) {
			if ($temp['email'] == $email && $temp['password'] == $pass) {
				return $temp;
		 	}
        }
        return null;
	}

	public function getObject($id)
	{
		$query = $this->db->query('SELECT * FROM dataobjet WHERE idobjet = '.$id);
        return $query->result_array();
	}

	public function insertMyObject($idcatego, $nom, $description, $prix,$path)
	{
		$id = $this->db->count_all('objet') + 1;
		$sql = 'INSERT INTO objet VALUES (%s, %s, %s, %s, %s)';
		$sql = sprintf($sql, $this->db->escape($id), $this->db->escape($idcatego), $this->db->escape($nom), $this->db->escape($description), $this->db->escape($prix));
		$this->db->query($sql);

		$sql = 'INSERT INTO image VALUES (null,%s,%s)';
		$sql = sprintf($sql, $this->db->escape($id), $this->db->escape($path));
		$this->db->query($sql);

		$sql = 'INSERT INTO liste VALUES (null,%s,%s)';
        $user = $this->session->userdata('user');
		$sql = sprintf($sql, $this->db->escape($id), $this->db->escape($user['id']));
		$this->db->query($sql);
	}

	function newMembre($nom, $email, $mdp,$tel)
	{
		if ($nom != '' && $email != '' && $mdp != '') {
			$sql = 'INSERT INTO user VALUES (null,%s,%s,%s,%s, 0)';
			$sql = sprintf($sql, $this->db->escape($nom), $this->db->escape($email), $this->db->escape($mdp),$this->db->escape($tel));
			$this->db->query($sql);
			if ($this->db->affected_rows() > 0) {
				$query = $this->db->query("SELECT * FROM user WHERE email = '".$email."' AND password = '".$mdp."'")->row_array();
				return $query;
			} else {
				return null;
			}
		} else {
			return null;
		}
  
	}

	function historiser($Me,$idObjet){
		$sql = 'INSERT INTO historique values(default,%s,%s, CURRENT_TIMESTAMP)';
		$sql = sprintf($sql, $this->db->escape($idObjet), $this->db->escape($Me));
		$this->db->query($sql);
	}

	function Accepter($Me,$idMyObjet,$user2,$idObjet2){
		$this->db->query("UPDATE proposition SET confirmed=1 WHERE iduser1=".$Me." AND iduser2=".$user2);
		//echange
		$this->db->query("UPDATE liste SET idObjet=".$idObjet2." WHERE iduser=".$Me." AND idObjet=".$idMyObjet);
		//historiser
		$this->db->query("UPDATE liste SET idObjet=".$idMyObjet." WHERE iduser=".$user2." AND idObjet=".$idObjet2);
		$this->historiser($Me,$idMyObjet);
		$this->historiser($user2,$idObjet2);
	}

	function refuser($Me,$user2){
		$this->db->query("UPDATE proposition SET confirmed=2 WHERE iduser=".$Me." AND iduser2=".$user2);
	}
	
	function getHistorique(){
		$sql=$this->db->query("SELECT * FROM historique")->result_array();
		return $sql;
	}
	function getHistoriqueByObjet($objet){
		$sql=$this->db->query("SELECT * FROM historique WHERE idobjet=".$objet)->result_array();
		return $sql;
	}

	function getAllProposition(){
		$user = $this->session->userdata('user');
        $sql=$this->db->query("SELECT * FROM dataproposition WHERE owner = ".$user['id']." AND confirmed = 0")->result_array();
        return $sql;
    }
    function getPropos($id){
        $sql='SELECT * FROM dataproposition WHERE id= %s ';
        $sql=sprintf($sql,$this->db->escape($id));
		echo $sql;
        $reponse=$this->db->query($sql)->row_array();
        return $reponse;
    }

	public function etablishProposition($user1,$idObjet1,$user2,$idObjet2)
	{
		$id = $this->db->count_all('proposition') + 1;
		$sql = 'INSERT INTO proposition VALUES (%s, %s, %s, 0)';
		$sql=sprintf($sql,$this->db->escape($id), $this->db->escape($user1), $this->db->escape($user2));
		$this->db->query($sql);
		$sql = 'INSERT INTO detail_proposition VALUES (default ,%s, %s, %s)';
		$sql = sprintf($sql, $this->db->escape($id), $this->db->escape($idObjet1), $this->db->escape($idObjet2));
		$this->db->query($sql);
	}

	public function count()
	{
		$sql = "SELECT count(*) as size FROM user WHERE types = 0";
		$query = $this->db->query($sql);
		return $query->row_array();
	}

	public function countEchange()
	{
		$sql = "SELECT count(*) as size FROM historique GROUP BY idobjet,idowner,dt";
		$query = $this->db->query($sql);
		return $query->row_array();
	}

	public function search($query, $filter, $id)
	{
		$sql = "SELECT * FROM dataobjet WHERE iduser != $id AND nom LIKE '%$query%'";
		if ($filter != '*') {
			$sql = $sql . ' AND idcatego = '.$filter;
		}
		$q = $this->db->query($sql);
		return $q->result_array();
	}

}