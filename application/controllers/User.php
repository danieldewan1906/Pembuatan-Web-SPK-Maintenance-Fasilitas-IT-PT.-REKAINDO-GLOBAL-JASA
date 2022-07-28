<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_User');
	}

	public function index()
	{
		$this->load->view('user/beranda');	
;	}	
	
	public function form_user(){
		$data['notiket'] = $this->Model_User->ceknotiket();
		$this->load->view('user/form_user', $data);
	}

	public function detail()
	{

		$recordUser = $this->Model_User->getDataUser();
		$DATA = $arrayName = array('data_user' => $recordUser);
		$this->load->view('user/detail', $DATA);
	}

	public function AksiInsert(){
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('nama_user', 'Nama Lengkap', 'required', ['required' => '*Nama Lengkap Wajib Diisi']);
		$this->form_validation->set_rules('unit_kerja', 'Unit Kerja', 'required', ['required' => '*Unit Kerja Wajib Diisi']);
		$this->form_validation->set_rules('ruang', 'Ruangan', 'required', ['required' => '*Ruang atau Gedung Wajib Diisi']);
		$this->form_validation->set_rules('no_inventaris', 'Nomor Inventaris', 'required', ['required' => '*Nomor Inventaris Wajib Diisi']);
		$this->form_validation->set_rules('merk', 'Merk', 'required', ['required' => '*Merk Wajib Diisi']);
		$this->form_validation->set_rules('jenis_kerusakan', 'Jenis Kerusakan', 'required', ['required' => '*Jenis Kerusakan Wajib Diisi']);

		if ($this->form_validation->run() == FALSE) {
            $data['notiket'] = $this->Model_User->ceknotiket();
			$this->load->view('user/form_user', $data);
        } else {
			$no_tiket = $this->input->post('no_tiket');
			$tgl_tiket_masuk = $this->input->post('tgl_tiket_masuk');
			$nama_user = $this->input->post('nama_user');
			$unit_kerja = $this->input->post('unit_kerja');
			$ruang = $this->input->post('ruang');
			$no_inventaris = $this->input->post('no_inventaris');
			$nama_fasilitas = $this->input->post('nama_fasilitas');
			$merk = $this->input->post('merk');
		// $tgl_perbaikan = $this->input->post('tgl_perbaikan');
		// $jam = $this->input->post('jam');
			$jenis_kerusakan = $this->input->post('jenis_kerusakan');
		// $perawatan = $this->input->post('perawatan');
		// $keterangan = $this->input->post('keterangan');

			$DataInsert = array (
				'no_tiket' => $no_tiket,
				'tgl_tiket_masuk' => $tgl_tiket_masuk,
				'nama_user' => $nama_user,
				'unit_kerja' => $unit_kerja,
				'ruang' => $ruang,
				'no_inventaris' => $no_inventaris,
				'nama_fasilitas' => $nama_fasilitas,
				'merk' => $merk,
			// 'tgl_perbaikan' => $tgl_perbaikan,
			// 'jam' => $jam,
				'jenis_kerusakan' => $jenis_kerusakan,
			// 'perawatan' => $perawatan,
			// 'keterangan' => $keterangan,
			);
			$this->Model_User->InsertData($DataInsert);
			$this->session->set_flashdata('message','Data Maintenance Fasilitas IT Sudah <b>Ditambahkan</b>');
			redirect('User/form_user');
		}
	}

	public function AksiEditUser(){
		$no_tiket = $this->input->post('no_tiket');
		$nama_user = $this->input->post('nama_user');
		$unit_kerja = $this->input->post('unit_kerja');
		$ruang = $this->input->post('ruang');

		//edit data nama, dll
		$DataUpdate = array (
			'nama_user' => $nama_user,
			'unit_kerja' => $unit_kerja,
			'ruang' => $ruang,
		);

		$this->Model_User->EditData($DataUpdate, $no_tiket);
		redirect(base_url());
	}

	public function cetak(){
		$recordUser = $this->Model_User->getDataUser();
		$DATA = $arrayName = array('data_user' => $recordUser);
		$this->load->view('user/cetak', $DATA);
	}
}