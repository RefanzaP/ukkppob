<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 *
 */
class owner extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
       redirect(base_url('index.php/login'),'refresh');
  }
    $this->load->model('owner_model');
  }

  public function index(){

            $data['content_view']="owner/list";
            $this->load->model('owner_model');
            $data['arr']=$this->owner_model->get_data();
            $this->load->view('template', $data, FALSE);
  }

}


 ?>
