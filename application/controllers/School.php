<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  School extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->zone = 'school';
		$this->load->model('Orientation_model', 'om');
	}

	public function index(){
		$this->data['breadcrumb'] = array(
			'Accueil' => base_url(),
			'Etablissement' => '#'
		);
		$this->data['etab'] = $s = $this->om->getSchool();
		$this->data['active'] = 'etablissements';
		$this->render('Cartographie de l’enseignement secondaire technique et professionnel du Cameroun ', 'list-school');
	}
}
