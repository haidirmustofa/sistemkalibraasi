<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_notif extends CI_Model
{

  public function login($post)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('user_name', $post['username']);
    $this->db->where('user_password', sha1($post['password']));
    $query = $this->db->get();
    return $query;
  }

  public function get($id = null)
  {
    $this->db->select('*');
    $this->db->from('tbl_notif');
    $this->db->limit(5);
    if ($id != null) {
      if ($this->fungsi->user_login()->user_status == 'Member') {
        $this->db->where('notif_from', $id);
        $this->db->or_where('notif_for', $id);
      } else {
        $this->db->where('notif_from', 'Admin');
        $this->db->or_where('notif_for', 'Admin');
      }
    }
    $query = $this->db->get()->result_array();
    return $query;
  }
  public function get_program()
  {
    $this->db->from('program');
    $this->db->join('user', 'user.id_user = program.program_coordinator', 'left');
    $query = $this->db->get();
    return $query;
  }
  public function getall()
  {
    $this->db->select('id_user')
      ->from('user')
      ->where('status', '1');
    $query = $this->db->get()->result_array();
    return $query;
  }
  public function add($post)
  {
    $params['username'] = $post['username'];
    $params['password'] = sha1($post['password']);
    $params['name'] = $post['name'];
    $params['inisial'] = $post['inisial'];
    $params['level'] = $post['level'];
    $params['status'] = $post['status'];
    $params['work_unit'] = $post['work_unit'];
    $this->db->insert('user', $params);
  }

  public function del($id)
  {

    $this->db->where('id_user', $id);
    $this->db->delete('user');
  }

  public function edit($post)
  {
    $params['username'] = $post['username'];
    if (!empty($post['password'])) {
      $params['password'] = sha1($post['password']);
    }
    $params['name'] = $post['name'];
    $params['inisial'] = $post['inisial'];
    $params['level'] = $post['level'];
    $params['status'] = $post['status'];
    $params['nik'] = $post['nik'];
    $params['work_unit'] = $post['work_unit'];
    $this->db->where('id_user', $post['id_user']);
    $this->db->update('user', $params);
  }
  public function edit_pass($post)
  {
    $params['username'] = $post['username'];
    $params['password'] = sha1($post['password']);
    $params['name'] = $post['name'];
    $params['inisial'] = $post['inisial'];
    $params['level'] = $post['level'];
    $params['status'] = $post['status'];
    $params['work_unit'] = $post['work_unit'];
    $this->db->where('id_user', $post['id_user']);
    $this->db->update('user', $params);
  }
}
