<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_alat extends CI_Model
{
    public function getAlat()
    {
        $this->db->select('*')
            ->from('tbl_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getIDAlat($id_alat)
    {
        $this->db->select('id_alat')
            ->from('tbl_alat')
            ->where('id_alat', $id_alat);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getAlatByKondisi($name)
    {
        $divisi = $this->fungsi->user_login()->user_divition;
        if ($this->fungsi->user_login()->user_status == 'Member') {
            if ($name != 'Alat Tanpa Kondisi') {
                $this->db->select('*')
                    ->from('tbl_alat')
                    ->where('kondisi_alat', $name)
                    ->where('id_divisi', $divisi);
            } else {
                $this->db->select('*')
                    ->from('tbl_alat')
                    ->where('id_divisi', $divisi)
                    ->where('kondisi_alat', '-');
            }
        } else {
            if ($name != 'Alat Tanpa Kondisi') {
                $this->db->select('*')
                    ->from('tbl_alat')
                    ->where('kondisi_alat', $name);
            } else {
                $this->db->select('*')
                    ->from('tbl_alat')
                    ->where('kondisi_alat', '')
                    ->or_where('kondisi_alat', '-');
            }
        }
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
            ->where('id_divisi', $id);
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getDivisiForAlat()
    {
        $this->db->select('divisi')
            ->from('tbl_alat')
            ->group_by('divisi');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getIDDivisi()
    {
        $this->db->select('id_divisi')
            ->from('tbl_alat')
            ->group_by('id_divisi');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getKondisiForAlat()
    {
        $this->db->select('kondisi_alat')
            ->from('tbl_alat')
            ->group_by('kondisi_alat');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getType()
    {
        $this->db->select('*')
            ->from('tbl_type');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getkondisi()
    {
        $this->db->select('*')
            ->from('tbl_kondisi');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getStatus()
    {
        $this->db->select('*')
            ->from('tbl_status');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getDivisi($id_divisi)
    {
        $this->db->select('*')
            ->where('id_divisi', $id_divisi)
            ->from('tbl_divisi');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function inputalat($params)
    {
        $this->db->insert('tbl_alat', $params);
    }
    public function deletealat($params)
    {
        $this->db->where('id_alat', $params);
        $this->db->delete('tbl_alat');
    }
    public function updatealat($params)
    {
        $this->db->where('id_alat', $params['id_alat']);
        $this->db->update('tbl_alat', $params);
    }
    public function getDivisiByAlat()
    {
        $this->db->select('id_divisi,divisi')
            ->from('tbl_alat')
            ->group_by('divisi');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function inputdivisi($data_)
    {
        $this->db->insert('tbl_divisi', $data_);
    }
    public function updatedivisi($data_)
    {
        $this->db->where('id_divisi', $data_['id_divisi']);
        $this->db->update('tbl_divisi', $data_);
    }
}
