<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cMembership extends CI_Controller
{
	public function index()
	{
		$data = array(
			'paket' => $this->db->query("SELECT *, paket.id_paket FROM `paket` LEFT JOIN diskon ON paket.id_paket=diskon.id_paket")->result(),

			//menampilkan paket membership
			'membership' => $this->db->query("SELECT * FROM `transaksi` JOIN detail_paket ON transaksi.id_transaksi=detail_paket.id_transaksi JOIN paket ON detail_paket.id_paket=paket.id_paket JOIN pelanggan ON pelanggan.id_pelanggan=transaksi.id_pelanggan WHERE jenis_trans='2' AND pelanggan.id_pelanggan='" . $this->session->userdata('id_pelanggan') . "' ORDER BY transaksi.id_transaksi DESC LIMIT 1")->row()
		);
		$this->load->view('Frontend/Layout/head');
		$this->load->view('Frontend/vMembership', $data);
		$this->load->view('Frontend/Layout/footer');
	}
	public function kirim()
	{
		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'tgl_transaksi' => date('Y-m-d'),
			'total_bayar' => $this->input->post('harga'),
			'stat_order' => '0',
			'jenis_trans' => '2'
		);
		$this->db->insert('transaksi', $data);

		//id_transaksi
		$query = $this->db->query("SELECT MAX(id_transaksi) as id FROM `transaksi`")->row();

		$todayDate = date('Y-m-d');
		$masa_berlaku = $this->input->post('masa');
		$returnDate = date('Y-m-d', strtotime('+' . $masa_berlaku . ' day', strtotime($todayDate)));

		$dt_detail = array(
			'id_transaksi' => $query->id,
			'id_paket' => $this->input->post('paket'),
			'tgl_mulai' => date('Y-m-d'),
			'tgl_akhir' => $returnDate
		);
		$this->db->insert('detail_paket', $dt_detail);
		$this->session->set_flashdata('success', 'Paket Membership Berhasil diperbaharui!');
		redirect('Frontend/cMembership');
	}
}

/* End of file cMembership.php */
