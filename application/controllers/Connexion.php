<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connexion extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->zone = 'connexion';
	}

	public function index(){
		$this->renderLogin('Authentification','login');
	}

	public function Auth(){
//		var_dump($_POST);die;
		if($this->input->method()=='post'){
			$this->form_validation->set_error_delimiters('<p class="form_erreur text-danger small">', '<p>');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('pwd', 'Mot de passe', 'trim|required');
			if($this->form_validation->run()){
				$email = $this->input->post('email');
				$pwd = $this->input->post('pwd');
				$users = $this->us->get_info($email);
//				var_dump($users); die;
				if(!empty($users)){
					$user = $users[0];
					// Sauvegarde des informations dans la session
					if($pwd == $user->pwd){// si le pwd est exacte
						$session = array(
							'userId'=>$user->id,
							'nom'=>$user->nom,
							'prenom'=>$user->prenom,
							'login'=>$user->login,
							'email'=>$user->email
						);
						$this->session->set_userdata($session);
						redirect('Dashboard');
					}else{
						$this->data['error'] = 'Mot de passe incorrect!';
					}
				}else{
					$this->data['error'] = 'Login ou Mot de passe incorrect!';
				}

			}
		}
		$this->renderLogin('Authentification', 'login', 'admin');
	}
	private function renderLogin($titre,$view=null){
		$this->load->view('template_admin/header-login', array('titre'=>$titre));
		$this->load->view($this->zone.'/'.$view,$this->data);
	}
}
