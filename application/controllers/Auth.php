<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('include/header');
        $this->load->view('include/loader');
        $this->load->view('include/navbar');
        $this->load->view('include/sidebar');
        $this->load->view('anggota/anggota_list');
        $this->load->view('include/footer');
    }
}
