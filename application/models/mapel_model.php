<?php
class mapel_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function get_mapel(){
		$query = $this->db->get('mapel');
		return $query->result_array();
	}
	public function set_mapel(){	
		$data = array(
			'nama_mapel' => $this->input->post('nama_mapel'),
		);
		
		return $this->db->insert('mapel', $data);
	}
}
?>