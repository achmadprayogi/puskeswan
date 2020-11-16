<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Diagnosa extends CI_Controller {



	function __construct(){

		parent::__construct();

		$this->load->model('diagnosa_m');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}

	}



	public function index()

	{

		$data ['row'] = $this->diagnosa_m->get();

	    $this->template->load('template','diagnosa/diagnosa_dataa',$data);

	   

	}



	public function add()

	{	

		$diagnosa = new stdClass();

		$diagnosa->diagnosa_id = null;

		$diagnosa->kode = null;
		$diagnosa->name = null;
		$diagnosa->alternative = null;

		$data = array(

				'page' => 'add',

				'row'  => $diagnosa

	

		);

	    $this->template->load('template','diagnosa/diagnosa_form',$data);

	   

	}



	public function edit($id)

	{	

		$query = $this->diagnosa_m->get($id);

		if ($query->num_rows() > 0 ) {

	      	$diagnosa = $query->row();

			$data = array(

					'page' => 'edit',

					'row'  => $diagnosa,

					

			);

		    $this->template->load('template','diagnosa/diagnosa_form',$data);

	} else{

		echo "<script>alert('Data tidak ditemukan');</script>";

	}

}



	public function proses(){

		$post= $this->input->post(null,TRUE);

		if(isset($_POST['add'])){

			$this->diagnosa_m->add($post);

		} else if(isset($_POST['edit'])){

			$this->diagnosa_m->edit($post);

		}

		

		if ($this->db->affected_rows() > 0){

			echo "<script>alert('Berhasil disimpan');</script>";

			echo "<script>window.location='".site_url('diagnosa')."';</script>";

		}else{

			

			echo "<script>window.location='".site_url('diagnosa')."';</script>";

		}

	}



	public function del($id){

		$this->diagnosa_m->del($id);

		if ($this->db->affected_rows() > 0){

			echo "<script>window.location='".site_url('diagnosa')."';</script>";

		}

	} 

}

