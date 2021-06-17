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
            $this->login_model->cek_login();
        }
        
    
        public function index()
        {
            $data['title'] = 'List Pelatihan';
            $data ['pelatihan'] = $this->pelatihan_model->getAllpelatihan();
            $data ['pelatihann'] = $this->pelatihan_model->getAllpelatihan();
			$data['cek'] = $this->pelatihan_model->getAjukan();
            if($this->input->post('keyword')){
                #code...
                $data['pelatihan']=$this->pelatihan_model->cariDataPelatihan();
            }
            
            $this->load->view("admin/pelatihan/listpelatihan",$data);
        }

        public function tambah()
        {
            $data['title'] = 'Form Tambah Data Pegawai';
            $data['pegawai'] = $this->pelatihan_model->getData('pegawai')->result_array();
            $this->form_validation->set_rules('nip','Nip','required');
            $this->form_validation->set_rules('nama_pelatihan','Nama Pelatihan','required');
            $this->form_validation->set_rules('tgl_pelatihan','Tanggal Pelatihan','required');
            $this->form_validation->set_rules('deskripsi','Deskripsi','required');
            if ($this->form_validation->run()==FALSE){
                $this->load->view("admin/pelatihan/tambahpelatihan",$data);
            }
            else{
                $this->pelatihan_model->tambahdatapelatihanAdmin();
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil di tambahkan ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('admin/pelatihan','refresh');
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Pelatihan Pelatihan';
            $data['pelatihan']= $this->pelatihan_model->getpelatihanByID($id);
            $this->load->view("admin/pelatihan/detailpelatihan",$data);
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
                $this->load->view("admin/pelatihan/editpelatihan", $data);
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
                redirect('admin/pelatihan','refresh');
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
            redirect('admin/pelatihan','refresh');
        }
        
        public function laporanpelatihan_pdf(){
            
            $this->load->library('pdf_pelatihan');

            $data['pelatihan'] = $this->cetak_model_pelatihan->view();

            $this->pdf_pelatihan->setPaper('A4', 'portrait');
            $this->pdf_pelatihan->filename = "laporanpelatihan.pdf";
            $this->pdf_pelatihan->load_view('admin/pelatihan/laporanpelatihan',$data);
        }
		public function laporanpelatihanD_pdf($id){
            
            $this->load->library('pdf_pelatihan');

            $data['pelatihan'] = $this->cetak_model_pelatihan->getdatabyID($id);

            $this->pdf_pelatihan->setPaper('A4', 'portrait');
            $this->pdf_pelatihan->filename = "laporanpelatihanDetail.pdf";
            $this->pdf_pelatihan->load_view('admin/pelatihan/laporanpelatihan',$data);
        }
		public function getData()
		{
			$data = $this->pelatihan_model->getAjukan();
			echo json_encode($data);
		}

		public function terima($id)
		{
			$data = array('status' => 1, );
			$w = array('id_pelatihan' => $id);
			$this->pelatihan_model->updData('pelatihan', $data, $w);
			
			redirect('admin/pelatihan','refresh');
			
		}

		public function tolak($id)
		{
			$data = array('status' => 2, );
			$w = array('id_pelatihan' => $id);
			$this->pelatihan_model->updData('pelatihan', $data, $w);
			redirect('admin/pelatihan','refresh');
		}
}
    
    /* End of file pegawai.php */
    
?>
