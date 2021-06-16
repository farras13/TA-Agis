<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class pegawai extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('kepegawaian_model');
            $this->load->model('cetak_model_pegawai');
            $this->load->model('pelatihan_model');
            $this->load->model('login_model');
            $this->load->model('jabatan_model');

            //cek apakah user sudah login atau belum
            $this->login_model->cek_login_pegawai();
        }
        
    
        public function index()
        {
            $data['title'] = 'List Pegawai';
			$log = $this->session->userdata('pegawai');
			
            $data ['pegawai'] = $this->kepegawaian_model->getpegawaiByID($log['nip']);
            if($this->input->post('keyword')){
                #code...
                $data['pegawai']=$this->kepegawaian_model->cariDataPegawai();
            }
            
            $this->load->view("user/pegawai",$data);
        }

        public function detail($id)
        {
            $data['title']='Detail Pegawai';

            $data['pegawai']= $this->kepegawaian_model->getpegawaiByID($id);
            $data['listPelatihan']= $this->pelatihan_model->getPelatihanByPegawai($id);
            $data['angka_kredit'] = $this->jabatan_model->getJabatanByPegawai($id);

            $this->load->view("user/detailpegawai",$data);
        }

        public function laporanpegawai_pdf(){
        
            $this->load->library('pdf_pegawai');
    
            $data['pegawai'] = $this->cetak_model_pegawai->view();
    
            $this->pdf_pegawai->setPaper('A4', 'landscape');
            $this->pdf_pegawai->filename = "laporanpegawai.pdf";
            $this->pdf_pegawai->load_view('user/laporanpegawai',$data);
        }
		public function laporan_detail_pegawai_pdf($id){
        
			$this->load->library('pdf_pegawai');
	
			$data['pegawai']= $this->kepegawaian_model->getpegawaiByID($id);
			$data['listPelatihan']= $this->pelatihan_model->getPelatihanByPegawai($id);
	
			$this->pdf_pegawai->setPaper('A4', 'landscape');
			$this->pdf_pegawai->filename = "detailpegawai.pdf";
			$this->pdf_pegawai->load_view('admin/kepegawaian/laporanpgw',$data);
		}
    }
