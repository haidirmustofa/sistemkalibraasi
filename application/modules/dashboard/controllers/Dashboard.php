<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        check_not_login();
        // check_superadmin();
        $this->load->model('M_dashboard');
    }
    public function index()
    {
        if ($this->fungsi->user_login()->user_status == 'Admin') {
            $data['user'] = $this->M_dashboard->getUser();
            $data['pengajuan'] = $this->M_dashboard->getPengajuan();
            $data['alat'] = $this->M_dashboard->getAlat();
            $data['pemberitahuan'] = $this->M_dashboard->getCountPemberitahuanAdmin();
            $params['alatunder30'] = $this->M_dashboard->getAlatUnder30();
            $params['alatunder15'] = $this->M_dashboard->getAlatUnder15();
            $params['alatunder5'] = $this->M_dashboard->getAlatUnder5();
            $params['alatunder0'] = $this->M_dashboard->getAlatUnder0();
            $params['terlambat'] = $this->M_dashboard->getAlatTerlambat();
            $params['updatepengajuan'] = $this->M_dashboard->getUpdatePengajuanAdmin();
            $params['totaluser'] = $data['user'][0]['total'];
            $params['newpengajuan'] = $this->M_dashboard->getNewPengajuan();
            $params['totalnotif'] = count($params['updatepengajuan']) + count($params['newpengajuan']) + count($params['alatunder30']) + count($params['alatunder15']) + count($params['alatunder5']) + count($params['terlambat']);
            $params['totalpengajuan'] = $data['pengajuan'][0]['total'];
            $params['graphkondisi'] = $this->M_dashboard->getAlatByKondisi();
            $params['graphdivisi'] = $this->M_dashboard->getAlatByDivisi();
            $params['graphpengajuan'] = $this->M_dashboard->getPengajuanByStatus();
            $params['totalalat'] = $data['alat'][0]['total'];
            $params['totapemberitahuan'] = $data['pemberitahuan'][0]['total'];
            $params['navbar'] = 'Dashboard';
            $params['title'] = 'Dashboard Sistem Kalibrasi';
            $this->template->load('template/template', 'dashboard', $params);
        } else {
            $divisi = $this->fungsi->user_login()->user_divition;
            $data['user'] = $this->M_dashboard->getUser();
            $data['pengajuan'] = $this->M_dashboard->getPengajuanByDivisi();
            $data['alat'] = $this->M_dashboard->getAlatDivisi($divisi);
            $data['pemberitahuan'] = $this->M_dashboard->getCountPemberitahuanMember();
            $params['alatunder30'] = $this->M_dashboard->getAlatUnder30ByDivisi($divisi);
            $params['alatunder15'] = $this->M_dashboard->getAlatUnder15ByDivisi($divisi);
            $params['alatunder5'] = $this->M_dashboard->getAlatUnder5ByDivisi($divisi);
            $params['alatunder0'] = $this->M_dashboard->getAlatUnder0ByDivisi($divisi);
            $params['terlambat'] = $this->M_dashboard->getAlatTerlambatByDivisi($divisi);
            $params['totaluser'] = $data['user'][0]['total'];
            $params['updatepengajuan'] = $this->M_dashboard->getUpdatePengajuan($divisi);
            $params['totalnotif'] = count($params['updatepengajuan']) + count($params['alatunder30']) + count($params['alatunder15']) + count($params['alatunder5']) + count($params['terlambat']);
            $params['totaluser'] = $data['user'][0]['total'];
            $params['totalpengajuan'] = $data['pengajuan'][0]['total'];
            $params['graphkondisi'] = $this->M_dashboard->getAlatDivisiByKondisi($divisi);
            $params['totapemberitahuan'] = $data['pemberitahuan'][0]['total'];
            $params['totalalat'] = $data['alat'][0]['total'];
            $params['navbar'] = 'Dashboard';
            $params['title'] = 'Dashboard Sistem Kalibrasi';
            $this->template->load('template/template', 'dashboard_member', $params);
        }
    }
    public function notif()
    {
        if ($this->fungsi->user_login()->user_status == 'Admin') {
            $params['pemberitahuan'] = $this->M_dashboard->getPemberitahuanAdmin();
            // var_dump($params['pemberitahuan']);
            // die;
        } else {
            $params['pemberitahuan'] = $this->M_dashboard->getPemberitahuanMember();
        }
        $params['navbar'] = 'Dashboard';
        $params['title'] = 'Pemberitahuan Sistem Kalibrasi';
        $this->template->load('template/template', 'pemberitahuan', $params);
    }

    // public function download()
    // {
    //     $path = './assets/apk/E&PP.apk';
    //     $data = file_get_contents($path);
    //     $name = 'E&PP.apk';
    //     force_download($name, $data);
    // }
}
