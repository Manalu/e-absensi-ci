<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_input extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->cek_login();
		$this->load->model('Admin_Model');
	}

	public function data_pegawai(){ 
		$this->load->view('admin/input/input_data_pegawai');
	}

	public function manual_absen_datang(){ 
		$this->load->view('admin/input/input_manual_absen_datang');
	}

	public function manual_absen_pulang(){ 
		$this->load->view('admin/input/input_manual_absen_pulang');
	}

	public function cuti_ijin_sakit(){ 
		$this->load->view('admin/input/input_cuti_ijin_sakit');
	}

	public function dinas_luar(){ 
		$this->load->view('admin/input/input_dinas_luar');
	}

	public function informasi(){ 
		$this->load->view('admin/input/input_informasi');
	}



	function cek_login(){
		if (!$this->session->userdata('admin_login')){
			redirect('Auth/login-admin');
		}
	}

}