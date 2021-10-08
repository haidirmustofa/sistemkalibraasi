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
    public function getAlat()
    {
        $this->db->select('*, COUNT(id_alat) as total')
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
