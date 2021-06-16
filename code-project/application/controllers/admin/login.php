<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        //$this->load->library('session');
      
    }
    
    public function index()
    {
        $data ['title']='Login';
        $this->load->view('admin/_partials/head', $data);
        $this->load->view('admin/login/index');
        
        $this->load->view('admin/_partials/js');
    }

    public function proses_login()
    {
        $username=htmlspecialchars($this->input->post('uname1'));
        $password=htmlspecialchars($this->input->post('pwd1'));
        $cek_login=$this->login_model->login($username,$password);

        if($cek_login)
        {
            foreach($cek_login as $row);
                #code...
                $this->session->set_userdata('Pegawai',$row->Username);
                $this->session->set_userdata('Level',$row->Level);
            if ($this->session->userdata('Level') == 'Admin') {
                # code...
                redirect('admin');
            } else if($this->session->userdata('Level') == 'Pegawai'){
                redirect('admin/user');
            } 
        }
    
        else{
            $data['pesan'] ='username dan password anda salah';
            $data['title'] ="Login";
            $this->load->view('admin/_partials/head', $data);
            $this->load->view('admin/login/index');
            $this->load->view('admin/_partials/footer');
            //redirect('loginsiswa/index','refresh');
        }
    }


    public function logout(){
        $this->session->sess_destroy();
        redirect('login','refresh');
    }
}
  /* End of file Login.php */

?>