<?php
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_Staff');
        $this->load->model(array('Model_Staff'));
        
    }
    function index() {
        $this->load->view('login/login');
           if ($this->session->userdata('username')) {
            redirect(base_url('staff'));
        }
    }
    
    function proses() {
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('username', 'username', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'required|trim');
        
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/login');
        } else {

            $usr = $this->input->post('username',true);
            $psw = $this->input->post('password',true);
            $u = $usr;
            $p = md5($psw);
            $cek = $this->Model_Staff->cek($u, $p);
            if ($cek->num_rows() > 0) {
                //login berhasil, buat session
                foreach ($cek->result() as $qad) {
                    // $sess_data['id'] = $qad->id;
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['username'] = $qad->username;
                    $sess_data['level'] = $qad->level;
                    $this->session->set_userdata($sess_data);
                }
                
                if ($cek->row()->level == "Administrator") {
                    redirect(base_url('staff'));                    
                } else {
                    redirect('');
                }
                
            }else {
                $this->session->set_flashdata('result_login', '<br>Username atau Password yang anda masukkan salah.');
                redirect('login');
            }

        }
    }

  public function logout() {
        $this->session->sess_destroy();
        redirect('login/index');
    }
}
