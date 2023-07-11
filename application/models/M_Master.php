<?php

class M_Master extends CI_model
{
    public function get_all_year()
    {
        return $this->db->get_where('tahun')->result_array();
    }

    public function get_all_year_active()
    {
        return $this->db->get_where('tahun', ['status_tahun' => 1])->result_array();
    }

    public function ins_new_year()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'int_tahun' => $this->input->post('yyyy', true),
            'text_tahun' => $this->input->post('yyyy', true),
            'status_tahun' => 1,
            'cdt' => $now
        ];
        $this->db->insert('tahun', $data_yyyy);
    }

    public function upd_year($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'int_tahun' => $this->input->post('yyyy', true),
            'text_tahun' => $this->input->post('yyyy', true),
            'status_tahun' => 1,
            'cdt' => $now
        ];

        $this->db->where('id_tahun', $id);
        $this->db->update('tahun', $data_yyyy);
    }

    public function del_year($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'status_tahun' => 0,
            'cdt' => $now
        ];

        $this->db->where('id_tahun', $id);
        $this->db->update('tahun', $data_yyyy);
    }



    public function get_all_bulan()
    {
        return $this->db->get_where('bulan')->result_array();
    }



    public function get_all_paytod()
    {
        return $this->db->get_where('metode_bayar')->result_array();
    }

    public function get_all_paytod_active()
    {
        return $this->db->get_where('metode_bayar', ['status_paytod' => 1])->result_array();
    }

    public function ins_new_paytod()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'nama_paytod' => $this->input->post('npaytod', true),
            'status_paytod' => 1,
            'cdt' => $now
        ];
        $this->db->insert('metode_bayar', $data_yyyy);
    }

    public function upd_paytod($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'nama_paytod' => $this->input->post('npaytod', true),
            'status_paytod' => 1,
            'cdt' => $now
        ];

        $this->db->where('id_paytod', $id);
        $this->db->update('metode_bayar', $data_yyyy);
    }

    public function del_paytod($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'status_paytod' => 0,
            'cdt' => $now
        ];

        $this->db->where('id_paytod', $id);
        $this->db->update('metode_bayar', $data_yyyy);
    }



    public function get_all_dept()
    {
        return $this->db->get_where('department')->result_array();
    }

    public function get_all_dept_active()
    {
        return $this->db->get_where('department', ['status_dept' => 1])->result_array();
    }

    public function ins_new_dept()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'nama_dept' => $this->input->post('yyyy', true),
            'status_dept' => 1,
            'cdt' => $now
        ];
        $this->db->insert('department', $data_yyyy);
    }

    public function upd_dept($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'nama_dept' => $this->input->post('yyyy', true),
            'status_dept' => 1,
            'cdt' => $now
        ];

        $this->db->where('id_dept', $id);
        $this->db->update('department', $data_yyyy);
    }

    public function del_dept($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'status_dept' => 0,
            'cdt' => $now
        ];

        $this->db->where('id_dept', $id);
        $this->db->update('department', $data_yyyy);
    }



    public function get_all_bank()
    {
        return $this->db->get_where('bank')->result_array();
    }

    public function get_all_bank_active()
    {
        return $this->db->get_where('bank', ['status_bank' => 1])->result_array();
    }

    public function ins_new_bank()
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'nama_bank' => $this->input->post('yyyy', true),
            'status_bank' => 1,
            'cdt' => $now
        ];
        $this->db->insert('bank', $data_yyyy);
    }

    public function upd_bank($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'nama_bank' => $this->input->post('yyyy', true),
            'status_bank' => 1,
            'cdt' => $now
        ];

        $this->db->where('id_bank', $id);
        $this->db->update('bank', $data_yyyy);
    }

    public function del_bank($id)
    {
        date_default_timezone_set('Asia/Jakarta');
        $now = date('Y-m-d H:i:s');

        $data_yyyy = [
            'status_bank' => 0,
            'cdt' => $now
        ];

        $this->db->where('id_bank', $id);
        $this->db->update('bank', $data_yyyy);
    }
}
