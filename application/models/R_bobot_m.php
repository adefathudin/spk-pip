<?php

/**
 * Description of T_users_m
 * 
 * Created On Aug 5, 2019, 10:45:43 PM
 * @author fauziansyah
 */
class R_bobot_m extends MY_Model {

    protected $_table_name = 'r_bobot';
    protected $_primary_key = 'id_bobot';
    protected $_primary_filter = 'intval';
    protected $_order_by = 'bobot';
    protected $_timestamps = FALSE;
    protected $_timestamps_field = [];
    protected $_peoplestamp = False;
    protected $_peoplestamp_field = ['user_created_by'];

    public function get_join_cover_ins($where=NULL, $single=FALSE){
        $tbl_join_ins = 'r_refund_share';
        $this->db->join($tbl_join_ins, $tbl_join_ins . '.refund_id=' . $this->_table_name . '.refund_id','left');
        
        return $this->get_by($where, $single);
    }
}
