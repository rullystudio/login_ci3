<?php if(! defined('BASEPATH')) exit ('No direct script access allowed') ;

class M_user extends CI_Model {

	public function input ($data) {

		$this->db->insert('user', $data) ;
	}

	public function login ($username, $password) {

		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('user') ;
		return $query->num_rows() ;
	}

	public function data_login ($username, $password) {

		$this->db->where('username', $username) ;
		$this->db->where('password', $password) ;
		return $this->db->get('user')->row() ;
	}

}