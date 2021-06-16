<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class kepegawaian_model extends CI_Model {
        
        public function getAllpegawai()
        {
            return $this->db->get('kepegawaian')->result_array();
        }

        public function tambahdatakpw(){
            $data=[
            "Nama_pegawai"=>$this->input->post('nama',true),
            "NIP"=>$this->input->post('nip',true),
            "Alamat_pegawai"=>$this->input->post('alamat',true),
            "Tempat_lahir"=>$this->input->post('tempat',true),
            "Tanggal_lahir"=>$this->input->post('tanggal',true),
            "Golongan"=>$this->input->post('golongan',true),
            "Status_pegawai"=>$this->input->post('status',true)
            ];
            $this->db->insert('kepegawaian', $data);
        }
    
        public function getpegawaiByID($id)
        {
            $query = $this->db->get_where('kepegawaian', array('id'=>$id));
            return $query->row_array();
        }

        public function ubahdatapegawai(){
            $data = [
                "Nama_pegawai" => $this->input->post('nama', true),
                "NIP" => $this->input->post('nip', true),
                "Alamat_pegawai" => $this->input->post('alamat', true),
                "Tempat_lahir"=>$this->input->post('tempat',true),
                "Tanggal_lahir"=>$this->input->post('tanggal',true),
                "Golongan"=>$this->input->post('golongan',true),
                "Status_pegawai"=>$this->input->post('status',true)
                ];
            $this->db->where('Id', $this->input->post('id'));
            $this->db->update('kepegawaian', $data);
        }    

        public function cariDataPegawai(){
            $keyword=$this->input->post('keyword');
            $this->db->like('Nama_pegawai',$keyword);
            $this->db->or_like('NIP',$keyword);
            $this->db->or_like('Alamat_pegawai',$keyword);
            return $this->db->get('kepegawaian')->result_array();
        }

        public function hapusdatakpw($id){
            $this->db->where('Id',$id);
            $this->db->delete('kepegawaian');
    
            redirect('admin/pegawai','refresh');
        }

        public function datatabels(){
            $query = $this->db->order_by('id', 'ASC')->get('kepegawaian');
            return $query->result(); 
        }
    }
    
    /* End of file kepegawaian_model.php */  
?>