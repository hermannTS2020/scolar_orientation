<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Structure extends MY_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->zone = 'structure';
	}

	public function index(){
		$this->data['breadcrumb'] = array(
			'Accueil' => base_url(),
			'Structure d\'aide' => '#'
		);
		$struc = $this->om->getStructure();
		foreach ($struc as $s){
			$s->programmes = $this->om->getProgrammeByStructure($s->id);
		}
//		var_dump($struc);die;
		$this->data['structures'] = $struc;
		$this->data['active'] = 'metiers';
		$this->render('Répartition des programmes d\'aide à l\'insertion professionnelle des jeunes au Cameroun', 'list-structure');
	}
}
