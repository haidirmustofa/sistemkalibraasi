<?php
class Fungsi
{
  protected $ci;
  function __construct()
  {
    $this->ci = &get_instance();
  }

  function user_login()
  {
    $this->ci->load->model('auth/M_auth');
    $userid = $this->ci->session->userdata('id_user');
    $user_data = $this->ci->M_auth->get($userid)->row();
    return $user_data;
  }
}
