<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
            if ($this->session->has_userdata('admin') == false) {
                redirect(base_url().'welcome/admin');
            }
    }
	/**
	 * Show home page
	 */
	public function index()
    {
        $this->load->view('admin');
    }

    public function liste_catego()
    {
        $this->load->model('category');
        $data['all'] = $this->category->getAllCatego();
        $this->load->view('liste', $data);
    }

    public function statistique()
    {
        $this->load->model('user');
        $size = $this->user->count()['size'];
        if ($size == null) {
            $size = 0;
        }
        $nbr = $this->user->countEchange()['size'];
        if ($nbr == null) {
            $nbr = 0;
        }
        $data['size'] = $size;
        $data['nbr'] = $nbr;
        $this->load->view('statistique', $data);
    }

    public function ajout_catego()
    {
        $this->load->view('ajouter_catego');
    }

    public function ajouter_catego()
    {
        $this->load->model('category');
        $nom = $this->input->post('nom');
        $this->category->insertMyCategory($nom);
        redirect(base_url().'admin/liste_catego');
    }
}
