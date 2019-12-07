<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		//$this->load->library(array('template', 'cart'));
		$this->load->model('App_Model'); // Model untuk User
		$this->load->model('Admin_Model'); // Model untuk Admin

	}

	/*======================================================*/
	/*========================= USER ======================*/
	/*======================================================*/
	
	public function register()
	{
		if($this->input->post('submit', TRUE) == 'Submit'){
			// LOAD LIBRARY
			$this->load->library('form_validation');

			// RULE VALIDATION
			$this->form_validation->set_rules('nama1', 'Nama Depan', "required|min_length[3]|regex_match[/^[a-zA-Z'.]+$/]");
			$this->form_validation->set_rules('nama2', 'Nama Belakang', "regex_match[/^[a-zA-Z'.]+$/]");
			$this->form_validation->set_rules('user', 'Username', 'required|min_length[5]|regex_match[/^[a-zA-Z0-9]+$/]|is_unique[t_users.username]',
				array(
					'required'      => 'Kolom %s harus diisi.',
					'is_unique'     => '%s sudah terpakai.'
				)
			);			
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[t_users.email]',
				array(
					'required'      => 'Kolom %s harus diisi.',
					'is_unique'     => '%s sudah terpakai.'
				)
			);
			$this->form_validation->set_rules('pass1', 'Password', "trim|required|min_length[5]");
			$this->form_validation->set_rules('pass2', 'Ketik Ulang Password', "trim|required|matches[pass1]");
			$this->form_validation->set_rules('jk', 'Jenis Kelamin', "required");
			$this->form_validation->set_rules('telp', 'Telp', "required|min_length[8]|numeric");
			$this->form_validation->set_rules('alamat', 'Alamat', "required|min_length[5]");

			// JIKA VALIDASI SUDAH BENAR
			if ($this->form_validation->run() == TRUE){
				$data = array(
					'username' => $this->input->post('user', TRUE),
					'fullname' => $this->input->post('nama1', TRUE).' '.$this->input->post('nama2', TRUE),
					'email' => $this->input->post('email', TRUE),
					'password' => password_hash($this->input->post('pass1', TRUE), PASSWORD_DEFAULT, ['cost' => 10]),
					'jk' => $this->input->post('jk', TRUE),
					'telp' => $this->input->post('telp', TRUE),
					'alamat' => $this->input->post('alamat', TRUE),
					'status' => 1
				);

				if ($this->App_Model->insert('t_users', $data)){
					//$this->template->olshop('reg_success');
					echo '<script type="text/javascript">alert("Berhasil Mendaftar !");window.location=("login-user");</script>'; // DIRECT TO LOGIN USER PAGE
				} else {
					echo '<script type="text/javascript">alert("Gagal insert");</script>';
				}
			}
		}

		// JILA SESSION MASIH ADA
		if ($this->session->userdata('user_login') == TRUE){
			redirect('home/halaman-user');
		}
		else
			$this->load->view('auth/register_user');
	}

	public function login_user(){
		if ($this->input->post('submit') == 'Submit'){
			$user = $this->input->post('username', TRUE);
			$pass = $this->input->post('password', TRUE);

			$cek = $this->App_Model->get_where('t_users', "username = '$user' && status = 1 || email = '$user' && status = 1");

			if ($cek->num_rows() > 0) {
				$data = $cek->row();

            // CEK PASSWORD HASH
				if (password_verify($pass, $data->password)){
					$datauser = array (
						'user_id' => $data->id_user,
						'name' => $data->fullname,
						'user_login' => TRUE,
					);

               // SIMPAN SESSION
					$this->session->set_userdata($datauser);
					redirect('/Home/halaman-user');
				}
				else {
					$this->session->set_flashdata('alert', "Password ditolak !");
				}
			} else {
				$this->session->set_flashdata('alert', "Username tidak dikenali !");
			}

		}

		if ($this->session->userdata('user_login') == TRUE)
			redirect('/Home/halaman-user');
		else
			$this->load->view('auth/login_user');
	}


	public function logout_user(){
		$this->session->sess_destroy();
		redirect('Auth/login-user');
	}

	public function coba(){
		$this->load->view('coba');
	}


	/*======================================================*/
	/*========================= ADMIN ======================*/
	/*======================================================*/


	public function login_admin(){
		if ($this->input->post('submit') == 'Submit'){
			$user = $this->input->post('username', TRUE);
			$pass = $this->input->post('password', TRUE);

			$cek = $this->Admin_Model->get_where('t_admin', array('username' => $user));

			if ($cek->num_rows() > 0) {
				$data = $cek->row();

				if (password_verify($pass, $data->password)){
					$datauser = array (
						'id_admin' => $data->id_admin,
						'user' => $data->fullname,
						'level' => $data->level,
						'admin_login' => TRUE
					);

					$this->session->set_userdata($datauser);
					redirect('Admin-Home');
				} 
				else {
					$this->session->set_flashdata('alert', "Password ditolak !");
				}
			} 
			else {
				$this->session->set_flashdata('alert', "Username tidak dikenali !");
			}
		}

		if ($this->session->userdata('admin_login') == TRUE){
			redirect('admin');
		}
		else
			$this->load->view('auth/login_admin');      
	}

	public function logout_admin(){
		$this->session->sess_destroy();

		redirect('Auth/login-admin');
	}


}
