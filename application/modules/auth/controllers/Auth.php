<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    // check_not_login();
    // check_superadmin();
    // $this->load->model('M_register');
  }
  public function index()
  {
    check_already_login();
    $data['title'] = 'Login';
    $this->load->view('login');
  }
  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($post['login'])) {
      $this->load->model('M_auth');
      $query = $this->M_auth->login($post);
      if ($query->num_rows() > 0) {
        $row = $query->row();
        $params = array(
          'id_user' => $row->id_user,
          'user_status' => $row->user_status
        );
        $this->session->set_userdata($params);
        redirect(base_url() . 'dashboard');
      } else {
        $data['title'] = 'Login';
        $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>GAGAL MASUK - </strong> Periksa Kembali username / password anda!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
      }
    }
  }
  public function logout()
  {
    $this->session->sess_destroy();
    redirect('auth');
  }
  public function forgetPassword()
  {
    $this->load->view('forgetPassword');
  }
  public function forgetPasswordProcess()
  {
    $email = $this->input->post('email');
    $password = random_string('alnum', 8);
    $params['userPassword'] = sha1($password);
    $data['email'] = $this->M_register->cekEmail($email);
    // var_dump($password);
    // var_dump($params);
    // var_dump($this->input->post('email'));
    // die;
    if (empty($data['email'])) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">E-mail tidak terdaftar</div>');
      return redirect($_SERVER['HTTP_REFERER']);
    } else {
      $this->db->where('userEmail', strtolower($email));
      $this->db->update('user', $params);
      $this->sendEmail($password);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Silahkan Periksa E-mail Anda</div>');
      return redirect($_SERVER['HTTP_REFERER']);
    }
  }
  private function sendEmail($password)
  {
    $config = [
      'protocol' => 'smtp',
      'smtp_host' => 'smtp.hostinger.com',
      'smtp_user' => 'support@smkdigitalservice.com',
      'smtp_pass' => 'Passw0rd',
      'smtp_port' => 587,
      'mailtype' => 'html',
      'charset' => 'utf-8',
      'newline' => "\r\n",
    ];
    $this->load->library('email', $config);
    $this->email->from('support@smkdigitalservice.com', 'SMK DIGITAL SERVICE');
    $this->email->to($this->input->post('email'));
    $this->email->subject('Perubahan Password SMK DIGITAL SERVICE');
    $this->email->message(
      'Reset Password SMK Digital Service<br><br>
      Berikut password akun anda yang baru<br>
      Password : ' . $password . '<br><br>
      Jika Anda mengalami kesulitan , silahkan hubungi CP (Finna) melalui chat WhatsApp ke nomer wa.me/6285161431605
      <br>Demikian kami informasikan, atas perhatiannya kami ucapkan terimakasih.
      <br><br>Best Regards<br>
      <b>SMK Digital Service</b><br>
      www.smkdigitalservice.com<br><br>
      SMK Digital Service adalah bagian dari CV.Educare Digital Indonesia'
    );
    if ($this->email->send()) {
      return true;
    } else {
      echo $this->email->print_debugger();
      die;
    };
  }
}
