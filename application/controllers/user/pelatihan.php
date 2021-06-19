<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class pelatihan extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('pelatihan_model');
            $this->load->model('cetak_model_pelatihan');

            //cek apakah user sudah login atau belum
            $this->load->model('login_model');
            $this->login_model->cek_login_pegawai();
        }
        
    
        public function index()
        {
            $data['title'] = 'List Pelatihan';
			
			$log = $this->session->userdata('pegawai');
			
            $data ['pelatihan'] = $this->pelatihan_model->getpelatihanPByID($log['nip']);
            $data ['pelatihann'] = $this->pelatihan_model->getpelatihanPByID($log['nip']);
            if($this->input->post('keyword')){
                #code...
                $data['pelatihan']=$this->pelatihan_model->cariDataPelatihan();
            }
            
            $this->load->view("user/pelatihan",$data);
        }

        public function tambah()
        {
            $data['title'] = 'Form Tambah Data Pegawai';
			$data['log'] = $this->session->userdata('pegawai');

            $this->form_validation->set_rules('nip','Nip','required');
            $this->form_validation->set_rules('nama_pelatihan','Nama Pelatihan','required');
            $this->form_validation->set_rules('tgl_pelatihan','Tanggal Pelatihan','required');
            $this->form_validation->set_rules('deskripsi','Deskripsi','required');
            if ($this->form_validation->run()==FALSE){
                $this->load->view("user/tambahpelatihan",$data);
            }
            else{
                $this->pelatihan_model->tambahdatapelatihan();
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil di tambahkan ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('user/pelatihan','refresh');
            
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Pelatihan Pelatihan';
            $data['pelatihan']= $this->pelatihan_model->getpelatihanByID($id);
            $this->load->view("user/pelatihan",$data);
        }

        
        public function edit($id){
            $data ['title']='Form Edit Data Pelatihan Pegawai';
            $this->form_validation->set_rules('nip','Nip','required');
            $this->form_validation->set_rules('nama_pelatihan','Nama Pelatihan','required');
            $this->form_validation->set_rules('tgl_pelatihan','Tanggal Pelatihan','required');
            $this->form_validation->set_rules('deskripsi','Deskripsi','required');
       
            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['pelatihan']= $this->pelatihan_model->getpelatihanByID($id);        
                $this->load->view("user/pelatihan", $data);
            }
            else{
            #code...
                $this->pelatihan_model->ubahdatapelatihan();
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('user/pelatihan','refresh');
            }
        }   

        public function hapus($id){
            $this->pelatihan_model->hapusdatapelatihan($id);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data berhasil di hapus ! 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('user/pelatihan','refresh');
        }

        
    public function laporanpelatihan_pdf(){
        
        $this->load->library('pdf_pelatihan');

		$log = $this->session->userdata('pegawai');
		
        $data['pelatihan'] = $this->cetak_model_pelatihan->getdatabynip($log['nip']);
		// print_r($log);die;
        $this->pdf_pelatihan->setPaper('A4', 'portrait');
        $this->pdf_pelatihan->filename = "laporanpelatihan.pdf";
        $this->pdf_pelatihan->load_view('user/laporanpelatihan',$data);
    }
}
    
    /* End of file pegawai.php */
    
?>
