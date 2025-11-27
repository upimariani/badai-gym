<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cUser extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mUser');
	}

	public function index()
	{
		$data = array(
			'user' => $this->mUser->select()
		);
		$this->load->view('Backend/Layout/head');
		$this->load->view('Backend/Layout/aside');
		$this->load->view('Backend/User/vUser', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function add()
	{
		$this->form_validation->set_rules('nama', 'Nama User', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor Telepon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('level_user', 'Level User', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Backend/Layout/head');
			$this->load->view('Backend/Layout/aside');
			$this->load->view('Backend/User/vTambahUser');
			$this->load->view('Backend/Layout/footer');
		} else {
			$data = array(
				'nama_user' => $this->input->post('nama'),
				'no_hp' => $this->input->post('no_hp'),
				'alamat' => $this->input->post('alamat'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_user' => $this->input->post('level_user')
			);
			$this->mUser->add($data);
			$this->session->set_flashdata('success', 'Data User berhasil ditambahkan!');
			redirect('Backend/cUser');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama User', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor Telepon', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('level_user', 'Level User', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'user' => $this->mUser->get_data($id)
			);
			$this->load->view('Backend/Layout/head');
			$this->load->view('Backend/Layout/aside');
			$this->load->view('Backend/User/vPerbaharuiUser', $data);
			$this->load->view('Backend/Layout/footer');
		} else {
			$data = array(
				'nama_user' => $this->input->post('nama'),
				'no_hp' => $this->input->post('no_hp'),
				'alamat' => $this->input->post('alamat'),
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'level_user' => $this->input->post('level_user')
			);
			$this->mUser->update($id, $data);
			$this->session->set_flashdata('success', 'Data User berhasil diperbaharui!');
			redirect('Backend/cUser');
		}
	}
	public function delete($id)
	{
		$this->mUser->delete($id);
		$this->session->set_flashdata('success', 'Data User berhasil dihapus!');
		redirect('Backend/cUser');
	}
}

/* End of file cUser.php */
