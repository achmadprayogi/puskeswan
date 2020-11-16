<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Diagnosa_m extends CI_Model {



	public function get($id = null){

		$this->db->from('diagnosa');

		if ($id != null){

			$this->db->where('diagnosa_id',$id);

		}

		$query = $this->db->get();

		return $query;

	}



	public function add ($post){

		$params = [

			'kode' 	 => $post['kode'],
			'name' 	 => $post['name'],
			'alternative' 	 => $post['alternative'],
			

		];

		$this->db->insert('diagnosa',$params);

	}

	public function edit ($post){

		$params = [

			'kode' 	 => $post['kode'],
			'name' 	 => $post['name'],
			'alternative' 	 => $post['alternative'],

			

		];

		$this->db->where('diagnosa_id',$post['id']);

		$this->db->update('diagnosa',$params);

	}



	public function del ($id){

		$this->db->where('diagnosa_id',$id);

		$this->db->delete('diagnosa');

	}





}