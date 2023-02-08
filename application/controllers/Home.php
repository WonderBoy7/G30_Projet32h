<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->has_userdata('user') == false) {
            redirect(base_url().'welcome/index');
        }
    }

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
        $this->load->model('user');
        $this->load->model('category');
        $user = $this->session->userdata('user');
        $data['objets'] = $this->user->getAllObject($user['id']);
        $data['all'] = $this->category->getAllCatego();
		$this->load->view('accueil', $data);
	}

    public function all_objet()
	{
        $this->load->model('user');
        $this->load->model('category');
        $user = $this->session->userdata('user');
        $data['objets'] = $this->user->getAllObject($user['id']);
        $data['all'] = $this->category->getAllCatego();
		$this->load->view('all_objet', $data);
	}


    public function proposition()
    {
        $this->load->model('user');
        $data['propos'] = $this->user->getAllProposition();
		$this->load->view('proposition', $data);
    }

    public function ajouter()
    {
        $this->load->model('user');
        $path = '';
        $config['upload_path']          = './assets/img/objet/';
        echo $config['upload_path'];
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 1000;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
						var_dump($error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $path = base_url().'assets/img/objet/'.$data['upload_data']['orig_name'];
						var_dump($data);
                }
        if ($path != '') {
            $idcatego = $this->input->post('catego');   
            $nom = $this->input->post('nom');
            $description = $this->input->post('desc');
            $prix = $this->input->post('prix');
            $this->user->insertMyObject($idcatego, $nom, $description, $prix,$path);            
        }

        redirect(base_url().'home/gestion_objet');
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url().'welcome/index');
    }

    public function propose($idobjet)
    {
        $this->load->model('user');
        $user = $this->session->userdata('user');
        $this->load->model('category');
        $data['objets'] = $this->user->getMyObject($user['id']);
        $data['obj'] = $this->user->getObject($idobjet);
        $data['all'] = $this->category->getAllCatego();
        $this->load->view('propose', $data);
    }

    public function ajout()
    {
        $this->load->model('category');
        $data['all'] = $this->category->getAllCatego();
        $this->load->view('ajout', $data);
    }
    public function admin()
    {
        $this->load->view('admin');
    }

    public function send_propose()
    {
        $this->load->model('user');
        $idowner = $this->input->post('idowner');
        $owner_objet = $this->input->post('objet_convoite');
        $user = $this->session->userdata('user');
        $user_objet = $this->input->post('idobject');
        $this->user->etablishProposition($user['id'], $user_objet, $idowner, $owner_objet);
        redirect(base_url().'home/all_objet');
    }


    public function gestion_objet()
    {
        $user = $this->session->userdata('user');
        $this->load->model('user');
        $data['objets'] = $this->user->getMyObject($user['id']);
		$this->load->view('objets', $data);
    }

    public function do_upload()
        {
                $config['upload_path']          = base_url().'assets/img/objet/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 0;
                $config['max_height']           = 0;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
						echo 'erreur';
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						var_dump($data);
                }
        }

	
        public function search()
        {
            $this->load->model('user');
            $user = $this->session->userdata('user');
            $keysearch = $this->input->post('keysearch');
            $filter = $this->input->post('catego');
            $data['key'] = $keysearch;
            $data['results'] = $this->user->search($keysearch, $filter,$user['id']);
            $this->load->view('displayed', $data);
        }

    public function history($idobjet)
    {
        $this->load->model('user');
            $user = $this->session->userdata('user');
            $data['history'] = $this->user->getHistoriqueByObjet($idobjet);
            $this->load->view('history', $data);
    }
	
}
