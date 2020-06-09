<?php

    class Barang extends CI_Controller 
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Global_m');
        }
        public function index(){
            $this->load->view('header_v');
            $this->load->view('barang_v');
            $this->load->view('footer_v');
        }
        
    }
    
?>