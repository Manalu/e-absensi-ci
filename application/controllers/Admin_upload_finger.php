<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_upload_finger extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->cek_login();
		$this->load->model('Admin_Model');
	}

	public function absen_datang(){ 
		$this->load->view('admin/upload_finger/upload_absen_datang');
	}

	public function absen_pulang(){ 
		$this->load->view('admin/upload_finger/upload_absen_pulang');
	}

	public function upload_data_datang(){
		$this->load->view('admin/upload_finger/upload_data_datang');
	}

	public function upload_data_pulang(){
		$this->load->view('admin/upload_finger/upload_data_pulang');
	}


	function cek_login(){
		if (!$this->session->userdata('admin_login')){
			redirect('Auth/login-admin');
		}
	}

}