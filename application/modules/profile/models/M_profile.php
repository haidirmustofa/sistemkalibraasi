<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_profile extends CI_Model
{

    public function update($params)
    {
        $this->db->where('id_user', $params['id_user']);
        $this->db->update('user', $params);
    }
}
