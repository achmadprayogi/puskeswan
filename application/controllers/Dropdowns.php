<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dropdowns extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('dropdown');
    }
    
    public function index(){
        $data['countries'] = $this->dropdown->getCountryRows();
        $this->load->view('dropdowns/index', $data);
    }
    
    public function getStates(){
        $states = array();
        $kota_id = $this->input->post('kota_id');
        if($kota_id){
            $con['conditions'] = array('kota_id'=>$kota_id);
            $states = $this->dropdown->getStateRows($con);
        }
        echo json_encode($states);
    }
    
    public function getCities(){
        $cities = array();
        $kecamatan_id = $this->input->post('kecamatan_id');
        if($kecamatan_id){
            $con['conditions'] = array('kecamatan_id'=>$kecamatan_id);
            $cities = $this->dropdown->getCityRows($con);
        }
        echo json_encode($cities);
    }

     public function getPemilik(){
        $kelurahan = array();
        $kelurahan_id = $this->input->post('kelurahan_id');
        if($kelurahan_id){
            $con['conditions'] = array('kelurahan_id'=>$kelurahan_id);
            $kelurahan = $this->dropdown->getPemilik($con);
        }
        echo json_encode($kelurahan);
    }

     public function getPasien(){
        $pemilik = array();
        $pemilik_id = $this->input->post('pemilik_id');
        if($pemilik_id){
            $con['conditions'] = array('pemilik_id'=>$pemilik_id);
            $pemilik = $this->dropdown->getPasien($con);
        }
        echo json_encode($pemilik);
    }

    public function getData(){
        $pasien = array();
        $pasien_id = $this->input->post('pasien_id');
        if($pasien_id){
            $con['conditions'] = array('pasien_id'=>$pasien_id);
            $pasien = $this->dropdown->getPasienData($con);
        }
        echo json_encode($pasien);
    }

}
