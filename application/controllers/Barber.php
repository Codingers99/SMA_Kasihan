<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barber extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('m_barber');
		}

	public function index()
	{
	
	$data['data_barber'] = $this->m_barber->data_barber();
	$this->load->view('home/index.php', $data);
	
	}

	function barber()
	{
		$data['data_barber'] = $this->m_barber->data_barber();
		$this->load->view('barber/index.php', $data); 
	}

function simpan_barber() //fungsi input data, nanti ditaruh di Action form
{
	$data = array(
		'id_receipt'=>$this->input->post('id_receipt'), //Menginput hasil dari form dengan mengambil data sesuai nama kolom di table
		'Nama'=>$this->input->post('Nama'),
		'Nama_barber'=>$this->input->post('Nama_barber'),
		'Jadwal'=>$this->input->post('Jadwal'),
		'jenis_cut'=>$this->input->post('jenis_cut'),
		'service'=>$this->input->post('service'),
	);
	$this->db->insert('receipt',$data); //Inputan masuk ke database (Mirip query)
	redirect('barber/receipt'); //redirect ke halaman utama
}
function simpan_barber_a() //fungsi input data, nanti ditaruh di Action form
{
	$data = array(
		'id_bar'=>$this->input->post('id_bar'), //Menginput hasil dari form dengan mengambil data sesuai nama kolom di table
		'Nama'=>$this->input->post('Nama'),
		'Rating'=>$this->input->post('Rating'),
		'Status'=>$this->input->post('Status'),
	);
	$this->db->insert('barber',$data); //Inputan masuk ke database (Mirip query)
	redirect('barber/tambahbarber'); //redirect ke halaman utama
}


function update($id_bar)
{
	$data['ambil']=$this->m_barber->Getid($id_bar);
	$this->load->view('admin/update.php',$data);
}

function simpan_update()
{
	$data = array(

		'id_bar'=>$this->input->post('id_bar'),
		'Nama'=>$this->input->post('Nama'),
		'Rating'=>$this->input->post('Rating'),
		'Status'=>$this->input->post('Status'),
		
	);
	$num = $this->input->post('id_bar');
	$this->db->where('id_bar', $num);
	$this->db->update('barber',$data);
	redirect('barber/manage');
}

function hapus($id_bar)
{
	$this->m_barber->Hapusbarber($id_bar);
	redirect('admin/manage');
}
	}

