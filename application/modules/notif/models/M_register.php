<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_register extends CI_Model
{

  public function getCode($code)
  {
    $this->db->select('*');
    $this->db->from('room');
    $this->db->where('RoomCode', $code);
    $query = $this->db->get()->result_array();
    return $query;
  }
  public function cekEmail($email)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('userEmail', $email);
    $query = $this->db->get()->result_array();
    return $query;
  }
  public function add($params)
  {
    $this->db->insert('user', $params);
  }
}
