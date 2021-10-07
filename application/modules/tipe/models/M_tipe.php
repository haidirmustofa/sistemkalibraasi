<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_tipe extends CI_Model
{
    public function inputtype($params)
    {
        $this->db->insert('tbl_type', $params);
    }
    public function deletetype($params)
    {
        $this->db->where('id_type', $params);
        $this->db->delete('tbl_type');
    }
    public function updatetype($params)
    {
        $this->db->where('id_type', $params['id_type']);
        $this->db->update('tbl_type', $params);
    }
    public function gettype() // for dashboard
    {
        $this->db->select('*')
            ->from('tbl_type');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
