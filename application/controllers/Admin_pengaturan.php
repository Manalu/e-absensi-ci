<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pengaturan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//$this->cek_login();
		$this->load->model('Admin_Model');
	}
	public function data_pegawai(){ 
		$this->load->view('admin/pengaturan/pengaturan_data_pegawai');
	}

	public function nama_instansi(){ 
		$this->load->view('admin/pengaturan/pengaturan_nama_instansi');
	}

	public function jenis_memo(){ 
		$this->load->view('admin/pengaturan/pengaturan_jenis_memo');
	}

	public function pangkat_golongan(){ 
		$this->load->view('admin/pengaturan/pengaturan_pangkat_golongan');
	}

	public function input_instansi(){
		$this->load->view('admin/pengaturan/pengaturan_input_instansi');
	}

	public function input_memo(){
		$this->load->view('admin/pengaturan/pengaturan_input_memo');
	}

	public function input_pangkat(){
		$this->load->view('admin/pengaturan/pengaturan_input_pangkat');
	}


	function cek_login(){
		if (!$this->session->userdata('admin_login')){
			redirect('Auth/login-admin');
		}
	}

}