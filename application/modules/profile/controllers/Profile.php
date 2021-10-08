<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        // check_superadmin();
        $this->load->model('M_profile');
    }
    public function index()
    {
        // $params['profile'] = $this->M_profile->getProfile();
        $params['navbar'] = "Data Profil";
        $params['title'] = 'Data Profil Sistem Kalibrasi';
        $params['title'] = 'Data Profil Sistem Kalibrasi';
        $this->template->load('template/template', 'data_profile', $params);
    }

    public function edit_profile()
    {
        $password = $this->input->post('password');
        $params['id_user'] = $this->fungsi->user_login()->id_user;
        $params['user_fullname'] = $this->input->post('fullname');
        $params['user_name'] = $this->input->post('username');
        $params['user_email'] = $this->input->post('email');
        $params['user_phone'] = $this->input->post('phone');
        if (!empty($password)) {
            $params['user_password'] = sha1($this->input->post('password'));
        }
        $this->M_profile->update($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Merubah Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
}
