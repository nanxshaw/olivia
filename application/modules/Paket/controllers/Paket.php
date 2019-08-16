<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends MX_Controller {

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('template/header');
        $this->load->view('paket');
        $this->load->view('template/footer');
    }

    function ambil_paket(){
        $this->load->view('template/header');
        $this->load->view('ambil_paket');
        $this->load->view('template/footer');
    }

    function data_paket(){
        $this->load->view('template/header');
        $this->load->view('data_paket');
        $this->load->view('template/footer');
    }

    function detail_paket(){
        $this->load->view('template/header');
        $this->load->view('detail_paket');
        $this->load->view('template/footer');
    }


}