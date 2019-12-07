<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_memo_pegawai extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->cek_login();
		$this->load->model('Admin_Model');
	}

	public function cuti_ijin_sakit(){ 
		$this->load->view('admin/memo/memo_cuti_ijin_sakit');
	}

	public function dinas_luar(){ 
		$this->load->view('admin/memo/memo_dinas_luar');
	}


	function cek_login(){
		if (!$this->session->userdata('admin_login')){
			redirect('Auth/login-admin');
		}
	}

}