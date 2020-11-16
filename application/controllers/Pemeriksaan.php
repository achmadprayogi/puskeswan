<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model(['kelurahan_m','wilayah_m','kecamatan_m','periksa_m','pemilik_m','spesies_m','obat_m','dokter_m','pasien_m','dropdown','diagnosa_m','tindakan_m','resep_m']);
	}


	public function index()
	{
		$data ['row'] = $this->periksa_m->get();	
		$this->template->load('template','pemeriksaan/pemeriksaan_dataa',$data);
	}


    function get_data(){
        $id=$this->input->post('id');
        $data=$this->periksa_m->get_data_filter($id);
        echo json_encode($data);
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

    function get_data_pasien(){
        $id=$this->input->post('id');
        $data=$this->periksa_m->get_pasien_filter($id);
        echo json_encode($data);
    }

    public function add_pemeriksaan()
	{
		$periksa = new stdClass();
		$periksa->diagnosa_id = null;
		
		$kota 	   = $this->dropdown->getCountryRows();
		$kecamatan = $this->kecamatan_m->get();
		$kelurahan = $this->kelurahan_m->get();
		$pemilik   = $this->pemilik_m->get();
		$spesies   = $this->spesies_m->get();
		$obat      = $this->obat_m->get();
        $diagnosa  = $this->diagnosa_m->get();
        $tindakan  = $this->tindakan_m->get();
		$dokter    = $this->dokter_m->get();
        $resep     = $this->resep_m->get();

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
		$this->form_validation->set_rules('telepon', 'telepon', 'required');	
		$this->form_validation->set_rules('pasien_id', 'pasien_id', 'required');	
		$this->form_validation->set_rules('spesies', 'spesies', 'required');	
		$this->form_validation->set_rules('warna', 'warna', 'required');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
		$this->form_validation->set_rules('tanggal_lahir', 'tanggal_lahir', 'required');
		$this->form_validation->set_rules('umur', 'umur', 'required');
		$this->form_validation->set_rules('makan', 'pemilik_id', 'required');
		$this->form_validation->set_rules('minum', 'minum', 'required');
		$this->form_validation->set_rules('minum', 'minum', 'required');
		$this->form_validation->set_rules('muntah', 'muntah', 'required');
		$this->form_validation->set_rules('diare', 'diare', 'required');
		$this->form_validation->set_rules('vaksin', 'vaksin', 'required');
		$this->form_validation->set_rules('obat_cacing', 'obat_cacing', 'required');		
		$this->form_validation->set_rules('lain_lain', 'lain_lain', 'required');
		$this->form_validation->set_rules('berat', 'berat', 'required');
		$this->form_validation->set_rules('temperatur', 'temperatur', 'required');
		$this->form_validation->set_rules('pulsus', 'pulsus', 'required');
		$this->form_validation->set_rules('respirasi', 'respirasi', 'required');
		$this->form_validation->set_rules('mata', 'mata', 'required');
		$this->form_validation->set_rules('hidung', 'hidung', 'required');
		$this->form_validation->set_rules('mulut', 'mulut', 'required');
		$this->form_validation->set_rules('telinga', 'telinga', 'required');
		$this->form_validation->set_rules('kulit', 'kulit', 'required');
		$this->form_validation->set_rules('ekstrimitas', 'ekstrimitas', 'required');
		$this->form_validation->set_rules('rongga_perut', 'rongga_perut', 'required');
		$this->form_validation->set_rules('rongga_dada', 'rongga_dada', 'required');
		$this->form_validation->set_rules('kelenjar', 'kelenjar', 'required');
		$this->form_validation->set_rules('dehidrasi', 'dehidrasi', 'required');
		$this->form_validation->set_rules('diagnosa_id', 'diagnosa_id', 'required');
		$this->form_validation->set_rules('prognosa', 'prognosa', 'required');
		$this->form_validation->set_rules('tindakan_id', 'tindakan_id', 'required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'required');
		$this->form_validation->set_rules('pernahdiobati', 'pernahdiobati', 'required');
		$this->form_validation->set_rules('resep_id', 'respirasi', 'required');
		$this->form_validation->set_rules('dokter_id', 'dokter_id', 'required');
		
		
		if ($this->form_validation->run() == FALSE)
	    {
	      $this->template->load('templateee','pemeriksaan/pemeriksaan_form',$data);
	    }
	    else
	    {
	       $post= $this->input->post(null,TRUE);
	       $this->periksa_m->add($post);
	       echo "<script>window.location='".site_url('pemeriksaan')."';</script>";
	    }

		


	}


	public function add()
	{	
		$periksa = new stdClass();
		$periksa->periksa_id = null;
		$periksa->tanggal_periksa = null;
		$periksa->pemilik_id = null;
		$periksa->alamat = null;
		$periksa->telepon = null;
		$periksa->pasien_id = null;
		$periksa->spesies = null;
		$periksa->warna = null;
		$periksa->jenis_kelamin = null;
		$periksa->tanggal_lahir = null;
		$periksa->umur = null;
		$periksa->makan = null;
		$periksa->minum = null;
		$periksa->muntah = null;
		$periksa->diare = null;
		$periksa->vaksin = null;
		$periksa->obat_cacing = null;
		$periksa->lain_lain = null;
		$periksa->berat = null;
		$periksa->temperatur = null;
		$periksa->pulsus = null;
		$periksa->respirasi = null;
		$periksa->mata = null;
		$periksa->hidung = null;
		$periksa->mulut = null;
		$periksa->telinga = null;
		$periksa->kulit = null;
		$periksa->ekstrimitas = null;
		$periksa->rogga_perut = null;
		$periksa->rongga_dada = null;
		$periksa->kelenjar = null;
		$periksa->dehidrasi = null;
		$periksa->diagnosa_id = null;
		$periksa->prognosa = null;
		$periksa->tindakan_id = null;
		$periksa->keterangan = null;
		$periksa->resep_id = null;
		$periksa->dokter_id = null;
		
        $periksa->data_resep = null;
		$periksa->data_obat = null;
        $periksa->data_tindakan = null;
		$periksa->kota_id = null;
		$periksa->kecamatan_id = null;
		$periksa->kelurahan_id = null;
		$periksa->obat_id = null;
		$periksa->data_dokter = null;

		$kota 	   = $this->dropdown->getCountryRows();
		$kecamatan = $this->kecamatan_m->get();
		$kelurahan = $this->kelurahan_m->get();
		$pemilik   = $this->pemilik_m->get();
		$spesies   = $this->spesies_m->get();
		$obat      = $this->obat_m->get();
        $diagnosa  = $this->diagnosa_m->get();
        $tindakan  = $this->tindakan_m->get();
		$dokter    = $this->dokter_m->get();
        $resep     = $this->resep_m->get();
		// $list 		= $this->dropdown->getCountryRows();


		$data = array(
				'page' 		=> 'add',
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

	    $this->template->load('templateee','pemeriksaan/pemeriksaan_form',$data);
	   
	}

	public function edit($id)
	{	
		$query = $this->periksa_m->get($id);
		if ($query->num_rows() > 0 ) {
	      	$periksa 	= $query->row();
	      	$kota 	   = $this->dropdown->getCountryRows();
			$kecamatan 	= $this->kecamatan_m->get();
			$kelurahan 	= $this->kelurahan_m->get();
			$pemilik 	= $this->pemilik_m->get();
			$spesies 	= $this->spesies_m->get();
			$obat   	= $this->obat_m->get();
            $diagnosa  = $this->diagnosa_m->get();
            $tindakan  = $this->tindakan_m->get();
			$dokter 	= $this->dokter_m->get();
            $resep 	 = $this->resep_m->get();

				$data = array(
				'page' 		=> 'edit',
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
				
			);
	   			$this->template->load('templateee','pemeriksaan/pemeriksaan_form',$data);
	    } 
	      else {
	      	 echo "<script>window.location='".site_url('kelurahan')."';</script>";
	      }
	}


	public function proses(){
		$post= $this->input->post(null,TRUE);
		if(isset($_POST['add'])){
			$this->periksa_m->add($post);
		} else if(isset($_POST['edit'])){
			$this->periksa_m->edit($post);
		}

		if ($this->db->affected_rows() > 0){
			echo "<script>window.location='".site_url('pemeriksaan')."';</script>";
		}	
	}

	public function del($id){
		$this->periksa_m->del($id);
		if ($this->db->affected_rows() > 0){
			echo "<script>window.location='".site_url('pemeriksaan')."';</script>";
		}
	} 
}


