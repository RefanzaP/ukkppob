<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 *
 */
class pelanggan_model extends CI_Model
{

  function __construct()
  {
    // code...
  }

  public function get_pelanggan(){
    $arr= $this->db->get('user')->result();
    return $arr;
  }

  public function ambil_data($limit,$start){

      return $this->db->limit($limit,$start)
                      ->get('user')
                      ->result();
      }

}

 ?>
