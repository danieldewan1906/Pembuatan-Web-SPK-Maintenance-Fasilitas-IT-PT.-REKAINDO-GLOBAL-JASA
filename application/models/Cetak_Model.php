<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_model extends CI_Model{
	
	public function view()
	{
		$this->db->select("nama_user,unit_kerja,ruang,no_inventaris,nama_fasilitas,merk,tgl_perbaikan,jam,jenis_kerusakan,perawatan,keterangan");
		$query=$this->db->get('spk-maintenance');
		return $query->result();
	}
	
	public function simpan_cetak_user($data_user)
	{
		//insert user
		$data['nama_user'] = $this->input->post('nama_user');
		$data['unit_kerja'] = $this->input->post('unit_kerja');
		$data['ruang']= $this->input->post('ruang');
		$this->model_user->InsertData($data);
	}