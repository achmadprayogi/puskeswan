<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Periksa_m extends CI_Model {

	public function get_data($id=null,$daterange=null){
		$this->db->select('coba.*,pemilik.nama as nama_pemilik,kecamatan.nama_kecamatan as nama_kecamatan, pasien.nama as nama_pasien');
		$this->db->from('coba');		
		$this->db->join('pemilik', 'pemilik.pemilik_id = coba.pemilik_id');
		$this->db->join('kecamatan', 'kecamatan.kecamatan_id = coba.kecamatan_id');
		$this->db->join('pasien', 'pasien.pasien_id = coba.pasien_id');
		
		// $this->db->order_by('tanggal_periksa','ASC');
		

		if ($id != null & $daterange != null ){
			$this->db->where('id',$id);	
			$this->db->where('tanggal_periksa >=',$daterange[0]);
			$this->db->where('tanggal_periksa <=',$daterange[1]);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add_periksa($post){
		$params['tanggal_periksa'] 		= $post['tanggal_periksa'];
		$params['kecamatan_id'] 			= $post['kecamatan_id'];
		$params['pemilik_id'] 			= $post['pemilik_id'];
		$params['alamat'] 				= $post['alamat'];
		$params['telepon'] 				= $post['telepon'];
		$params['pasien_id'] 			= $post['pasien_id'];
		$params['spesies'] 				= $post['spesies'];
		$params['warna'] 				= $post['warna'];
		$params['jenis_kelamin'] 		= $post['jenis_kelamin'];
		$params['tanggal_lahir'] 		= $post['tanggal_lahir'];
		$params['makan'] 				= $post['makan'];
		$params['minum'] 		 		= $post['minum'];
		$params['muntah'] 		 		= $post['muntah'];
		$params['diare'] 		 		= $post['diare'];
		$params['vaksin'] 		 		= $post['vaksin'];
		$params['obat_cacing']   		= $post['obat_cacing'];
		$params['lain_lain']     		= $post['lain_lain'];
		$params['berat'] 		 		= $post['berat'];
		$params['temperatur'] 	 		= $post['temperatur'];
		$params['pulsus'] 		 		= $post['pulsus'];
		$params['respirasi'] 	 		= $post['respirasi'];
		$params['mata']		 	 		= $post['mata'];
		$params['hidung'] 		 		= $post['hidung'];
		$params['mulut'] 		 		= $post['mulut'];
		$params['telinga']		 		= $post['telinga'];
		$params['kulit'] 		 		= $post['kulit'];
		$params['ekstrimitas'] 	 		= $post['ekstrimitas'];
		$params['rongga_perut'] 	 	= $post['rongga_perut'];
		$params['rongga_dada'] 	 		= $post['rongga_dada'];
		$params['kelenjar'] 		 	= $post['kelenjar'];
		$params['dehidrasi'] 	 		= $post['dehidrasi'];
		$params['diagnosa'] 		 	= $post['diagnosa'];
		$params['prognosa'] 		 	= $post['prognosa'];
		$params['data_obat']  	 		= $post['list_detail'];
		$params['data_tindakan']  		= $post['list_detail_tindakan'];
		$params['keterangan'] 	 		= $post['keterangan'];
		$params['data_resep'] 	 		= $post['list_obat_resep'];
		$params['data_dokter'] 	 		= $post['list_detail_dokter'];

		$this->db->insert('coba',$params);
	}


	public function add ($post){
		$params = [
			'tanggal_periksa'=> $post['tanggal_periksa'],
			'pemilik_id' 	 => $post['pemilik_id'],
			'alamat' 		 => $post['alamat'],
			'kecamatan_id' 	 => $post['kecamatan_id'],
			'telepon' 		 => $post['telepon'],
			'pasien_id' 	 => $post['pasien_id'],
			'spesies' 	 	 => $post['spesies'],
			'warna' 		 => $post['warna'],
			'jenis_kelamin'  => $post['jenis_kelamin'],
			'tanggal_lahir'  => $post['tanggal_lahir'],
			'makan' 		 => $post['makan'],
			'minum' 		 => $post['minum'],
			'muntah' 		 => $post['muntah'],
			'diare' 		 => $post['diare'],
			'vaksin' 		 => $post['vaksin'],
			'obat_cacing'    => $post['obat_cacing'],
			'lain_lain'      => $post['lain_lain'],
			'berat' 		 => $post['berat'],
			'temperatur' 	 => $post['temperatur'],
			'pulsus' 		 => $post['pulsus'],
			'respirasi' 	 => $post['respirasi'],
			'mata' 		 	 => $post['mata'],
			'hidung' 		 => $post['hidung'],
			'mulut' 		 => $post['mulut'],
			'telinga' 		 => $post['telinga'],
			'kulit' 		 => $post['kulit'],
			'ekstrimitas' 	 => $post['ekstrimitas'],
			'rongga_perut' 	 => $post['rongga_perut'],
			'rongga_dada' 	 => $post['rongga_dada'],
			'kelenjar' 		 => $post['kelenjar'],
			'dehidrasi' 	 => $post['dehidrasi'],
			'diagnosa' 		 => $post['diagnosa'],
			'prognosa' 		 => $post['prognosa'],
			'data_obat'  	 => $post['list_detail'],
			'data_tindakan'  => $post['list_detail_tindakan'],
			'keterangan' 	 => $post['keterangan'],
			'data_resep' 	 => $post['list_obat_resep'],
			'data_dokter' 	 => $post['list_detail_dokter'],
			
		];
		$this->db->insert('periksa',$params);
	}
	public function edit ($post){
		$params = [
			'tanggal_periksa'=> $post['tanggal_periksa'],
			'pemilik_id' 	 => $post['pemilik_id'],
			'alamat' 		 => $post['alamat'],
			'kecamatan_id' 	 => $post['kecamatan_id'],
			'telepon' 		 => $post['telepon'],
			'pasien_id' 	 => $post['pasien_id'],
			'spesies' 		 => $post['spesies'],
			'warna' 		 => $post['warna'],
			'jenis_kelamin'  => $post['jenis_kelamin'],
			'tanggal_lahir'  => $post['tanggal_lahir'],
			'makan' 		 => $post['makan'],
			'minum' 		 => $post['minum'],
			'muntah' 		 => $post['muntah'],
			'diare' 		 => $post['diare'],
			'vaksin' 		 => $post['vaksin'],
			'obat_cacing'    => $post['obat_cacing'],
			'lain_lain'      => $post['lain_lain'],
			'berat' 		 => $post['berat'],
			'temperatur' 	 => $post['temperatur'],
			'pulsus' 		 => $post['pulsus'],
			'respirasi' 	 => $post['respirasi'],
			'mata' 		 	 => $post['mata'],
			'hidung' 		 => $post['hidung'],
			'mulut' 		 => $post['mulut'],
			'telinga' 		 => $post['telinga'],
			'kulit' 		 => $post['kulit'],
			'ekstrimitas' 	 => $post['ekstrimitas'],
			'rongga_perut' 	 => $post['rongga_perut'],
			'rongga_dada' 	 => $post['rongga_dada'],
			'kelenjar' 		 => $post['kelenjar'],
			'dehidrasi' 	 => $post['dehidrasi'],
			'diagnosa' 		 => $post['diagnosa'],
			'prognosa' 		 => $post['prognosa'],
			'data_obat'  	 => $post['list_detail'],
			'tindakan' 	 	 => $post['tindakan'],
			'keterangan' 	 => $post['keterangan'],
			'data_resep' 	 => $post['list_obat_resep'],
			'dokter_dokter'  => $post['list_detail_dokter'],

		];
		$this->db->where('periksa_id',$post['id']);
		$this->db->update('periksa',$params);
	}

	public function del ($id){
		$this->db->where('id',$id);
		$this->db->delete('coba');
	}

	function get_pasien_filter ($id){
	   $this->db->select('pasien.*,spesies.nama as nama_spesies');
       $this->db->from('pasien');
       $this->db->join('spesies', 'spesies.spesies_id = pasien.spesies_id');
       $this->db->where('pasien_id',$id);
       $query = $this->db->get();
       return $query->result();
    }

    function get_data_filter ($id){
       $this->db->from('pemilik');
       $this->db->where('pemilik_id',$id);
       $query = $this->db->get();
       return $query->result();
    }

    function get_obat($id){
       $this->db->from('obat');
       $this->db->where('obat_id',$id);
       $query = $this->db->get();
       return $query->result();
    }
    
   function get_data_filter_obat($id){
	 $this->db->from('obat');
       $this->db->where('obat_id',$id);
       $query = $this->db->get();
       return $query->result();
    }
    




}