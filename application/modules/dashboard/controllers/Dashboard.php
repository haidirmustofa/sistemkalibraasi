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
            $params['totaluser'] = $data['user'][0]['total'];
            $params['totalpengajuan'] = $data['pengajuan'][0]['total'];
            $params['graphkondisi'] = $this->M_dashboard->getAlatByKondisi();
            $params['graphdivisi'] = $this->M_dashboard->getAlatByDivisi();
            $params['graphpengajuan'] = $this->M_dashboard->getPengajuanByStatus();
            $params['totalalat'] = $data['alat'][0]['total'];
            $params['navbar'] = 'Dashboard';
            $params['title'] = 'Dashboard Sistem Kalibrasi';
            $this->template->load('template/template', 'dashboard', $params);
        } else {
            $divisi = $this->fungsi->user_login()->user_divition;
            $data['user'] = $this->M_dashboard->getUser();
            $data['pengajuan'] = $this->M_dashboard->getPengajuan();
            $data['alat'] = $this->M_dashboard->getAlatDivisi($divisi);
            $params['totaluser'] = $data['user'][0]['total'];
            $params['totalpengajuan'] = $data['pengajuan'][0]['total'];
            $params['graphkondisi'] = $this->M_dashboard->getAlatDivisiByKondisi($divisi);
            // $params['graphdivisi'] = $this->M_dashboard->getAlatByDivisi();
            // $params['graphpengajuan'] = $this->M_dashboard->getPengajuanByStatus();
            $params['totalalat'] = $data['alat'][0]['total'];
            $params['navbar'] = 'Dashboard';
            $params['title'] = 'Dashboard Sistem Kalibrasi';
            $this->template->load('template/template', 'dashboard_member', $params);
        }
    }

    // public function download()
    // {
    //     $path = './assets/apk/E&PP.apk';
    //     $data = file_get_contents($path);
    //     $name = 'E&PP.apk';
    //     force_download($name, $data);
    // }
}
