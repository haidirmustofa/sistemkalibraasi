<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Divisi extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        // check_superadmin();
        $this->load->model('M_divisi');
    }
    public function index()
    {
        $params['divisi'] = $this->M_divisi->getDivisi();
        $params['navbar'] = 'Data Divisi';
        $params['title'] = 'Data Divisi Sistem Kalibrasi';
        $this->template->load('template/template', 'data_divisi', $params);
    }
    public function add_divisi()
    {
        $params['id_divisi'] = $this->input->post('id');
        $params['nama_divisi'] = $this->input->post('name');
        $this->M_divisi->inputdivisi($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menambahkan Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function edit_divisi()
    {
        $params['id_divisi'] = $this->input->post('id');
        $params['nama_divisi'] = $this->input->post('name');
        $this->M_divisi->updatedivisi($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Merubah Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete_divisi($params)
    {
        $this->M_divisi->deletedivisi($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menghapus Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
}
