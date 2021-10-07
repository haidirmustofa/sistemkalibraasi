<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kondisi extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        // check_superadmin();
        $this->load->model('M_kondisi');
    }
    public function index()
    {
        $params['kondisi'] = $this->M_kondisi->getkondisi();
        $params['navbar'] = 'Data kondisi';
        $params['title'] = 'Data kondisi Sistem Kalibrasi';
        $this->template->load('template/template', 'data_kondisi', $params);
    }
    public function add_kondisi()
    {
        $params['id_kondisi'] = $this->input->post('id');
        $params['nama_kondisi'] = $this->input->post('name');
        $this->M_kondisi->inputkondisi($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menambahkan Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function edit_kondisi()
    {
        $params['id_kondisi'] = $this->input->post('id');
        $params['nama_kondisi'] = $this->input->post('name');
        $this->M_kondisi->updatekondisi($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Merubah Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete_kondisi($params)
    {
        $this->M_kondisi->deletekondisi($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menghapus Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
}
