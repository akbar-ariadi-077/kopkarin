<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Monthly_Budget extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_MonthlyBudget');
    }

    public function index()
    {
    }

    public function category($opt = NULL, $id = NULL)
    {
        if ($opt == 'all' || $opt == NULL) {
            $data['category'] = $this->M_MonthlyBudget->get_all_category();
        } else if ($opt == 'byid') {
            $data['category'] = $this->M_MonthlyBudget->get_category_by_id($id);
        }

        $this->load->view('include/header');
        $this->load->view('include/loader');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('monthly_budget/category', $data);
        $this->load->view('include/footer');
    }

    public function sub_category($opt = NULL, $id = NULL)
    {
        if ($opt == 'all' || $opt == NULL) {
            $data['sub_category'] = $this->M_MonthlyBudget->get_all_sub_category();
        } else if ($opt == 'byid') {
            $data['sub_category'] = $this->M_MonthlyBudget->get_sub_category_by_id($id);
        } else if ($opt == 'category') {
            $data['sub_category'] = $this->M_MonthlyBudget->get_sub_category_by_category($id);
        }

        $this->load->view('include/header');
        $this->load->view('include/loader');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('monthly_budget/sub_category', $data);
        $this->load->view('include/footer');
    }

    public function transaction()
    {
        $data['transaction'] = $this->M_MonthlyBudget->get_all_transaction();

        $this->load->view('include/header');
        $this->load->view('include/loader');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('monthly_budget/transaction', $data);
        $this->load->view('include/footer');
    }
}
