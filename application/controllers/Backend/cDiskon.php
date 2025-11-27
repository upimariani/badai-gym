<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDiskon extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPaket');
		$this->load->model('mDiskon');
	}

	public function index()
	{
		$data = array(
			'diskon' => $this->mDiskon->select()
		);
		$this->load->view('Backend/Layout/head');
		$this->load->view('Backend/Layout/aside');
		$this->load->view('Backend/Diskon/vDiskon', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function add()
	{
		$this->form_validation->set_rules('paket', 'Nama Paket', 'required');
		$this->form_validation->set_rules('nama', 'Nama Diskon', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('diskon', 'Diskon (%)', 'required');
		$this->form_validation->set_rules('level_member', 'Level Member', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'paket' => $this->mPaket->select()
			);
			$this->load->view('Backend/Layout/head');
			$this->load->view('Backend/Layout/aside');
			$this->load->view('Backend/Diskon/vTambahDiskon', $data);
			$this->load->view('Backend/Layout/footer');
		} else {
			$data = array(
				'id_paket' => $this->input->post('paket'),
				'nama_diskon' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'disc' => $this->input->post('diskon'),
				'lev_member' => $this->input->post('level_member')
			);
			$this->mDiskon->add($data);
			$this->session->set_flashdata('success', 'Data Diskon berhasil disimpan!');
			redirect('Backend/cDiskon');
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('paket', 'Nama Paket', 'required');
		$this->form_validation->set_rules('nama', 'Nama Diskon', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('diskon', 'Diskon (%)', 'required');
		$this->form_validation->set_rules('level_member', 'Level Member', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'paket' => $this->mPaket->select(),
				'diskon' => $this->mDiskon->get_data($id)
			);
			$this->load->view('Backend/Layout/head');
			$this->load->view('Backend/Layout/aside');
			$this->load->view('Backend/Diskon/vPerbaharuiDiskon', $data);
			$this->load->view('Backend/Layout/footer');
		} else {
			$data = array(
				'id_paket' => $this->input->post('paket'),
				'nama_diskon' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'disc' => $this->input->post('diskon'),
				'lev_member' => $this->input->post('level_member')
			);
			$this->mDiskon->update($id, $data);
			$this->session->set_flashdata('success', 'Data Diskon berhasil diperbaharui!');
			redirect('Backend/cDiskon');
		}
	}
	public function delete($id)
	{
		$this->mDiskon->delete($id);
		$this->session->set_flashdata('success', 'Data Diskon berhasil dihapus!');
		redirect('Backend/cDiskon');
	}
}

/* End of file cDiskon.php */
