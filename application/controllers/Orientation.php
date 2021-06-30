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
		$this->data['breadcrumb'] = array(
			'Accueil' => base_url(),
			'Orientation' => '#'
		);
		$this->data['type_enseignement'] = $r = $this->om->GetEns();
//		$this->load->view('welcome_message');
		$this->render('Orientation', 'orientation');
	}

	public function GetOption($idEns){
		$this->data['breadcrumb'] = array(
			'Accueil' => base_url(),
			'Orientation' => '#',
			'Liste des options' => '#'
		);
		$ens = $this->om->GetEnsById($idEns);
		$this->data['idEns'] = $ens[0]->id;
		$this->data['libelle'] = $ens[0]->libelle;
		$this->data['descrip'] = $ens[0]->description;
		$this->data['abbr'] = $ens[0]->abbreviation;

		$this->data['active'] = 'orientation';
		$this->data['options'] = $o = $this->om->GetOptionEns($idEns);
//		var_dump($o);die;
		$this->render('Liste des options de '.$ens[0]->libelle, 'orientation-option');
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
			$this->data['breadcrumb'] = array(
				'Accueil' => base_url(),
				'Orientation' => '#',
				'Examen d\'entré'=>'#'
			);
			$this->render('Liste des sections de '.$option[0]->libelle, 'orientation-section');

		}else{

			$this->data['breadcrumb'] = array(
				'Accueil' => base_url(),
				'Orientation' => '#',
				'Liste des sections' => '#'
			);
			$this->data['sections'] = $r = $this->om->GetSectionEns($idEns, $idOption);
			$this->render('Examen d\'entré', 'orientation-section-by-sortie');
		}

	}

	public function GetSectionBySortie($idEns, $idOption, $identrant){
		$this->data['breadcrumb'] = array(
			'Accueil' => base_url(),
			'Orientation' => '#',
			'Liste des sections'=>'#'
		);
		$enter = $this->om->GetDiplomeEntrant($identrant);
		$this->data['diplomeNom'] = $enter[0]->nom;
		$this->data['diplomeCode'] = $enter[0]->code;
		$this->data['diplomeBgcolor'] = $enter[0]->bgcolor;
		$this->data['diplomeId'] = $enter[0]->id;


		$this->data['sections'] = $r = $this->om->GetSectionEns($idEns, $idOption, $identrant);

		$this->data['active'] = 'orientation';
//		$this->load->view('welcome_message');
		$this->render('Liste des sections '.$enter[0]->nom, 'orientation-section-by-sortie');
	}
	public function GetFalcultyBySection($idEns, $idOption, $identrant, $idSection){
		$sectionItem =  $this->om->GetSectionById($idSection);
		$this->data['sectionLibelle'] = $sectionItem[0]->libelle;
		$this->data['sectionDescription'] = $sectionItem[0]->description;
		$this->data['sectionBgcolor'] = $sectionItem[0]->bgcolor;


		$fil = $this->om->GetFacultySection($idEns, $idOption, $identrant, $idSection);
		foreach($fil as $f){
			$f->cours = $this->om->getCoursByFaculty($f->id);
			$f->job = $this->om->getJobByFaculty($f->id);
			$f->debouches = $this->om->getDeboucheByFaculty($f->id);
			$f->metiers = $this->om->getMetierByFaculty($f->id);
		}

		$this->data['faculty'] = $fil;
//		var_dump($fil);die;
		$this->data['active'] = 'orientation';
//		$this->load->view('welcome_message');
		$this->data['breadcrumb'] = array(
			'Accueil' => base_url(),
			'Orientation' => '#',
			'Liste des filière' =>'#'
		);
		$this->render('Liste des filière de la section '.$sectionItem[0]->libelle, 'orientation-faculty');
	}

	public function GetSchoolByFaculty($idFaculty){
		$f = $this->om->getFacultyById($idFaculty);
		$filiere = $f[0];
		$lib = explode(':', $filiere->libelle);
		$libelle = $lib[1];

		$this->data['active'] = 'orientation';
		$this->data['EcoleParFiliere'] = $etabByFil = $this->om->getSchoolByFaculty($idFaculty);
		$this->data['breadcrumb'] = array(
			'Accueil' => base_url(),
			'Orientation' => '#',
			'Liste des établissements offrant la filière '.$libelle =>'#'
		);
		$this->render('Orientation', 'orientation-etablissement-by-faculty');
	}


}
