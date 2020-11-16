<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pemilik_m extends CI_Model {



	public function get($id = null){

		// $this->db->select('pemilik.*,kota.kode as kode_kota,kota.nama_kota as nama_kota,pemilik.kode as kode_pemilik');

		$this->db->from('pemilik');

		$this->db->join('kota', 'kota.kota_id = pemilik.kota_id');

		$this->db->join('kecamatan', 'kecamatan.kecamatan_id = pemilik.kecamatan_id');

		$this->db->join('kelurahan', 'kelurahan.kelurahan_id = pemilik.kelurahan_id');



		if ($id != null){

			$this->db->where('pemilik_id',$id);
			$this->db->join('kelurahan', 'kelurahan.kelurahan_id = pemilik.kelurahan_id');
			$this->db->join('kecamatan', 'kecamatan.kecamatan_id = pemilik.kecamatan_id');
            $this->db->join('kota', 'kota.kota_id = pemilik.kota_id');

		}

		$query = $this->db->get();

		return $query;

	}




	public function add ($post){

		$params = [

			'nik' 			=> $post['nik'],

			'nama' 			=> $post['nama'],

			'alamat'		=> $post['alamat'],

			'kelurahan_id' 	=> $post['kelurahan_id'],

			'kecamatan_id'  => $post['kecamatan_id'],

			'kota_id' 		=> $post['kota_id'],

			'telepon' 		=> $post['telepon'],

		];

		$this->db->insert('pemilik',$params);

	}



	public function edit ($post){

		$params = [

			'nik' 			=> $post['nik'],

			'nama' 			=> $post['nama'],

			'alamat' 		=> $post['alamat'],

			'kelurahan_id' 	=> $post['kelurahan_id'],

			'kecamatan_id' 	=> $post['kecamatan_id'],

			'kota_id' 		=> $post['kota_id'],

			'telepon' 		=> $post['telepon'],

		];

		$this->db->where('pemilik_id',$post['id']);

		$this->db->update('pemilik',$params);

	}



	public function del ($id){

		$this->db->where('pemilik_id',$id);

		$this->db->delete('pemilik');

	}





}