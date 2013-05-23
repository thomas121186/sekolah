<?php
class Siswa extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('siswa_model');
	}
	public function index(){
		$data['title'] = 'News archive';
		$data['siswa'] = $this->siswa_model->get_siswa();
		$this->load->view('siswa/index', $data);	
	}
	public function create(){
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create a news siswa';
	
	$this->form_validation->set_rules('nis', 'NIS', 'required');
	$this->form_validation->set_rules('nama', 'Nama', 'required');
	$this->form_validation->set_rules('tahun_masuk', 'Tahun_masuk', 'required');
	$this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
	$this->form_validation->set_rules('agama', 'Agama', 'required');
	$this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');
	$this->form_validation->set_rules('no_telpon', 'No_telpon', 'required');
	$this->form_validation->set_rules('alamat', 'Alamat', 'required');
	$this->form_validation->set_rules('id_user', 'Id_user', 'required');
	
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('siswa/create');
		
		
	}
	else
	{
		$this->siswa_model->set_siswa();
		$this->load->helper('url');
		redirect('/siswa/index', 'refresh');
	}
}
}
?>