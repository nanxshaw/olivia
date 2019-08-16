<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends MX_Controller {

    public function __construct(){
        parent::__construct();
    }
    public function index(){ 
        $this->load->view('template/header');
        $this->load->view('layanan');
        $this->load->view('template/footer');
    }

    
    public function detail_paket(){ 
        $data['title'] = 'DATA LAYANAN - LALA';
        $this->load->view('template/header_white',$data);
        $this->load->view('detail-paket');
    }

   
}