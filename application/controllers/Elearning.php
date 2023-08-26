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
		
		public function mapel(){
		$data['data_elearning'] = $this->m_elearning->data_elearning();
		$this->load->view('daftar_mapel/daftar_mapel.php',$data);
		}
		public function materi(){
			$data['data_elearning'] = $this->m_elearning->data_elearning();
			$this->load->view('materi/materi_tugas.php',$data);
			}
		public function tugas(){
			$data['data_elearning'] = $this->m_elearning->data_elearning();
			$this->load->view('tugas/tugas_user.php',$data);
			}
		public function profile(){
			$data['data_elearning'] = $this->m_elearning->data_elearning();
			$this->load->view('profile/profil_user.php',$data);
			}

		public function list_mapel(){
			$data['data_elearning'] = $this->m_elearning->data_elearning();
			$this->load->view('daftar_mapel/list_mapel.php',$data);
			}

}
