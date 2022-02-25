<?php 
defined('BASEPATH') OR exit ('No direct script access allowed') ;

class User Extends CI_Controller {

	function __construct()
	{
		parent::__construct() ;
		$this->load->model('M_user') ;
	}

	public function index () {

		if($this->session->userdata('username') == '')
		{
			redirect(base_url('user/login')) ;
		} 
		else {
			$data = [
					  'title' => 'Halaman Member'
					] ;
			$this->load->view('user', $data) ;
		}
	}

	public function login () {

		$data = [
				  'title' => 'Login User'
				] ;
		$this->load->view('login', $data) ;
	}

	public function authentifikasi() {

		$username = $this->input->post('username') ;
		$password = md5($this->input->post('password')) ;
		$login = $this->M_user->login($username, $password) ;
		if($login == 1) {
			$row = $this->M_user->data_login($username, $password) ;
			$data = [
					  'Logged' => True,
					  'nama' => $row->nama,
					  'username' => $row->username,
					] ;
			$this->session->set_userdata($data) ;
			redirect(base_url('user/index'));			
		}
		else {
			redirect(base_url('user/login')) ;
		}

	}

	public function register() {

		$data = [
				 'title' => 'Registrasi User'
				] ;
		$this->load->view('register', $data) ;
	}

	public function proses_register() {

		$data = [
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'password' => md5($this->input->post('password'))
				] ;
		$this->M_user->input($data) ;
		redirect(base_url('user/login')) ;
	}

	public function logout () {

		$this->session->sess_destroy() ;
		redirect(base_url('user/login')) ;
	}
}