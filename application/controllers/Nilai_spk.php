<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Nilai_spk extends MY_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('r_data_result_m');
        $this->load->model('r_data_siswa_m');
    }
    
     public function index()
    {        
        $this->data['title'] = 'Halaman Kriteria';
        $this->data['subview'] = 'spk/index';
        $this->data['result_sementara'] = $this->r_data_result_m->result_sementara();
        $this->load->view('_layout_main', $this->data);
    }

    public function proses_nilai()
    {                
        $nisns = $this->r_data_siswa_m->get();
        
        foreach ($nisns as $nisn){
            
            $nisn_check = $nisn->nisn;
            
            //C1
            $c1s = $this->r_data_siswa_m->get_c1($nisn_check);   
            
            foreach ($c1s as $c1){
                $this->r_data_result_m->save_where(['c1' => $c1->bobot, 'desc_c1' => $c1->fuzzy], ['nisn' => $nisn_check]);
            }
            
            //C2
            $c2s = $this->r_data_siswa_m->get_c2($nisn_check);   
            
            foreach ($c2s as $c2){
                $this->r_data_result_m->save_where(['c2' => $c2->bobot, 'desc_c2' => $c2->fuzzy], ['nisn' => $nisn_check]);
            }
            
            //C3
            $c3s = $this->r_data_siswa_m->get_c3($nisn_check);   
            
            foreach ($c3s as $c3){
                $this->r_data_result_m->save_where(['c3' => $c3->bobot, 'desc_c3' => $c3->fuzzy], ['nisn' => $nisn_check]);
            }
            
            //C4
            $c4s = $this->r_data_siswa_m->get_by(['nisn' => $nisn_check]); 
            
            foreach ($c4s as $c4){
                if ($c4->penerima_kps == "Ya" and $c4->penerima_kip == "Ya"){
                    $bobot = 3;
                    $fuzzy = "Sangat Penting (SP)";
                } else if ($c4->penerima_kps == "Ya"){
                    $bobot = 1;
                    $fuzzy = "Cukup Penting (CP)";
                } else if ($c4->penerima_kip == "Ya"){
                    $bobot = 2;
                    $fuzzy = "Penting (P)";
                } else {
                    $bobot = 0;
                    $fuzzy = "Tidak Penting (TP)";
                    
                }
                $this->r_data_result_m->save_where(['c4' => $bobot, 'desc_c4' => $fuzzy], ['nisn' => $nisn_check]);
            }
            
            //Total
            $total_bobot = $this->r_data_result_m->get_by(['nisn' => $nisn_check]); 
            
            foreach ($total_bobot as $bobot){
                $this->r_data_result_m->save_where(['total' => $bobot->c1 + $bobot->c2 +$bobot->c3 +$bobot->c4], ['nisn' => $nisn_check]);
            }
            
            $this->r_data_result_m->update_const_tertinggi();
                        
            $this->r_data_result_m->update_normalisasi();
                        
            $this->r_data_result_m->update_result_final();
            
        }
        echo json_encode(['status'=> true]);
    }

}
