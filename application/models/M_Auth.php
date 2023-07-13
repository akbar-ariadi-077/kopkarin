<?php

class M_Auth extends CI_model
{
    public function get_user_all()
    {
        return $this->db->get_where('user')->result_array();
    }

    public function get_user_active()
    {
        return $this->db->get_where('user', ['status' => 1])->result_array();
    }

    public function get_user_by_id($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function get_user_by_usern($usern)
    {
        return $this->db->get_where('user', ['usern' => $usern])->row_array();
    }
}