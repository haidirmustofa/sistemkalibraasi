<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tipe extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        // check_superadmin();
        $this->load->model('M_tipe');
    }
    public function index()
    {
        $params['type'] = $this->M_tipe->gettype();
        $params['navbar'] = 'Data type';
        $params['title'] = 'Data type Sistem Kalibrasi';
        $this->template->load('template/template', 'data_tipe', $params);
    }
    public function add_type()
    {
        $params['id_type'] = $this->input->post('id');
        $params['nama_type'] = $this->input->post('name');
        $this->M_tipe->inputtype($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menambahkan Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function edit_type()
    {
        $params['id_type'] = $this->input->post('id');
        $params['nama_type'] = $this->input->post('name');
        $this->M_tipe->updatetype($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Merubah Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete_type($params)
    {
        $this->M_tipe->deletetype($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menghapus Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
}
