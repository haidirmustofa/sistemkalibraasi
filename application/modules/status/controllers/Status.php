<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Status extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        // check_superadmin();
        $this->load->model('M_status');
    }
    public function index()
    {
        $data['awal'] = $this->M_status->getstatusAwal();
        $data['pembatalan'] = $this->M_status->getstatusPembatalan();
        $data['akhir'] = $this->M_status->getstatusAkhir();
        if (empty($data['awal'])) {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Peringatan - </strong> Data Status awal belum di tentukan!</div>');
        } else if (empty($data['pembatalan'])) {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Peringatan - </strong> Data Status pembatalan belum di tentukan!</div>');
        } else if (empty($data['akhir'])) {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Peringatan - </strong> Data Status akhir belum di tentukan!</div>');
        }
        $params['status'] = $this->M_status->getstatus();
        $params['navbar'] = 'Data status';
        $params['title'] = 'Data status Sistem Kalibrasi';
        $this->template->load('template/template', 'data_status', $params);
    }
    public function add_status()
    {
        $params['id_status'] = $this->input->post('id');
        $params['nama_status'] = $this->input->post('name');
        $params['role_status'] = $this->input->post('role');
        $this->M_status->inputstatus($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Sukses - </strong> Berhasil Menambahkan Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function edit_status()
    {
        //awal
        if ($this->input->post('role') == 'Awal') {
            $params_['role'] = $this->input->post('role');
            $data_['role_status'] = null;
            $this->M_status->updaterolestatus($params_, $data_);
            $params['id_status'] = $this->input->post('id');
            $params['nama_status'] = $this->input->post('name');
            $params['role_status'] = $this->input->post('role');
            $this->M_status->updatestatus($params);
        } else if ($this->input->post('role') == 'Pembatalan') {
            $params_['role'] = $this->input->post('role');
            $data_['role_status'] = null;
            $this->M_status->updaterolestatus($params_, $data_);
            $params['id_status'] = $this->input->post('id');
            $params['nama_status'] = $this->input->post('name');
            $params['role_status'] = $this->input->post('role');
            $this->M_status->updatestatus($params);
        } else {
            $params_['role'] = $this->input->post('role');
            $data_['role_status'] = null;
            $this->M_status->updaterolestatus($params_, $data_);
            $params['id_status'] = $this->input->post('id');
            $params['nama_status'] = $this->input->post('name');
            $params['role_status'] = $this->input->post('role');
            $this->M_status->updatestatus($params);
        }
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Merubah Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete_status($params)
    {
        $this->M_status->deletestatus($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menghapus Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
}
