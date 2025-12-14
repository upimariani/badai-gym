<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPesanan extends CI_Controller
{

	public function index()
	{
		$data = array(
			'pesanan' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $this->session->userdata('id_pelanggan') . "' AND jenis_trans='1' GROUP BY tgl_transaksi DESC")->result()
		);
		$this->load->view('Frontend/Layout/head');
		$this->load->view('Frontend/vPesanan', $data);
		$this->load->view('Frontend/Layout/footer');
	}
	public function detail_pesanan($id_transaksi)
	{
		$data = array(
			'detail' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->row(),
			'produk' => $this->db->query("SELECT * FROM `transaksi` JOIN detail_transaksi ON transaksi.id_transaksi=detail_transaksi.id_transaksi JOIN produk ON produk.id_produk=detail_transaksi.id_produk WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->result()
		);
		$this->load->view('Frontend/Layout/head');
		$this->load->view('Frontend/vDetailPesanan', $data);
		$this->load->view('Frontend/Layout/footer');
	}
	public function bayar($id_transaksi)
	{
		$config['upload_path']          = './asset/bayar/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = '500000';

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('gambar')) {
			$data = array(
				'detail' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->row(),
				'produk' => $this->db->query("SELECT * FROM `transaksi` JOIN detail_transaksi ON transaksi.id_transaksi=detail_transaksi.id_transaksi JOIN produk ON produk.id_produk=detail_transaksi.id_produk WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->result()
			);
			$this->load->view('Frontend/Layout/head');
			$this->load->view('Frontend/vDetailPesanan', $data);
			$this->load->view('Frontend/Layout/footer');
		} else {
			$upload_data =  $this->upload->data();
			$data = array(
				'pembayaran' => $upload_data['file_name']
			);
			$this->db->where('id_transaksi', $id_transaksi);
			$this->db->update('transaksi', $data);
			redirect('Frontend/cPesanan/detail_pesanan/' . $id_transaksi, 'refresh');
		}
	}
	public function batalkan_pesanan($id_transaksi)
	{
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->delete('transaksi');

		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->delete('detail_transaksi');
		$this->session->set_flashdata('success', 'Pesanan berhasil dibatalkan!');
		redirect('Frontend/cPesanan');
	}
	public function pesanan_diterima($id_transaksi)
	{
		$data = array(
			'stat_order' => '4'
		);
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->update('transaksi', $data);
		$this->session->set_flashdata('success', 'Pesanan Berhasil diterima!');
		redirect('Frontend/cPesanan');
	}
}

/* End of file cPesanan.php */
