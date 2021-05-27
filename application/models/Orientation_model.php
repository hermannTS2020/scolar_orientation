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

	public function GetSectionEns($idEns, $idOption, $idEntrant){
		return $this->db->select('s.libelle, s.url, s.bgcolor, s.id sectionId, o.id optionId, te.id ensId')
			->from('sections s')
			-> join('diplome_entrant_section de', 'de.section = s.id')
			->join('options o', 'o.id = s.options')
			->join('type_enseignements te', 'te.id = o.type_enseignement')
			->where('de.diplome_entrant', $idEntrant)
			->where('o.id', $idOption)
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
		return $this->db->select('f.libelle, f.id filiereId, f.abbreviation fAbbr')
			->from('filieres f')
			-> join('sections s', 's.id = f.section')
			-> join('diplome_entrant_section de', 'de.id = f.diplome_entrant_section')
			->join('options o', 'o.id = s.options')
			->join('type_enseignements te', 'te.id = o.type_enseignement')
			->where('f.section', $idSection)
			->where('de.diplome_entrant', $identrant)
			->where('o.id', $idOption)
			->where('te.id', $idEns)
			->get()
			->result();
	}
}
