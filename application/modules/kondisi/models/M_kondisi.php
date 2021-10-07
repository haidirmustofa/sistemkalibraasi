<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_kondisi extends CI_Model
{
    public function inputkondisi($params)
    {
        $this->db->insert('tbl_kondisi', $params);
    }
    public function deletekondisi($params)
    {
        $this->db->where('id_kondisi', $params);
        $this->db->delete('tbl_kondisi');
    }
    public function updatekondisi($params)
    {
        $this->db->where('id_kondisi', $params['id_kondisi']);
        $this->db->update('tbl_kondisi', $params);
    }
    public function getkondisi() // for dashboard
    {
        $this->db->select('*')
            ->from('tbl_kondisi');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
