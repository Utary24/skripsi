<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KaryawanModel;
use App\Models\ElektronikModel;
use TCPDF;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


class ElektronikController extends BaseController
{
	public function __construct()
	{
		helper(['form']);
		$this->karyawan_model = new KaryawanModel();
		$this->elektronik_model = new ElektronikModel();
	}

	public function index()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		// membuat halaman otomatis berubah ketika berpindah halaman 
		$currentPage = $this->request->getVar('page_elektronik') ? $this->request->getVar('page_elektronik') : 1;

		// paginate
		$paginate = 1000000;
		$data['elektronik']   = $this->elektronik_model->join('karyawan', 'karyawan.karyawan_id = elektronik.karyawan_id')->paginate($paginate, 'elektronik');
		$data['pager']        = $this->elektronik_model->pager;
		$data['currentPage']  = $currentPage;
		echo view('elektronik/index', $data);
	}


	public function excel(){
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}


	 $elektronik = new ElektronikModel();
     $dataElektronik = $elektronik->getData();
	
	 $spreadsheet = new Spreadsheet();


 // tulis header/nama kolom 
    $spreadsheet->setActiveSheetIndex(0)
                ->setCellValue('B1', 'Tanggal Masuk')
                ->setCellValue('C1', 'Kode Inventaris')
                ->setCellValue('D1', 'Nama ')
                ->setCellValue('E1', 'Merek ')
				->setCellValue('F1', 'Satuan')
                ->setCellValue('G1', 'Vol')
                ->setCellValue('H1', 'Harga')
                ->setCellValue('I1', 'Jumlah')
                ->setCellValue('J1', 'Kondisi')
                ->setCellValue('K1', 'Keterangan')
                ->setCellValue('L1', 'Staff');

    
    $column = 2;
    // tulis data mobil ke cell
    foreach($dataElektronik as $data) {
        $spreadsheet->setActiveSheetIndex(0)
                    ->setCellValue('B' . $column, $data['tanggal_masuk'])
                    ->setCellValue('C' . $column, $data['kode_inventaris'])
                    ->setCellValue('D' . $column, $data['nama_item'])
                    ->setCellValue('E' . $column, $data['merk'])
                    ->setCellValue('F' . $column, $data['satuan'])
					->setCellValue('G' . $column, $data['vol'])
					->setCellValue('H' . $column, $data['harga'])
					->setCellValue('I' . $column, $data['jumlah'])
					->setCellValue('J' . $column, $data['kondisi'])
					->setCellValue('K' . $column, $data['keterangan'])
                    ->setCellValue('L' . $column, $data['nama_karyawan']);

        $column++;
    }


	// tulis dalam format .xlsx
    $writer = new Xlsx($spreadsheet);
    $fileName = 'Data elektronik';

    // Redirect hasil generate xlsx ke web client
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename='.$fileName.'.xlsx');
    header('Cache-Control: max-age=0');
	$this->response->setContentType('application/excel');

    $writer->save('php://output');
	}

	public function pdf(){
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		
		$data = array(
			'elektronik'	=> $this->elektronik_model->getData(),	
		);
		$html =  view('elektronik/pdf', $data);

		// test pdf

		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, 'A2', true, 'UTF-8', false);
		// set font tulisan
		$pdf->SetFont('dejavusans', '', 10);
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

		// $pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Utari Pratiwi');
		$pdf->SetTitle('Data elektronik HSRCC');
		$pdf->SetSubject('Data elektronik');
		// add a page
		$pdf->AddPage();
		// write html
		$pdf->writeHTML($html);
		$this->response->setContentType('application/pdf');
		// ouput pdf
		$pdf->Output('data_elektronik.pdf', 'I');


	}


	public function create()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$karyawan = $this->karyawan_model->findAll();
		$data['karyawan'] = ['' => 'karyawan'] + array_column($karyawan, 'nama_karyawan', 'karyawan_id');
		return view('elektronik/create', $data);
	}

	public function store()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$validation =  \Config\Services::validation();
		$data = array(
			'tanggal_masuk'        	=> $this->request->getPost('tanggal_masuk'),
			'kode_inventaris'    	=> $this->request->getPost('kode_inventaris'),
			'nama_item'         	=> $this->request->getPost('nama_item'),
			'merk'         			=> $this->request->getPost('merk'),
			'satuan'       			=> $this->request->getPost('satuan'),
			'vol'        			=> $this->request->getPost('vol'),
			'harga'        			=> $this->request->getPost('harga'),
			'jumlah'        		=> $this->request->getPost('jumlah'),
			'kondisi'        		=> $this->request->getPost('kondisi'),
			'keterangan'        	=> $this->request->getPost('keterangan'),
			'karyawan_id'        	=> $this->request->getPost('karyawan_id'),

		);

		if ($validation->run($data, 'elektronik') == FALSE) {
			session()->setFlashdata('inputs', $this->request->getPost());
			session()->setFlashdata('errors', $validation->getErrors());
			return redirect()->to(base_url('elektronik/create'));
		} else {
			// insert
			$simpan = $this->elektronik_model->insertData($data);
			if ($simpan) {
				session()->setFlashdata('success', 'Tambah Data Berhasil');
				return redirect()->to(base_url('elektronik'));
			}
		}
	}


	public function edit($id)
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$karyawan = $this->karyawan_model->findAll();
		$data['karyawan'] = ['' => 'Pilih karyawan'] + array_column($karyawan, 'nama_karyawan', 'karyawan_id');
		$data['elektronik'] = $this->elektronik_model->getData($id);
		echo view('elektronik/edit', $data);
	}

	public function update()
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$id = $this->request->getPost('elektronik_id');

		$validation =  \Config\Services::validation();

		$data = array(
			'tanggal_masuk'        	=> $this->request->getPost('tanggal_masuk'),
			'kode_inventaris'    	=> $this->request->getPost('kode_inventaris'),
			'nama_item'         	=> $this->request->getPost('nama_item'),
			'merk'         			=> $this->request->getPost('merk'),
			'satuan'       			=> $this->request->getPost('satuan'),
			'vol'        			=> $this->request->getPost('vol'),
			'harga'        			=> $this->request->getPost('harga'),
			'jumlah'        		=> $this->request->getPost('jumlah'),
			'kondisi'        		=> $this->request->getPost('kondisi'),
			'keterangan'        	=> $this->request->getPost('keterangan'),
			'karyawan_id'        	=> $this->request->getPost('karyawan_id'),
		);
		if ($validation->run($data, 'elektronik') == FALSE) {
			session()->setFlashdata('inputs', $this->request->getPost());
			session()->setFlashdata('errors', $validation->getErrors());
			return redirect()->to(base_url('elektronik/edit/' . $id));
		} else {
			$ubah = $this->elektronik_model->updateData($data, $id);
			if ($ubah) {
				session()->setFlashdata('info', 'Update Data Berhasil');
				return redirect()->to(base_url('elektronik'));
			}
		}
	}
	public function delete($id)
	{
		// proteksi halaman
		if (session()->get('username') == '') {
			session()->setFlashdata('haruslogin', 'Silahkan Login Terlebih Dahulu');
			return redirect()->to(base_url('login'));
		}
		$hapus = $this->elektronik_model->deleteData($id);
		if ($hapus) {
			session()->setFlashdata('warning', 'Delete Data Berhasil');
			return redirect()->to(base_url('elektronik'));
		}
	}
}
