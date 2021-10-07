<?php
function check_already_login()
{
  $ci = &get_instance();
  $user_session = $ci->session->userdata('id_user');
  if ($user_session) {
    return redirect('dashboard');
  }
}
function check_not_login()
{
  $ci = &get_instance();
  $user_session = $ci->session->userdata('id_user');
  if (!$user_session) {
    redirect('auth');
  }
  // function check_superadmin()
  // {
  //   $ci = &get_instance();
  //   $ci->load->library('fungsi');
  //   if ($ci->fungsi->user_login()->user_level != 1) {
  //     redirect('notFound');
  //   }
  // }
}
