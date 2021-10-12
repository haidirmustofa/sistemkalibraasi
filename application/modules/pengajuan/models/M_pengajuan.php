<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_pengajuan extends CI_Model
{
    public function inputpengajuan($params)
    {
        $this->db->insert('tbl_pengajuan', $params);
    }
    public function inputriwayat($params)
    {
        $this->db->insert('tbl_riwayat_pengajuan', $params);
    }
    public function inputnotif($params)
    {
        $this->db->insert('tbl_notif', $params);
    }
    public function inputFile($params)
    {
        $this->db->insert('tbl_dokumen', $params);
    }
    public function inputlabpengajuan($params)
    {
        $this->db->insert('tbl_pengajuan_lab', $params);
    }
    public function cancelpengajuan($params)
    {
        $this->db->insert('tbl_pembatalan', $params);
    }
    public function inputalatpengajuan($params)
    {
        // var_dump($params);
        // die;
        $this->db->insert('tbl_pengajuan_alat', $params);
    }
    public function deletepengajuan($params)
    {
        $this->db->where('id_pengajuan', $params);
        $this->db->delete('tbl_pengajuan');
    }
    public function deletepengajuanlab($params)
    {
        $this->db->where('id_pengajuan_lab', $params);
        $this->db->delete('tbl_pengajuan_lab');
    }
    public function deletepengajuanalat($params)
    {
        $this->db->where('id_pengajuan', $params);
        $this->db->delete('tbl_pengajuan_alat');
    }
    public function deletepembatalan($params)
    {
        $this->db->where('id_pengajuan', $params);
        $this->db->delete('tbl_pembatalan');
    }
    public function deletelabpengajuan($params)
    {
        $this->db->where('id_pengajuan', $params);
        $this->db->delete('tbl_pengajuan_lab');
    }
    public function deleteriwayatpengajuan($params)
    {
        $this->db->where('id_pengajuan', $params);
        $this->db->delete('tbl_riwayat_pengajuan');
    }
    public function deletedokumen($id)
    {
        $this->db->where('id_dokumen', $id);
        $this->db->delete('tbl_dokumen');
    }
    public function updatepengajuan($data)
    {
        $this->db->where('id_pengajuan', $data['id_pengajuan']);
        $this->db->update('tbl_pengajuan', $data);
    }
    public function update_alat($data)
    {

        $this->db->where('id_alat', $data['id_alat']);
        $this->db->update('tbl_alat', $data);
    }
    public function getpengajuan()
    {
        $this->db->select('*')
            ->from('tbl_pengajuan')
            ->where('is_available', 1)
            ->order_by('tbl_pengajuan.id_pengajuan', 'desc')
            ->join('user', 'user.id_user = tbl_pengajuan.id_user', 'left')
            ->join('tbl_status', 'tbl_pengajuan.status_pengajuan = tbl_status.id_status', 'left')
            ->join('tbl_lab', 'tbl_pengajuan.lab = tbl_lab.id_lab', 'left')
            ->join('tbl_divisi', 'tbl_pengajuan.divisi_pengaju = tbl_divisi.id_divisi', 'left');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getPengajuanByID($id)
    {
        $this->db->select('*')
            ->from('tbl_pengajuan')
            ->where('id_pengajuan', $id)
            ->join('user', 'user.id_user = tbl_pengajuan.id_user', 'left')
            ->join('tbl_status', 'tbl_pengajuan.status_pengajuan = tbl_status.id_status', 'left')
            ->join('tbl_lab', 'tbl_pengajuan.lab = tbl_lab.id_lab', 'left')
            ->join('tbl_divisi', 'tbl_pengajuan.divisi_pengaju = tbl_divisi.id_divisi', 'left');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getPengajuanBySlug($slug)
    {
        $this->db->select('*')
            ->from('tbl_pengajuan')
            ->where('pengajuan_slug', $slug)
            ->join('user', 'user.id_user = tbl_pengajuan.id_user', 'left')
            ->join('tbl_status', 'tbl_pengajuan.status_pengajuan = tbl_status.id_status', 'left')
            ->join('tbl_lab', 'tbl_pengajuan.lab = tbl_lab.id_lab', 'left')
            ->join('tbl_divisi', 'tbl_pengajuan.divisi_pengaju = tbl_divisi.id_divisi', 'left');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getAktifitas($id)
    {
        $this->db->select('*')
            ->from('tbl_riwayat_pengajuan')
            ->order_by('id_riwayat_pengajuan', 'desc')
            ->where('tbl_riwayat_pengajuan.id_pengajuan', $id)
            ->join('tbl_pengajuan', 'tbl_pengajuan.id_pengajuan = tbl_riwayat_pengajuan.id_pengajuan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getStatusAwal()
    {
        $this->db->select('*')
            ->from('tbl_status')
            ->where('role_status', 'Awal');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getFile($id)
    {
        $this->db->select('*')
            ->from('tbl_dokumen')
            ->where('id_dokumen', $id);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getLabByID($lab)
    {
        $this->db->select('*')
            ->from('tbl_lab')
            ->where('id_lab', $lab);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getStatusAkhir()
    {
        $this->db->select('*')
            ->from('tbl_status')
            ->where('role_status', 'Akhir');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getStatusByID($id)
    {
        $this->db->select('*')
            ->from('tbl_status')
            ->where('id_status', $id);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getStatusProses()
    {
        $this->db->select('*')
            ->from('tbl_status')
            ->where('role_status', null);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getIDPengajuan()
    {
        $this->db->select('id_pengajuan , nama_pengaju')
            ->from('tbl_pengajuan')
            ->order_by('id_pengajuan', 'desc')
            ->limit(1);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getPengajuanByDivisi()
    {
        $id = $this->fungsi->user_login()->user_divition;
        $this->db->select('*')
            ->from('tbl_pengajuan')
            ->where('tbl_pengajuan.divisi_pengaju', $id)
            ->where('is_available', 1)
            ->join('user', 'user.id_user = tbl_pengajuan.id_user', 'left')
            ->join('tbl_status', 'tbl_pengajuan.status_pengajuan = tbl_status.id_status', 'left')
            ->join('tbl_lab', 'tbl_pengajuan.lab = tbl_lab.id_lab', 'left')
            ->join('tbl_divisi', 'tbl_pengajuan.divisi_pengaju = tbl_divisi.id_divisi', 'left')
            ->order_by('id_pengajuan', 'desc');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatByDivisi($name)
    {
        if ($name == 'Alat Tanpa Divisi') {
            $name = null;
        }
        $this->db->select('*')
            ->from('tbl_alat')
            ->where('divisi', $name);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatByUserDivisi($id)
    {
        $this->db->select('*')
            ->from('tbl_alat')
            ->order_by('nama_alat', 'asc')
            ->where('id_divisi', $id);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatByPengajuan()
    {
        $this->db->select('*')
            ->join('tbl_alat', 'tbl_alat.id_alat = tbl_pengajuan_alat.id_alat', 'left')
            ->from('tbl_pengajuan_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getPengajuanLab($id)
    {
        $this->db->select('*')
            ->where('id_pengajuan', $id)
            ->join('tbl_lab', 'tbl_lab.id_lab = tbl_pengajuan_lab.id_lab', 'left')
            ->from('tbl_pengajuan_lab');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatPengajuan($id)
    {
        $this->db->select('*')
            ->where('id_pengajuan', $id)
            ->from('tbl_pengajuan_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getStatusPembatalan()
    {
        $this->db->select('*')
            ->from('tbl_status')
            ->where('role_status', 'Pembatalan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getPembatalan()
    {
        $this->db->select('*')
            ->from('tbl_pembatalan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getPembatalanByID($id)
    {
        $this->db->select('*')
            ->where('id_pengajuan', $id)
            ->from('tbl_pembatalan');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getLab()
    {
        $this->db->select('*')
            ->from('tbl_lab');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getLabByPengajuan()
    {
        $this->db->select('*')
            ->join('tbl_pengajuan', 'tbl_pengajuan_lab.id_pengajuan = tbl_pengajuan.id_pengajuan', 'left')
            ->join('tbl_lab', 'tbl_lab.id_lab = tbl_pengajuan_lab.id_lab', 'left')
            ->from('tbl_pengajuan_lab');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getDokumenByPengajuan()
    {
        $this->db->select('*')
            ->join('tbl_pengajuan', 'tbl_pengajuan.id_pengajuan = tbl_dokumen.id_pengajuan', 'left')
            ->from('tbl_dokumen');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getPembatalanByDivisi($divisi)
    {
        $this->db->select('*')
            ->join('tbl_pengajuan', 'tbl_pengajuan.id_pengajuan = tbl_pembatalan.id_pengajuan')
            ->join('tbl_pengajuan_alat', 'tbl_pengajuan.id_pengajuan = tbl_pengajuan_alat.id_pengajuan')
            ->join('tbl_alat', 'tbl_alat.id_alat = tbl_pengajuan_alat.id_alat')
            ->where('tbl_pengajuan.divisi_pengaju', $divisi)
            ->from('tbl_pembatalan');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
