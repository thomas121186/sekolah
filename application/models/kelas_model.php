<?php
class Kelas_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}
	public function get_kelas(){
		$query = $this->db->get('kelas');
		return $query->result_array();
	}
	public function set_kelas(){	
		$data = array(
			'nama_kelas' => $this->input->post('nama_kelas'),
			'jumlah_siswa' => $this->input->post('jumlah_siswa'),
		);
		
		return $this->db->insert('kelas', $data);
	}
}
?>