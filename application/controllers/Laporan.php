<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	require('./vendor/autoload.php');


	use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

	use PhpOffice\PhpSpreadsheet\Helper\Sample;
	use PhpOffice\PhpSpreadsheet\IOFactory;
	use PhpOffice\PhpSpreadsheet\Spreadsheet;
	
class Laporan extends CI_Controller {


	function __construct(){
		parent::__construct();
		$this->load->model(['kelurahan_m','wilayah_m','kecamatan_m','periksa_m','pemilik_m','spesies_m','obat_m','dokter_m','pasien_m','dropdown']);
        if($this->session->userdata('status') != "login"){
            redirect(base_url("auth"));
        }
	}


	public function index()
	{
		$data ['row'] = $this->periksa_m->get_data();
		$data1 ['row1'] = $this->kecamatan_m->get();	
		$this->template->load('template','laporann',$data,$data1);
	}

	public function export()
	{
    // ambil data transaction dari database
    $transactions = $this->periksa_m->get_data();
    // panggil class Sreadsheet baru
    $spreadsheet = new Spreadsheet;
    // Buat custom header pada file excel
    $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('A1', 'No')
                ->setCellValue('B1', 'Tanggal Periksa')
                ->setCellValue('C1', 'Nama Pemilik')
                ->setCellValue('D1', 'Alamat')
                ->setCellValue('E1', 'Kecamatan')
                ->setCellValue('F1', 'Jenis Hewan')
                ->setCellValue('G1', 'Jenis Kelamin')
                ->setCellValue('H1', 'Berat (Kg)')
                ->setCellValue('I1', 'Temperatur (°C)')
                ->setCellValue('J1', 'Diagnosa');
    // define kolom dan nomor
    $kolom = 2;
    $nomor = 1;
    // tambahkan data transaction ke dalam file excel
    foreach($transactions->result() as $data) {
 
        $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('A' . $kolom, $nomor)
                    ->setCellValue('B' . $kolom, $data->tanggal_periksa)
                    ->setCellValue('C' . $kolom, $data->nama_pemilik)
                    ->setCellValue('D' . $kolom, $data->alamat)
                    ->setCellValue('E' . $kolom, $data->nama_kecamatan)
                    ->setCellValue('F' . $kolom, $data->spesies)
                    ->setCellValue('G' . $kolom, $data->jenis_kelamin)
                    ->setCellValue('H' . $kolom, $data->berat)
                    ->setCellValue('I' . $kolom, $data->temperatur)
                    ->setCellValue('J' . $kolom, $data->diagnosa);
 
        $kolom++;
        $nomor++;
 
    }
    // download spreadsheet dalam bentuk excel .xlsx
    $writer = new Xlsx($spreadsheet);
 
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="Laporan.xlsx"');
    header('Cache-Control: max-age=0');
 
    $writer->save('php://output');
	}

	
}
