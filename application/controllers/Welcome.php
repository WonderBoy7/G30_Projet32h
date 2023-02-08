<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->library('session');
		if ($this->session->has_userdata('user') == true) {
            redirect(base_url().'home/index');
        }
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}
	
	public function check($admin = false)
	{
		$this->load->library('session');
		$this->load->model('user');
		$email = $this->input->post('email');
		$pwd = $this->input->post('pwd');
		$check = $this->user->checkUser($email, $pwd);
		if ($check != null) {
			if ($check['types'] == 0 && $admin == false) {
				$this->session->set_userdata('user' ,$check);
				redirect(base_url().'home/index');
			} else if ($check['types'] == 1 && $admin == true){
				$this->session->set_userdata('admin' ,$check);
				redirect(base_url().'admin/index');
			}
		}
		if ($admin == false) {
			redirect(base_url().'welcome/index');
		} else {
			redirect(base_url().'welcome/admin');
		}
	}

	public function admin()
	{
		$this->load->library('session');
		if ($this->session->has_userdata('admin') == true) {
            redirect(base_url().'admin/index');
        }
		$this->load->view('logadmin');
	}
}
