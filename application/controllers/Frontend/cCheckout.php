<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCheckout extends CI_Controller
{

	public function index()
	{
		$this->load->view('Frontend/Layout/head');
		$this->load->view('Frontend/vCheckout');
		$this->load->view('Frontend/Layout/footer');
	}
	public function pesan()
	{
		$data = array(
			'id_pelanggan' => '1',
			'tgl_transaksi' => date('Y-m-d'),
			'total_bayar' => $this->input->post('total_pembayaran'),
			'ongkir' => $this->input->post('ongkir'),
			'alamat_pengiriman' => $this->input->post('alamat') . ' Kec.' . $this->input->post('kecamatan') . ' Kota/Kab.' . $this->input->post('kota') . ' Prov.' . $this->input->post('provinsi') . ' Expedisi.' . $this->input->post('expedisi') . ' ' . $this->input->post('paket'),
			'stat_order' => '0',
			'pembayaran' => '0',
			'jenis_trans' => '1'
		);
		$this->db->insert('transaksi', $data);

		//id_transaksi
		$query = $this->db->query("SELECT MAX(id_transaksi) as id FROM `transaksi`")->row();

		//input data detail
		foreach ($this->cart->contents() as $key => $value) {
			$dt = array(
				'id_transaksi' => $query->id,
				'id_produk' => $value['id'],
				'qty' => $value['qty']
			);
			$this->db->insert('detail_transaksi', $dt);
		}
		$this->cart->destroy();
		$this->session->set_flashdata('success', 'Pesanan berhasil dipesan!');
		redirect('Frontend/cKatalog');
	}
}

/* End of file cCheckout.php */
