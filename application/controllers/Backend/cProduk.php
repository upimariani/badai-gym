<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProduk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mProduk');
	}

	public function index()
	{
		$data = array(
			'produk' => $this->mProduk->select()
		);
		$this->load->view('Backend/Layout/head');
		$this->load->view('Backend/Layout/aside');
		$this->load->view('Backend/Produk/vProduk', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function add()
	{
		$this->form_validation->set_rules('nama', 'Nama Produk', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('stok', 'Stok', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('Backend/Layout/head');
			$this->load->view('Backend/Layout/aside');
			$this->load->view('Backend/Produk/vTambahProduk');
			$this->load->view('Backend/Layout/footer');
		} else {
			$config['upload_path']          = './asset/produk';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500000;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('gambar')) {
				$this->load->view('Backend/Layout/head');
				$this->load->view('Backend/Layout/aside');
				$this->load->view('Backend/Produk/vTambahProduk');
				$this->load->view('Backend/Layout/footer');
			} else {
				$upload_data = $this->upload->data();
				$data = array(
					'nama_produk' => $this->input->post('nama'),
					'deskripsi' => $this->input->post('deskripsi'),
					'harga' => $this->input->post('harga'),
					'stok' => $this->input->post('stok'),
					'gambar' => $upload_data['file_name'],
				);
				$this->mProduk->add($data);
				$this->session->set_flashdata('success', 'Data Produk berhasil disimpan!');
				redirect('Backend/cProduk');
			}
		}
	}
	public function update($id)
	{
		$this->form_validation->set_rules('nama', 'Nama Produk', 'required');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
		$this->form_validation->set_rules('stok', 'Stok ', 'required');

		if ($this->form_validation->run() == FALSE) {
			$data = array(
				'produk' => $this->mProduk->get_data($id)
			);
			$this->load->view('Backend/Layout/head');
			$this->load->view('Backend/Layout/aside');
			$this->load->view('Backend/Produk/vPerbaharuiProduk', $data);
			$this->load->view('Backend/Layout/footer');
		} else {
			$config['upload_path']          = './asset/produk';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 500000;

			$this->load->library('upload', $config);


			if (!$this->upload->do_upload('gambar')) {
				$data = array(
					'produk' => $this->mProduk->get_data($id)
				);
				$this->load->view('Backend/Layout/head');
				$this->load->view('Backend/Layout/aside');
				$this->load->view('Backend/Produk/vPerbaharuiProduk', $data);
				$this->load->view('Backend/Layout/footer');
			} else {

				$upload_data = $this->upload->data();
				$data = array(
					'nama_produk' => $this->input->post('nama'),
					'deskripsi' => $this->input->post('deskripsi'),
					'harga' => $this->input->post('harga'),
					'stok' => $this->input->post('stok'),
					'gambar' => $upload_data['file_name'],
				);
				$this->mProduk->update($id, $data);

				$this->session->set_flashdata('success', 'Data Produk berhasil diperbaharui!');
				redirect('Backend/cProduk');
			} //tanpa ganti gambar
			$upload_data = $this->upload->data();
			$data = array(
				'nama_produk' => $this->input->post('nama'),
				'deskripsi' => $this->input->post('deskripsi'),
				'harga' => $this->input->post('harga'),
				'stok' => $this->input->post('stok')
			);
			$this->mProduk->update($id, $data);
			$this->session->set_flashdata('success', 'Data Produk berhasil diperbaharui!');
			redirect('Backend/cProduk');
		}
	}
	public function delete($id)
	{
		$this->mProduk->delete($id);
		$this->session->set_flashdata('success', 'Data Produk berhasil dihapus!');
		redirect('Backend/cProduk');
	}
}

/* End of file cProduk.php */
