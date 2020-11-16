<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pasien extends CI_Controller {



	function __construct(){

		parent::__construct();

		$this->load->model(['pasien_m','wilayah_m','kecamatan_m','kelurahan_m','pemilik_m','spesies_m','dropdown','dynamic_model']);

		$this->load->helper('date');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}

	}



	public function index()

	{

		$data ['row'] = $this->pasien_m->get();

		

	    $this->template->load('template','pasien/pasien_dataa',$data);

	   

	}





	function get_kota(){

        $id=$this->input->post('kota_id');

        $data=$this->wilayah_m->get_kota($id);

        echo json_encode($data);

    }



    function get_kecamatan(){

        $id=$this->input->post('id');

        $data=$this->kecamatan_m->get_kecamatan_filter($id);

        echo json_encode($data);

    }



    function get_kelurahan(){

        $id=$this->input->post('id');

        $data=$this->kelurahan_m->get_kelurahan_filter($id);

        echo json_encode($data);

    }









	public function cari(){

        $pemilik_id=$_GET['pemilik_id'];

        $cari =$this->pasien_m->cari($pemilik_id)->result();

        echo json_encode($cari);

    } 







	public function add()

	{	

		$pasien = new stdClass();

		$pasien->pasien_id = null;

		$pasien->nama = null;

		$pasien->spesies_id = null;

		$pasien->jenis_kelamin = null;

		$pasien->warna = null;

		$pasien->tanggal_lahir = null;

		$pasien->umur = null;

		$pasien->pemilik_id = null;

		$pasien->alamat = null;

		$pasien->telepon = null;

		$pasien->kota_id = null;

		$pasien->kecamatan_id = null;

		$pasien->kelurahan_id = null;


		$spesies 	= $this->spesies_m->get();

		$pemilik 	= $this->pemilik_m->get();

		


		$data = array(

				'page' => 'add',

				'row'  => $pasien,

				'spesies' => $spesies,

				'pemilik' => $pemilik,

				'kota' => $this->dynamic_model->getDataKota()		

		);

	    $this->template->load('template','pasien/pasien_form',$data);

	   

	}



	public function edit($id)

	{	

		$query = $this->pasien_m->get($id);

		if ($query->num_rows() > 0 ) {

	      	$pasien = $query->row();



	      	$spesies 	= $this->spesies_m->get();

	      	$pemilik 	= $this->pemilik_m->get();

			$kota 	   = $this->dropdown->getCountryRows();

			$kecamatan 	= $this->kecamatan_m->get();

			$kelurahan 	= $this->kelurahan_m->get();



			$data = array(

					'page' 		=> 'edit',

					'row'  		=> $pasien,

					'spesies' 	=> $spesies,

					'pemilik' 	=> $pemilik,

					'kota' 		=> $kota,

					'kecamatan' => $kecamatan,

					'kelurahan' => $kelurahan

			);

		    $this->template->load('template','pasien/pasien_form_edit',$data);

	} else{

		echo "<script>alert('Data tidak ditemukan');</script>";

	}

}

	public function getById($pasien_id,$type){

		$data['tittle'] = 'Edit Data Pemilik';
		$data['kota']	= $this->dynamic_model->getDataKota();
		$dataPasien   = $this->dynamic_model->getByIdPasien($pasien_id);
		if($type == 'edit' ){
		 	$data['byId'] = $dataPasien;
		 	$data['page'] = 'edit';
		 	$this->template->load('template','pasien/pasien_form_edit',$data);
		 }else{
		  	$this->output->set_content_type('application/json')->set_output(json_encode($dataPasien));
		 }
		
	}



	public function proses(){

		$post= $this->input->post(null,TRUE);

		if(isset($_POST['add'])){

			$this->pasien_m->add($post);

		} else if(isset($_POST['edit'])){

			$this->pasien_m->edit($post);

		}

		

		if ($this->db->affected_rows() > 0){

			echo "<script>alert('Berhasil disimpan'); </script>";

			echo "<script>window.location='".site_url('pasien')."';</script>";

		}else{

			echo "<script>alert('gagal');</script>";

			// echo "<script>window.location='".site_url('pasien')."';</script>";

		}

	}



	public function del($id){

		$this->pasien_m->del($id);

		if ($this->db->affected_rows() > 0){

			echo "<script>window.location='".site_url('pasien')."';</script>";

		}

	} 

}

