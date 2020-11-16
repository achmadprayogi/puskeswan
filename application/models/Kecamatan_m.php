<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Kecamatan_m extends CI_Model {



	public function get($id = null){

		$this->db->select('kecamatan.*,kota.kode as kode_kota,kota.nama_kota as nama_kota,kecamatan.kode as kode_kecamatan');

		$this->db->from('kecamatan');

		$this->db->join('kota', 'kota.kota_id = kecamatan.kota_id');

		if ($id != null){

			$this->db->where('kecamatan_id',$id);

		}

		$query = $this->db->get();

		return $query;

	}


	public function add ($post){

		$params = [

			'kode' 			 => $post['kode'],

			'nama_kecamatan' => $post['nama_kecamatan'],

			'kota_id' 		 => $post['kota_id'],

		];

		$this->db->insert('kecamatan',$params);

	}



	public function edit ($post){

		$params = [

			'kode' 			 => $post['kode'],

			'nama_kecamatan' => $post['nama_kecamatan'],

			'kota_id' 		 => $post['kota_id'],

		];

		$this->db->where('kecamatan_id',$post['id']);

		$this->db->update('kecamatan',$params);

	}



	public function del ($id){

		$this->db->where('kecamatan_id',$id);

		$this->db->delete('kecamatan');

	}



	public function get_kecamatan_filter ($id_kec){

        $this->db->where('kota_id', $id_kec);

        $this->db->order_by('kecamatan_id', 'ASC');

        return $this->db->from('kecamatan')

            ->get()

            ->result();

    }





}