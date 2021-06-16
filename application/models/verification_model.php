<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class verification_model extends CI_Model {
    public function getactive(){
        $this->db->select('*');
        $this->db->from('user_pegawai');
        $this->db->where('Active', 0);

        $query= $this->db->get();
        return $query->result_array();
    }

    public function verification($id){
        $hasil = $this->db->query("UPDATE user_pegawai SET Active='1' WHERE Id=$id");
        return $hasil;
    }

}

/* End of file verification_model.php */
