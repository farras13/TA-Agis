<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class login_model extends CI_Model {
 
    function login($username,$password){
        $this->db->select('*');
        $this->db->from('user_pegawai');
        $this->db->where('Username',$username);
        $this->db->where('Password',$password);
        $this->db->limit(1);
        
        $query = $this->db->get();
        if ($query->num_rows()==1) {
            return $query->result();
        } else {
            return false;
        }
    }
}
/* End of file ModelName.php */
?>
