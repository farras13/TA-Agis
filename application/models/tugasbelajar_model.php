<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class tugasbelajar_model extends CI_Model {
        public $nip;
        
        public function getAllpegawai()
        {
            return $this->db->get('tugas_belajar')->result_array();
        }

        public function tambahdatapw(){
            $this->nip=uniqid();
            $data=[
            "nip"=>$this->input->post('nip',true),
            "nama"=>$this->input->post('nama',true),
            "program"=>$this->input->post('program',true),
            "jurusan"=>$this->input->post('jurusan',true),
            "tmt"=>$this->input->post('tmt',true),
            "nomor_sk"=>$this->input->post('nomor_sk',true),
            "upload"=>$this->input->post('upload',true),
           
            ];
            $this->db->insert('tugas_belajar', $data);
        }
    
        public function getpegawaiByID($nip)
        {
            $query = $this->db->get_where('tugas_belajar', array('nip'=>$nip));
            return $query->row_array();
        }

        public function ubahdatapegawai(){
            $data = [
                "nip"=>$this->input->post('nip',true),
            "nama"=>$this->input->post('nama',true),
            "program"=>$this->input->post('program',true),
            "jurusan"=>$this->input->post('jurusan',true),
            "tmt"=>$this->input->post('tmt',true),
            "nomor_sk"=>$this->input->post('nomor_sk',true),
            "upload"=>$this->input->post('upload',true)
                ];
            $this->db->where('nip', $this->input->post('nip'));
            $this->db->update('tugas_belajar', $data);
        }    

        public function cariDataPegawai(){
            $keyword=$this->input->post('keyword');
            $this->db->like('nama',$keyword);
            $this->db->or_like('nip',$keyword);
            $this->db->or_like('program',$keyword);
            $this->db->or_like('jurusan',$keyword);
            $this->db->or_like('universitas',$keyword);
            $this->db->or_like('tmt',$keyword);
            return $this->db->get('tugas_belajar')->result_array();
        }

        public function hapusdatapw($nip){
            return $this->db->delete('tugas_belajar',array("nip" => $nip));
        }

        public function datatabels(){
            $query = $this->db->order_by('nip', 'ASC')->get('tugas_belajar');
            return $query->result(); 
        }

    }

    
    /* End of file kepegawaian_model.php */  
?>