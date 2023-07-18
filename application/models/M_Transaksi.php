<?php

class M_Transaksi extends CI_model
{
    public function get_transaksi_by_nik($nik)
    {
        return $this->db->get_where('transaksi', ['nik' => $nik])->result_array();
    }
}