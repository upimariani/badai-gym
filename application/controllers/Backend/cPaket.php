<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPaket extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mPaket');
	}

	public function index()
	{
		$data = array(
			'paket' => $this->mPaket->select()
		);
		$this->load->view('Backend/Layout/head');
		$this->load->view('Backend/Layout/aside');
		$this->load->view('Backend/Paket/vPaket', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function add()
	{
		$this->form_validation->set_rules('nama', 'Nama Paket', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('masa_berlaku', 'Masa Berlaku', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Backend/Layout/head');
			$this->load->view('Backend/Layout/aside');
			$this->load->view('Backend/Paket/vTambahPaket');
			$this->load->view('Backend/Layout/footer');
		} else {
			$config['upload_path']          = './asset/gambar';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$this->load->view('Backend/Layout/head');
				$this->load->view('Backend/Layout/aside');
				$this->load->view('Backend/Paket/vTambahPaket');
				$this->load->view('Backend/Layout/footer');
			} else {
				$upload_data = $this->upload->data();
				$data = array(
					'nama_paket' => $this->input->post('nama'),
					'deskripsi' => $this->input->post('deskripsi'),
					'harga' => $this->input->post('harga'),
					'masa_berlaku' => $this->input->post('masa_berlaku'),
					'gambar' => $upload_data['file_name'],
				);
				$this->mPaket->add($data);
				$this->session->set_flashdata('success', 'Data Paket Gym berhasil disimpan!');
				redirect('Backend/cPaket');
			}
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Paket', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('masa_berlaku', 'Masa Berlaku', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'paket' => $this->mPaket->get_data($id)
			);
			$this->load->view('Backend/Layout/head');
			$this->load->view('Backend/Layout/aside');
			$this->load->view('Backend/Paket/vPerbaharuiPaket', $data);
			$this->load->view('Backend/Layout/footer');
		} else {
			$config['upload_path']          = './asset/gambar';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500000;

			$this->load->library('upload', $config);


			if (!$this->upload->do_upload('gambar')) {
				$data = array(
					'paket' => $this->mPaket->get_data($id)
				);
				$this->load->view('Backend/Layout/head');
				$this->load->view('Backend/Layout/aside');
				$this->load->view('Backend/Paket/vPerbaharuiPaket', $data);
				$this->load->view('Backend/Layout/footer');
			} else {

				$upload_data = $this->upload->data();
				$data = array(
					'nama_paket' => $this->input->post('nama'),
					'deskripsi' => $this->input->post('deskripsi'),
					'harga' => $this->input->post('harga'),
					'masa_berlaku' => $this->input->post('masa_berlaku'),
					'gambar' => $upload_data['file_name'],
				);
				$this->mPaket->update($id, $data);

				$this->session->set_flashdata('success', 'Data Paket berhasil diperbaharui!');
				redirect('Backend/cPaket');
			} //tanpa ganti gambar
			$upload_data = $this->upload->data();
			$data = array(
				'nama_paket' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'harga' => $this->input->post('harga'),
				'masa_berlaku' => $this->input->post('masa_berlaku')
			);
			$this->mPaket->update($id, $data);
			$this->session->set_flashdata('success', 'Data Paket berhasil diperbaharui!');
			redirect('Backend/cPaket');
		}
	}
	public function delete($id)
	{
		$this->mPaket->delete($id);
		$this->session->set_flashdata('success', 'Data Paket berhasil dihapus!');
		redirect('Backend/cPaket');
	}
}

/* End of file cPaket.php */
