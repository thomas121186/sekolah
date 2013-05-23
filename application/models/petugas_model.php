<?php
class petugas_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function get_petugas(){
		$query = $this->db->get('petugas');
		return $query->result_array();
	}
	public function set_petugas(){	
		$data = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'agama' => $this->input->post('agama'),
			'no_telpon' => $this->input->post('no_telpon'),
			'alamat' => $this->input->post('alamat'),
		);
		
		return $this->db->insert('petugas', $data);
	}
}
?>