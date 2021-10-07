<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_lab extends CI_Model
{
    public function inputlab($params)
    {
        $this->db->insert('tbl_lab', $params);
    }
    public function deletelab($params)
    {
        $this->db->where('id_lab', $params);
        $this->db->delete('tbl_lab');
    }
    public function updatelab($params)
    {
        $this->db->where('id_lab', $params['id_lab']);
        $this->db->update('tbl_lab', $params);
    }
    public function getlab() // for dashboard
    {
        $this->db->select('*')
            ->from('tbl_lab');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
