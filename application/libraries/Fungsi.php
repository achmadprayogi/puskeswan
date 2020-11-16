<?php



Class Fungsi {

	

	protected $ci;

	

	function __construct(){

		$this->ci =& get_instance();



	}



	function user_login(){

		$this->ci->load->model('user_m');

		$user_id = $this->ci->session->userdata('userid');

		$user_data = $this->ci->user_m->get($user_id)->row();

		return $user_data;

	}



	public function hitung_pasien(){

		$this->ci->load->model('pasien_m');

		return $this->ci->pasien_m->get()->num_rows();

	}



	public function hitung_pemeriksaan(){

		$this->ci->load->model('periksa_m');

		return $this->ci->periksa_m->get_data()->num_rows();

	}

	public function hitung_bulanan(){

		$this->ci->load->model('periksa_m');

		return $this->ci->periksa_m->bulanan();

	}

	public function hitung_pemilik(){

		$this->ci->load->model('pemilik_m');

		return $this->ci->pemilik_m->get()->num_rows();

	}

	public function hitung_user(){

		$this->ci->load->model('dokter_m');

		return $this->ci->dokter_m->get()->num_rows();

	}

}