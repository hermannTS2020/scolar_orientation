<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function getAllDataTable($table){
		if($table != NULL){
			return $this->db->select('*')
				->from($table)
				->order_by('id', 'asc')
				->get()
				->result();
		}
	}

	public function getData($table = false, $where = array()){
		if($table && is_array($where)){
			return $this->db->select('*')
				->from($table)
				->where($where)
				->get()->result();

		}
	}

	public function verifyData($field=false, $table, $value = false){
		if($field && $value){
			$r = $this->db->select($field)
				->from($table)
				->where(array($field=>$value))
				->get()
				->result();
			if(!empty($r)){
				return true;
			}else{
				return false;
			}
		}
	}

	public function saveTable($table = false, $data = array()){
		if(count($data) > 0 && $table){
			$this->db->set($data)->insert($table);
			return $this->insert_id();
		}else{
			return false;
		}
	}
}
