<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller 

{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Staff');
    }

    public function index($id)
    {
        $this->load->library('mypdf');
        $recordUser = $this->Model_Staff->getDataUserDetail($id);
        $DATA = $arrayName = array('data_user' => $recordUser);
        $this->mypdf->generate('admin/cetak', $DATA);
    }
}