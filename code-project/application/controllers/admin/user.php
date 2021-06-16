<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        parent::__construct(); //memanggil method contructor pd controller
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('kepegawaian_model');
        $this->load->model('cetak_model_pegawai');
    }

    public function index()
    {
        $data = array(
            "title" => 'Data Pegawai',
            "kepegawaian" => $this->kepegawaian_model->datatabels()
        );
        $this->load->view('admin/template/header_datatabels_pegawai',$data);
        $this->load->view('admin/kepegawaian/user',$data);
        $this->load->view('admin/template/footer_datatabels_pegawai');
        
    }

    public function laporan_pdf($id){
        
        $this->load->library('pdf_pegawai');

        $data['kepegawaian'] = $this->cetak_model_pegawai->getdatabyID($id);

        $this->pdf_pegawai->setPaper('A4', 'portrait');
        $this->pdf_pegawai->filename = "laporan.pdf";
        $this->pdf_pegawai->load_view('admin/kepegawaian/laporan', $data);
    }

}

/* End of file Controllername.php */
