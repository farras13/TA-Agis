<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model_tb extends CI_Model {

    public function view()
    {
        $this->db->select('nip,nama,program,jurusan,universitas,tmt,nomor_sk,upload');
        return $this->db->get('tugas_belajar')->result_array();
    }

    public function getdatabyID($nip){
        return $this->db->get_where('tugas_belajar', array('nip' => $nip))->result();
    }
}

