<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_model
{
	public function __construct(){
		parent::__construct();
	}

	public function verif_data($field, $table, $value){
		return $this->db->select("*")
			->from($table)
			->where($field , $value)
			->get()
			->result();
	}
	public function get_info($email){
		return $this->db->select('*')
			->from('users')
			->where('email', $email)
			->get()
			->result();
	}
	public function verify_role_user($role){
		return $this->db->select('*')
			->from('users')
			->where('role_user', $role)
			->get()
			->result();
	}

	public function AllUser(){
		return $this->db->select('*')
			->from('users')
			->order_by('login', 'ASC')
			->get()
			->result();
	}

	public function add_user($user_data){
		$this ->db->insert('users', $user_data);
		$id_user = $this->db->insert_id();
		return $id_user;
	}

	public function maj_user($data){
		return $this->db->update('users', $data, array('user_id' => $data['user_id']));
	}


}
