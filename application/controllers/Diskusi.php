<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diskusi extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		function __construct()
	{
		parent::__construct();
		$this->load->model('Data_model', 'dm');
		 $this->load->library(array(
			'custom_upload',
			'form_validation'
		));
	}
	
	public function index()
	{
		$data['diskusi'] = $this->dm->getAllData('diskusi');
		$data['jawaban'] = $this->dm->getAllData_group('jawaban');
		$this->load->view('diskusi',$data);
	}
	public function tambahDiskusi(){
		$file = $this->custom_upload->single_upload('file', array(
			'upload_path' => 'uploads',
			'allowed_types' => 'jpg|jpeg|png|gif|pdf|docx|xlsx' 
		));
		$data = array(
			'judul' => $this->input->post('judul'),
			'deskripsi' => $this->input->post('deskripsi'),
			'kategori' => $this->input->post('kategori'),
			'tanggal' => date('Y-m-d'),
			'file' => $file
		);
		$this->dm->insertData('diskusi', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
		redirect('Diskusi/index');
	}
	public function detail($kode)
	{
		$where['id_diskusi'] = $kode;
		$data['diskusi'] = $this->dm->getData('diskusi', $where);
		$data['jawaban'] = $this->dm->getAllData_where('jawaban', $where);
		$this->load->view('detail',$data);
	}
	public function tambahJawaban($kode){
		$where['id_diskusi'] = $kode;
		$data['jawaban'] = $this->dm->getAllData_where('jawaban', $where);
		$jumlah = count($data['jawaban']);
		$data = array(
			'id_diskusi' => $kode,
			'jawaban' => $this->input->post('jawaban'),
			'tanggal' => date('Y-m-d')
		);
		$this->dm->insertData('jawaban', $data);
		$data = array(
			'jumlah' => $jumlah += 1,
		);
		$this->dm->updateData('diskusi', $data, $kode);
		redirect('Diskusi/detail/'.$kode);
	}
}
