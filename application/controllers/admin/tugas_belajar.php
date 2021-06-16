<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class tugas_belajar extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('tugasbelajar_model');
            $this->load->model('cetak_model_tb');
            
        }
        
    
        public function index()
        {
            $data['title'] = 'List Pegawai Tugas Belajar';
            $data ['tugas_belajar'] = $this->tugasbelajar_model->getAllpegawai();
            if($this->input->post('keyword')){
                #code...
                $data['tugas_belajar']=$this->tugasbelajar_model->cariDataPegawai();
            }
            
            $this->load->view("admin/tugas_belajar/listpegawai",$data);
        }

        public function tambah()
        {
            $data['title'] = 'Form Tambah Data Pegawai';
            $this->form_validation->set_rules('nip','Nip','required');
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('program','program','required');
            $this->form_validation->set_rules('jurusan','jurusan','required');
            $this->form_validation->set_rules('universitas','universitas','required');
            $this->form_validation->set_rules('tmt','tmt','required');
            $this->form_validation->set_rules('nomor_sk','nomor_sk','required');
            $this->form_validation->set_rules('upload','upload','required');
            if ($this->form_validation->run()==FALSE){
                $this->load->view("admin/tugas_belajar/tambahpegawai",$data);
            }
            else{
                $this->tugasbelajar_model->tambahdatapw();
                redirect('admin/tugas_belajar','refresh');
            
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Pegawai';
            $data['tugas_belajar']= $this->tugasbelajar_model->getpegawaiByID($id);
            $this->load->view("admin/tugas_belajar/detailpegawai",$data);
        }

        
        public function edit($id){
            $data ['title']='Form Edit Data Pegawai';
            $this->form_validation->set_rules('nip','Nip','required');
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('program','program','required');
            $this->form_validation->set_rules('jurusan','jurusan','required');
            $this->form_validation->set_rules('universitas','universitas','required');
            $this->form_validation->set_rules('tmt','tmt','required');
            $this->form_validation->set_rules('nomor_sk','nomor_sk','required');
            $this->form_validation->set_rules('upload','upload','required');
                   
            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['tugas_belajar']= $this->tugasbelajar_model->getpegawaiByID($id);        
                $this->load->view("admin/tugas_belajar/editpegawai", $data);
            }
            else{
            #code...
                $this->tugasbelajar_model->ubahdatapegawai();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('admin/tugas_belajar','refresh');
            }
        }   

        public function hapus($id){
            $this->tugasbelajar_model->hapusdatapw($id);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('admin/tugas_belajar','refresh');
        }

        
    public function laporanpegawai_pdf(){
        
        $this->load->library('pdf_tugasbelajar');

        $data['tugas_belajar'] = $this->cetak_model_tb->view();

        $this->pdf_pegawai->setPaper('A4', 'landscape');
        $this->pdf_pegawai->filename = "laporantugasbelajar.pdf";
        $this->pdf_pegawai->load_view('admin/tugas_belajar/laporantugasbelajar',$data);
    }
}
    
    /* End of file pegawai.php */
    
?>