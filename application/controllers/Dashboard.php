<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Dashboard extends MY_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('r_data_siswa_m');
    }

    public function index()
    {        
        $this->load->model('r_data_result_m');
        $this->data['title'] = 'Halaman Dashboard';
        $this->data['subview'] = 'dashboard/index';
        $this->data['total_siswa_aktif'] = $this->r_data_siswa_m->get_count();
        $this->data['total_siswa_kip'] = $this->r_data_result_m->count_kip();
        $this->data['total_non_kriteria'] = $this->r_data_result_m->count_non_kriteria();
        
        $this->data['data_siswa_final'] = $this->r_data_result_m->result_final();
        $this->load->view('_layout_main', $this->data);
    }

}
