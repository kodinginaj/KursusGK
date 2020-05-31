<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("UserModel");
    }


	public function index()
	{	
		$data['title'] = 'GANESHA KNOWLEDGE';
		$this->load->view('templates/user/header_user', $data);
		$this->load->view('user/index');
		$this->load->view('templates/user/footer_user');
	}

	public function registrasi(){

		$enkripsi = PASSWORD_HASH($this->input->post('password'), PASSWORD_BCRYPT);

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|matches[kpassword]');
		$this->form_validation->set_rules('kpassword', 'Konfirmasi Password', 'required|trim|matches[password]');

		$this->form_validation->set_message('required', '%s harus diisi');
		$this->form_validation->set_message('valid_email', '%s harus sesuai format');	
		$this->form_validation->set_message('is_unique', '%s sudah ada');
		$this->form_validation->set_message('matches', '%s tidak cocok');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', 'Harap periksa kembali form!');
			$this->index();
        }else {

			$data = [
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'password' => $enkripsi,
				'role' => 2,
				'created_at' => date("Y-m-d:h:i:s")
			];

			$hasil = $this->UserModel->registrasi($data);

			if ($hasil) {
				$this->session->set_flashdata('message', 'Registrasi berhasil!');
				redirect(base_url());
			}else{
				$this->session->set_flashdata('message', 'Registrasi gagal!');
				$this->index();
			}
		}
	}

	public function login(){
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->UserModel->getDataUser($email);

		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
	
		$this->form_validation->set_message('required', '%s harus diisi');
		$this->form_validation->set_message('valid_email', '%s harus sesuai format');	

		if ($this->form_validation->run() == false) {
			$this->index();
        }else {

			if ($user) {
				if (password_verify($password, $user['password'])) {
					$data = [
						'id' => $user['id'],
						'email' => $user['email'],
						'nama' => $user['nama'],
						'role' => 'user'
					];
					$this->session->set_userdata($data);
					// $this->session->set_flashdata('message', 'Login berhasil!');
					$this->index();
				}else{
					$this->session->set_flashdata('message', 'Password Salah!');
					$this->index();
				}
			}
			else{ 
				$this->session->set_flashdata('message', 'Email tidak terdaftar!');
				$this->index();
			}
		}

	}

	public function logout(){
		$this->session->unset_userdata('id');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('role');

		$this->session->set_flashdata('message', 'Anda berhasil logout!');
		$this->index();
	}

	public function profilsaya()
	{	
		$data['title'] = 'GANESHA KNOWLEDGE';
		$this->load->view('templates/user/header_user', $data);
		$this->load->view('user/profilsaya');
		$this->load->view('templates/user/footer_user');
	}

	public function ubahprofil()
	{	
		$data['title'] = 'GANESHA KNOWLEDGE';
		$this->load->view('templates/user/header_user', $data);
		$this->load->view('user/ubahprofil');
		$this->load->view('templates/user/footer_user');
	}

	public function pembayaran()
	{	
		$data['title'] = 'GANESHA KNOWLEDGE';
		$this->load->view('templates/user/header_user', $data);
		$this->load->view('user/pembayaran');
		$this->load->view('templates/user/footer_user');
	}

	public function daftarbimbel()
	{
		$data['title'] = 'GANESHA KNOWLEDGE';
		$this->load->view('templates/user/header_user', $data);
		$this->load->view('user/daftarbimbel');
		$this->load->view('templates/user/footer_user');
	}
}
