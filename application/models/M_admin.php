<?php
class M_admin extends CI_model{
	public function __construct() {
		parent::__construct();
		$this->load->database();
}
public function data_admin(){
$query = $this->db->get('mata_pelajaran');
return $query->result();
}

public function data_mapel(){
	$this->db->select('*');
	$this->db->from('mata_pelajaran');
	$query = $this->db->get();
return $query->result();
}
function Getid($id_mapel = '')
{
  return $this->db->get_where('mata_pelajaran', array('id_mapel' => $id_mapel))->row();
}
function hapus_mapel($id_mapel)
{
	$this->db->delete('mata_pelajaran',array('id_mapel' => $id_mapel));
}
}
?>
