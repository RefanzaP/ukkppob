<?php
/**
 *
 */
class register extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('register_model');
  }
  public function index(){
    $this->load->view('register/list');
  }

  public function simpan(){
    if ($this->input->post('submit')) {
      $this->form_validation->set_rules('username','username','trim|required');
      $this->form_validation->set_rules('password','password','trim|required');

      if ($this->form_validation->run() == TRUE) {
        if ($this->register_model->insert() == TRUE) {
            $data['notif'] = 'Register Success';
            $data['main_view'] = 'register/list';
            $this->load->view('register/list');
        } else {
          $data['notif'] = 'Register Failed';
          $data['main_view'] = 'register/list';
          $this->load->view('register/list');
        }
      } else {
        $data['notif'] = validation_errors();
        $data['main_view'] = 'register/list';
        $this->load->view('register/list');
      }
    }
  }

}




 ?>
