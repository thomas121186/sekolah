<?php
class Petugas extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('petugas_model');
	}
	public function index(){
		$data['title'] = 'News archive';
		$data['petugas'] = $this->petugas_model->get_petugas();
		$this->load->view('petugas/index', $data);	
	}
	public function create(){
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create a news petugas';
	
	$this->form_validation->set_rules('nama', 'Nama', 'required');
	$this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');
	$this->form_validation->set_rules('no_telpon', 'No_telpon', 'required');
	$this->form_validation->set_rules('alamat', 'Alamat', 'required');
	$this->form_validation->set_rules('agama', 'Agama', 'required');
	
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('petugas/create');
		
		
	}
	else
	{
		$this->petugas_model->set_petugas();
		$this->load->helper('url');
		redirect('/petugas/index', 'refresh');
	}
}
}
?>