<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokter extends CI_Controller {

    var $API ="";

	function __construct(){
		parent::__construct();
        $this->api="http://trialmalang.epizy.com/rekammedis/dokter";
		$this->load->model('dokter_m');
        $this->load->library('curl');
        if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
	}

     function lihat() {
        $data['dokter'] = json_decode($this->curl->simple_get($this->api . '/lihat'));
        $this->load->view('dokter/lihat', $data);
    }
    
    function simpan() {
        if (isset($_POST['submit'])) {
            $data = array(
                'dokter_id' => $this->input->post('dokter_id'),
                'nama_dokter' => $this->input->post('nama_dokter'));
            $insert = $this->curl->simple_post($this->api . '/tambah', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('info', 'data berhasil disimpan.');
            } else {
                $this->session->set_flashdata('info', 'data gagal disimpan.');
            }
            redirect('dokter');
        } else {
           // $this->load->view('produk/v_form');
        }
    }

	public function index()
	{
		$data ['row'] = $this->dokter_m->get();
	    $this->template->load('template','dokter/dokter_dataa',$data);
	   
	}

	public function add()
	{	
		$dokter = new stdClass();
		$dokter->dokter_id = null;
		$dokter->nama_dokter = null;
		
		$data = array(
				'page' => 'add',
				'row'  => $dokter
		);
	    $this->template->load('template','dokter/dokter_form',$data);
	   
	}

	public function edit($id)
	{	
		$query = $this->dokter_m->get($id);
		if ($query->num_rows() > 0 ) {
	      	$dokter = $query->row();
	      	$data = array(
				'page' => 'edit',
				'row'  => $dokter
			);
	      	$this->template->load('template','dokter/dokter_form',$data);
	      } 
	      else {
	      	 echo "<script>window.location='".site_url('setting')."';</script>";
	      }
	}


	public function proses(){
		$post= $this->input->post(null,TRUE);
		if(isset($_POST['add'])){
			$this->dokter_m->add($post);
		} else if(isset($_POST['edit'])){
			$this->dokter_m->edit($post);
		}

		if ($this->db->affected_rows() > 0){
			echo "<script>window.location='".site_url('dokter')."';</script>";
		}	
	}

	public function del($id){
		$this->dokter_m->del($id);
		if ($this->db->affected_rows() > 0){
			echo "<script>window.location='".site_url('dokter')."';</script>";
		}
	} 
}
