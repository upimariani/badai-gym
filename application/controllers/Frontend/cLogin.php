<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function index()
	{
		$this->load->view('Frontend/vLogin');
	}
	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->db->query("SELECT * FROM `pelanggan` WHERE username='" . $username . "' AND password='" . $password . "'")->row();

		if ($query) {
			$pelanggan = $this->db->query("SELECT * FROM `pelanggan` WHERE id_pelanggan='" . $query->id_pelanggan . "'")->row();
			$array = array(
				'id_pelanggan' => $pelanggan->id_pelanggan,
				'level_member' => $pelanggan->level_member
			);

			$this->session->set_userdata($array);
			redirect('Frontend/cHome');
		} else {
			$this->session->set_flashdata('error', 'Username dan Password Anda Salah!');
			redirect('Frontend/cLogin');
		}
	}
	public function register()
	{
		$this->load->view('Frontend/vRegister');
	}
	public function regist()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level_member' => '1'
		);
		$this->db->insert('pelanggan', $data);
		$this->session->set_flashdata('success', 'Registrasi Pelanggan berhasil! Silahkan melakukan login!');
		redirect('Frontend/cLogin');
	}
	public function logout()
	{

		$this->session->unset_userdata('id_pelanggan');
		$this->session->unset_userdata('level_member');
		$this->session->set_flashdata('success', 'Anda berhasil logout!');
		redirect('Frontend/cLogin');
	}
}

/* End of file cLogin.php */
