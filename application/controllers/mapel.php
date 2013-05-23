<?php
class Mapel extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('mapel_model');
	}
	public function index(){
		$data['title'] = 'News archive';
		$data['mapel'] = $this->mapel_model->get_mapel();
		$this->load->view('mapel/index', $data);	
	}
	public function create(){
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create a news mapel';
	
	$this->form_validation->set_rules('nama_mapel', 'Nama_mapel', 'required');
	
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('mapel/create');
		
		
	}
	else
	{
		$this->mapel_model->set_mapel();
		$this->load->helper('url');
		redirect('/mapel/index', 'refresh');
	}
}
}
?>