<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan_m extends CI_Model {

	public function get($id = null){
		$this->db->from('tindakan');
		if ($id != null){
			$this->db->where('tindakan_id',$id);
		}
		$query = $this->db->get();
		return $query;
	}
}