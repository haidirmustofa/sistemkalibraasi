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
  function notif()
  {
    $this->ci->load->model('notif/M_notif');
    $user_divition = $this->ci->session->userdata('user_divition');
    $notif_data = $this->ci->M_notif->get($user_divition);
    return $notif_data;
  }
}
