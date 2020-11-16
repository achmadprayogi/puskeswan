<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	
	function __construct(){
		parent::__construct();		
		$this->load->model('user_m');
		
		// if($this->session->userdata('status') == "login"){
		// 	redirect(base_url("dashboard"));
		// }
 
	}
 
	function index(){
		$this->load->view('login');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => sha1($password)
			);
		$cek = $this->user_m->cek_login("user",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("dashboard"));
 
		}else{
			echo "Username dan password salah !";
			redirect(base_url("auth"));
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('auth'));
	}
}
