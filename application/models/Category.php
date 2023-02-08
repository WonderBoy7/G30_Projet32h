<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function getAllCatego()
	{
		$query = $this->db->query('SELECT * FROM category');
		return $query->result_array();
	}

	public function insertMyCategory($nom)
	{
		$id = $this->db->count_all('category') + 1;
		$sql = 'INSERT INTO category VALUES (%s, %s)';
		$sql = sprintf($sql, $this->db->escape($id), $this->db->escape($nom));
		$this->db->query($sql);
	}

}