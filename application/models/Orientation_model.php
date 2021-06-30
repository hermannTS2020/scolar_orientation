<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orientation_model extends CI_model
{
	public function __construct(){
		parent::__construct();
	}

	public function GetEns(){
		return $this->db->select('te.*')
			->from('type_enseignements as te')
			->limit(3)
			->get()->result();
	}
	public function GetEnsById($idEns){
		return $this->db->select('te.*')
			->from('type_enseignements as te')
			->where('te.id', $idEns)
			->get()->result();
	}

	public function GetOptionById($idOption){
		return $this->db->select('o.*')
			->from('options as o')
			->where('o.id', $idOption)
			->get()->result();
	}

	public function GetOptionEns($idEns){
		return $this->db->select('o.*')
			->from('options as o')
//			->join('type_enseignements as te', 'o.type_enseignement = te.id')
			->where('o.type_enseignement', $idEns )
			->get()
			->result_object();
	}

	public function GetSectionEns($idEns, $idOption, $idEntrant=NULL){
		$req = $this->db->select('s.libelle, s.url, s.bgcolor, s.id sectionId, o.id optionId, te.id ensId')
			->from('sections s');
			if(!empty($idEntrant)){
				$req-> join('diplome_entrant_section de', 'de.section = s.id');
			}

		$req->join('options o', 'o.id = s.options')
			->join('type_enseignements te', 'te.id = o.type_enseignement');
		if(!empty($idEntrant)){
			$req->where('de.diplome_entrant', $idEntrant);
		}
		return $req->where('o.id', $idOption)
			->where('te.id', $idEns)
			->get()
			->result();

	}

	public function GetDiplomeEntrant($identrant){
		return $this->db->select('de.*')
			->from('diplome_entrant de')
			->where('de.id', $identrant)
			->get()
			->result();
	}

	public function GetSectionById($idSection){
		return $this->db->select('s.*')
			->from('sections as s')
			->where('s.id', $idSection)
			->get()->result();
	}

	public function GetFacultySection($idEns, $idOption, $identrant, $idSection){
		$req = $this->db->select('f.id, f.libelle, f.id filiereId, f.abbreviation fAbbr, c.libelle cycle, d.intitule diplome')
			->from('filieres f')
			-> join('sections s', 's.id = f.section')
			-> join('cycle c', 'c.id = f.cycle')
			-> join('diplome_sortie d', 'd.filiere = f.id', 'left');
		if($identrant != 0){
			$req-> join('diplome_entrant_section de', 'de.id = f.diplome_entrant_section');
		}

		$req->join('options o', 'o.id = s.options')
		->join('type_enseignements te', 'te.id = o.type_enseignement')
		->where('f.section', $idSection);
		if($identrant != 0){
			$req->where('de.diplome_entrant', $identrant);
		}

		return $req->where('o.id', $idOption)
			->where('te.id', $idEns)
			->get()
			->result();
	}
	public function getCoursByFaculty($id){
		return $this->db->select('c.*')
			->from('cours as c')
			->join('cours_filiere as cf', 'cf.cours = c.id')
			->where('cf.filiere', $id)
			->get()->result();
	}
	public function getJobByFaculty($id){
		return $this->db->select('j.*')
			->from('job_description as j')
			->where('j.filiere', $id)
			->get()->result();
	}
	public function getDeboucheByFaculty($id){
		return $this->db->select('d.*')
			->from('debouches as d')
			->where('d.filiere', $id)
			->get()->result();
	}
	public function getMetierByFaculty($id){
		return $this->db->select('m.*')
			->from('metiers as m')
			->where('m.filiere', $id)
			->get()->result();
	}

	public function getSchool(){
		return $this->db->select('e.*, l.name localite, a.name arron, d.name dept, r.name reg ')
			->from('ecole as e')
			->join('localites as l', 'e.localite = l.id')
			->join('arrondissements as a', 'l.arrondissement = a.id')
			->join('departements as d', 'a.departement = d.id')
			->join('regions as r', 'd.region = r.id')
			->order_by('r.name', 'asc')
			->get()
			->result();
	}
	public function getFacultyById($id){
		return $this->db->select('f.*')
			->from('filieres as f')
			->where('f.id', $id)
			->get()->result();
	}
	public function getSchoolByFaculty($id){
		return $this->db->select('e.*, l.name localite, a.name arron, d.name dept, r.name reg, c.libelle')
			->from('filieres as f')
			->join('ecole_filiere as ef', 'f.id = ef.filiere')
			->join('ecole as e', 'ef.ecole = e.id')
			->join('cycle as c', 'c.id = f.cycle')
			->join('localites as l', 'e.localite = l.id')
			->join('arrondissements as a', 'l.arrondissement = a.id')
			->join('departements as d', 'a.departement = d.id')
			->join('regions as r', 'd.region = r.id')
			->where('f.id', $id)
			->order_by('r.name', 'asc')
			->get()
			->result();
	}

	public function getStructure(){
		return $this->db->select('s.*')
			->from('structures as s')
			->order_by('s.nom', 'asc')
			->get()
			->result();
	}
	public function getProgrammeByStructure($idS){
		return $this->db->select('p.*')
			->from('programmes as p')
			->where('p.structure', $idS)
			->order_by('p.libelle', 'asc')
			->get()
			->result();
	}
}
