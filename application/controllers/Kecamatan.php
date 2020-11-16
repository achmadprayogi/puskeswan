<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Kecamatan extends CI_Controller {



	function __construct(){

		parent::__construct();

		$this->load->model(['kecamatan_m','wilayah_m','dropdown','dynamic_model']);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
	}




	public function index()

	{

		$data ['row'] = $this->kecamatan_m->get();

	    $this->template->load('template','setting/kecamatan/kecamatan_dataa',$data);

	   

	}



	public function add()

	{	

		$kecamatan = new stdClass();

		$kecamatan->kecamatan_id = null;

		$kecamatan->kode = null;

		$kecamatan->nama_kecamatan = null;

		$kecamatan->kota_id = null;



		$kota 	   =  $this->wilayah_m->get();



		$data = array(

				'page' => 'add',

				'row'  => $kecamatan,

				'kota' => $kota

		);

	    $this->template->load('template','setting/kecamatan/kecamatan_form',$data);

	   

	}



	public function edit($id)

	{	

		$query = $this->kecamatan_m->get($id);

		if ($query->num_rows() > 0 ) {

	      	$kecamatan = $query->row();

	      	$kota 	   = $this->wilayah_m->get();



			$data = array(

					'page' => 'edit',

					'row'  => $kecamatan,

					'kota' => $kota

			);

		    $this->template->load('template','setting/kecamatan/kecamatan_form',$data);

	} else{

		echo "<script>alert('Data tidak ditemukan');</script>";

	}

}



	public function proses(){

		$post= $this->input->post(null,TRUE);

		if(isset($_POST['add'])){

			$this->kecamatan_m->add($post);

		} else if(isset($_POST['edit'])){

			$this->kecamatan_m->edit($post);

		}

		

		if ($this->db->affected_rows() > 0){

			echo "<script>alert('Berhasil disimpan');</script>";

			echo "<script>window.location='".site_url('kecamatan')."';</script>";

		}else{

			

			echo "<script>window.location='".site_url('kecamatan')."';</script>";

		}

	}



	public function del($id){

		$this->kecamatan_m->del($id);

		if ($this->db->affected_rows() > 0){

			echo "<script>window.location='".site_url('kecamatan')."';</script>";

		}

	} 

}

