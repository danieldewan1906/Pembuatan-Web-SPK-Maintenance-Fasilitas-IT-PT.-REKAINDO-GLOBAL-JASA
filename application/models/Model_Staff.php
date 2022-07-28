<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_staff extends CI_Model {
	
	public function tampil_data()
	{
		return $this->db->get('staff');
	}

	public function tampil_data_user()
	{
		return $this->db->get('spk_maintenance')->result();
	}

	private $table = "staff";

	function cek($username, $password) {
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get("staff");
	}

	public function getDataUser(){
		$this->db->select('*');
		$this->db->from('spk_maintenance');
		$this->db->order_by('no_tiket',"desc");
		$query = $this->db->get();
		return $query->result();
	}

	public function getDataUserDetail($id){
		$this->db->where('no_tiket',$id);
		$query = $this->db->get('spk_maintenance');
		return $query->row();
	}
	
	public function EditDataUser($data, $id){
		$this->db->where('no_tiket',$id);
		$this->db->update('spk_maintenance',$data);
	}

	public function DeleteDataUser($id){
		$this->db->where('no_tiket',$id);
		$this->db->delete('spk_maintenance');
	}
	
}
