<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('MPasien');
	}

	public function index()
	{
		$data['pasien'] = "";
		$no_rm = "RM-".date("dmy").rand(1000,9999);
		$data['no_rm'] = $no_rm;            
		$this->template->load('index','index',$data);
	}

	public function register_patient($id=''){

		$name = $this->input->post('name');
		$tgl_lahir = date("Y-m-d", strtotime($this->input->post('tgl_lahir')));
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('tlp');
		$no_rekam_medis = $this->input->post('no_rekam_medis');
		$jk = $this->input->post('jk');
		
		if($id == '') {
			$data = array(
				'nama_pasien'   => $name,
				'tgl_lahir' => $tgl_lahir,
				'jenis_kelamin' => $jk,
				'alamat' => $alamat,
				'no_tlp'    => $no_telp,
				'no_rekam_medis' => $no_rekam_medis
			);
			$add_pasien = $this->MPasien->add_pasien($data);
		} else {
		  $data = array(
			'nama_pasien'   => $name,
			'tgl_lahir' => $tgl_lahir,
			'jenis_kelamin' => $jk,
			'alamat' => $alamat,
			'no_tlp'    => $no_telp,
			'no_rekam_medis' => $no_rekam_medis
		  );
		  $edit_pasien = $this->MPasien->edit_pasien($data, $id);
		}
	
		redirect("/");
	
	}

}