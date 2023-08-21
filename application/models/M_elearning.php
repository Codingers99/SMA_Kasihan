<?php
class M_elearning extends CI_model{
	public function __construct() {
		parent::__construct();
		$this->load->database();
}
public function data_elearning(){
$query = $this->db->get('mata_pelajaran');
return $query->result();
}

function Getid($id_user = '')
{
  return $this->db->get_where('user', array('id_user' => $id_user))->row();
}

public function data_mapel(){
	$this->db->select('*');
	$this->db->from('mata_pelajaran');
	$query = $this->db->get();
return $query->result();
}

function get_user($username, $password) {
	$this->db->where('kode_user', $username);
	$this->db->where('password', $password);
	$query = $this->db->get('user');

	if ($query->num_rows() == 1) {
			return $query->row();
	} else {
			return false;
	}
}
}
?>
