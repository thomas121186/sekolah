<?php
class User_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function get_users(){
		$query = $this->db->get('user');
		return $query->result_array();
	}
	public function set_user(){	
		$data = array(
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'email' => $this->input->post('email'),
			'hak_akses' => $this->input->post('hak_akses'),
			'register' => date('Y-m-d'), 
			'last_login' => date('Y-m-d')
		);
		
		return $this->db->insert('user', $data);
	}
}
?>