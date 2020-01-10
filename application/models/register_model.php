<?php
/**
 *
 */
class register_model extends CI_Model
{
  public function __construct(){
  parent::__construct();
  }

  public function insert(){
    $data= array (
            'id_admin' => NULL,
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'id_level' => $this->input->post('id_level')
    );
    $this->db->insert('admin' ,$data);

    if ($this->db->affected_rows() > 0) {
      return TRUE;
    }else {
      return FALSE;
    }
  }

}



 ?>
