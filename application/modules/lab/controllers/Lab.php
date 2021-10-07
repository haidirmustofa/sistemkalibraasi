<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lab extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        // check_superadmin();
        $this->load->model('M_lab');
    }
    public function index()
    {
        $params['lab'] = $this->M_lab->getlab();
        $params['navbar'] = 'Data lab';
        $params['title'] = 'Data lab Sistem Kalibrasi';
        $this->template->load('template/template', 'data_lab', $params);
    }
    public function add_lab()
    {
        $params['id_lab'] = $this->input->post('id');
        $params['nama_lab'] = $this->input->post('name');
        $this->M_lab->inputlab($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button lab="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menambahkan Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function edit_lab()
    {
        $params['id_lab'] = $this->input->post('id');
        $params['nama_lab'] = $this->input->post('name');
        $this->M_lab->updatelab($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button lab="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Merubah Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete_lab($params)
    {
        $this->M_lab->deletelab($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button lab="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menghapus Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
}
