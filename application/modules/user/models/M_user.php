<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function getUser()
    {
        $this->db->select('*')
            ->from('user')
            ->join('tbl_divisi', 'user.user_divition = tbl_divisi.id_divisi', 'left');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function inputuser($params)
    {
        $this->db->insert('user', $params);
    }

    public function deleteuser($params)
    {
        $this->db->where('id_user', $params);
        $this->db->delete('user');
    }
    public function updateuser($params)
    {
        $this->db->where('id_user', $params['id_user']);
        $this->db->update('user', $params);
    }

    public function getDivisi()
    {
        $this->db->select('*')
            ->from('tbl_divisi');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
