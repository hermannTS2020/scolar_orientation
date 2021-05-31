<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Orientation extends MY_Controller {
	public function __construct(){
		$this->zone ='orientation';
		parent::__construct();
		$this->load->model('Orientation_model', 'om');
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
		$this->data['active'] = 'orientation';
		$this->data['type_enseignement'] = $r = $this->om->GetEns();
//		$this->load->view('welcome_message');
		$this->render('Orientation', 'orientation');
	}

	public function GetOption($idEns){
		$ens = $this->om->GetEnsById($idEns);
		$this->data['idEns'] = $ens[0]->id;
		$this->data['libelle'] = $ens[0]->libelle;
		$this->data['descrip'] = $ens[0]->description;
		$this->data['abbr'] = $ens[0]->abbreviation;

		$this->data['active'] = 'orientation';
		$this->data['options'] = $o = $this->om->GetOptionEns($idEns);
//		var_dump($o);die;
		$this->render('Orientation', 'orientation-option');
	}

	public function GetSection($idEns, $idOption){
		$ens = $this->om->GetEnsById($idEns);
		$this->data['idEns'] = $ens[0]->id;
		$this->data['libelleEns'] = $ens[0]->libelle;
		$this->data['abbrEns'] = $ens[0]->abbreviation;

		$option =  $this->om->GetOptionById($idOption);
		$this->data['idOpt'] = $option[0]->id;
		$this->data['libelleOpt'] = $option[0]->libelle;
		$this->data['abbrOpt'] = $option[0]->abbreviation;

		$this->data['active'] = 'orientation';
//		$this->load->view('welcome_message');
		if($idEns == 1){
			$this->render('Orientation', 'orientation-section');
		}else{
			$this->data['sections'] = $r = $this->om->GetSectionEns($idEns, $idOption);
			$this->render('Orientation', 'orientation-section-by-sortie');
		}

	}

	public function GetSectionBySortie($idEns, $idOption, $identrant){
		$enter = $this->om->GetDiplomeEntrant($identrant);
		$this->data['diplomeNom'] = $enter[0]->nom;
		$this->data['diplomeCode'] = $enter[0]->code;
		$this->data['diplomeBgcolor'] = $enter[0]->bgcolor;
		$this->data['diplomeId'] = $enter[0]->id;


		$this->data['sections'] = $r = $this->om->GetSectionEns($idEns, $idOption, $identrant);

		$this->data['active'] = 'orientation';
//		$this->load->view('welcome_message');
		$this->render('Orientation', 'orientation-section-by-sortie');
	}
	public function GetFalcultyBySection($idEns, $idOption, $identrant, $idSection){
		$sectionItem =  $this->om->GetSectionById($idSection);
		$this->data['sectionLibelle'] = $sectionItem[0]->libelle;
		$this->data['sectionDescription'] = $sectionItem[0]->description;
		$this->data['sectionBgcolor'] = $sectionItem[0]->bgcolor;
//		var_dump($sectionItem);die;

		$this->data['faculty'] = $f = $this->om->GetFacultySection($idEns, $idOption, $identrant, $idSection);

		$this->data['active'] = 'orientation';
//		$this->load->view('welcome_message');
		$this->render('Orientation', 'orientation-faculty');
	}

	public function GetSchoolByFaculty($idFaculty){
		$this->data['active'] = 'orientation';
//		$this->load->view('welcome_message');
		$this->render('Orientation', 'orientation-etablissement-by-faculty');
	}


}
