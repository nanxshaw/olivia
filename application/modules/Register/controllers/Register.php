<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends MX_Controller {

    public function __construct(){
        parent::__construct();
    }
    public function index(){ 
        $this->load->view('template/header');
        $this->load->view('register');
        $this->load->view('template/footer');
    }

    public function profile(){ 
        $data['title'] = "PROFIL CUSTOMER";
        $this->load->view('template/header_white', $data);
        $this->load->view('profile');
    }

    public function medis(){ 
        $data['title'] = "REKAM MEDIS CUSTOMER";
        $this->load->view('template/header_white', $data);
        $this->load->view('rekam_medis');
    }

   
}