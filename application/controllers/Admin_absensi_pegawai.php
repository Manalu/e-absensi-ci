<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_absensi_pegawai extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->cek_login();
		$this->load->model('Admin_Model');
	}

	public function absen_datang(){ 
		$this->load->view('admin/absensi/absensi_absen_datang');
	}

	public function absen_pulang(){ 
		$this->load->view('admin/absensi/absensi_absen_pulang');
	}


	function cek_login(){
		if (!$this->session->userdata('admin_login')){
			redirect('Auth/login-admin');
		}
	}

}