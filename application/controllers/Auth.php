<?php

class Auth extends CI_Controller {
    
    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model(['users_login_m']);
    }
    
    public function index() {
        
        if (!empty($this->session->userdata('nik'))) {
            redirect('dashboard');
            exit();
        }
        
        $this->data['title'] = 'Halaman Login';
        $this->load->view('login', $this->data);
        
    }

    public function cek_login() {

        $nik = $this->input->post('nik');
        $password = md5($this->input->post('password'));
       
        $cek = $this->users_login_m->get_by(['nik' => $nik, 'password' => $password]);
       
        if ($cek){
            $this->session->set_userdata(['nik' => $nik]);
            redirect(base_url('dashboard'));
        } else {            
            $this->session->set_flashdata('message', 'Login Gagal!');
            redirect(base_url('auth'));
        }

    }

    //LOGOUT
    public function logout() {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
