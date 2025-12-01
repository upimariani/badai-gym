<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cPesanan extends CI_Controller
{

	public function index()
	{
		$data = array(
			'pesanan' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='1'")->result()
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
