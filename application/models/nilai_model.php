<?php
class nilai_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function get_nilai(){
		$query = $this->db->get('nilai');
		return $query->result_array();
	}
	public function set_nilai(){	
		$data = array(
			'nilai' => $this->input->post('nilai'),
			'semester' => $this->input->post('semester'),
		);
		
		return $this->db->insert('nilai', $data);
	}
}
?>