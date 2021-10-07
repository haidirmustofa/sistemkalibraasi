<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_divisi extends CI_Model
{
    public function inputdivisi($params)
    {
        $this->db->insert('tbl_divisi', $params);
    }
    public function deletedivisi($params)
    {
        $this->db->where('id_divisi', $params);
        $this->db->delete('tbl_divisi');
    }
    public function updatedivisi($params)
    {
        $this->db->where('id_divisi', $params['id_divisi']);
        $this->db->update('tbl_divisi', $params);
    }
    public function getDivisi() // for dashboard
    {
        $this->db->select('*')
            ->from('tbl_divisi');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
