<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model_jabatan extends CI_Model {

    public function view()
    {
        $this->db->select('jabatan,tmt,nama,nip,angka_kredit,angka_kredit_acuan');
        return $this->db->get('riwayat_jabatan')->result_array();
    }

    public function getdatabyID($nip){
        return $this->db->get_where('riwayat_jabatan', array('nip' => $nip))->result();
    }
}

