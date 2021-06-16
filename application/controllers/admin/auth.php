<?php
  
  defined('BASEPATH') OR exit('No direct script access allowed');
  
  class auth extends CI_Controller {
    
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
        $cek_login=$this->login_model->login($username, $password);

        if($cek_login)
        {
            if ($this->session->userdata('Level') == 'admin') {
                # code...
                redirect('admin/pegawai');
            } 
            else if($this->session->userdata('pegawai') != null){
                redirect('user/pegawai');
            }
        }
    
        else{
            $data['pesan'] ='username dan password anda salah';
            $data['title'] ="Login";
            $this->load->view('admin/_partials/head', $data);
            $this->load->view('admin/login/index');
            $this->load->view('admin/_partials/js');
            //redirect('loginsiswa/index','refresh');
        }
    }

    public function forgot(){
        $data['title']='Forgot Password';
        $this->load->view('admin/_partials/head', $data);
        $this->load->view('admin/login/forgot');
        $this->load->view('admin/_partials/js');
    }

    public function reset_password(){
        $email=$this->input->post('email');
        $status_reset=$this->login_model->reset_password($email);
        // redirect('admin/auth');
        if ($status_reset){
            $data['title'] = 'Reset Password';
            $data['pesan_sukses'] = "Email reset password telah dikirim ke email anda";
            $this->load->view('admin/_partials/head', $data);
            $this->load->view('admin/login/forgot');
            $this->load->view('admin/_partials/js');

        } else {
            $data['title'] = 'Reset Password';
            $data['pesan_error'] = "Email yang anda masukkan salah";
            $this->load->view('admin/_partials/head', $data);
            $this->load->view('admin/login/forgot');
            $this->load->view('admin/_partials/js');
        }
       
    }

    public function update_password(){
        $reset_key = $this->uri->segment(4);
        $this->form_validation->set_rules('password','Password','required');
        if ($this->form_validation->run() == FALSE){
            $data['title'] = 'Update Password';
            $data['reset_key'] = $reset_key;
            $this->load->view('admin/_partials/head', $data);
            $this->load->view('admin/login/reset');
            $this->load->view('admin/_partials/js');
        } else {
            $password=$this->input->post('password');
            $this->login_model->update_password($password, $reset_key);
            redirect('admin/auth');
        }
    }

    public function logout(){
        $this->login_model->logout($this->session->userdata('id_user'));
        $this->session->sess_destroy();
        redirect('admin');
    }
}
  /* End of file Login.php */

?>
