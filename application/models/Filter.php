<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Model {
	
	function __construct(){

	parent::__construct();

}

	public function kota(){
		$this->db->order_by('nama_kota','ASC');
		$kota= $this->db->get('kota');
		return $kota->result_array();
	}

	function kecamatan($kotaId){
		$kecamatan="<option value='0'>--pilih--</pilih>";
		$this->db->order_by('nama_kecamatan','ASC');
		$kec= $this->db->get_where('kecamatan',array('kota_id'=>$kotaId));
			foreach ($kec->result_array() as $data ){
			$kecamatan.= "<option value='$data[id]'>$data[nama]</option>";
			}
		return $kecamatan;
	}

	function kelurahan($kecId){
	$kelurahan="<option value='0'>--pilih--</pilih>";

	$this->db->order_by('nama','ASC');
	$kel= $this->db->get_where('nama_kelurahan',array('kecamatan_id'=>$kecId));

	foreach ($kel->result_array() as $data ){
	$kelurahan.= "<option value='$data[id]'>$data[nama]</option>";
	}

	return $kelurahan;
	}

}