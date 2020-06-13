<?php

class R_data_result_m extends MY_Model {

    protected $_table_name = 'r_data_result';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = 'total';
    protected $_timestamps = FALSE;
    protected $_timestamps_field = [];
    protected $_peoplestamp = False;
    protected $_peoplestamp_field = ['user_created_by'];

    
    public function update_const_tertinggi() {
        $this->db->query('update r_const set value=(select max(c1) from r_data_result) where rkey="c1_up"');
        $this->db->query('update r_const set value=(select max(c2) from r_data_result) where rkey="c2_up"');
        $this->db->query('update r_const set value=(select max(c3) from r_data_result) where rkey="c3_up"');
        $this->db->query('update r_const set value=(select max(c4) from r_data_result) where rkey="c4_up"');
    }
    
    public function update_normalisasi() {
        $this->db->query('update r_data_result set c1_2= c1 / (select value from r_const where rkey="c1_up")');
        $this->db->query('update r_data_result set c2_2= c2 / (select value from r_const where rkey="c2_up")');
        $this->db->query('update r_data_result set c3_2= c3 / (select value from r_const where rkey="c3_up")');
        $this->db->query('update r_data_result set c4_2= c4 / (select value from r_const where rkey="c4_up")');
        $this->db->query('update r_data_result set total_2=(c1_2+c2_2+c3_2+c4_2)');
    }
    
    public function result_sementara(){
        $this->db->select('a.nama_siswa,b.*');
        $this->db->from('r_data_siswa a');
        $this->db->join('r_data_result b', 'a.nisn = b.nisn');    

        $result = $this->db->get()->result();
        return $result;
    }
    
    public function result_final(){
        $this->db->select('a.*,b.total_3');
        $this->db->from('r_data_siswa a');
        $this->db->join('r_data_result b', 'a.nisn = b.nisn');    
        $this->db->where('b.total_3 > 1.3');
        
        $result = $this->db->get()->result();
        return $result;
    }
    
    public function update_result_final() {
        $this->db->query('update r_data_result set c1_3=(c1_2 * 0.50), c2_3=(c2_2 * 0.75), c3_3=(c3_2 * 0.50),c4_3=(c4_2 * 1), total_3=(c1_3+c2_3+c3_3+c4_3)');
    }
    
    public function count_kip(){
        $this->db->select('count(*) as total');
        $this->db->from('r_data_result');
        $this->db->where('total_3 >= 1.3');
        $result = $this->db->get()->row();
        return $result;
    }
    
     public function count_non_kriteria(){
        $this->db->select('count(*) as total');
        $this->db->from('r_data_result');
        $this->db->where('total_3 < 1.3');
        $result = $this->db->get()->row();
        return $result;
    }
    
}
