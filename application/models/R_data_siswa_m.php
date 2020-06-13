<?php

class R_data_siswa_m extends MY_Model {

    protected $_table_name = 'r_data_siswa';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = 'nama_siswa';
    protected $_timestamps = FALSE;
    protected $_timestamps_field = [];
    protected $_peoplestamp = False;
    protected $_peoplestamp_field = ['user_created_by'];

    public function get_c1($nisn_check){
        $this->db->select('a.bobot,a.fuzzy');
        $this->db->from('r_bobot a');
        $this->db->join('r_data_siswa b', 'a.kriteria = b.jumlah_saudara_kandung');    
        $this->db->where('b.nisn', $nisn_check);

        $result = $this->db->get()->result();
        return $result;
    }
    
    public function get_c2($nisn_check){
        $this->db->select('a.bobot,a.fuzzy');
        $this->db->from('r_bobot a');
        $this->db->join('r_data_siswa b', 'a.kriteria = b.penghasilan_orang_tua');    
        $this->db->where('b.nisn', $nisn_check);

        $result = $this->db->get()->result();
        return $result;
    }
    
    
    public function get_c3($nisn_check){
        $this->db->select('a.bobot,a.fuzzy');
        $this->db->from('r_bobot a');
        $this->db->join('r_data_siswa b', 'a.kriteria = b.pekerjaan_ayah');    
        $this->db->where('b.nisn', $nisn_check);

        $result = $this->db->get()->result();
        return $result;
    }
    
    
    public function get_c4($nisn_check){
        $this->db->select('a.bobot,a.fuzzy');
        $this->db->from('r_bobot a');
        $this->db->join('r_data_siswa b', 'a.kriteria = b.penghasilan_orang_tua');    
        $this->db->where('b.nisn', $nisn_check);

        $result = $this->db->get()->result();
        return $result;
    }
}
