<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLogin extends CI_Controller
{

	public function index()
	{
		$this->load->view('Backend/vLogin');
	}
	public function proses()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->db->query("SELECT * FROM `user` WHERE username='" . $username . "' AND password='" . $password . "'")->row();

		if ($query) {

			$array = array(
				'id_user' => $query->level_user
			);
			$this->session->set_userdata($array);
			redirect('Backend/cDashboard');
		} else {
			$this->session->set_flashdata('error', 'Username dan Password Anda Salah!');
			redirect('Backend/cLogin');
		}
	}
	public function logout()
	{

		$this->session->unset_userdata('id_user');
		$this->session->set_flashdata('success', 'Anda berhasil logout!');
		redirect('Backend/cLogin');
	}
}

/* End of file cLogin.php */
