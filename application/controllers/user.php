<?php
/**
 *
 */
class user extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    if($this->session->userdata('logged_in')!=true){
       redirect(base_url('index.php/login'),'refresh');
  }
  $this->load->model('user_model');
  }
}



 ?>
