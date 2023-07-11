<?php

class M_MonthlyBudget extends CI_model
{
    public function get_all_category()
    {
        return $this->db->get_where('mb_category')->result_array();
    }

    public function get_all_category_active()
    {
        return $this->db->get_where('mb_category', ['status' => 1])->result_array();
    }

    public function get_category_by_id($id)
    {
        return $this->db->get_where('mb_category', ['id' => $id])->result_array();
    }

    public function get_all_sub_category()
    {
        $query = "SELECT s.name AS name, c.name AS category, s.status AS status, s.category AS idc
                  FROM mb_sub_category s
                  JOIN mb_category c ON c.id = s.category";
        return $this->db->query($query)->result_array();
    }

    public function get_all_sub_category_active()
    {
        $query = "SELECT s.name AS name, c.name AS category, s.status AS status, s.category AS idc
                  FROM mb_sub_category s
                  JOIN mb_category c ON c.id = s.category
                  WHERE s.status = 1";
        return $this->db->query($query)->result_array();
    }

    public function get_sub_category_by_id($id)
    {
        $query = "SELECT s.name AS name, c.name AS category, s.status AS status, s.category AS idc
                  FROM mb_sub_category s
                  JOIN mb_category c ON c.id = s.category
                  WHERE id = $id";
        return $this->db->query($query)->result_array();
    }

    public function get_sub_category_by_category($cat)
    {
        $query = "SELECT s.name AS name, c.name AS category, s.status AS status, s.category AS idc
                  FROM mb_sub_category s
                  JOIN mb_category c ON c.id = s.category
                  WHERE s.category = $cat";
        return $this->db->query($query)->result_array();
    }

    public function get_all_transaction()
    {
        return $this->db->get_where('mb_transaction')->result_array();
    }
}
