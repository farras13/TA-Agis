<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class jabatan_model extends CI_Model {
        public $nip;
        
        public function getAlljabatan()
        {
            return $this->db->get('riwayat_jabatan')->result_array();
        }

        public function tambahdatajabatan(){
            // $this->nip=uniqid();
            $data=[
                "jabatan"=>$this->input->post('jabatan',true),
                "tmt"=>$this->input->post('tmt',true),                
                "nip"=>$this->input->post('nip',true),
                "nama"=>$this->input->post('nama',true),
                "angka_kredit"=>$this->input->post('angka_kredit',true),
                "angka_kredit_acuan"=>$this->input->post('acuan',true),
            ];
            $this->db->insert('riwayat_jabatan', $data);
        }

        public function tambahdatanilai(){
            $this->nip=uniqid();
            $file_bukti = $this->input->post('nip').'-'.$this->input->post('nama',true);
            $data=[
                "nama"=>$this->input->post('nama',true),
                "nip"=>$this->input->post('nip',true),                
                "tugas"=>$this->input->post('tugas',true),
                "poin"=>$this->input->post('poin',true),
                "bukti"=>$this->_uploadImage($file_bukti),
				"status" => 0
            ];
            $this->db->insert('data_nilai', $data);
        }
    
        public function getjabatanByID($nip)
        {
            $query = $this->db->get_where('riwayat_jabatan', array('id_riwayat_jabatan'=>$nip));
            return $query->row_array();
        }

		public function getjabatanByNip($nip)
        {
            $query = $this->db->get_where('riwayat_jabatan', array('nip'=>$nip));
            return $query->row_array();
        }

        public function ubahdatajabatan(){
            $data = [
                "jabatan"=>$this->input->post('jabatan',true),
                "tmt"=>$this->input->post('tmt',true),                
                "nip"=>$this->input->post('nip',true),
                "nama"=>$this->input->post('nama',true),
                "angka_kredit"=>$this->input->post('angka_kredit',true),
                "angka_kredit_acuan"=>$this->input->post('acuan',true),
            ];
            $this->db->where('id_riwayat_jabatan', $this->input->post('id_riwayat_jabatan'));
            $this->db->update('riwayat_jabatan', $data);
        }    

        public function cariDataJabatan(){
            $keyword=$this->input->post('keyword');
            $this->db->like('jabatan',$keyword);
            $this->db->or_like('nip',$keyword);
            $this->db->or_like('nama',$keyword);
            return $this->db->get('riwayat_jabatan')->result_array();
        }

        public function hapusdatajabatan($nip){
            return $this->db->delete('riwayat_jabatan',array("nip" => $nip));
        }

        public function datatabels(){
            $query = $this->db->order_by('nip', 'ASC')->get('riwayat_jabatan');
            return $query->result(); 
        }

        public function getJabatanByPegawai($idPegawai){
            $query = $this->db->select('*')->from('riwayat_jabatan')->limit(1)->order_by('id_riwayat_jabatan', 'DESC')->get();
            return $query->row_array();
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

		public function edit($w, $data)
		{
			$this->db->update('riwayat_jabatan', $data, $w);
		}

		public function getData($t)
		{
			return $this->db->get($t);
		}
		public function insData($t, $object)
		{			
			$this->db->insert($t, $object);			
		}
		public function editData($t , $w, $data)
		{
			$this->db->update($t, $data, $w);
		}
		public function getId($t, $w)
		{
			$this->db->where($w);
			return $this->db->get($t);			
		}

    }

    
    /* End of file pelatihan_model.php */  
?>
