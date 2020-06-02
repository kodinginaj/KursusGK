<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model("KelasModel");
		$this->load->model("SiswaModel");
		$this->load->model("UserModel");
	}
	public function index()
	{
		$data['title'] = 'GANESHA KNOWLEDGE';

		if($this->session->userdata("role")=="admin"){
		$this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/sidebar_admin', $data);
        $this->load->view('templates/admin/topbar_admin', $data);
        $this->load->view('admin/index', $data);
		$this->load->view('templates/admin/footer_admin');
		}else{
			redirect(base_url(user));
		}
	}

	public function datasiswa()
	{
		$data['title'] = 'Data Siswa';
		$data['siswa'] = $this->SiswaModel->getAllSiswa();

		if($this->session->userdata("role")=="admin"){
		$this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/sidebar_admin', $data);
        $this->load->view('templates/admin/topbar_admin', $data);
        $this->load->view('admin/datasiswa', $data);
		$this->load->view('templates/admin/footer_admin');
		}else{
			redirect(base_url(user));
		}
	}

	public function datakelas()
	{
		$data['title'] = 'Data Kelas';
		$data['kelas'] = $this->KelasModel->getAllClass();

		if($this->session->userdata("role")=="admin"){
		$this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/sidebar_admin', $data);
        $this->load->view('templates/admin/topbar_admin', $data);
        $this->load->view('admin/datakelas', $data);
		$this->load->view('templates/admin/footer_admin');
		}else{
			redirect(base_url(user));
		}
	}

	public function laporankeuangan()
	{
		$data['title'] = 'Laporan Keuangan';

		if($this->session->userdata("role")=="admin"){
		$this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/sidebar_admin', $data);
        $this->load->view('templates/admin/topbar_admin', $data);
        $this->load->view('admin/laporankeuangan', $data);
		$this->load->view('templates/admin/footer_admin');
		}else{
			redirect(base_url(user));
		}
	}

	public function detailsiswa()
	{
		$data['title'] = 'GANESHA KNOWLEDGE';

		if($this->session->userdata("role")=="admin"){
		$this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/sidebar_admin', $data);
        $this->load->view('templates/admin/topbar_admin', $data);
        $this->load->view('admin/detailsiswa', $data);
		$this->load->view('templates/admin/footer_admin');
		}else{
			redirect(base_url(user));
		}
	}
}
