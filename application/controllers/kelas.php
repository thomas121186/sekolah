<?php
class Kelas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('kelas_model');
	}
	public function index(){
		$data['title'] = 'News archive';
		$data['kelas'] = $this->kelas_model->get_kelas();
		$this->load->view('kelas/index', $data);	
	}
	public function create(){
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create a news kelas';
	
	$this->form_validation->set_rules('nama_kelas', 'Nama_kelas', 'required');
	$this->form_validation->set_rules('jumlah_siswa', 'Jumlah_siswa', 'required');
	
	
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('kelas/create');
		
		
	}
	else
	{
		$this->kelas_model->set_kelas();
		$this->load->helper('url');
		redirect('/kelas/index', 'refresh');
	}
}
}
?>