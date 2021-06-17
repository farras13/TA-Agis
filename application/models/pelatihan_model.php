<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class pelatihan_model extends CI_Model {
        public $nip;
        
        public function getAllpelatihan()
        {
            $this->db->select('*');
            $this->db->from('pelatihan');
            $this->db->join('pegawai', 'pelatihan.nip = pegawai.nip');
            $this->db->group_by('pelatihan.id_pelatihan');
            return $this->db->get()->result_array();
        }

        public function tambahdatapelatihan(){
            $this->nip=uniqid();
            $file_sertifikat = $this->input->post('nip').'-'.$this->input->post('nama_pelatihan',true);
            $data=[
                "nip"=>$this->input->post('nip',true),
                "nama_pelatihan"=>$this->input->post('nama_pelatihan',true),
                "tgl_pelatihan"=>$this->input->post('tgl_pelatihan',true),
                "deskripsi"=>$this->input->post('deskripsi',true),
                "sertifikat"=>$this->_uploadImage($file_sertifikat),
				"status" => 0
            ];
            $this->db->insert('pelatihan', $data);
        }

		public function tambahdatapelatihanAdmin(){
            $this->nip=uniqid();
            $file_sertifikat = $this->input->post('nip').'-'.$this->input->post('nama_pelatihan',true);
            $data=[
                "nip"=>$this->input->post('nip',true),
                "nama_pelatihan"=>$this->input->post('nama_pelatihan',true),
                "tgl_pelatihan"=>$this->input->post('tgl_pelatihan',true),
                "deskripsi"=>$this->input->post('deskripsi',true),
                "sertifikat"=>$this->_uploadImage($file_sertifikat),
				"status" => 1
            ];
            $this->db->insert('pelatihan', $data);
        }
    
        public function getpelatihanByID($id)
        {
            $this->db->select('*');
            $this->db->from('pelatihan');
            $this->db->join('pegawai', 'pelatihan.nip = pegawai.nip');
            $this->db->where('pelatihan.id_pelatihan', $id);
            $this->db->group_by('pelatihan.id_pelatihan');
            $query = $this->db->get();
            return $query->row_array();
        }

		public function getpelatihanPByID($id)
        {
            $this->db->select('*');
            $this->db->from('pelatihan');
            $this->db->join('pegawai', 'pelatihan.nip = pegawai.nip');
            $this->db->where('pelatihan.nip', $id);
            $this->db->group_by('pelatihan.id_pelatihan');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function ubahdatapelatihan(){
            $file_sertifikat = $this->input->post('nip').'-'.$this->input->post('nama_pelatihan',true);
            $sertifikat = '';
            if (!empty($_FILES["image"]["name"])) {
                $sertifikat = $this->_uploadImage($file_sertifikat);
            } else {
                $sertifikat = $this->input->post('sertifikat');
            }
            
            $data = [
                "nip"=>$this->input->post('nip',true),
                "nama_pelatihan"=>$this->input->post('nama_pelatihan',true),
                "tgl_pelatihan"=>$this->input->post('tgl_pelatihan',true),
                "deskripsi"=>$this->input->post('deskripsi',true),
                "sertifikat"=>$sertifikat
                ];
            $this->db->where('id_pelatihan', $this->input->post('id_pelatihan'));
            $this->db->update('pelatihan', $data);
        }    

        public function cariDataPelatihan(){
            $keyword=$this->input->post('keyword');
            $this->db->like('nama_pelatihan',$keyword);
            $this->db->or_like('nip',$keyword);
            $this->db->or_like('tgl_pelatihan',$keyword);
            return $this->db->get('pelatihan')->result_array();
        }

        public function hapusdatapelatihan($id_pelatihan){
            return $this->db->delete('pelatihan',array("id_pelatihan" => $id_pelatihan));
        }

        public function datatabels(){
            $query = $this->db->order_by('nip', 'ASC')->get('pelatihan');
            return $query->result(); 
        }

        public function getPelatihanByPegawai($idPegawai){
            $query = $this->db->get_where('pelatihan', array('nip'=>$idPegawai));
            return $query->result_array();
        }

        private function _uploadImage($id_pelatihan)
        {
            $config['upload_path']          = './upload/pelatihan/';
            $config['allowed_types']        = 'pdf|jpg|png';
            $config['file_name']            = $id_pelatihan;
            $config['overwrite']			= true;
            $config['max_size']             = 1024; // 1MB
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                return $this->upload->data("file_name");
            }
            
            return "default.jpg";
        }

		public function getAjukan()
		{
			$this->db->select('*');
            $this->db->from('pelatihan');
            $this->db->join('pegawai', 'pelatihan.nip = pegawai.nip');
            $this->db->where('pelatihan.status', 0);
            $this->db->group_by('pelatihan.id_pelatihan');
            $query = $this->db->get();
            return $query->result_array();
		}

		public function updData($t, $object, $w)
		{
			$this->db->update($t, $object, $w);
		}

		public function getData($t)
		{
			return $this->db->get($t);
		}

    }

    
    /* End of file pelatihan_model.php */  
?>
