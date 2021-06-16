<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class verification extends CI_Controller {

    public function __construct()
    {
        parent::__construct(); //memanggil method contructor pd controller
        $this->load->model('verification_model');
    }

    public function index()
    {
        $data ['title']='Verifikasi Akun';
        $data["verification"] = $this->verification_model->getActive();
        $this->load->view('admin/login/verifikasi',$data);
    }

    public function verification($id){
        $data["verification"] = $this->verification_model->verification($id);
        $this->load->view('admin/login/verifiberhasil',$data);
    }

}

/* End of file verification.php */
