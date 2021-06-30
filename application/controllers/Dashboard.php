<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->zone = 'dashboard';
	}
	public function index(){
		$this->data['breadcrumb'] = array(
			'Accueil' => base_url(),
		);
		$this->render('Tableau de Bord', 'home', 'admin', 'true');
	}
}
