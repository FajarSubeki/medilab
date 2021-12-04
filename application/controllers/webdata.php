<?php 
class WebData extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('MWebData');
        $this->load->helper('url');
        $this->load->library('upload');

        if ($this->session->userdata('logged_in')=="") {
            redirect('index.php/auth');
        }
            
        $this->session->set_flashdata("halaman", "webdata"); //mensetting menuKepilih atau menu aktif
	}

	public function index(){
    $data['data_webdata'] = $this->MWebData->get_data();
		$this->template->load('admin/index_admin','admin/rs/webdata/index',$data);
  }

  public function add_edit($kode=''){

        $data['webdata'] = "";
        if($kode != '') {
            $get_data_webdata = $this->MWebData->get_data_detail($kode);
            $data['webdata'] = $get_data_webdata;
        } else {
            //Membuat kombinasi Noor RM secara unik
            $kode_webdata = "WD-".date("dmyhis").rand(1000,9999);
            //menampung kedalam variabel yang akan dikirim
            $data['kode_wd'] = $kode_webdata;               
        }
        
        $this->template->load('admin/index_admin','admin/rs/webdata/add_edit',$data);

    }

  public function add_edit_save($kode=''){

      $kode_webdata = $this->input->post('kode');
      $title_text = $this->input->post('title_text');
      $subtitle_text = $this->input->post('subtitle_text');
      $register_text = $this->input->post('register_text');
      $card_text = $this->input->post('card_text');
      $card_subtitle = $this->input->post('card_subtitle');
      $service_title = $this->input->post('service_title');
      $service_subtitle = $this->input->post('service_subtitle');
      $dokter_title = $this->input->post('dokter_title');
      $dokter_subtitle = $this->input->post('dokter_subtitle');
      $faq_title = $this->input->post('faq_title');
      $faq_subtitle = $this->input->post('faq_subtitle');
      $registration_title = $this->input->post('registration_title');
      $registration_text = $this->input->post('registration_text');
      $registration_btn = $this->input->post('registration_btn');
    
      $this->form_validation->set_rules('title_text', 'Title Text', 'required');
      $this->form_validation->set_rules('subtitle_text', 'Subtitle Text', 'required');
      $this->form_validation->set_rules('register_text', 'Register Text', 'required');
      $this->form_validation->set_rules('card_text', 'Card Text', 'required');
      $this->form_validation->set_rules('card_subtitle', 'Card Subtitle', 'required');
      $this->form_validation->set_rules('service_title', 'Service Title', 'required');
      $this->form_validation->set_rules('service_subtitle', 'Service Subtitle', 'required');
      $this->form_validation->set_rules('dokter_title', 'Dokter Title', 'required');
      $this->form_validation->set_rules('dokter_subtitle', 'Dokter Subtitle', 'required');
      $this->form_validation->set_rules('faq_title', 'Faq Title', 'required');
      $this->form_validation->set_rules('faq_subtitle', 'Faq Subtitle', 'required');
      $this->form_validation->set_rules('registration_title', 'Registration Title', 'required');
      $this->form_validation->set_rules('registration_text', 'Registration Text', 'required');
      $this->form_validation->set_rules('registration_btn', 'Registration Btn', 'required');
  
      if($this->form_validation->run() == FALSE) {
  
          $data['webdata'] = "";
          if($kode != '') {
              $get_data_webdata = $this->MWebData->get_data_detail($kode);
              $data['webdata'] = $get_data_webdata;
          } else {
            //Membuat kombinasi Noor RM secara unik
            $kode_webdata = "WD-".date("dmyhis").rand(1000,9999);
            //menampung kedalam variabel yang akan dikirim
            $data['kode_wd'] = $kode_webdata;               
          }
  
          $this->template->load('admin/index_admin','admin/rs/webdata/add_edit',$data);
  
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
            redirect("index.php/webdata/index");
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
                  'kode_web_data'   => $kode_webdata,
                  'title_text'   => $title_text,
                  'subtitle_text' => $subtitle_text,
                  'register_text' => $register_text,
                  'card_text' => $card_text,
                  'card_subtitle' => $card_subtitle,
                  'service_title' => $service_title,
                  'service_subtitle' => $service_subtitle,
                  'dokter_title' => $dokter_title,
                  'dokter_subtitle' => $dokter_subtitle,
                  'faq_title' => $faq_title,
                  'faq_subtitle' => $faq_subtitle,
                  'registration_title' => $registration_title,
                  'registration_text' => $registration_text,
                  'registration_btn' => $registration_btn,
              );
              $add_webdata = $this->MWebData->add_webdata($data);
          } else {
            $data = array(
                  'kode_web_data'   => $kode_webdata,
                  'title_text'   => $title_text,
                  'subtitle_text' => $subtitle_text,
                  'register_text' => $register_text,
                  'card_text' => $card_text,
                  'card_subtitle' => $card_subtitle,
                  'service_title' => $service_title,
                  'service_subtitle' => $service_subtitle,
                  'dokter_title' => $dokter_title,
                  'dokter_subtitle' => $dokter_subtitle,
                  'faq_title' => $faq_title,
                  'faq_subtitle' => $faq_subtitle,
                  'registration_title' => $registration_title,
                  'registration_text' => $registration_text,
                  'registration_btn' => $registration_btn,
            );
            $edit_webdata = $this->MWebData->edit_webdata($data, $kode);
          }
  
          redirect("index.php/webdata/index");
        }
  
    }
  
    public function delete_data($id=''){
      $this->db->where('kode_webdata', $id);
  
      $this->db->delete('tbl_webdata');
      
      redirect("index.php/webdata/index");
  
    }
}

?>