<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_user extends CI_Model {

	public function getDataUser(){
		$this->db->select('*');
		$this->db->from('spk_maintenance');
		$this->db->order_by('no_tiket',"desc");
		$query = $this->db->get();
		return $query->result();
	}

	public function ceknotiket()
    {
        $this->db->select('RIGHT(spk_maintenance.no_tiket,4) as notiket', FALSE);
		  $this->db->order_by('no_tiket','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('spk_maintenance');//cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->notiket) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }

		  $kodemax = str_pad($kode, 8, "0", STR_PAD_LEFT);
		  $kodejadi = $kodemax;
		  return $kodejadi;   
    }

	public function InsertData($data){
		$this->db->insert('spk_maintenance', $data);
	}

	public function tampil_user() {
		$this->load->database('spk_maintenance');
		$last = $this->db->order_by('no_tiket',"desc")
		->limit(1)
		->get('spk_maintenance')
		->row();	
		// $this->load->view('user/detail', $last);
		redirect (base_url('user/detail'));
		// $this->db->order_by('nama_user', 'desc');
		// return $this->db->get('spk_maintenance');
	}

	public function EditData($data, $id){
		$this->db->where('no_tiket',$id);
		$this->db->update('spk_maintenance',$data);
	}
}