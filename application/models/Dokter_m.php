<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Dokter_m extends CI_Model {



	public function get($id = null){

		$this->db->from('dokter');

		if ($id != null){

			$this->db->where('dokter_id',$id);

		}

		$query = $this->db->get();

		return $query;

	}



	public function add ($post){

		$params = [

			'nama_dokter' 	 => $post['nama_dokter'],

			

		];

		$this->db->insert('dokter',$params);

	}

	public function edit ($post){

		$params = [

			'nama_dokter' 	 => $post['nama_dokter'],

			

		];

		$this->db->where('dokter_id',$post['id']);

		$this->db->update('dokter',$params);

	}



	public function del ($id){

		$this->db->where('dokter_id',$id);

		$this->db->delete('dokter');

	}





}