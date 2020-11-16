<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Spesies extends CI_Controller {



	function __construct(){

		parent::__construct();

		$this->load->model('spesies_m');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}

	}



	public function index()

	{

		$data ['row'] = $this->spesies_m->get();

	    $this->template->load('template','spesies/spesies_dataa',$data);

	   

	}



	public function add()

	{	

		$spesies = new stdClass();

		$spesies->spesies_id = null;

		$spesies->nama = null;

		$data = array(

				'page' => 'add',

				'row'  => $spesies

	

		);

	    $this->template->load('template','spesies/spesies_form',$data);

	   

	}



	public function edit($id)

	{	

		$query = $this->spesies_m->get($id);

		if ($query->num_rows() > 0 ) {

	      	$spesies = $query->row();

			$data = array(

					'page' => 'edit',

					'row'  => $spesies,

					

			);

		    $this->template->load('template','spesies/spesies_form',$data);

	} else{

		echo "<script>alert('Data tidak ditemukan');</script>";

	}

}



	public function proses(){

		$post= $this->input->post(null,TRUE);

		if(isset($_POST['add'])){

			$this->spesies_m->add($post);

		} else if(isset($_POST['edit'])){

			$this->spesies_m->edit($post);

		}

		

		if ($this->db->affected_rows() > 0){

			echo "<script>alert('Berhasil disimpan');</script>";

			echo "<script>window.location='".site_url('spesies')."';</script>";

		}else{

			

			echo "<script>window.location='".site_url('spesies')."';</script>";

		}

	}



	public function del($id){

		$this->spesies_m->del($id);

		if ($this->db->affected_rows() > 0){

			echo "<script>window.location='".site_url('spesies')."';</script>";

		}

	} 

}

