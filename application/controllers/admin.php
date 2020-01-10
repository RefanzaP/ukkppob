<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 *
 */
class admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
       redirect(base_url('index.php/login'),'refresh');
  }
    $this->load->model('admin_model');
  }

  public function index(){

            $data['content_view']="admin/list";
            $this->load->model('admin_model');
            $data['arr']=$this->admin_model->get_data();
            $this->load->view('template', $data, FALSE);
  }

}


 ?>
