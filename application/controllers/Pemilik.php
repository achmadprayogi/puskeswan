<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pemilik extends CI_Controller {



	function __construct(){

		parent::__construct();
		$this->load->library('session');
		

		$this->load->model(['pemilik_m','wilayah_m','kecamatan_m','kelurahan_m','dropdown','dynamic_model']);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}

	}


	public function get_kecamatan(){
		$kecID = $this->input->post('kec');
		$id_kota = $this->input->post('id');
		$data = $this->dynamic_model->getDataKecamatan($id_kota);
		$output = '<option value=" ">-Pilih Kecamatan-</option>';
		foreach ($data as $row) {
			if($kecID) {
				if($kecID == $row->kecamatan_id){
					$output .= '<option value = "'.$row->kecamatan_id.'" selected>'.$row->nama_kecamatan.'</option>';
				}else{
					$output .= '<option value = "'.$row->kecamatan_id.'">'.$row->nama_kecamatan.'</option>';
				}
			}else{
				$output .= '<option value = "'.$row->kecamatan_id.'">'.$row->nama_kecamatan.'</option>';
			}
			
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function get_kelurahan(){
		$kelID = $this->input->post('kel');
		$id_kecamatan = $this->input->post('id');
		$data = $this->dynamic_model->getDataKelurahan($id_kecamatan);
		$output = '<option value=" ">-Pilih Kelurahan-</option>';
		foreach ($data as $row) {
			if($kelID) {
				if($kelID == $row->kelurahan_id){
					$output .= '<option value = "'.$row->kelurahan_id.'" selected>'.$row->nama_kelurahan.'</option>';
				}else{
					$output .= '<option value = "'.$row->kelurahan_id.'">'.$row->nama_kelurahan.'</option>';
				}
			}else{
				$output .= '<option value = "'.$row->kelurahan_id.'">'.$row->nama_kelurahan.'</option>';
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($output));
		}
	}	

	public function get_pemilik(){
		$pemID = $this->input->post('pem');
		$id_pemilik = $this->input->post('id');
		$data = $this->dynamic_model->getDataPemilik($id_pemilik);
		$output = '<option value=" ">-Pilih Pemilik-</option>';
		foreach ($data as $row) {
			if($pemID) {
				if($pemID == $row->pemilik_id){
					$output .= '<option value = "'.$row->pemilik_id.'" selected>'.$row->nama.'</option>';
				}else{
					$output .= '<option value = "'.$row->pemilik_id.'">'.$row->nama.'</option>';
				}
			}else{
				$output .= '<option value = "'.$row->pemilik_id.'">'.$row->nama.'</option>';
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($output));
		}
	}

	public function get_pasien(){
		$pasID = $this->input->post('pas');
		$id_pasien = $this->input->post('id');
		$data = $this->dynamic_model->getDataPasien($id_pasien);
		$output = '<option value=" ">-Pilih Pasien-</option>';
		foreach ($data as $row) {
			if($pasID) {
				if($pasID == $row->pasien_id){
					$output .= '<option value = "'.$row->pasien_id.'" selected>'.$row->nama.'</option>';
				}else{
					$output .= '<option value = "'.$row->pasien_id.'">'.$row->nama.'</option>';
				}
			}else{
				$output .= '<option value = "'.$row->pasien_id.'">'.$row->nama.'</option>';
			}
			$this->output->set_content_type('application/json')->set_output(json_encode($output));
		}
	}


	public function index()

	{

		$data ['row'] = $this->pemilik_m->get();

	    $this->template->load('template','pemilik/pemilik_dataa',$data);

	   

	}


	public function add()

	{	

		$pemilik = new stdClass();

		$pemilik->pemilik_id = null;

		$pemilik->nik = null;

		$pemilik->nama = null;

		$pemilik->alamat = null;

		$pemilik->telepon = null;

		$pemilik->kelurahan_id = null;

		$pemilik->kecamatan_id = null;

		$pemilik->kota_id = null;
 	

		$data = array(

				'page' => 'add',

				'row'  => $pemilik,

				'kota' => $this->dynamic_model->getDataKota()

		);

	    $this->template->load('template','pemilik/pemilik_form_add',$data);

	   

	}



	public function edit($id)

	{	

		// $query = $this->pemilik_m->get($id);

		// if ($query->num_rows() > 0 ) {

	 //      	$pemilik = $query->row();

	      	// print_r($pemilik);

	      	// die();


			// $kecamatan = $this->dropdown->get_kecamatan();

			// $kelurahan = $this->dropdown->get_kelurahan();


	  

	     $selected = $this->pemilik_m->get_selected($id);

			$data = array(

					'page' => 'edit',

					'row'  => $selected,

					'kota' => $this->dropdown->get_kota(),

					'kecamatan' => $this->dropdown->get_kecamatan(),

					'kelurahan' => $this->dropdown->get_kelurahan(),

            		'kota_selected' => $selected->kota_id,	

            		'kecamatan_selected' => $selected->kecamatan_id,

            		'kelurahan_selected' => $selected->kelurahan_id

			);

		    $this->load->view('pemilik/pemilik_form',$data);

	// } else{

	// 	echo "<script>alert('Data tidak ditemukan');</script>";

	// }

}

	public function getById($pemilik_id,$type){

		$data['tittle'] = 'Edit Data Pemilik';
		$data['kota']	= $this->dynamic_model->getDataKota();
		$dataPemilik   = $this->dynamic_model->getByIdPemilik($pemilik_id);
		if($type == 'edit' ){
		 	$data['byId'] = $dataPemilik;
		 	$data['page'] = 'edit';
		 	$this->template->load('template','pemilik/pemilik_form_edit',$data);
		 }else{
		  	$this->output->set_content_type('application/json')->set_output(json_encode($dataPemilik));
		 }
		
	}




	public function proses(){

		$post= $this->input->post(null,TRUE);

		if(isset($_POST['add'])){

			$this->pemilik_m->add($post);

		} else if(isset($_POST['edit'])){

			$this->pemilik_m->edit($post);

		}

		

		if ($this->db->affected_rows() > 0){

			echo "<script>alert('Berhasil disimpan');</script>";

			echo "<script>window.location='".site_url('pemilik')."';</script>";

		}else{

			

			echo "<script>window.location='".site_url('pemilik')."';</script>";

		}

	}



	public function del($id){

		$this->pemilik_m->del($id);

		if ($this->db->affected_rows() > 0){

			echo "<script>window.location='".site_url('pemilik')."';</script>";

		}

	} 

}

