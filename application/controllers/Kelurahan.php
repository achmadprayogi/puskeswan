<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Kelurahan extends CI_Controller {



	function __construct(){

		parent::__construct();

		$this->load->model(['kelurahan_m','wilayah_m','kecamatan_m','dropdown','dynamic_model']);
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
	}



	public function index()

	{

		$data ['row'] = $this->kelurahan_m->get();

	    $this->template->load('template','setting/kelurahan/kelurahan_dataa',$data);

	   

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





	public function add()

	{	

		$kelurahan = new stdClass();

		$kelurahan->kelurahan_id = null;

		$kelurahan->kode = null;

		$kelurahan->nama_kelurahan = null;

		$kelurahan->kecamatan_id = null;

		$kelurahan->kota_id = null;



		$kecamatan = $this->kecamatan_m->get();



		$data = array(

				'page' 		=> 'add',

				'row'  		=> $kelurahan,

				'kota' => $this->dynamic_model->getDataKota()


		);

	    $this->template->load('template','setting/kelurahan/kelurahan_form',$data);

	   

	}



	public function edit($id)

	{	

		$query = $this->kelurahan_m->get($id);

		if ($query->num_rows() > 0 ) {

	      	$kelurahan = $query->row();

	      	$kota 	   = $this->dropdown->get_kota();

			$kecamatan = $this->dropdown->get_kecamatan();



			$data = array(

					'page' 		=> 'edit',

					'row'  		=> $kelurahan,

					'kota' => $this->dynamic_model->getDataKota(),

					'kecamatan' => $kecamatan

			);

		    $this->template->load('template','setting/kelurahan/kelurahan_form',$data);

	      } 

	      else {

	      	 echo "<script>window.location='".site_url('kelurahan')."';</script>";

	      }

	}





	public function proses(){

		$post= $this->input->post(null,TRUE);

		if(isset($_POST['add'])){

			$this->kelurahan_m->add($post);

		} else if(isset($_POST['edit'])){

			$this->kelurahan_m->edit($post);

		}



		if ($this->db->affected_rows() > 0){

			echo "<script>window.location='".site_url('kelurahan')."';</script>";

		}	

	}



	public function del($id){

		$this->kelurahan_m->del($id);

		if ($this->db->affected_rows() > 0){

			echo "<script>window.location='".site_url('kelurahan')."';</script>";

		}

	} 

	public function getById($kelurahan_id,$type){

		$data['tittle'] = 'Edit Data Pemilik';
		$data['kota']	= $this->dynamic_model->getDataKota();
		$dataKelurahan   = $this->dynamic_model->getByIdKelurahan($kelurahan_id);
		if($type == 'edit' ){
		 	$data['byId'] = $dataKelurahan;
		 	$data['page'] = 'edit';
		 	$this->template->load('template','setting/kelurahan/kelurahan_form_edit',$data);
		 }else{
		  	$this->output->set_content_type('application/json')->set_output(json_encode($dataKelurahan));
		 }
		
	}

}

