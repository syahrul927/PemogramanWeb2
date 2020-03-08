<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 function __construct() {
		parent:: __construct();
		$this->load->model("Global_m");
	}
	
	public function index()
	{
		$this->load->view('login_v');
	}

	public function ceklogin(){
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		$where = array(
			'username' => $user,
			'password' => md5($pass)
		);
	}
}
?>