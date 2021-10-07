<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        // check_superadmin();
        $this->load->model('M_user');
    }
    public function index()
    {
        $params['user'] = $this->M_user->getUser();
        $params['divisi'] = $this->M_user->getDivisi();
        $params['navbar'] = 'Data User';
        $params['title'] = 'Data User Sistem Kalibrasi';
        $this->template->load('template/template', 'data_user', $params);
    }
    public function add_user()
    {
        $params['id_user'] = $this->input->post('id');
        $params['user_fullname'] = $this->input->post('name');
        $params['user_name'] = $this->input->post('username');
        $params['user_password'] = sha1($this->input->post('password'));
        $params['user_email'] = $this->input->post('email');
        $params['user_phone'] = $this->input->post('phone');
        $params['user_divition'] = $this->input->post('divition');
        $params['user_account'] = $this->input->post('account');
        $params['user_status'] = $this->input->post('role');
        $this->M_user->inputuser($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menambahkan Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function edit_user()
    {
        $password = $this->input->post('password');
        $params['id_user'] = $this->input->post('id');
        $params['user_fullname'] = $this->input->post('name');
        $params['user_name'] = $this->input->post('username');
        if (!empty($password)) {
            $params['user_password'] = sha1($this->input->post('password'));
        }
        $params['user_email'] = $this->input->post('email');
        $params['user_phone'] = $this->input->post('phone');
        $params['user_divition'] = $this->input->post('divition');
        $params['user_account'] = $this->input->post('account');
        $params['user_status'] = $this->input->post('role');
        $this->M_user->updateuser($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Merubah Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete_user($params)
    {
        $this->M_user->deleteuser($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menghapus Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
}
