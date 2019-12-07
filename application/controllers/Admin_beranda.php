<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_beranda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->cek_login();
		$this->load->model('Admin_Model');
	}

	public function index(){ 
		$this->load->view('admin/beranda');
	}



	function cek_login(){
		if (!$this->session->userdata('admin_login')){
			redirect('Auth/login-admin');
		}
	}

}