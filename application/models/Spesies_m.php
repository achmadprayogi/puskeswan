<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spesies_m extends CI_Model {

	public function get($id = null){
		$this->db->from('spesies');
		if ($id != null){
			$this->db->where('spesies_id',$id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add ($post){
		$params = [
			'nama' 	 => $post['nama'],
			
		];
		$this->db->insert('spesies',$params);
	}
	public function edit ($post){
		$params = [
			'nama' 	 => $post['nama'],
			
		];
		$this->db->where('spesies_id',$post['id']);
		$this->db->update('spesies',$params);
	}

	public function del ($id){
		$this->db->where('spesies_id',$id);
		$this->db->delete('spesies');
	}


}