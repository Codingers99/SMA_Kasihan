<?php
class M_barber extends CI_model{
public function data_barber(){
$query = $this->db->get('barber');
return $query->result();
}
public function data_receipt(){
	$this->db->select('*');
	$this->db->from('receipt');
	$this->db->order_by('id_receipt', 'desc');
	$this->db->limit(1);
	$query = $this->db->get();
return $query->result();
}
function Getid($id_bar = '')
{
  return $this->db->get_where('barber', array('id_bar' => $id_bar))->row();
}
function Hapusbarber($id_bar)
{
	$this->db->delete('barber',array('id_bar' => $id_bar));
}
}
?>
