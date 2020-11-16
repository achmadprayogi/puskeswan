<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Setting extends CI_Controller {



	function __construct(){

		parent::__construct();

		$this->load->model('wilayah_m');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}

	}



	public function index()

	{

		$data ['row'] = $this->wilayah_m->get();

	    $this->template->load('template','setting/data_kotaa',$data);

	   

	}



	public function add_kota()

	{

		$data ['row'] = $this->wilayah_m->get();



		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode', 'kode', 'required');

		$this->form_validation->set_rules('nama', 'nama', 'required');

		

		if ($this->form_validation->run() == FALSE)

	    {

	      $this->template->load('template','setting/wilayah_data',$data);

	    }

	    else

	    {

	       $post= $this->input->post(null,TRUE);

	       $this->wilayah_m->add_kota($post);

	       echo "<script>window.location='".site_url('setting')."';</script>";

	    }

	}



	public function edit_kota($id)

	{



		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode', 'kode', 'required');

		$this->form_validation->set_rules('nama', 'nama', 'required');

		

		if ($this->form_validation->run() == FALSE)

	    {

	      $query = $this->wilayah_m->get($id);

	      if ($query->num_rows() > 0 ) {

	      	$data['row'] = $query->row(); 	

	      	$this->template->load('template','setting/edit_kota',$data);

	      } else{

	      	 echo "<script>window.location='".site_url('setting')."';</script>";

	      }



	    }

	    else

	    {

	       $post= $this->input->post(null,TRUE);

	       $this->wilayah_m->edit_kota($post);

	      	echo "<script>window.location='".site_url('setting')."';</script>";

	    }

	}



	public function del_kota($id)

	{

		$this->wilayah_m->del_kota($id);

		if ($this->db->affected_rows() > 0) {

			echo "<script>alert('Data Berhasil Dihapus');</script>";

		}
		

			 echo "<script>window.location='".site_url('setting')."';</script>";
		

			

	}



	public function obat()

	{

		$data ['row'] = $this->wilayah_m->get();

		$this->template->load('templateee','setting/obat_data', $data);

	}

}

