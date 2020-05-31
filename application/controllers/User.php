<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {


	public function index()
	{	
		$data['title'] = 'GANESHA KNOWLEDGE';
		$this->load->view('templates/user/header_user', $data);
		$this->load->view('user/index');
		$this->load->view('templates/user/footer_user');
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
