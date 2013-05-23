<?php
class Guru extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('guru_model');
	}
	public function index(){
		$data['title'] = 'News archive';
		$data['guru'] = $this->guru_model->get_guru();
		$this->load->view('guru/index', $data);	
	}
	public function create(){
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create a news guru';
	
	$this->form_validation->set_rules('nama', 'Nama', 'required');
	$this->form_validation->set_rules('nip', 'NIP', 'required');
	$this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
	$this->form_validation->set_rules('agama', 'Agama', 'required');
	$this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');
	$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
	$this->form_validation->set_rules('jabatan', 'Alamat', 'required');
	$this->form_validation->set_rules('no_telpon', 'No_telpon', 'required');
	$this->form_validation->set_rules('alamat', 'Alamat', 'required');
	$this->form_validation->set_rules('id_user', 'Id_user', 'required');
	
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('guru/create');
		
		
	}
	else
	{
		$this->guru_model->set_guru();
		$this->load->helper('url');
		redirect('/guru/index', 'refresh');
	}
}
}
?>