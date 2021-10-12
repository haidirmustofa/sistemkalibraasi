<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_status extends CI_Model
{
    public function inputstatus($params)
    {
        $this->db->insert('tbl_status', $params);
    }
    public function deletestatus($params)
    {
        $this->db->where('id_status', $params);
        $this->db->delete('tbl_status');
    }
    public function updatestatus($params)
    {
        $this->db->where('id_status', $params['id_status']);
        $this->db->update('tbl_status', $params);
    }
    public function updaterolestatus($params, $data)
    {
        $this->db->where('role_status', $params['role']);
        $this->db->update('tbl_status', $data);
    }
    public function getstatus()
    {
        $this->db->select('*')
            ->from('tbl_status');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getstatusAwal()
    {
        $this->db->select('*')
            ->where('role_status', 'Awal')
            ->from('tbl_status');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getstatusAkhir()
    {
        $this->db->select('*')
            ->where('role_status', 'Akhir')
            ->from('tbl_status');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getstatusPembatalan()
    {
        $this->db->select('*')
            ->where('role_status', 'Pembatalan')
            ->from('tbl_status');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
