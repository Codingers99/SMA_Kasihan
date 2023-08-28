<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kelas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_elearning');
    }
		public function index()
		{
		
		$this->load->view('Pertemuan/manajemen_pertemuan.php');
		
		}
		
		public function Editmateri(){
		$data['data_elearning'] = $this->m_elearning->data_elearning();
		$this->load->view('Pertemuan/edit_materi_pertemuan.php',$data);
		}
		public function EditPertemuan(){
			$data['data_elearning'] = $this->m_elearning->data_elearning();
			$this->load->view('Pertemuan/edit_pertemuan.php',$data);
			}
		public function EditTugas(){
			$data['data_elearning'] = $this->m_elearning->data_elearning();
			$this->load->view('Pertemuan/edit_tugas_pertemuan.php',$data);
			}
		public function TambahMateri(){
			$data['data_elearning'] = $this->m_elearning->data_elearning();
			$this->load->view('Pertemuan/tambah_materi_pertemuan.php',$data);
			}
		public function TambahPertemuan(){
			$data['data_elearning'] = $this->m_elearning->data_elearning();
			$this->load->view('Pertemuan/tambah_pertemuan.php',$data);
			}

		public function TambahTugas(){
			$data['data_elearning'] = $this->m_elearning->data_elearning();
			$this->load->view('Pertemuan/tambah_tugas_pertemuan.php',$data);
				}

}
