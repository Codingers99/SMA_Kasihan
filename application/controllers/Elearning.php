<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Elearning extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_elearning');

    }
		public function index()
		{
		
		$this->load->view('home/index.php');
		
		}

		public function login(){
		$this->load->view('login/login.php');
		}
		public function register(){
		$this->load->view('register/register.php');
		}
		
		public function mapel(){
		$this->load->view('daftar_mapel/daftar_mapel.php');
		}
	function register_user() //fungsi input data, nanti ditaruh di Action form
{
	$data = array(
		'id_user'=>$this->input->post('id_user'), //Menginput hasil dari form dengan mengambil data sesuai nama kolom di table
		'email'=>$this->input->post('email'),
		'username'=>$this->input->post('username'),
		'nama'=>$this->input->post('nama'),
		'password'=>$this->input->post('password'),
		'no_telp'=>$this->input->post('no_telp'),
		'alamat'=>$this->input->post('alamat'),
	);
	$this->db->insert('user',$data); //Inputan masuk ke database (Mirip query)
}

	public function checklogin() {
	$username = $this->input->post('kode_user');
	$password = $this->input->post('password');

	$user = $this->m_elearning->get_user($username, $password);

	if ($user) {
		$this->session->set_userdata('id_user', $user->id);
		redirect('elearning');
	} else {
		$data['error'] = 'Username atau password salah.';
		$this->load->view('login/login.php', $data);
	}
	}
}
