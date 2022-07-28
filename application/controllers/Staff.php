<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Model_Staff');
	}

	public function index()
	{	
		$recordUser = $this->Model_Staff->getDataUser();
		$DATA = array('data_user' => $recordUser);
		$this->load->view('admin/view_admin',$DATA);	
	}

	public function databaseUser()
	{
		$this->load->library('Datatables');
		$this->datatables->select('no_tiket,tgl_tiket_masuk,nama_user,unit_kerja,ruang,personil,status');
		$this->datatables->from('spk_maintenance');
		echo $this->datatables->generate();

	}

	public function formEdit($id){
		$recordUser = $this->Model_Staff->getDataUserDetail($id);
		$DATA = array('data_user' => $recordUser);
		$this->load->view('admin/edit', $DATA);
	}

	public function EditData(){
		$no_tiket = $this->input->post('no_tiket');
		$tgl_tiket_masuk = $this->input->post('tgl_tiket_masuk');
		$nama_user = $this->input->post('nama_user');
		$unit_kerja = $this->input->post('unit_kerja');
		$ruang = $this->input->post('ruang');
		$no_inventaris = $this->input->post('no_inventaris');
		$nama_fasilitas = $this->input->post('nama_fasilitas');
		$merk = $this->input->post('merk');
		$tgl_perbaikan = $this->input->post('tgl_perbaikan');
		$jam = $this->input->post('jam');
		$jenis_kerusakan = $this->input->post('jenis_kerusakan');
		$perawatan = $this->input->post('perawatan');
		$keterangan = $this->input->post('keterangan');
		$personil = $this->input->post('personil');
		$status = $this->input->post('status');

		//Edit data jam, dll
		$DataUpdate = array (
			'tgl_perbaikan' => $tgl_perbaikan,
			'jam' => $jam,
			'perawatan' => $perawatan,
			'keterangan' => $keterangan,
			'personil' => $personil,
			'status' => $status,
		);

		$this->Model_Staff->EditDataUser($DataUpdate, $no_tiket);
		$this->session->set_flashdata('message','Data Maintenance Fasilitas IT Sudah <b>Diedit</b>');
		redirect(base_url('Staff'));
	}

	public function detail($id){
		$recordUser = $this->Model_Staff->getDataUserDetail($id);
		$DATA = array('data_user' => $recordUser);
		$this->load->view('admin/detail', $DATA);
	}

	public function cetak($id){
		$recordUser = $this->Model_Staff->getDataUserDetail($id);
		$DATA = $arrayName = array('data_user' => $recordUser);
		$this->load->view('admin/cetak', $DATA);
	}

	public function delete($id){
		$this->Model_Staff->DeleteDataUser($id);
		$this->session->set_flashdata('message','Data Maintenance Fasilitas IT Sudah <b>Dihapus</b>');
		redirect('Staff');
	}
	
	public function datauser() 
      {             
         $fetch_data = $this->Model_Staff->tampil_data_user();  
         $data = array();  
         $no=1;
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();                  
              $sub_array[] = '<div style="color: black">'.$row->no_tiket.'</div>';                  
              $sub_array[] = '<div style="color: black">'.$row->tgl_tiket_masuk.'</div>';  
              $sub_array[] = '<div style="color: black">'.$row->nama_user.'</div>';
              $sub_array[] = '<div style="color: black">'.$row->unit_kerja.'</div>';  
              $sub_array[] = '<div style="color: black">'.$row->ruang.'</div>'; 
              $sub_array[] = '<div style="color: black">'.$row->personil.'</div>'; 
              $sub_array[] = $row->status ? '<span class="badge badge-success">Sudah dicek</span>' : '<span class="badge badge-danger">Belum dicek</span>';
              $sub_array[] = $row->status ? '<center><a href="Staff/detail/'.$row->no_tiket.'"><button type="button" class="btn btn-primary"><i class="fa fa-fw fa-search-plus"></i></button></a> <a href="Cetak/index/'.$row->no_tiket.'"><button type="button" class="btn btn-success"><i class="fa fa-fw fa-print"></i></button></a> <a href="Staff/delete/'.$row->no_tiket.'"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i></button></a></center>' : '<center><a href="Staff/detail/'.$row->no_tiket.'"><button type="button" class="btn btn-primary"><i class="fa fa-fw fa-search-plus"></i></button></a> <a href="Staff/delete/'.$row->no_tiket.'"><button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash-o"></i></button></a></center>';  
              $data[] = $sub_array;  
         }  
         $output = array(   
              "data" => $data  
         );  
         echo json_encode($output);  
    }  
}	
