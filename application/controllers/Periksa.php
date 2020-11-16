<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Periksa extends CI_Controller {



	function __construct(){

		parent::__construct();

		$this->load->model(['kelurahan_m','wilayah_m','kecamatan_m','periksa_m','pemilik_m','spesies_m','obat_m','dokter_m','pasien_m','dropdown','diagnosa_m','tindakan_m','resep_m','dynamic_model']);

	}



	public function index()
	{
		$startdate  = $this->input->get('startdate', TRUE); 
		
		$enddate 	= $this->input->get('enddate', TRUE); 
		
		// die($startdate."----".$enddate);

		$data ['row'] = $this->periksa_m->get_data();

	    $this->template->load('template','pemeriksaan/pemeriksaan_dataa',$data,array($startdate,$enddate));

	   

	}



	public function add_periksa()

	{



		$kota 	   = $this->dynamic_model->getDataKota();

		$kecamatan = $this->kecamatan_m->get();

		$kelurahan = $this->kelurahan_m->get();

		$pemilik   = $this->pemilik_m->get();

		$spesies   = $this->spesies_m->get();

		$obat      = $this->obat_m->get();

        $diagnosa  = $this->diagnosa_m->get();

        $tindakan  = $this->tindakan_m->get();

		$dokter    = $this->dokter_m->get();

        $resep     = $this->resep_m->get();

        $periksa     = $this->periksa_m->get_data();



        $data = array(

        		'row'  		=> $periksa,

				'kota' 		=> $kota,

				'kecamatan' => $kecamatan,

				'kelurahan' => $kelurahan,

				'pemilik' 	=> $pemilik,

				'spesies' 	=> $spesies,

				'obat' 		=> $obat,

                'diagnosa' 	=> $diagnosa,

                'tindakan' 	=> $tindakan,

				'dokter' 	=> $dokter,

                'resep' 	=> $resep,



				// 'list'		=>$list,



		);



		

		$this->load->library('form_validation');

		$this->form_validation->set_rules('tanggal_periksa', 'tanggal_periksa', 'required');

		$this->form_validation->set_rules('pemilik_id', 'pemilik_id', 'required');

		$this->form_validation->set_rules('alamat', 'alamat', 'required');

		

		// $this->form_validation->set_rules('lain_lain', 'lain_lain', 'required');

		// $this->form_validation->set_rules('berat', 'berat', 'required');

		// $this->form_validation->set_rules('temperatur', 'temperatur', 'required');

		// $this->form_validation->set_rules('pulsus', 'pulsus', 'required');

		// $this->form_validation->set_rules('respirasi', 'respirasi', 'required');

		// $this->form_validation->set_rules('keterangan', 'keterangan', 'required');

		// $this->form_validation->set_rules('pernahdiobati', 'pernahdiobati', 'required');

		

		if ($this->form_validation->run() == FALSE)

	    {

	      $this->template->load('template','pemeriksaan/periksa_form',$data);

	    }

	    else

	    {

	       $post= $this->input->post(null,TRUE);

	       $this->periksa_m->add_periksa($post);

	       echo "<script>window.location='".site_url('periksa')."';</script>";

	    }

	}



	public function edit_periksa($id)

	{



		$this->load->library('form_validation');

		$this->form_validation->set_rules('kode', 'kode', 'required');

		$this->form_validation->set_rules('nama', 'nama', 'required');

		

		if ($this->form_validation->run() == FALSE)

	    {

	      $query = $this->wilayah_m->get($id);

	      if ($query->num_rows() > 0 ) {

	      	$data['row'] = $query->row(); 	

	      	$this->template->load('templateee','setting/edit_periksa',$data);

	      } else{

	      	 echo "<script>window.location='".site_url('setting')."';</script>";

	      }



	    }

	    else

	    {

	       $post= $this->input->post(null,TRUE);

	       $this->wilayah_m->edit_periksa($post);

	      	echo "<script>window.location='".site_url('setting')."';</script>";

	    }

	}



	public function del_periksa()

	{

		$id = $this->input->post('periksa_id');

		$this->wilayah_m->del_periksa($id);



		if ($this->db->affected_rows() > 0) {

			echo "<script>alert('Data Berhasil Dihapus');</script>";

		}

			echo "<script>window.location='".site_url('periksa')."';</script>";

	}





    function get_data_obat(){

        $id=$this->input->post('id');

        $data=$this->periksa_m->get_data_filter_obat($id);

        echo json_encode($data);

    }



    function get_data_resep(){

        $id=$this->input->post('id');

        $data=$this->periksa_m->get_data_filter($id);

        echo json_encode($data);

    }



	

}

