<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksiProduk extends CI_Controller
{
	public function index()
	{
		$data = array(
			'transaksi' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE jenis_trans='1'")->result()
		);
		$this->load->view('Backend/Layout/head');
		$this->load->view('Backend/Layout/aside');
		$this->load->view('Backend/Transaksi/vTransaksiProduk', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function detail_pesanan($id_transaksi)
	{
		$data = array(
			'detail' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->row(),
			'produk' => $this->db->query("SELECT * FROM `transaksi` JOIN detail_transaksi ON transaksi.id_transaksi=detail_transaksi.id_transaksi JOIN produk ON produk.id_produk=detail_transaksi.id_produk WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->result()
		);
		$this->load->view('Backend/Layout/head');
		$this->load->view('Backend/Layout/aside');
		$this->load->view('Backend/Transaksi/vDetailTransaksiProduk', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function konfirmasi($id_transaksi)
	{
		$data = array(
			'stat_order' => '2'
		);
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->update('transaksi', $data);
		$this->session->set_flashdata('success', 'Pesanan Berhasil dikonfirmasi!');
		redirect('Backend/cTransaksiProduk/detail_pesanan/' . $id_transaksi);
	}
	public function dikirim($id_transaksi)
	{
		$data = array(
			'stat_order' => '3'
		);
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->update('transaksi', $data);
		$this->session->set_flashdata('success', 'Pesanan Berhasil dikirim!');
		redirect('Backend/cTransaksiProduk/detail_pesanan/' . $id_transaksi);
	}
}

/* End of file cTransaksiProduk.php */
