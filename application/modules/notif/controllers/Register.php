<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        // check_not_login();
        // check_superadmin();
        $this->load->model('M_register');
    }
    public function index()
    {
        $this->load->view('register');
    }
    public function process()
    {
        $email = $this->input->post('email');
        $data['email'] = $this->M_register->cekEmail($email);
        if (empty($data['email'])) {
            $params['userEmail'] = $this->input->post('email');
            $params['userPhone'] = $this->input->post('nohp');
            $params['userFullname'] = $this->input->post('name');
            $params['userPassword'] = sha1($this->input->post('password'));
            $params['userFrom'] = $this->input->post('from');
            $params['userStatus'] = $this->input->post('status');
            $this->M_register->add($params);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Success ! Silahkan Login</div>');
            }
            return redirect(base_url('login'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Sudah Terdaftar , Gunakan alamat Email lain</div>');
            return redirect(base_url('register'));
        }
    }
}
