<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model_pegawai extends CI_Model {

    public function view()
    {
        $this->db->select('nip,nama,divisi,jabatan,email');
        return $this->db->get('pegawai')->result_array();
    }

    public function getdatabyID($nip){
        return $this->db->get_where('pegawai', array('nip' => $nip))->result();
    }
}

