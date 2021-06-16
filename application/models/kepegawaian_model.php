<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class kepegawaian_model extends CI_Model {
        public $nip;
        
        public function getAllpegawai()
        {
            return $this->db->get('pegawai')->result_array();
        }

        public function tambahdatapw(){
            $this->nip=uniqid();
            $data=[
            "nama"=>$this->input->post('nama',true),
            "nip"=>$this->input->post('nip',true),
            "divisi"=>$this->input->post('divisi',true),
            "jabatan"=>$this->input->post('jabatan',true),
            "pendidikan"=>$this->input->post('pendidikan',true),
            "golongan"=>$this->input->post('golongan',true),
            "email"=>$this->input->post('email',true),
           
            ];
            $this->db->insert('pegawai', $data);
        }
    
        public function getpegawaiByID($nip)
        {
            $query = $this->db->get_where('pegawai', array('nip'=>$nip));
            return $query->row_array();
        }

        public function ubahdatapegawai(){
            $data = [
                "nama" => $this->input->post('nama', true),
                "nip" => $this->input->post('nip', true),
                "divisi" => $this->input->post('divisi', true),
                "jabatan"=>$this->input->post('jabatan',true),
                "pendidikan"=>$this->input->post('pendidikan',true),
                "golongan"=>$this->input->post('golongan',true),
                "email"=>$this->input->post('email',true)
                ];
            $this->db->where('nip', $this->input->post('nip'));
            $this->db->update('pegawai', $data);
        }    

        public function cariDataPegawai(){
            $keyword=$this->input->post('keyword');
            $this->db->like('nama',$keyword);
            $this->db->or_like('nip',$keyword);
            $this->db->or_like('divisi',$keyword);
            $this->db->or_like('jabatan',$keyword);
            $this->db->or_like('email',$keyword);
            return $this->db->get('pegawai')->result_array();
        }

        public function hapusdatapw($nip){
            return $this->db->delete('pegawai',array("nip" => $nip));
        }

        public function datatabels(){
            $query = $this->db->order_by('nip', 'ASC')->get('pegawai');
            return $query->result(); 
        }

    }

    
    /* End of file kepegawaian_model.php */  
?>