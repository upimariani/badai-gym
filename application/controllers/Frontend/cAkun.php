<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAkun extends CI_Controller
{

	public function index()
	{
		$data = array(
			'pelanggan' => $this->db->query("SELECT * FROM `pelanggan` WHERE id_pelanggan='" . $this->session->userdata('id_pelanggan') . "'")->row()
		);
		$this->load->view('Frontend/Layout/head');
		$this->load->view('Frontend/vAkun', $data);
		$this->load->view('Frontend/Layout/footer');
	}
	public function perbaharui_akun($id_pelanggan)
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'no_hp' => $this->input->post('no_hp'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level_member' => '1'
		);
		$this->db->where('id_pelanggan', $id_pelanggan);
		$this->db->update('pelanggan', $data);
		$this->session->set_flashdata('success', 'Data Pelanggan berhasil diperbaharui!');
		redirect('Frontend/cAkun');
	}
}

/* End of file cAkun.php */
