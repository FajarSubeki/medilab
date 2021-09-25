<?php
date_default_timezone_set('Asia/Jakarta');
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct(){
        parent::__construct();

        $this->load->library('session');
    
        if ($this->session->userdata('logged_in')=="") {
            redirect('index.php/auth');
        }
        
        $this->session->set_flashdata("halaman", "home"); //mensetting menuKepilih atau menu aktif
        $this->session->set_flashdata("logas", "admin"); //mensetting menuKepilih atau menu aktif
    }

    public function index(){
        if ($this->session->userdata('role') != 1 && $this->session->userdata('role') != 2 && $this->session->userdata('role') != 4) { 
            session_destroy();
		    redirect('index.php/auth');
        }
        $this->template->load('admin/index_admin','admin/rs/index');
    }

    public function toLogin(){
        $this->load->view('admin/login');
    }

}