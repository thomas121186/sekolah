<?php
class nilai extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('nilai_model');
	}
	public function index(){
		$data['title'] = 'News archive';
		$data['nilai'] = $this->nilai_model->get_nilai();
		$this->load->view('nilai/index', $data);	
	}
	public function create(){
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create a news nilai';
	
	$this->form_validation->set_rules('nilai', 'Nilai', 'required');
	$this->form_validation->set_rules('semester', 'Semester', 'required');
	
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('nilai/create');
		
		
	}
	else
	{
		$this->nilai_model->set_nilai();
		$this->load->helper('url');
		redirect('/nilai/index', 'refresh');
	}
}
}
?>