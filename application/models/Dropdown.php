<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Dropdown extends CI_Model{

    function __construct() {

        $this->countryTbl = 'kota';

        $this->stateTbl = 'kecamatan';

        $this->cityTbl = 'kelurahan';

        $this->pemTbl = 'pemilik';  

        $this->pasienTbl = 'pasien';

        $this->spesiesTbl = 'spesies';

    }

    

    /*

     * Get country rows from the countries table

     */

    function getCountryRows($params = array()){

        $this->db->select('c.kota_id, c.nama_kota');

        $this->db->from($this->countryTbl.' as c');

        

        //fetch data by conditions

        if(array_key_exists("conditions",$params)){

            foreach ($params['conditions'] as $key => $value) {

                if(strpos($key,'.') !== false){

                    $this->db->where($key,$value);

                }else{

                    $this->db->where('c.'.$key,$value);

                }

            }

        }

      

        

        $query = $this->db->get();

        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;



        //return fetched data

        return $result;

    }

    

    /*

     * Get state rows from the countries table

     */

    function getStateRows($params = array()){

        $this->db->select('s.kecamatan_id, s.nama_kecamatan');

        $this->db->from($this->stateTbl.' as s');

        

        //fetch data by conditions

        if(array_key_exists("conditions",$params)){

            foreach ($params['conditions'] as $key => $value) {

                if(strpos($key,'.') !== false){

                    $this->db->where($key,$value);

                }else{

                    $this->db->where('s.'.$key,$value);

                }

            }

        }

        

        $query = $this->db->get();

        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;



        //return fetched data

        return $result;

    }

    

    /*

     * Get city rows from the countries table

     */

    function getCityRows($params = array()){

        $this->db->select('c.kelurahan_id, c.nama_kelurahan');

        $this->db->from($this->cityTbl.' as c');

        

        //fetch data by conditions

        if(array_key_exists("conditions",$params)){

            foreach ($params['conditions'] as $key => $value) {

                if(strpos($key,'.') !== false){

                    $this->db->where($key,$value);

                }else{

                    $this->db->where('c.'.$key,$value);

                }

            }

        }

        

        $query = $this->db->get();

        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;



        //return fetched data

        return $result;

    }



    function getPemilik($params = array()){

        $this->db->select('c.pemilik_id, c.nama');

        $this->db->from($this->pemTbl.' as c');

        

        //fetch data by conditions

        if(array_key_exists("conditions",$params)){

            foreach ($params['conditions'] as $key => $value) {

                if(strpos($key,'.') !== false){

                    $this->db->where($key,$value);

                }else{

                    $this->db->where('c.'.$key,$value);

                }

            }

        }

        

        $query = $this->db->get();

        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;



        //return fetched data

        return $result;

    }



    function getPasien($params = array()){

        $this->db->select('c.pasien_id, c.nama, c.spesies_id, c.warna, c.tanggal_lahir, c.jenis_kelamin');

        $this->db->from($this->pasienTbl.' as c');

        

        //fetch data by conditions

        if(array_key_exists("conditions",$params)){

            foreach ($params['conditions'] as $key => $value) {

                if(strpos($key,'.') !== false){

                    $this->db->where($key,$value);

                }else{

                    $this->db->where('c.'.$key,$value);

                }

            }

        }

        

        $query = $this->db->get();

        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;



        //return fetched data

        return $result;

    }



    function getPasienData($params = array()){

        $this->db->select('pasien.*,pasien.nama as nama_pasien,spesies.nama as nama_spesies');

        $this->db->from('pasien');

        $this->db->join('spesies', 'spesies.spesies_id = pasien.spesies_id');

        //fetch data by conditions

        if(array_key_exists("conditions",$params)){

            foreach ($params['conditions'] as $key => $value) {

                if(strpos($key,'.') !== false){

                    $this->db->where($key,$value);

                }else{

                    $this->db->where('c.'.$key,$value);

                }

            }

        }

        

        $query = $this->db->get();

        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;



        //return fetched data

        return $result;

    }




    /// baru

    public function get_kota()
        {
            $this->db->order_by('kota_id', 'asc');
            return $this->db->get('kota')->result();
        }

        public function get_kecamatan()
        {
            // kita joinkan tabel kecamatan dengan kota
            $this->db->order_by('nama_kecamatan', 'asc');
            $this->db->join('kota', 'kota.kota_id = kecamatan.kota_id');
            return $this->db->get('kecamatan')->result();
        }

        public function get_kelurahan()
        {
            // kita joinkan tabel kelurahan dengan kecamatan
            $this->db->order_by('nama_kelurahan', 'asc');
            $this->db->join('kecamatan', 'kelurahan.kecamatan_id = kecamatan.kecamatan_id');
            return $this->db->get('kelurahan')->result();
        }


        // untuk edit ambil dari id level paling bawah
        public function get_selected_by_id_kelurahan($id_kelurahan)
        {
            $this->db->where('pemilik_id', $id_kelurahan);
            $this->db->join('kecamatan', 'kecamatan.kecamatan_id = pemilik.kecamatan_id');
            $this->db->join('kota', 'kecamatan.kota_id = pemilik.kota_id');
            return $this->db->get('pemilik')->row();
        }




}