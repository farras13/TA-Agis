<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class registration extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('login_model');
        
    }

    public function index()
    {
        $data ['title']='Registration';
        $this->load->view('admin/_partials/head', $data);
        $this->load->view('admin/login/register');
    }

    public function register(){
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');


        if($this->form_validation->run()==false){ 
            $data ['title']='Registration';
            $this->load->view('admin/_partials/head', $data);
            $this->load->view("admin/login/register");

        } else{
            $this->login_model->register();
            redirect('admin/auth', 'refresh');
        }


    }

}

/* End of file register.php */
