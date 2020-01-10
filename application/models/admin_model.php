<?php

  /**
   *
   */
  class admin_model extends CI_Model
  {

    public function get_data(){
      $arr= $this->db->where('id_level', 1)->get('admin')->result();
      return $arr;
    }

  }



 ?>
