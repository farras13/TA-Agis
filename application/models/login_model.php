<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class login_model extends CI_Model {
 
    public function login($username,$password){
        // $this->db->select('*');
        // $this->db->from('user_pegawai');
        // $this->db->where('Username',$username);
        // $this->db->where('Password',$password);
        // $this->db->limit(1);
        // $query = $this->db->get();

        $query = $this->db->get_where('user_pegawai',array('Username'=>$username,'Password'=> $password));
		$pegawai = $this->db->get_where('pegawai',array('nip'=>$username,'nip'=> $password));
        
        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            $this->session->set_userdata('Pegawai',$data_user->Username);
            $this->session->set_userdata('id_user',$data_user->Id);
            $this->session->set_userdata('Level',$data_user->Level);
            $this->session->set_userdata('Active',1);

            $this->db->set('Active', 1);
            $this->db->where('Id', $data_user->Id);
            $this->db->update('user_pegawai');

            return true;
        } else if ($pegawai->num_rows() > 0) {
			
				$data_user = $pegawai->row();
				
				$array = array(
					'nip' => $data_user->nip,
					'nama' => $data_user->nama,
					'divisi' => $data_user->divisi,
					'jabatan' => $data_user->jabatan,
					'pendidikan' => $data_user->pendidikan,
					'golongan' => $data_user->golongan,
					'email' => $data_user->email,
				);
				
				$this->session->set_userdata( 'pegawai', $array );	
				return true;
			
        }else{
            return false;
		}
    }

    public function register(){
        $data=[
            "Username" => $this->input->post("username", true),
            "Email" => $this->input->post("email", true),
            "Password" => $this->input->post("password", true),
            "Active" => 0,
            "Level" => 'Pegawai'
        ];

        $this->db->insert('user_pegawai', $data);
    }

    public function logout($id){
        $this->db->set('Active', 0);
        $this->db->where('Id', $id);
        $this->db->update('user_pegawai');
    }

    public function reset_password($email){
        $query = $this->db->get_where('user_pegawai',array('Email'=>$email));

        if ($query->num_rows() > 0) {
            $data_user = $query->row();
            
            $reset_key =  $this->generateRandomString();
            $this->insert_reset_key($data_user->Id, $reset_key);

            $this->load->library('email');
			$config = array();
			$config['charset'] = 'utf-8';
			$config['useragent'] = 'Codeigniter';
			$config['protocol']= "smtp";
			$config['mailtype']= "html";
			$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
			$config['smtp_port']= "465";
			$config['smtp_timeout']= "5";
			$config['smtp_user']= "betaniaaadwi@gmail.com"; // isi dengan email kamu
			$config['smtp_pass']= "bethacantikbgt00"; // isi dengan password kamu
			$config['crlf']="\r\n"; 
			$config['newline']="\r\n"; 
			$config['wordwrap'] = TRUE;
			//memanggil library email dan set konfigurasi untuk pengiriman email
					
			$this->email->initialize($config);
			//konfigurasi pengiriman
			$this->email->from($config['smtp_user']);
			$this->email->to($this->input->post('email'));
			$this->email->subject("Reset your password");

			$message = "<p>Anda melakukan permintaan reset password</p>";
			$message .= "<a href='".site_url('admin/auth/update_password/'.$reset_key)."'>klik reset password</a>";
			$this->email->message($message);
				
			if($this->email->send()){
                return true;
			}else{
				return false;
			}
            
        } else {
            return false;
        }
    }

    public function insert_reset_key($id_user, $reset_key){
        $query = $this->db->get_where('reset_password',array('id_user'=>$id_user));
        if ($query->num_rows() > 0) {
            $this->db->set('reset_key', $reset_key);
            $this->db->where('id_user', $id_user);
            $this->db->update('reset_password');
        } else {
            $data=[
                'id_user' => $id_user,
                'reset_key' => $reset_key
            ];
    
            $this->db->insert('reset_password', $data);
        }

        return true;
    }

    private function generateRandomString($length = 20) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function update_password($password, $reset_key){
        $query = $this->db->get_where('reset_password',array('reset_key'=>$reset_key));
        $data_reset = $query->row();
        
        $this->db->set('Password', $password);
        $this->db->where('Id', $data_reset->id_user);
        $this->db->update('user_pegawai');

        return true;
    }

    public function cek_login()
    {
        if(empty($this->session->userdata('Active')))
        {
			redirect('admin/auth');
		}
    }

	public function cek_login_pegawai()
    {
       if(empty($this->session->userdata('pegawai'))){
			redirect('admin/auth');
		}
    }
}


/* End of file ModelName.php */
?>
