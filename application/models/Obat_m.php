<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat_m extends CI_Model {

	public function get($id = null){
		$this->db->from('obat');
		if ($id != null){
			$this->db->where('obat_id',$id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add ($post){
		$params = [
			'nama' 	 => $post['nama'],
			'satuan' => $post['satuan'],
			'dosis'  => $post['dosis'],
		];
		$this->db->insert('obat',$params);
	}
	public function edit ($post){
		$params = [
			'nama' 	 => $post['nama'],
			'satuan' => $post['satuan'],
			'dosis'  => $post['dosis'],
		];
		$this->db->where('obat_id',$post['id']);
		$this->db->update('obat',$params);
	}

	public function del ($id){
		$this->db->where('obat_id',$id);
		$this->db->delete('obat');
	}

	   function get_data_filter ($id){
       $this->db->from('obat');
       $this->db->where('obat_id',$id);
       $query = $this->db->get();
       return $query->result();
    }


}