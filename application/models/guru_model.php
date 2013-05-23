<?php
class guru_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function get_guru(){
		$query = $this->db->get('guru');
		return $query->result_array();
	}
	public function set_guru(){	
		$data = array(
			'nip' => $this->input->post('nip'),
			'nama' => $this->input->post('nama'),
			'tgl_lahir' => date('Y-m-d'),
			'agama' => $this->input->post('agama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'pendidikan' => $this->input->post('pendidikan'),
			'jabatan' => $this->input->post('jabatan'),
			'no_telpon' => $this->input->post('no_telpon'),
			'alamat' => $this->input->post('alamat'),
			'id_user' => $this->input->post('id_user'),
		);
		
		return $this->db->insert('guru', $data);
	}
}
?>