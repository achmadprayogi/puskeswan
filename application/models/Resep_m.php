<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep_m extends CI_Model {

	public function get($id = null){
		$this->db->from('resep');
		if ($id != null){
			$this->db->where('resep_id',$id);
		}
		$query = $this->db->get();
		return $query;
	}
}