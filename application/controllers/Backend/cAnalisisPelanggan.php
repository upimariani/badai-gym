<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisisPelanggan extends CI_Controller
{

	public function index()
	{
		$data = array(
			'pelanggan' => $this->db->query("SELECT * FROM `analisis` JOIN pelanggan ON analisis.id_pelanggan=pelanggan.id_pelanggan")->result()
		);
		$this->load->view('Backend/Layout/head');
		$this->load->view('Backend/Layout/aside');
		$this->load->view('Backend/vAnalisisPelanggan', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function history_pelanggan($id_pelanggan)
	{
		$data = array(
			'pelanggan' => $this->db->query("SELECT * FROM `pelanggan` WHERE id_pelanggan='" . $id_pelanggan . "'")->row(),
			'transaksi' => $this->db->query("SELECT * FROM `transaksi` WHERE id_pelanggan='" . $id_pelanggan . "'")->result()
		);
		$this->load->view('Backend/Layout/head');
		$this->load->view('Backend/Layout/aside');
		$this->load->view('Backend/vHistoryPelanggan', $data);
		$this->load->view('Backend/Layout/footer');
	}
}

/* End of file cAnalisisPelanggan.php */
