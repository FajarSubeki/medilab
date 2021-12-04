<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MFaq extends CI_Model {

    public function get_data(){

		$query = $this->db->query("SELECT * FROM tbl_faq");
		return $query->result_array();

	}

	//ambil data param
    function get_data_detail($kode){
 
        $query = $this->db->query("select * from tbl_faq where kode_faq = '$kode'");
        return $query->result();

    }

    function add_faq($data){
        $this->db->insert('tbl_faq',$data);
    }

    function edit_faq($data, $kode) {
        $this->db->where('kode_faq', $kode);
        $this->db->update('tbl_faq', $data);
    }

}