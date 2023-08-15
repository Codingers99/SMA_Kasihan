<?php
class M_elearning extends CI_model{
	public function __construct() {
		parent::__construct();
		$this->load->database();
}
public function data_elearning(){
$query = $this->db->get('elearning');
return $query->result();
}

function Getid($id_user = '')
{
  return $this->db->get_where('user', array('id_user' => $id_user))->row();
}
function hapususer($id_user)
{
	$this->db->delete('user',array('id_user' => $id_user));
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
