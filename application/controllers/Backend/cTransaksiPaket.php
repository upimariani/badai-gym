<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cTransaksiPaket extends CI_Controller
{

	public function index()
	{
		$data = array(
			'transaksi' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE transaksi.jenis_trans='2'")->result()
		);
		$this->load->view('Backend/Layout/head');
		$this->load->view('Backend/Layout/aside');
		$this->load->view('Backend/Transaksi/vTransaksiPaket', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function detail_pesanan($id_transaksi)
	{
		$data = array(
			'detail' => $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->row(),
			'paket' => $this->db->query("SELECT * FROM `transaksi` JOIN detail_paket ON transaksi.id_transaksi=detail_paket.id_transaksi JOIN paket ON paket.id_paket=detail_paket.id_paket WHERE transaksi.id_transaksi='" . $id_transaksi . "'")->result()
		);
		$this->load->view('Backend/Layout/head');
		$this->load->view('Backend/Layout/aside');
		$this->load->view('Backend/Transaksi/vDetailTransaksiPaket', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function konfirmasi($id_transaksi)
	{
		$data = array(
			'stat_order' => '4'
		);
		$this->db->where('id_transaksi', $id_transaksi);
		$this->db->update('transaksi', $data);
		$this->session->set_flashdata('success', 'Pesanan Berhasil dikonfirmasi!');
		redirect('Backend/cTransaksiPaket/detail_pesanan/' . $id_transaksi);
	}
}

/* End of file cTransaksiPaket.php */
