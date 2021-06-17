<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class jabatan extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('jabatan_model');
            $this->load->model('cetak_model_jabatan');
            
            //cek apakah user sudah login atau belum
            $this->load->model('login_model');
            $this->login_model->cek_login();
        }
        
    
        public function index()
        {
            $data['title'] = 'Riwayat Jabatan';
            $data ['riwayat_jabatan'] = $this->jabatan_model->getAllJabatan();
            if($this->input->post('keyword')){
                #code...
                $data['riwayat_jabatan']=$this->jabatan_model->cariDataJabatan();
            }
            
            $this->load->view("admin/jabatan/listjabatan",$data);
        }

		public function arsip()
		{
			$data['title'] = 'Arsip Data';
            $data ['arsip'] = $this->jabatan_model->getData('arsip');         
            $this->load->view("admin/jabatan/arsip",$data);
		}

        public function tambah()
        {
            $data['title'] = 'Form Tambah Data Jabatan';
			$data['acuan'] = $this->jabatan_model->getData('acuan_kredit')->result();
			$this->form_validation->set_rules('nama','Nama Pegawai','required');
            $this->form_validation->set_rules('nip','NIP','required');
            $this->form_validation->set_rules('jabatan','Jabatan Saat ini','required');
            $this->form_validation->set_rules('tmt','TMT','required');
            $this->form_validation->set_rules('angka_kredit','Angka Kredit','required');
            if ($this->form_validation->run()==FALSE){
                $this->load->view("admin/jabatan/tambahjabatan",$data);
            }
            else{
                $this->jabatan_model->tambahdatajabatan();
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil di tambahkan ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('admin/jabatan','refresh');
            }
        }

        public function detail($id)
        {
            $data['title']='Detail Data Jabatan Pegawai';
			$data['angka_kredit'] = $this->jabatan_model->getJabatanByPegawai($id);
            $data['riwayat_jabatan']= $this->jabatan_model->getjabatanByID($id);
            $this->load->view("admin/jabatan/detailjabatan",$data);
        }

        public function edit($id){
            $data ['title']='Form Edit Data Jabatan';
            $data ['acuan']=$this->jabatan_model->getData('acuan_kredit')->result();
            $this->form_validation->set_rules('nama','Nama Pegawai','required');
            $this->form_validation->set_rules('nip','NIP','required');
            $this->form_validation->set_rules('jabatan','Jabatan Saat ini','required');
            $this->form_validation->set_rules('tmt','TMT','required');
            $this->form_validation->set_rules('angka_kredit','Angka Kredit','required');
       
            if ($this->form_validation->run() == FALSE){
            #code...    
            $data['riwayat_jabatan']= $this->jabatan_model->getjabatanByID($id);        
                $this->load->view("admin/jabatan/editjabatan", $data);
            }
            else{
            #code...
                $this->jabatan_model->ubahdatajabatan();
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data berhasil di edit ! 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>'
                );
                redirect('admin/jabatan','refresh');
            }
        }

        public function hapus($id){
            $this->jabatan_model->hapusdatajabatan($id);
            $this->session->set_flashdata(
                'message',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                Data berhasil di hapus ! 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>'
            );
            redirect('admin/jabatan','refresh');
        }

        
    public function laporanjabatan_pdf(){
        
        $this->load->library('pdf_jabatan');

        $data['jabatan'] = $this->cetak_model_jabatan->view();

        $this->pdf_jabatan->setPaper('A4', 'portrait');
        $this->pdf_jabatan->filename = "laporanjabatan.pdf";
        $this->pdf_jabatan->load_view('admin/jabatan/laporanjabatan',$data);
    }

	public function pkj()
	{
		$data['title'] = 'Pengajuan Kenaikan Jabatan Pegawai';		
		$data['datanilai'] = $this->jabatan_model->getData('data_nilai')->result_array();
		$data['datanilaii'] = $this->jabatan_model->getData('data_nilai')->result_array();
		$this->load->view("admin/jabatan/pkj", $data);
	}

	public function aksipkj($wr, $id)
	{
		// print_r($id); die;
		$data = array('status' => $wr, );
		$w = array('nip' => $id, );
		$this->jabatan_model->editData('data_nilai', $w, $data);		
		redirect('admin/jabatan/pkj','refresh');
		
	}
}
    
    /* End of file pegawai.php */
    
?>
