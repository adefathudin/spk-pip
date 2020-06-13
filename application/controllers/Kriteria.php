<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Kriteria extends MY_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('r_bobot_m');
    }

    public function index()
    {        
        $this->data['title'] = 'Halaman Kriteria';
        $this->data['subview'] = 'kriteria/index';
        $this->data['bobot_c1'] = $this->r_bobot_m->get_by(['kategori' => 'C1']);
        $this->data['bobot_c2'] = $this->r_bobot_m->get_by(['kategori' => 'C2']);
        $this->data['bobot_c3'] = $this->r_bobot_m->get_by(['kategori' => 'C3']);
        $this->data['bobot_c4'] = $this->r_bobot_m->get_by(['kategori' => 'C4']);
        $this->load->view('_layout_main', $this->data);
    }
    
    public function detail_bobot() {        
        
        $id_bobot = $this->input->get('id_bobot');

        $detail_bobot = $this->r_bobot_m->get_by(['id_bobot' => $id_bobot]);

        if ($detail_bobot) {
            $output['status'] = true;
            $output['item'] = $detail_bobot;
        } else {
            $output['status'] = false;
            $output['message'] = $this->$detail_bobot->get_last_message();
        }
        echo json_encode($output);
    }
    
    public function edit_bobot() {        
        
        $id_kriteria = $this->input->post('id_kriteria');
        $kriteria = $this->input->post('kriteria');
        $fuzzy = $this->input->post('fuzzy');
        $bobot = $this->input->post('bobot');
        
        $data_kriteria = ([
            'kriteria' => $kriteria, 'fuzzy' => $fuzzy, 'bobot' => $bobot
        ]);

        $edit_kriteria = $this->r_bobot_m->save($data_kriteria, $id_kriteria);

        if ($edit_kriteria) {            
            echo ("<script>window.alert('Kriteria ".$kriteria." berhasil diedit');window.history.back();</script>");
        } else {
            echo ("<script>window.alert('Upload Data Berhasil');window.history.back();</script>");
        }
    }

}
