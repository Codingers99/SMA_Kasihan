<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_auth');
		$this->load->library('form_validation');
		$this->load->library('session');
    }
	
		public function index()
		{
			if ($this->session->has_userdata('id_user')) {
				redirect('elearning/mapel');
			}else{
		$this->load->view('home/index.php');
			}
		}

		public function login(){
			if ($this->session->has_userdata('id_user')) {
				redirect('elearning/mapel');
			}else{
		$this->load->view('login/login.php');
			}
		}
		public function register(){
			if ($this->session->has_userdata('id_user')) {
				redirect('elearning/mapel');
			}else{
		$this->load->view('register/register.php');
		}
		}
		
		function register_user() //fungsi input data, nanti ditaruh di Action form
		{
			$data = array(
				'id_user'=>$this->input->post('id_user'), //Menginput hasil dari form dengan mengambil data sesuai nama kolom di table
				'email'=>$this->input->post('email'),
				'kode_user'=>$this->input->post('kode_user'),
				'nama'=>$this->input->post('nama'),
				'password'=>$this->input->post('password'),
				'no_telp'=>$this->input->post('no_telp'),
				'alamat'=>$this->input->post('alamat'),
			);
			$this->db->insert('user',$data); //Inputan masuk ke database (Mirip query)
			redirect('auth/login', $data);
		}
		
			function checklogin(){
				$admin_login=array(
					'kode_user'=>$this->input->post('kode_user'),
					'password'=>$this->input->post('password'),
					'acc_status'=>$this->input->post('acc_status'),
				);
				$this->form_validation->set_rules('kode_user', 'Username', 'required');
				$this->form_validation->set_rules('password','Password', array('required', 'min_length[8]'));
		
				if($this->form_validation->run() != false){
				$data=$this->m_auth->login_admin($admin_login['kode_user'],$admin_login['password'],$admin_login['acc_status']);
					if($data && $data['acc_status'] === '1')
					{
							$newdata = array(
								'id_user'  => $data['id_user'],
								'nama'     => $data['nama'],
								'acc_status' => $data['acc_status'],
								'logged_in' => TRUE
						);
						
						$this->session->set_userdata($newdata);
							redirect('elearning/mapel', $data);
					}
					else{
						$this->session->set_userdata('id_user',$data['id_user']);
						$this->session->set_userdata('nama',$data['nama']);
						$this->session->set_userdata('acc_status',$data['acc_status']);
						redirect('admin/index', $data);
					}
				}
				else{
					$this->load->view('auth/login.php');
				}
			}
	public function logout(){
		$this->session->unset_userdata('id_user');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('acc_status');
		redirect('auth/login');
	}
}
