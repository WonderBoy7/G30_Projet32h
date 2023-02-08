<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statics extends CI_Controller {

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
	public function accepter($id = null)
	{
        $this->load->model('user');
        $datapropos = $this->user->getPropos($id);
        var_dump($datapropos);
        $idowner = $datapropos['owner'];
        $owner_objet = $datapropos['objet2'];
        $user = $datapropos['proposer'];
        $user_objet =$datapropos['objet1'] ;
        $this->user->Accepter($user, $user_objet, $idowner, $owner_objet);
        redirect(base_url().'home/all_objet');
	}

    public function refuser()
    {
        $this->load->model('user');
        $datapropos = $this->user->getPropos($this->input->post('idpropos'));
        $idowner = $datapropos['owner'];
        $user = $datapropos['proposer'];
        $this->user->refuser($user, $idowner);
        redirect(base_url().'home/all_objet');
    }

    public function register()
    {
        $this->load->model('user');
        $pseudo = $this->input->post('pseudo');
        $email = $this->input->post('email');
        $pwd = $this->input->post('pwd');
        $num = $this->input->post('tel');
        $check = $this->user->newMembre($pseudo, $email, $pwd,$num);
        if ($check != null) {
            $this->session->set_userdata('user' ,$check);
            redirect(base_url().'home/index');
        }
        redirect(base_url().'welcome/register');
    }

	
}
