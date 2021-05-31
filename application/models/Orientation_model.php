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
		$req = $this->db->select('f.libelle, f.id filiereId, f.abbreviation fAbbr')
			->from('filieres f')
			-> join('sections s', 's.id = f.section');
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
}
