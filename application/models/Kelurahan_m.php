<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Kelurahan_m extends CI_Model {



	public function get($id = null){

		$this->db->select('kelurahan.*,kota.kode as kode_kota,kota.nama_kota as nama_kota,kecamatan.kode as kode_kecamatan,kecamatan.nama_kecamatan as nama_kecamatan');

		$this->db->from('kelurahan');

		$this->db->join('kota', 'kota.kota_id = kelurahan.kota_id');

		$this->db->join('kecamatan', 'kecamatan.kecamatan_id = kelurahan.kecamatan_id');



		if ($id != null){

			$this->db->where('kelurahan_id',$id);

		}

		$query = $this->db->get();

		return $query;

	}

	function get_kelurahan($kecamatan_id){
		$query = $this->db->get_where('kelurahan', array('kecamatan_id' => $kecamatan_id));
		return $query;
	}



	public function add ($post){

		$params = [

			'kode' 	 		 => $post['kode'],

			'nama_kelurahan' => $post['nama_kelurahan'],

			'kecamatan_id' => $post['kecamatan_id'],

			'kota_id' 		 => $post['kota_id'],

		];

		$this->db->insert('kelurahan',$params);

	}

	public function edit ($post){

		$params = [

			'kode' 	=> $post['kode'],

			'nama_kelurahan' 	=> $post['nama_kelurahan'],

			'kecamatan_id' 		=> $post['kecamatan_id'],

			'kota_id' 		 	=> $post['kota_id'],

		];

		$this->db->where('kelurahan_id',$post['id']);

		$this->db->update('kelurahan',$params);

	}



	public function del ($id){

		$this->db->where('kelurahan_id',$id);

		$this->db->delete('kelurahan');

	}



	function get_kelurahan_filter ($id_kel){

        $this->db->where('kecamatan_id', $id_kel);

        $this->db->order_by('kelurahan_id', 'ASC');

        return $this->db->from('kelurahan')

            ->get()

            ->result();

    }

     public function get_selected($id_kelurahan)
        {
            $this->db->where('kelurahan_id', $id_kelurahan);
            $this->db->join('kecamatan', 'kelurahan.kecamatan_id = kecamatan.kecamatan_id');
            $this->db->join('kota', 'kecamatan.kota_id = kota.kota_id');
            return $this->db->get('kelurahan')->row();
        }





}