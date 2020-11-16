<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Obat extends CI_Controller {



	function __construct(){

		parent::__construct();

		$this->load->model('obat_m');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}

	}



	public function index()

	{

		$data ['row'] = $this->obat_m->get();

	    $this->template->load('template','obat/obat_dataa',$data);

	   

	}



	public function add()

	{	

		$obat = new stdClass();

		$obat->obat_id = null;

		$obat->nama = null;

		$obat->satuan = null;

		$obat->dosis = null;

		$data = array(

				'page' => 'add',

				'row'  => $obat

		);

	    $this->template->load('template','obat/obat_form',$data);

	   

	}



	public function edit($id)

	{	

		$query = $this->obat_m->get($id);

		if ($query->num_rows() > 0 ) {

	      	$obat = $query->row();

	      	$data = array(

				'page' => 'edit',

				'row'  => $obat

			);

	      	$this->template->load('template','obat/obat_form',$data);

	      } 

	      else {

	      	 echo "<script>window.location='".site_url('setting')."';</script>";

	      }

	}





	public function proses(){

		$post= $this->input->post(null,TRUE);

		if(isset($_POST['add'])){

			$this->obat_m->add($post);

		} else if(isset($_POST['edit'])){

			$this->obat_m->edit($post);

		}



		if ($this->db->affected_rows() > 0){

			echo "<script>window.location='".site_url('obat')."';</script>";

		}	

	}



	public function del($id){

		$this->obat_m->del($id);

		if ($this->db->affected_rows() > 0){

			echo "<script>window.location='".site_url('obat')."';</script>";

		}

	} 

}

