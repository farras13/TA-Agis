<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class pegawai extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('kepegawaian_model');
            $this->load->model('jabatan_model');
            $this->load->model('pelatihan_model');
            $this->load->model('cetak_model_pegawai');

            //cek apakah user sudah login atau belum
            $this->load->model('login_model');
            $this->login_model->cek_login();
        }
        
    
        public function index()
        {
            $data['title'] = 'List Pegawai';
            $data ['pegawai'] = $this->kepegawaian_model->getAllpegawai();
            if($this->input->post('keyword')){
                #code...
                $data['pegawai']=$this->kepegawaian_model->cariDataPegawai();
            }
            
            $this->load->view("admin/kepegawaian/listpegawai",$data);
        }

        public function tambah()
        {
            $data['title'] = 'Form Tambah Data Pegawai';
            $this->form_validation->set_rules('nip','Nip','required');
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('divisi','Divisi','required');
            $this->form_validation->set_rules('jabatan','Jabatan','required');
            $this->form_validation->set_rules('email','Email','required');
            if ($this->form_validation->run()==FALSE){
                $this->load->view("admin/kepegawaian/tambahpegawai",$data);
            }
            else{
                $this->kepegawaian_model->tambahdatapw();
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil di tambahkan ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('admin/pegawai','refresh');
            
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Pegawai';
            $data['pegawai']= $this->kepegawaian_model->getpegawaiByID($id);
            $data['listPelatihan']= $this->pelatihan_model->getPelatihanByPegawai($id);
            $data['angka_kredit'] = $this->jabatan_model->getJabatanByPegawai($id);

            $this->load->view("admin/kepegawaian/detailpegawai",$data);
        }

        
        public function edit($id){
            $data ['title']='Form Edit Data Pegawai';
            $this->form_validation->set_rules('nip','Nip','required');
            $this->form_validation->set_rules('nama','Nama','required');
            $this->form_validation->set_rules('divisi','Divisi','required');
            $this->form_validation->set_rules('jabatan','Jabatan','required');
            $this->form_validation->set_rules('email','Email','required');
       
            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['pegawai']= $this->kepegawaian_model->getpegawaiByID($id);        
                $this->load->view("admin/kepegawaian/editpegawai", $data);
            }
            else{
            #code...
                $this->kepegawaian_model->ubahdatapegawai();
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );                
                redirect('admin/pegawai','refresh');
            }
        }   

        public function hapus($id){
            $this->kepegawaian_model->hapusdatapw($id);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data berhasil di hapus ! 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('admin/pegawai','refresh');
        }

        
    public function laporanpegawai_pdf(){
        
        $this->load->library('pdf_pegawai');

        $data['pegawai'] = $this->cetak_model_pegawai->view();

        $this->pdf_pegawai->setPaper('A4', 'landscape');
        $this->pdf_pegawai->filename = "laporanpegawai.pdf";
        $this->pdf_pegawai->load_view('admin/kepegawaian/laporanpegawai',$data);
    }

    public function laporan_detail_pegawai_pdf($id){
        
        $this->load->library('pdf_pegawai');

        $data['pegawai']= $this->kepegawaian_model->getpegawaiByID($id);
        $data['listPelatihan']= $this->pelatihan_model->getPelatihanByPegawai($id);

        $this->pdf_pegawai->setPaper('A4', 'landscape');
        $this->pdf_pegawai->filename = "detailpegawai.pdf";
        $this->pdf_pegawai->load_view('admin/kepegawaian/laporandetailpegawai',$data);
    }
}
    
    /* End of file pegawai.php */
    
?>