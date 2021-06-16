<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class pegawai extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('kepegawaian_model');
            $this->load->model('cetak_model_pegawai');
            
        }
        
    
        public function index()
        {
            $data['title'] = 'List Pegawai';
            $data ['kepegawaian'] = $this->kepegawaian_model->getAllpegawai();
            if($this->input->post('keyword')){
                #code...
                $data['kepegawaian']=$this->kepegawaian_model->cariDataPegawai();
            }
            $this->load->view("admin/kepegawaian/listpegawai",$data);
        }

        public function tambah()
        {
            $data ['title']='Form Menambahkan Data Pegawai';
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('alamat','Alamat','required');
            $this->form_validation->set_rules('nip','NIP','required|numeric');
            if ($this->form_validation->run()==FALSE){
                $this->load->view("admin/kepegawaian/tambahpegawai");
            }
            else{
                $this->kepegawaian_model->tambahdatakpw();
                redirect('admin/pegawai','refresh');
            
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Pegawai';
            $data['kepegawaian']= $this->kepegawaian_model->getpegawaiByID($id);
            $this->load->view("admin/kepegawaian/detailpegawai",$data);
        }

        
        public function edit($id){
            $data ['title']='Form Edit Data Pegawai';
            
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('alamat','Alamat_pegawai','required');
            $this->form_validation->set_rules('nip','NIP','required|numeric');
       
            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['kepegawaian']= $this->kepegawaian_model->getpegawaiByID($id);        
                $this->load->view("admin/kepegawaian/editpegawai", $data);
            }
            else{
            #code...
                $this->kepegawaian_model->ubahdatapegawai();
                $this->session->set_flashdata('flash-data','diedit');
                redirect('admin/pegawai','refresh');
            }
        }   

        public function hapus($id){
            $this->kepegawaian_model->hapusdatakpw($id);
            $this->session->set_flashdata('flash-data','dihapus');
            redirect('kepegawaian','refresh');
        }

        
    public function laporanpegawai_pdf(){
        
        $this->load->library('pdf_pegawai');

        $data['kepegawaian'] = $this->cetak_model_pegawai->view();

        $this->pdf_pegawai->setPaper('A4', 'portrait');
        $this->pdf_pegawai->filename = "laporanpegawai.pdf";
        $this->pdf_pegawai->load_view('admin/kepegawaian/laporanpegawai',$data);
    }

    
}
    
    /* End of file pegawai.php */
    
?>