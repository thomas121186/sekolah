<?php
class Siswa_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function get_siswa(){
		$query = $this->db->get('siswa');
		return $query->result_array();
	}
	public function set_siswa(){	
		$data = array(
			'nis' => $this->input->post('nis'),
			'nama' => $this->input->post('nama'),
			'tgl_lahir' => date('Y-m-d'),
			'agama' => $this->input->post('agama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tahun_masuk' => $this->input->post('tahun_masuk'),
			'no_telpon' => $this->input->post('no_telpon'),
			'alamat' => $this->input->post('alamat'),
			'id_user' => $this->input->post('id_user'),
		);
		
		return $this->db->insert('siswa', $data);
	}
}
?>