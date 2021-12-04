<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MWebData extends CI_Model {

    public function get_data(){
		$query = $this->db->query("SELECT * FROM tbl_web_data");
		return $query->result_array();
	}

	function get_data_detail($kode){
        $query = $this->db->query("select * from tbl_web_data where kode_web_data = '$kode'");
        return $query->result();
    }

    function add_webdata($data){
        $this->db->insert('tbl_web_data',$data);
    }

    function edit_webdata($data, $kode) {
        $this->db->where('kode_web_data', $kode);
        $this->db->update('tbl_web_data', $data);
    }

}