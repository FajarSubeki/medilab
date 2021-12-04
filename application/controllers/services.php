<?php 
class Services extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('MServices');
    $this->load->helper('url');
    $this->load->library('upload');

    if ($this->session->userdata('logged_in')=="") {
			redirect('index.php/auth');
		}
		
		$this->session->set_flashdata("halaman", "services"); //mensetting menuKepilih atau menu aktif
	}

	public function index(){

    $data['data_services'] = $this->MServices->get_data();
		$this->template->load('admin/index_admin','admin/rs/services/index',$data);

  }

  public function add_edit($id=''){

    $data['services'] = "";
    if($id != '') {
        $get_data = $this->MServices->get_data_detail($id);
        $data['services'] = $get_data;
    } else {
        $kode_services = "SV-".date("dmyhis").rand(1000,9999);
        $data['kode_sv'] = $kode_services;                 
    }
    
    $this->template->load('admin/index_admin','admin/rs/services/add_edit',$data);

  }

  public function add_edit_save($kode=''){

    $kode_services = $this->input->post('kode');
    $title = $this->input->post('title');
    $description = $this->input->post('description');
  
  
    $this->form_validation->set_rules('title', 'Title ', 'required');
    $this->form_validation->set_rules('description', 'Description ', 'required');

    if($this->form_validation->run() == FALSE) {

        $data['services'] = "";
        if($kode != '') {
            $get_data_services = $this->MServices->get_data_detail($kode);
            $data['services'] = $get_data_services;
        } else {
          //Membuat kombinasi Noor RM secara unik
          $kode_services = "SV-".date("dmyhis").rand(1000,9999);
          //menampung kedalam variabel yang akan dikirim
          $data['kode_sv'] = $kode_services;               
        }

        $this->template->load('admin/index_admin','admin/rs/services/add_edit',$data);

      }
      else { 
        $config['upload_path'] = APPPATH . 'uploads';  // lokasi direktori upload
        $config['allowed_types'] = 'jpeg|jpg|gif|png|rar|zip|7zip|txt|mp4|avi|mkv'; // tipe file yang diizinkan
        $config['max_size'] = '10240';  //ukuran maksimum file
        $this->upload->initialize($config); 
        if (! $this->upload->do_upload('foto') ) {
        //gagal mengupload file, keterangan eror disimpan kedalam variabel respon
          $respon = $this->upload->display_errors();
          $this->session->set_flashdata('msg','<div class="alert alert-danger alert-dismissible fade show" 
          role="alert" style="width:30%">
            Failed Upload Eror : ' . $respon . ' 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
          redirect("index.php/services/index");
        }
        else { //sukses mengupload file, informasi file disimpan dalam variabel respon
          $respon =$this->upload->data();
          $this->session->set_flashdata('msg','<div class="alert alert-success alert-dismissible fade show" 
          role="alert" style="width:30%">
            Success Upload 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
        }
        
        if($kode == '') {
            $data = array(
                'kode_services'   => $kode_services,
                'title'   => $title,
                'description' => $description
            );
            $add_services = $this->MServices->add_services($data);
        } else {
          $data = array(
            'kode_services'   => $kode_services,
            'title'   => $title,
            'description' => $description
          );
          $edit_services = $this->MServices->edit_services($data, $kode);
        }

        redirect("index.php/services/index");
      }

  }

  public function delete_data($id=''){
    $this->db->where('kode_services', $id);

    $this->db->delete('tbl_services');
    
    redirect("index.php/services/index");

  }

}

?>