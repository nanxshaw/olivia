<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MX_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('template/header');
        $this->load->view('customer');
        $this->load->view('template/footer');
    }

    function akun_customer(){
        $this->load->view('template/header');
        $this->load->view('akun_customer');
        $this->load->view('template/footer');
    }

    function profile_customer(){
        $this->load->view('template/header');
        $this->load->view('profile_customer');
        // $this->load->view('template/footer');
    }


}