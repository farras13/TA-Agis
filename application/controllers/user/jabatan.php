<?php

defined('BASEPATH') or exit('No direct script access allowed');

class jabatan extends CI_Controller
{


	public function __construct()
	{
		parent::__construct();
		$this->load->model('jabatan_model');
		$this->load->model('cetak_model_jabatan');

		//cek apakah user sudah login atau belum
		$this->load->model('login_model');
		$this->login_model->cek_login_pegawai();
	}

	public function index()
	{
		$data['title'] = 'Riwayat Jabatan';
		$log = $this->session->userdata('pegawai');
		$data['rj'] = $this->jabatan_model->getjabatanByNip($log['nip']);
		$data['arsip'] = $this->jabatan_model->getData('arsip')->result();
		$this->load->view("user/jabatan", $data);
	}

	public function FormU()
	{
		$data['title'] = 'Form Upload Pdf';
		$this->load->view('user/uploadBerkas', $data);
	}

	public function uploadBerkas()
	{
		$id = $this->input->post('id');
		$config['upload_path'] = './upload/pdf';
		$config['allowed_types'] = 'pdf';
		$this->load->library('upload', $config);
		// print_r($id);die;
		$w = array('id_riwayat_jabatan' => $id, );
		if ($this->upload->do_upload('file_1')) {
			$data = array('bukti' => $this->upload->data("file_name"),);
			$this->jabatan_model->edit($w, $data);
		} 
		if ($this->upload->do_upload('file_2')) {
			$data = array('buktiDua' => $this->upload->data("file_name"),);
			$this->jabatan_model->edit($w, $data);
		}
		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data berhasil di upload ! 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>'
		);
		redirect('user/jabatan');
	}

	public function detail($id)
	{
		$data['title'] = 'Detail Data Jabatan Pegawai';
		$data['riwayat_jabatan'] = $this->jabatan_model->getjabatanByID($id);
		$this->load->view("admin/jabatan/detailjabatan", $data);
	}

	public function laporanjabatan_pdf($id)
	{

		$this->load->library('pdf_jabatan');

		$data['riwayat_jabatan'] = $this->cetak_model_jabatan->getdatabyID_pkj($id);

		$this->pdf_jabatan->setPaper('A4', 'portrait');
		$this->pdf_jabatan->filename = "laporanjabatan.pdf";
		$this->pdf_jabatan->load_view('admin/jabatan/laporanjabatan', $data);
	}

	public function pkj()
	{
		$data['title'] = 'Pengajuan Kenaikan Jabatan Pegawai';
		$log = $this->session->userdata('pegawai');
		$w = array('nip' => $log['nip'], );
		$data['datanilai'] = $this->jabatan_model->getId('data_nilai', $w )->result_array();
		$data['datanilaii'] = $this->jabatan_model->getId('data_nilai', $w )->result_array();
		$this->load->view("user/pkj", $data);
	}
	public function formpkj()
	{
		$data['title'] = 'Pengajuan Kenaikan Jabatan Pegawai';
		$data['log'] = $this->session->userdata('pegawai');
		$this->load->view("user/formpkj", $data);
	}
	public function tambahpkj()
	{		
		$config['upload_path'] = './upload/jabatan/';
		$config['allowed_types'] = 'pdf|jpg|png|doc';
		
		$this->load->library('upload', $config);
		
		if ($this->upload->do_upload('berkas')) {
			$data = array(
				'nip' => $this->input->post('nip'),
				'nama' => $this->input->post('nama'),
				'tugas' => $this->input->post('tugas'),
				'poin' => $this->input->post('poin'),
				'bukti' => $this->upload->data("file_name"),
				'created_at' => date('Y-m-d'),
			
			);
			$this->jabatan_model->insData('data_nilai', $data);
		} 
		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data berhasil di tambahkan ! 
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			</div>'
		);
		redirect('user/jabatan/pkj');
	}
}
    
    /* End of file pegawai.php */
