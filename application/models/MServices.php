<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MServices extends CI_Model {

    public function get_data(){

		$query = $this->db->query("SELECT * FROM tbl_services");
		return $query->result_array();

	}

	//ambil data param
    function get_data_detail($kode){
 
        $query = $this->db->query("select * from tbl_services where kode_services = '$kode'");
        return $query->result();

    }

    function add_services($data){
        $this->db->insert('tbl_services',$data);
    }

    function edit_services($data, $kode) {
        $this->db->where('kode_services', $kode);
        $this->db->update('tbl_services', $data);
    }

}