<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->helper('string');
    }
		public function index()
		{
		$sescheck =	$this->session->userdata('acc_status');
		if ($sescheck === '1') {
				redirect('elearning/mapel');
		}else{
		$this->load->view('admin/index.php');
		}
		}

		public function manajemen_kelas(){
            // $data['data_elearning'] = $this->m_elearning->data_elearning();
            // $this->load->view('admin/manajemen_kelas.php',$data);
            $this->load->view('admin/manajemen_kelas.php');
		}

        public function tambah_manajemen_kelas(){
            // $data['data_elearning'] = $this->m_elearning->data_elearning();
            // $this->load->view('admin/tambah_manajemen_kelas.php',$data);
            $this->load->view('admin/tambah_manajemen_kelas.php');
        }

        public function edit_manajemen_kelas(){
            // $data['data_elearning'] = $this->m_elearning->data_elearning();
            // $this->load->view('admin/edit_manajemen_kelas.php',$data);
            $this->load->view('admin/edit_manajemen_kelas.php');
        }

        public function lihat_manajemen_kelas(){
            // $data['data_elearning'] = $this->m_elearning->data_elearning();
            // $this->load->view('admin/lihat_manajemen_kelas.php',$data);
            $this->load->view('admin/lihat_manajemen_kelas.php');
        }

		public function manajemen_mapel(){
			$data['data_mapel'] = $this->m_admin->data_mapel();
			$this->load->view('admin/manajemen_mapel.php',$data);
		}

        public function tambah_manajemen_mapel(){
            $this->load->view('admin/tambah_manajemen_mapel.php');
        }

        public function edit_manajemen_mapel(){
            $this->load->view('admin/edit_manajemen_mapel');
        }

		public function manajemen_tugas(){
			// $data['data_elearning'] = $this->m_elearning->data_elearning();
			// $this->load->view('tugas/manajemen_tugas.php',$data);
            $this->load->view('admin/manajemen_tugas.php');
		}

        public function tambah_manajemen_tugas(){
            $this->load->view('admin/tambah_manajemen_tugas.php');
        }

        public function edit_manajemen_tugas(){
            $this->load->view('admin/edit_manajemen_tugas.php');
        }
		
        public function nilai_manajemen_tugas(){
            $this->load->view('admin/nilai_manajemen_tugas.php');
        }

        public function penilaian_tugas(){
            $this->load->view('admin/penilaian_tugas.php');
        }


		function register_mapel() 
		{
			$data = array(
				'id_mapel'=>$this->input->post('id_mapel'),
				'kode_mapel'=>$this->input->post('kode_mapel'),
				'nama_mapel'=>$this->input->post('nama_mapel'),
				'guru_mapel'=>$this->input->post('guru_mapel'),
			);
			$this->db->insert('mata_pelajaran',$data); 
		}

		function hapus_matapelajaran($id_mapel)
		{
			$this->m_admin->hapus_mapel($id_mapel);
			redirect('admin/');
		}

		Public Function UploadKelas()
		{
			
			$nama_kelas = $this->input->Post('nama_kelas');
			$guru = $this->input->Post('guru');
			$enroll_key =  random_string('alnum',7);
			$Base64Gambar = $_FILES["gambar"]["tmp_name"];
			// $mapel = $this->input->Post('mapel');
			$mapel = "mapel";
			$Path = "Upload/";
			$ImagePath = $enroll_key. "_pic.Png";
			Move_uploaded_file($Base64Gambar, $ImagePath);
			$DataArr = Array(
				'nama_kelas' => $nama_kelas,
				'guru' => $guru,
				'enroll_key' => $enroll_key,
				'mapel' => $mapel,
				'Gambar' => Base_url() . $ImagePath,
			);
			$this->db->insert('kelas', $DataArr);
			redirect('admin/');
		}
}
