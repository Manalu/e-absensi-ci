<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_output extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->cek_login();
		$this->load->model('Admin_Model');
	}

	public function data_pegawai(){ 
		$this->load->view('admin/output/output_data_pegawai');
	}

	public function absen_datang(){ 
		$this->load->view('admin/output/output_absen_datang');
	}

	public function absen_pulang(){ 
		$this->load->view('admin/output/output_absen_pulang');
	}

	public function cuti_ijin_sakit(){ 
		$this->load->view('admin/output/output_cuti_ijin_sakit');
	}

	public function dinas_luar(){ 
		$this->load->view('admin/output/output_dinas_luar');
	}

	public function informasi(){ 
		$this->load->view('admin/output/output_informasi');
	}



	function cek_login(){
		if (!$this->session->userdata('admin_login')){
			redirect('Auth/login-admin');
		}
	}

}