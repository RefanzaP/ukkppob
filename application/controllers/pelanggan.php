<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
/**
 *
 */
class pelanggan extends CI_Controller
{

   function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
       redirect(base_url('index.php/login'),'refresh');
  }
  $this->load->model('pelanggan_model');
}

  public function index($offset=0){
        $data['content_view']="pelanggan/list";
        $this->load->model('pelanggan_model');
        $data['arr']=$this->pelanggan_model->get_pelanggan();
        $this->load->view('template', $data, FALSE);
  }

}




 ?>
