<?php

  /**
   *
   */
  class owner_model extends CI_Model
  {

    public function get_data(){
      $arr= $this->db->where('id_level', 2)->get('admin')->result();
      return $arr;
    }

  }



 ?>
