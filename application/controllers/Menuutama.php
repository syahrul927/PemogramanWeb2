<?php

    class Menuutama extends CI_Controller 
    {
        function __construct()
        {
            parent::__construct();
            $this->load->model('Global_m');
        }
        public function index(){
            $this->load->view('menuutama_v');
        }
        
    }
    
?>