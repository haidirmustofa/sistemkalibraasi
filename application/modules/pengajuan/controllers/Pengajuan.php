<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengajuan extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        $this->load->model('M_pengajuan');
    }
    public function index()
    {
        $params['labo'] = $this->M_pengajuan->getLab();
        $params['alat'] = $this->M_pengajuan->getAlatByPengajuan();
        $params['lab'] = $this->M_pengajuan->getLabByPengajuan();
        $params['dokumen'] = $this->M_pengajuan->getDokumenByPengajuan();
        if ($this->fungsi->user_login()->user_status == 'Member') {
            $params['pengajuan'] = $this->M_pengajuan->getPengajuanByDivisi();
        } else {
            $params['pengajuan'] = $this->M_pengajuan->getpengajuan();
        }
        $params['navbar'] = 'Data pengajuan';
        $params['title'] = 'Data pengajuan Sistem Kalibrasi';
        $this->template->load('template/template', 'data_pengajuan', $params);
    }
    public function tambah_pengajuan()
    {
        $divisi = $this->fungsi->user_login()->user_divition;
        $params['alat'] = $this->M_pengajuan->getAlatByDivisi($divisi);
        $params['navbar'] = 'Data pengajuan';
        $params['title'] = 'Data pengajuan Sistem Kalibrasi';
        $this->template->load('template/template', 'add_pengajuan', $params);
    }
    public function detail_pengajuan($slug)
    {
        $slug_ = $this->M_pengajuan->getPengajuanBySlug($slug);
        $id =  $slug_[0]['id_pengajuan'];
        $params['pengajuan'] = $this->M_pengajuan->getPengajuanByID($id);
        $params['labo'] = $this->M_pengajuan->getLab();
        $params['alat'] = $this->M_pengajuan->getAlatByPengajuan();
        $params['lab'] = $this->M_pengajuan->getLabByPengajuan();
        $params['pengajuanlab'] = $this->M_pengajuan->getPengajuanLab($id);
        $params['dokumen'] = $this->M_pengajuan->getDokumenByPengajuan();
        $params['status'] = $this->M_pengajuan->getStatusProses();
        // var_dump($params['status']);
        // die;
        $params['navbar'] = 'Data Pengajuan';
        $params['title'] = 'Detail pengajuan Sistem Kalibrasi';
        $this->template->load('template/template', 'detail_pengajuan', $params);
    }
    public function tambah_alat()
    {
        $id = $this->fungsi->user_login()->user_divition;
        $params['alat'] = $this->M_pengajuan->getAlatByUserDivisi($id);
        $params['navbar'] = 'Data pengajuan';
        $params['title'] = 'Data pengajuan Sistem Kalibrasi';
        $this->template->load('template/template', 'add_alat', $params);
    }
    public function lab_pengajuan()
    {
        $params['id_pengajuan'] =  $this->input->post("id");
        $params['id_lab'] =  $this->input->post("lab");
        $params['harga'] =  $this->input->post("harga");
        $this->M_pengajuan->inputlabpengajuan($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menambahkan Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function riwayat_pembatalan()
    {
        $divisi = $this->fungsi->user_login()->user_divition;
        $params['pembatalan'] = $this->M_pengajuan->getPembatalanByDivisi($divisi);
        $params['navbar'] = 'Data pengajuan';
        $params['title'] = 'Data pengajuan Sistem Kalibrasi';
        $this->template->load('template/template', 'data_pembatalan', $params);
    }
    public function add_pengajuan()
    {
        $status = $this->M_pengajuan->getStatusAwal();
        $params['nama_pengaju'] =  $this->input->post("name");
        $params['id_user'] =  $this->fungsi->user_login()->id_user;
        $params['tanggal_pengajuan'] =  date('Y-m-d');
        $params['deskripsi_pengajuan'] = $this->input->post('description');
        $params['status_pengajuan'] = $status[0]['id_status'];
        $params['divisi_pengaju'] = $this->fungsi->user_login()->user_divition;
        $params['is_available'] = '0';
        $params['pengajuan_slug'] = random_string('alnum', 50) . time();;
        $this->M_pengajuan->inputpengajuan($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menambahkan Data!</div>');
        return redirect(base_url('add-alat-pengajuan'));
    }
    public function pengajuan_alat()
    {
        $id = $this->M_pengajuan->getIDPengajuan();
        $alat = $_POST['alat'];
        $jumlah_dipilih = count($alat);
        for ($x = 0; $x < $jumlah_dipilih; $x++) {
            $params['id_alat'] = $alat[$x];
            $params['id_pengajuan'] = $id[0]['id_pengajuan'];
            $this->M_pengajuan->inputalatpengajuan($params);
        }
        $data['id_pengajuan'] = $id[0]['id_pengajuan'];
        $data['is_available'] = '1';
        $this->M_pengajuan->updatepengajuan($data);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menambahkan Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function pengajuan_lab()
    {
        $lab = $this->input->post("lab");
        $harga = explode("-", $lab);
        $data['id_pengajuan'] =  $this->input->post("id");
        $data['lab'] = $harga[0];
        $data['harga_lab'] = $harga[1];
        $this->M_pengajuan->updatepengajuan($data);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menambahkan Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function pengajuan_selesai()
    {
        $id = $this->input->post("id");
        $status = $this->M_pengajuan->getStatusAkhir();
        $data['status_pengajuan'] = $status[0]['id_status'];
        $data['id_pengajuan'] =  $this->input->post("id");
        $this->M_pengajuan->updatepengajuan($data);
        $alat = $this->M_pengajuan->getAlatPengajuan($id);
        $jumlah_dipilih = count($alat);
        for ($x = 0; $x < $jumlah_dipilih; $x++) {
            $params['id_alat'] = $alat[$x]['id_alat'];
            $params['waktu_kalibrasi_alat'] = $this->input->post("date");
            $this->M_pengajuan->update_alat($params);
        }
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menambahkan Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function cancel_pengajuan()
    {
        $idpengajuan =  $this->input->post("id");
        $statuspembatalan = $this->M_pengajuan->getPembatalan($idpengajuan);
        if (!empty($statuspembatalan)) {
            $this->session->set_flashdata('message', ' <div class="alert alert-warning alert-dismissible bg-warning text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Pemberitahuan - </strong> Pengajuan sudah dibatalkan!</div>');
        } else {
            $status = $this->M_pengajuan->getStatusPembatalan();
            $data['id_pengajuan'] =  $this->input->post("id");
            $data['keterangan_pembatalan'] = $this->input->post("keterangan");
            $this->M_pengajuan->cancelpengajuan($data);
            $params['id_pengajuan'] =  $this->input->post("id");
            $params['status_pengajuan'] = $status[0]['id_status'];
            $this->M_pengajuan->updatepengajuan($params);
            $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Sukses - </strong> Berhasil Membatalkan Pengajuan!</div>');
        }
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function edit_pengajuan()
    {
        $params['id_pengajuan'] = $this->input->post('id');
        $params['nama_pengajuan'] = $this->input->post('name');
        $this->M_pengajuan->updatepengajuan($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Merubah Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function update_status()
    {
        $params['id_pengajuan'] = $this->input->post('id');
        $params['status_pengajuan'] = $this->input->post('status');
        $this->M_pengajuan->updatepengajuan($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Merubah Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete_pengajuan($params)
    {
        $this->M_pengajuan->deletepengajuan($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menghapus Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function upload_file()
    {
        date_default_timezone_set('Asia/Jakarta');
        setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'IND.UTF8', 'IND.UTF-8', 'IND.8859-1', 'IND', 'Indonesian.UTF8', 'Indonesian.UTF-8', 'Indonesian.8859-1', 'Indonesian', 'Indonesia', 'id', 'ID', 'en_US.UTF8', 'en_US.UTF-8', 'en_US.8859-1', 'en_US', 'American', 'ENG', 'English');
        $date = date('Y-m-d_H:i:s');
        $name = $this->input->post('name');
        $config['allowed_types'] = '*';
        $config['max_size']      = '100000';
        $config['upload_path'] = './assets/dokumen';
        $config['file_name'] = str_replace(' ', '_', $name) . '_' . str_replace(':', '-', $date);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $fileExt = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
            $params['id_pengajuan'] = $this->input->post('id');
            $params['file_dokumen'] = $config['file_name'] . '.' . $fileExt;
            $params['nama_dokumen'] = $this->input->post('name');
            $this->M_pengajuan->inputFile($params);
            $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Sukses - </strong> Berhasil Upload File!</div>');
        } else {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Gagal - </strong> Periksa kembali ukuran atau extensi file!</div>');
        }
        return redirect($_SERVER['HTTP_REFERER']);
    }
}
