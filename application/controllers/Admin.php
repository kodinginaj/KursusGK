<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$data['title'] = 'GANESHA KNOWLEDGE';
		$this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/sidebar_admin', $data);
        $this->load->view('templates/admin/topbar_admin', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin/footer_admin');
	}

	public function datasiswa()
	{
		$data['title'] = 'Data Siswa';
		$this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/sidebar_admin', $data);
        $this->load->view('templates/admin/topbar_admin', $data);
        $this->load->view('admin/datasiswa', $data);
        $this->load->view('templates/admin/footer_admin');
	}

	public function datakelas()
	{
		$data['title'] = 'Data Kelas';
		$this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/sidebar_admin', $data);
        $this->load->view('templates/admin/topbar_admin', $data);
        $this->load->view('admin/datakelas', $data);
        $this->load->view('templates/admin/footer_admin');
	}

	public function laporankeuangan()
	{
		$data['title'] = 'Laporan Keuangan';
		$this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/sidebar_admin', $data);
        $this->load->view('templates/admin/topbar_admin', $data);
        $this->load->view('admin/laporankeuangan', $data);
        $this->load->view('templates/admin/footer_admin');
	}

	public function detailsiswa()
	{
		$data['title'] = 'GANESHA KNOWLEDGE';
		$this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/sidebar_admin', $data);
        $this->load->view('templates/admin/topbar_admin', $data);
        $this->load->view('admin/detailsiswa', $data);
        $this->load->view('templates/admin/footer_admin');
	}

}
