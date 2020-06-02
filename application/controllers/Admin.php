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
		$data['kelas'] = $this->KelasModel->getAllClass();
		$this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/sidebar_admin', $data);
        $this->load->view('templates/admin/topbar_admin', $data);
        $this->load->view('admin/datakelas', $data);
        $this->load->view('templates/admin/footer_admin');
	}

	public function tambahkelas()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
		$this->form_validation->set_rules('harga', 'Harga', 'required|trim');
		$this->form_validation->set_message('required', '%s harus diisi');

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', 'Harap periksa kembali form!');
			$this->datakelas();
        }else {
			$data = [
				'nama' => $this->input->post('nama'),
				'harga' => $this->input->post('harga'),
				'jumlah_siswa' => '0'
			];

			$hasil = $this->KelasModel->tambahKelas($data);

			if ($hasil) {
				echo "
					<script>
						alert('Berhasil menambah Kelas');
						window.location = '".base_url('admin/datakelas')."';
					</script>
					";
			}else{
				echo "
					<script>
						alert('Ada kesalahan');
						window.location = '".base_url('admin/datakelas')."';
					</script>
					";
			}

		}
	}

	public function laporankeuangan()
	{
		$data['title'] = 'Laporan Keuangan';
		$data['siswa'] = $this->SiswaModel->getAllSiswa();
		$this->load->view('templates/admin/header_admin', $data);
        $this->load->view('templates/admin/sidebar_admin', $data);
        $this->load->view('templates/admin/topbar_admin', $data);
        $this->load->view('admin/laporankeuangan', $data);
        $this->load->view('templates/admin/footer_admin');
	}

	public function terimabayar()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$id = $this->input->post('id');
			$kelas_id = $this->input->post('kelas');
			$data = [
				'status' => '1'
			];
			
			
			$kelas = $this->KelasModel->getDetailClassById($kelas_id);
			$tambah = $kelas['jumlah_siswa']+1;
			$datakelas = [
				'jumlah_siswa' => $tambah
			];
			$ubahkelas = $this->KelasModel->ubahKelas($datakelas,$kelas['id']);
			if ($ubahkelas) {
				$hasil = $this->SiswaModel->ubahSiswa($data,$id);
				if ($hasil) {
					echo "
						<script>
							alert('Berhasil menerima pembayaran');
							window.location = '".base_url('admin/laporankeuangan')."';
						</script>
						";
				}else{
					echo "
						<script>
							alert('Ada kesalahan');
							window.location = '".base_url('admin/laporankeuangan')."';
						</script>
						";
				}
			}
			else{
				echo "
					<script>
						alert('Ada kesalahan');
						window.location = '".base_url('admin/laporankeuangan')."';
					</script>
					";
			}
			
		}else{
			$this->laporankeuangan();
		}
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
