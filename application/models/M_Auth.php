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

    public function change_password($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'passw' => $this->input->post('password_baru1', true),
            'cdt' => $now
        ];

        $this->db->where('id', $id);
        $this->db->update('user', $data_yyyy);
    }
}