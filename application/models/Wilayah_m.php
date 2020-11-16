<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Wilayah_m extends CI_Model {

	



	public function get($id = null){

		$this->db->from('kota');

		if ($id != null){

			$this->db->where('kota_id',$id);

		}

		$query = $this->db->get();

		return $query;

	}
	function get_kotaa(){
		$query = $this->db->get('kota');
		return $query;	
	}



	public function add_kota($post){

		$params['kode'] 		= $post['kode'];

		$params['nama_kota'] 	= $post['nama'];

		$this->db->insert('kota',$params);

	}



	public function edit_kota($post){

		$params['kode'] 		= $post['kode'];

		$params['nama_kota'] 	= $post['nama'];

		$this->db->where('kota_id',$post['kota_id']);

		$this->db->update('kota',$params);

	}



	public function del_kota($id){

		$this->db->where('kota_id',$id);

		$this->db->delete('kota');

	}



	function get_kota(){

        $this->db->order_by('kota_id', 'ASC');

        return $this->db->from('kota')

          ->get()

          ->result();

    }



}