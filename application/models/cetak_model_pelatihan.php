<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model_pelatihan extends CI_Model {

    public function view()
    {
        $this->db->select('nip,nama_pelatihan,tgl_pelatihan,deskripsi');
        return $this->db->get('pelatihan')->result_array();
    }

    public function getdatabyID($nip){
        return $this->db->get_where('pelatihan', array('nip' => $nip))->result();
    }
}

