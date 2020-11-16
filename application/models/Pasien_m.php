<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Pasien_m extends CI_Model {



	public function get($id = null){

		$this->db->select('pasien.*,pemilik.nama as nama_pemilik,pasien.nama as nama_pasien,spesies.nama as nama_spesies');

		$this->db->from('pasien');

		$this->db->join('pemilik', 'pemilik.pemilik_id = pasien.pemilik_id');

		 $this->db->join('spesies', 'spesies.spesies_id = pasien.spesies_id');

		
		// $this->db->join('kelurahan', 'kelurahan.kelurahan_id = pasien.kelurahan_id');

		if ($id != null){

			$this->db->where('pasien_id',$id);

		}

		$query = $this->db->get();

		return $query;



		// SELECT tanggal_lahir, TIMESTAMPDIFF(YEAR, tanggal_lahir, NOW()) AS Tahun, TIMESTAMPDIFF ( MONTH, tanggal_lahir, NOW() )  AS Bulan  FROM pasien

	}



	 function cari($id){

        $query= $this->db->get_where('pemilik',array('pemilik_id'=>$id));

        return $query;

    }



	public function get_umur($id = null){



		$this->db->select('pasien.tanggal_lahir');

		$this->db->from('pasien');

		if ($id != null){

			$this->db->where('pasien_id',$id);

		}

		$query = $this->db->get();

		return $query;



	}



	public function add ($post){

		$params = [

			'nama' 			=> $post['nama'],

			'spesies_id'	=> $post['spesies_id'],

			'jenis_kelamin' => $post['jenis_kelamin'],

			'warna' 		=> $post['warna'],

			'tanggal_lahir' => $post['tanggal_lahir'],

			'umur' => $post['umur'],

			'pemilik_id' 	=> $post['pemilik_id'],


			'alamat' 		=> $post['alamat'],

			'telepon' 		=> $post['telepon'],

		];

		$this->db->insert('pasien',$params);

	}



	public function edit ($post){

		$params = [

			'nama' 			=> $post['nama'],

			'spesies_id'	=> $post['spesies_id'],

			'jenis_kelamin' => $post['jenis_kelamin'],

			'warna' 		=> $post['warna'],

			'tanggal_lahir' => $post['tanggal_lahir'],

			'umur' 			=> $post['umur'],

			'pemilik_id' 	=> $post['pemilik_id'],

			'alamat' 		=> $post['alamat'],

			'telepon' 		=> $post['telepon'],

		];

		$this->db->where('pasien_id',$post['id']);

		$this->db->update('pasien',$params);

	}



	public function del ($id){

		$this->db->where('pasien_id',$id);

		$this->db->delete('pasien');

	}



	public function get_detail_pasien($title)

	{

	  $this->db->like('pasien_id', $title, 'BOTH');

	  $this->db->order_by('pasien_id', 'asc');

	  $this->db->limit(10);

	  return $this->db->get('pasien')->result();

	}





}