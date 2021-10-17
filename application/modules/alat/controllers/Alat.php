<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alat extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        // check_superadmin();
        $this->load->model('M_alat');
    }
    public function index()
    {
        $params['navbar'] = 'Data Alat';
        $params['title'] = 'Data Alat Sistem Kalibrasi';
        if ($this->fungsi->user_login()->user_status == 'Member') {
            $this->template->load('template/template', 'member', $params);
        } else {
            $this->template->load('template/template', 'index', $params);
        }
    }
    public function semua_alat()
    {
        $id = $this->fungsi->user_login()->user_divition;
        $params['navbar'] = 'Data Alat';
        $params['title'] = 'Data Alat Sistem Kalibrasi';
        if ($this->fungsi->user_login()->user_status == 'Member') {
            $params['alat'] = $this->M_alat->getAlatByUserDivisi($id);
            $this->template->load('template/template', 'data_alat', $params);
        } else {
            $params['alat'] = $this->M_alat->getAlat();
            $this->template->load('template/template', 'data_semua_alat', $params);
        }
    }
    public function daftar_divisi()
    {
        $params['divisi'] = $this->M_alat->getDivisiForAlat();
        $params['navbar'] = 'Data Alat';
        $params['title'] = 'Data Alat Sistem Kalibrasi';
        $this->template->load('template/template', 'divisi', $params);
    }
    public function daftar_kondisi()
    {
        $params['kondisi'] = $this->M_alat->getKondisiForAlat();
        $params['navbar'] = 'Data Alat';
        $params['title'] = 'Data Alat Sistem Kalibrasi';
        $this->template->load('template/template', 'kondisi', $params);
    }
    public function daftar_alat_divisi($name)
    {
        $newname = str_replace('-', ' ', $name);
        $params['alat'] = $this->M_alat->getAlatByDivisi($newname);
        $params['alat'] = $this->M_alat->getAlatByDivisi($newname);
        $params['navbar'] = 'Data Alat';
        $params['title'] = 'Data Alat Sistem Kalibrasi';
        $this->template->load('template/template', 'data_alat', $params);
    }
    public function daftar_alat_terlambat()
    {

        $params['alat'] = $this->M_alat->getAlatTerlambat();
        $params['navbar'] = 'Data Alat';
        $params['title'] = 'Data Alat Sistem Kalibrasi';
        $this->template->load('template/template', 'data_alat', $params);
    }
    public function daftar_kondisi_alat($name)
    {
        $newname = str_replace('-', ' ', $name);
        $params['alat'] = $this->M_alat->getAlatByKondisi($newname);
        $params['navbar'] = 'Data Alat';
        $params['title'] = 'Data Alat Sistem Kalibrasi';
        $this->template->load('template/template', 'data_alat', $params);
    }
    public function add_alat()
    {
        $params['nama_alat'] = $this->input->post('name');
        $params['no_seri_alat'] = $this->input->post('no');
        $params['type_alat'] = $this->input->post('type');
        $params['merek_alat'] = $this->input->post('merek');
        $params['interval_kalibrasi_alat'] = $this->input->post('interval');
        $params['waktu_kalibrasi_alat'] = $this->input->post('kalibrasi_terakhir');
        $params['keterangan_alat'] = $this->input->post('keterangan');
        $params['kondisi_alat'] = $this->input->post('kondisi');
        $params['divisi'] = $this->input->post('divisi');
        $params['id_user'] = $this->fungsi->user_login()->id_user;
        $this->M_alat->inputalat($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menambahkan Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function edit_alat()
    {
        $tanggal = $this->input->post('kalibrasi_terakhir');
        $pecah_tgl = explode("-", $tanggal);
        $thn = $pecah_tgl[0];
        $bln = $pecah_tgl[1];
        $tgl = $pecah_tgl[2];
        $nextkalibrasi = $thn + $this->input->post('interval');
        $newkalibrasi = $nextkalibrasi . '-' . $bln . '-' . $tgl;
        $date1 = date_create($newkalibrasi);
        $date2 = date_create(date("Y-m-d"));
        $diff = date_diff($date1, $date2);
        $params['id_alat'] = $this->input->post('id');
        $params['nama_alat'] = $this->input->post('name');
        $params['no_seri_alat'] = $this->input->post('no_seri');
        $params['type_alat'] = $this->input->post('tipe');
        $params['merek_alat'] = $this->input->post('merek');
        $params['interval_kalibrasi_alat'] = $this->input->post('interval');
        $params['waktu_kalibrasi_alat'] = $this->input->post('kalibrasi_terakhir');
        $params['kalibrasi_selanjutnya'] = $newkalibrasi;
        $data['hari_kalibrasi'] = $diff->format("%R%a");
        $params['hari_kalibrasi'] = $diff->format("%a");
        $status = substr($data['hari_kalibrasi'], 0, 1);
        $params['status_hari'] = $status;
        $params['keterangan_alat'] = $this->input->post('keterangan');
        $params['kondisi_alat'] = $this->input->post('kondisi');
        $params['divisi'] = $this->input->post('divisi');
        $params['id_user'] = $this->fungsi->user_login()->id_user;
        $this->M_alat->updatealat($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Merubah Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function delete_alat($params)
    {
        $this->M_alat->deletealat($params);
        $this->session->set_flashdata('message', ' <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Menghapus Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
    public function update_alat()
    {
        header('Content-Type: application/json');
        $username = 'LenAPI';
        $password = 'P@ssw0rdL3n4p1';
        $headers = array(
            'Content-Type:application/json',
            'Authorization: Basic ' . base64_encode($username . ":" . $password)
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://apat-intern.len.co.id:44306/DII/GetByAlatUkur');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $output = curl_exec($ch);
        curl_close($ch);
        $output = json_decode($output, TRUE);
        $count = count($output);
        $x = 0;
        while ($x <= $count) {
            if ($x == $count) {
                break;
            } else {
                $params['id_alat'] = $output[$x]['id'];
                $params['nama_alat'] = $output[$x]['namaAktivaTetap'];
                $params['no_seri_alat'] = $output[$x]['noSeri'];
                $params['type_alat'] = $output[$x]['namaTipe'];
                $params['merek_alat'] = $output[$x]['namaMerk'];
                if ($output[$x]['kondisi'] == null) {
                    $output[$x]['kondisi'] = '-';
                }
                $params['kondisi_alat'] = $output[$x]['kondisi'];
                if ($output[$x]['uK_VM'] == null) {
                    $params['id_divisi'] = null;
                    $params['divisi'] = null;
                } else {
                    $params['id_divisi'] = $output[$x]['uK_VM']['unitKerjaID'];
                    $params['divisi'] = $output[$x]['uK_VM']['unitKerjaNama'];
                }
                $params['id_user'] = $this->fungsi->user_login()->id_user;
                $id_alat = $output[$x]['id'];
                $id = $this->M_alat->getIDAlat($id_alat);
                if (!empty($id)) {
                    $this->M_alat->updatealat($params);
                } else {
                    $this->M_alat->inputalat($params);
                }
                $x++;
            }
        }
        $data['divisi'] = $this->M_alat->getDivisiByAlat();
        $jumlah = count($data['divisi']);
        $y = 0;
        while ($y < $jumlah) {
            $id_divisi = $data['divisi'][$y]['id_divisi'];
            $id = $this->M_alat->getDivisi($id_divisi);
            $data_['id_divisi'] = $data['divisi'][$y]['id_divisi'];
            $data_['nama_divisi'] = $data['divisi'][$y]['divisi'];
            if (!empty($id)) {
                $this->M_alat->updatedivisi($data_);
                var_dump($id);
            } else {
                if ($data_['nama_divisi'] != null) {
                    $this->M_alat->inputdivisi($data_);
                }
            }
            $y++;
        }
        $this->session->set_flashdata('message', ' <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Sukses - </strong> Berhasil Update Data!</div>');
        return redirect($_SERVER['HTTP_REFERER']);
    }
}
