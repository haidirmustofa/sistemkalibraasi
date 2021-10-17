<?php defined('BASEPATH') or exit('No direct script access allowed');
class M_dashboard extends CI_Model
{
    public function getUser()
    {
        $this->db->select('*, COUNT(id_user) as total')
            ->from('user');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getPengajuan()
    {
        $this->db->select('*, COUNT(id_pengajuan) as total')
            ->from('tbl_pengajuan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getNewPengajuan()
    {
        $this->db->select('*')
            ->from('tbl_pengajuan')
            ->join('tbl_divisi', 'tbl_divisi.id_divisi = tbl_pengajuan.divisi_pengaju')
            ->where('is_new_admin', 1);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getPengajuanByDivisi()
    {
        $id = $this->fungsi->user_login()->user_divition;
        $this->db->select('*, COUNT(id_pengajuan) as total')
            ->where('divisi_pengaju', $id)
            ->from('tbl_pengajuan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getUpdatePengajuan($divisi)
    {
        $this->db->select('*')
            ->where('divisi_pengaju', $divisi)
            ->join('tbl_divisi', 'tbl_divisi.id_divisi = tbl_pengajuan.divisi_pengaju')
            ->where('is_member', 1)
            ->from('tbl_pengajuan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getUpdatePengajuanAdmin()
    {
        $this->db->select('*')
            ->where('is_admin', 1)
            ->join('tbl_divisi', 'tbl_divisi.id_divisi = tbl_pengajuan.divisi_pengaju')
            ->from('tbl_pengajuan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getCountPemberitahuanAdmin()
    {
        $this->db->select('*, COUNT(id_notif) as total')
            ->where('notif_for', 'Admin')
            ->where('notif_status', '1')
            ->order_by('id_notif', 'desc')
            // ->limit(10) 
            ->from('tbl_notif');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getPemberitahuanAdmin()
    {
        $this->db->select('*')
            ->where('notif_for', 'Admin')
            ->where('notif_status', '1')
            ->order_by('id_notif', 'desc')
            // ->limit(10) 
            ->from('tbl_notif');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getCountPemberitahuanMember()
    {
        $id = $this->fungsi->user_login()->user_divition;
        $this->db->select('*, COUNT(id_notif) as total')
            ->where('notif_for', $id)
            ->where('notif_status', '1')
            ->order_by('id_notif', 'desc')
            // ->limit(10)
            ->from('tbl_notif');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getPemberitahuanMember()
    {
        $id = $this->fungsi->user_login()->user_divition;
        $this->db->select('*, COUNT(id_notif) as total')
            ->where('notif_for', $id)
            ->where('notif_status', '1')
            ->order_by('id_notif', 'desc')
            // ->limit(10)
            ->from('tbl_notif');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlat()
    {
        $this->db->select('*, COUNT(id_alat) as total')
            ->from('tbl_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatUnder30()
    {
        $this->db->select('*')
            ->where('status_hari', '-')
            ->where('hari_kalibrasi', '30')
            ->from('tbl_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatUnder15()
    {
        $this->db->select('*')
            ->where('status_hari', '-')
            ->where('hari_kalibrasi', '15')
            ->from('tbl_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatUnder5()
    {
        $this->db->select('*')
            ->where('status_hari', '-')
            ->where('hari_kalibrasi', '5')
            ->from('tbl_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatUnder0()
    {
        $this->db->select('*')
            ->where('status_hari', '-')
            ->where('hari_kalibrasi', '0')
            ->from('tbl_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatTerlambat()
    {
        $this->db->select('*')
            ->where('status_hari', '+')
            ->where('hari_kalibrasi >', '0')
            ->from('tbl_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatUnder30ByDivisi($divisi)
    {
        $this->db->select('*')
            ->where('status_hari', '-')
            ->where('hari_kalibrasi', '30')
            ->where('id_divisi', $divisi)
            ->from('tbl_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatUnder15ByDivisi($divisi)
    {
        $this->db->select('*')
            ->where('status_hari', '-')
            ->where('hari_kalibrasi', '15')
            ->where('id_divisi', $divisi)
            ->from('tbl_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatUnder5ByDivisi($divisi)
    {
        $this->db->select('*')
            ->where('status_hari', '-')
            ->where('hari_kalibrasi', '5')
            ->where('id_divisi', $divisi)
            ->from('tbl_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatUnder0ByDivisi($divisi)
    {
        $this->db->select('*')
            ->where('status_hari', '-')
            ->where('hari_kalibrasi', '0')
            ->where('id_divisi', $divisi)
            ->from('tbl_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatTerlambatByDivisi($divisi)
    {
        $this->db->select('*')
            ->where('status_hari', '+')
            ->where('id_divisi', $divisi)
            ->where('hari_kalibrasi >', '0')
            ->from('tbl_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatByKondisi()
    {
        $this->db->select('*, COUNT(kondisi_alat) as total')
            ->from('tbl_alat')
            ->group_by('kondisi_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatDivisiByKondisi($divisi)
    {
        $this->db->select('*, COUNT(kondisi_alat) as total')
            ->from('tbl_alat')
            ->where('id_divisi', $divisi)
            ->group_by('kondisi_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getPengajuanByStatus()
    {
        $this->db->select('*, COUNT(status_pengajuan) as total')
            ->from('tbl_pengajuan')
            ->group_by('status_pengajuan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatByDivisi()
    {
        $this->db->select('*, COUNT(divisi) as total')
            ->from('tbl_alat')
            ->group_by('divisi');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatDivisi($divisi)
    {
        $this->db->select('*, COUNT(divisi) as total')
            ->from('tbl_alat')
            ->where('id_divisi', $divisi)
            ->group_by('divisi');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
