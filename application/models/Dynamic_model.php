<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_model extends CI_Model

  {


    public function getDataKota(){

      return $this->db->get('kota')->result_array();
    }

     public function getDataKecamatan($id_kota){

      return $this->db->get_where('kecamatan',['kota_id'=>$id_kota])->result();
    }

    public function getDataKelurahan($id_kecamatan){

      return $this->db->get_where('kelurahan',['kecamatan_id'=>$id_kecamatan])->result();
    }

    public function getDataPemilik($id_pemilik){

      return $this->db->get_where('pemilik',['kelurahan_id'=>$id_pemilik])->result();
    }

    public function getDataPasien($id_pasien){

      return $this->db->get_where('pasien',['pemilik_id'=>$id_pasien])->result();
    }

    public function getByIdPemilik($pemilik_id){

      return $this->db->get_where('pemilik',['pemilik_id' => $pemilik_id])->row_array();

    }

     public function getByIdKelurahan($kelurahan_id){

      return $this->db->get_where('kelurahan',['kelurahan_id' => $kelurahan_id])->row_array();

    }

     public function getByIdPasien($pasien_id){

      return $this->db->get_where('pasien',['pasien_id' => $pasien_id])->row_array();

    }

         // function fetch_country()

         // {

         //  $this->db->order_by("nama_kota", "ASC");

         //  $query = $this->db->get("kota");

         //  return $query->result();

         // }



         // function fetch_state($country_id)

         // {

         //  $this->db->where('kota_id', $country_id);

         //  $this->db->order_by('nama', 'ASC');

         //  $query = $this->db->get('kecamatan');

         //  $output = '<option value="">Pilih Kecamatan</option>';

         //  foreach($query->result() as $row)

         //  {

         //   $output .= '<option value="'.$row->kecamatan_id.'">'.$row->nama.'</option>';

         //  }

         //  return $output;

         // }



         // function fetch_city($state_id)

         // {

         //  $this->db->where('kecamatan_id', $state_id);

         //  $this->db->order_by('nama', 'ASC');

         //  $query = $this->db->get('kelurahan');

         //  $output = '<option value="">Pilih Kelurahan</option>';

         //  foreach($query->result() as $row)

         //  {

         //   $output .= '<option value="'.$row->kelurahan_id.'">'.$row->nama.'</option>';

         //  }

         //  return $output;

         // }

}

