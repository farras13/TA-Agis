<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model_pegawai extends CI_Model {

    public function view()
    {
        $this->db->select('Nama_pegawai,NIP,Alamat_pegawai,Golongan,Status_pegawai');
        return $this->db->get('kepegawaian')->result_array();
    }

    public function getdatabyID($id){
        return $this->db->get_where('kepegawaian', array('Id' => $id))->result();
        
    }
}

