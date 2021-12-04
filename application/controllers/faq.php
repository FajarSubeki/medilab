<?php 
class Faq extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('MFaq');
    $this->load->helper('url');
    $this->load->library('upload');

    if ($this->session->userdata('logged_in')=="") {
			redirect('index.php/auth');
		}
		
		$this->session->set_flashdata("halaman", "faq"); //mensetting menuKepilih atau menu aktif
	}

	public function index(){

    $data['data_faq'] = $this->MFaq->get_data();
		$this->template->load('admin/index_admin','admin/rs/faq/index',$data);

  }

  public function add_edit($id=''){

    $data['faq'] = "";
    if($id != '') {
        $get_data = $this->MFaq->get_data_detail($id);
        $data['faq'] = $get_data;
    } else {
        $kode_faq = "FQ-".date("dmyhis").rand(1000,9999);
        $data['kode_faq'] = $kode_faq;                 
    }
    
    $this->template->load('admin/index_admin','admin/rs/faq/add_edit',$data);

  }

  public function add_edit_save($kode=''){

    $kode_faq = $this->input->post('kode');
    $title = $this->input->post('title');
    $description = $this->input->post('description');
  
  
    $this->form_validation->set_rules('title', 'Title ', 'required');
    $this->form_validation->set_rules('description', 'Description ', 'required');

    if($this->form_validation->run() == FALSE) {

        $data['faq'] = "";
        if($kode != '') {
            $get_data_faq = $this->MFaq->get_data_detail($kode);
            $data['faq'] = $get_data_faq;
        } else {
          //Membuat kombinasi Noor RM secara unik
          $kode_faq = "FQ-".date("dmyhis").rand(1000,9999);
          //menampung kedalam variabel yang akan dikirim
          $data['kode_fq'] = $kode_faq;               
        }

        $this->template->load('admin/index_admin','admin/rs/faq/add_edit',$data);

      }
      else { 
        if($kode == '') {
          $data = array(
            'kode_faq' => $kode_faq,
            'title' => $title,
            'description' => $description
          );
          $add = $this->MFaq->add_faq($data);
        } else {
          $data = array(
            'kode_faq' => $kode_faq,
            'title' => $title,
            'description' => $description
          );
          $edit = $this->MFaq->edit_faq($data, $kode);
        }
        redirect("index.php/faq/index");
      }

  }

  public function delete_data($id=''){
    $this->db->where('kode_faq', $id);

    $this->db->delete('tbl_faq');
    
    redirect("index.php/faq/index");

  }

}

?>