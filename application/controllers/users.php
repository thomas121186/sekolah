<?php
class Users extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index(){
		$data['title'] = 'News archive';
		$data['users'] = $this->user_model->get_users();
		$this->load->view('users/index', $data);
	}
	public function create(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		$data['title'] = 'Create new user';
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		if ($this->form_validation->run() === FALSE){
			$this->load->view('users/create');
		}
		else{
			$this->user_model->set_user();
			$this->load->helper('url');
			redirect('/users/index', 'refresh');
		}
	}
}
?>