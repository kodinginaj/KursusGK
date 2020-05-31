<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("KelasModel");
		$this->load->model("SiswaModel");
	}

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
		$data['pembayaran'] = $this->SiswaModel->getSiswaByUserId($this->session->userdata('id'));

		$this->load->view('templates/user/header_user', $data);
		$this->load->view('user/pembayaran');
		$this->load->view('templates/user/footer_user');
	}

	public function daftarbimbel()
	{
		$data['title'] = 'GANESHA KNOWLEDGE';
		$data['kelas'] = $this->KelasModel->getAllClass();
		$this->load->view('templates/user/header_user', $data);
		$this->load->view('user/daftarbimbel');
		$this->load->view('templates/user/footer_user');
	}

	public function daftarbimbelproses()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
			$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
			$this->form_validation->set_rules('tempatlahir', 'Tempat Lahir', 'required|trim');
			$this->form_validation->set_rules('tanggallahir', 'Tanggal Lahir', 'required|trim');
			$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required|trim');
			$this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
			$this->form_validation->set_rules('namaortu', 'Nama Orang Tua', 'required|trim');
			$this->form_validation->set_rules('asalsekolah', 'Asal Sekolah', 'required|trim');
			$this->form_validation->set_rules('kelas', 'Kelas', 'required|trim');

			$this->form_validation->set_message('required', '%s harus tidak boleh kosong');
			if ($this->form_validation->run() == false) {
				$this->daftarbimbel();
			} else {
				$kelas = $this->KelasModel->getDetailClassById($this->input->post("kelas"));

				if (empty($_FILES['foto']['name'])) {
					//tanpa pemayaran
					$data = [
						"user_id" => $this->session->userdata('id'),
						"nama" => $this->input->post("nama"),
						"alamat" => $this->input->post("alamat"),
						"tempat_lahir" => $this->input->post("tempatlahir"),
						"tanggal_lahir" => $this->input->post("tanggallahir"),
						"jenis_kelamin" => $this->input->post("jk"),
						"no_telp" => $this->input->post("telepon"),
						"nama_ortu" => $this->input->post("namaortu"),
						"asal_sekolah" => $this->input->post("asalsekolah"),
						"kelas_id" => $this->input->post("kelas"),
						"pembayaran" => "",
						"total_pembayaran" => $kelas['harga'],
						"status" => "0",
					];
					$insert = $this->SiswaModel->tambahSiswa($data);
					if ($insert) {
						echo "
						<script>
							alert('Berhasil mendaftar, silahkan lunasi tagihan');
							window.location = '".base_url('user/pembayaran')."';
						</script>
						";
					}else{
						echo "
						<script>
							alert('Ada kesalahan');
							window.location = '".base_url('user/daftarbimbel')."';
						</script>
						";
					}
				} else {
					//dengan pembayaran
					$foto = $_FILES['foto']['name'];

					$belah = explode('.', $foto);
					$ekstensi = strtolower(end($belah));

					// $namaBaru = $this->session->userdata('id');
					$namaBaru = "3";
					$namaBaru .= $belah[0];
					$namaBaruDB = $namaBaru . "." . $ekstensi;

					$config['file_name'] = $namaBaruDB;
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']      = '2048';
					$config['upload_path'] = './assets/img-pembayaran/';

					$this->load->library('upload', $config);
					if (!$this->upload->do_upload('foto')) {
						echo "Error";
						$error = array('error' => $this->upload->display_errors());
						echo "
						<script>
							alert('Gagal mengupload foto, pastikan ukuran tidak lebih dari 2mb');
							window.location = '".base_url('user/pembayaran')."';
						</script>
						";
					} else {

						$data = [
							"user_id" =>$this->session->userdata('id'),
							"nama" => $this->input->post("nama"),
							"alamat" => $this->input->post("alamat"),
							"tempat_lahir" => $this->input->post("tempatlahir"),
							"tanggal_lahir" => $this->input->post("tanggallahir"),
							"jenis_kelamin" => $this->input->post("jk"),
							"no_telp" => $this->input->post("telepon"),
							"nama_ortu" => $this->input->post("namaortu"),
							"asal_sekolah" => $this->input->post("asalsekolah"),
							"kelas_id" => $this->input->post("kelas"),
							"pembayaran" => '/assets/img-pembayaran/' . $namaBaruDB,
							"total_pembayaran" => $kelas['harga'],
							"status" => "0",
						];
						$insert = $this->SiswaModel->tambahSiswa($data);
						if ($insert) {
							echo "
							<script>
								alert('Berhasil mendaftar, silahkan lunasi tagihan');
								window.location = '".base_url('user/pembayaran')."';
							</script>
							";
						}else{
							echo "
							<script>
								alert('Ada kesalahan');
								window.location = '".base_url('user/daftarbimbel')."';
							</script>
							";
						}
					}
				}
			}
		} else {
			return redirect(base_url('user/daftarbimbel'));
		}
	}
}
