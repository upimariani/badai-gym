<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

	public function index()
	{
		$this->load->view('Backend/Layout/head');
		$this->load->view('Backend/Layout/aside');
		$this->load->view('Backend/vDashboard');
		$this->load->view('Backend/Layout/footer');
	}
	public function view_pesan($id_pelanggan)
	{
		$data = array(
			'id_pelanggan' => $id_pelanggan,
			'chat' => $this->db->query("SELECT * FROM `chat` JOIN pelanggan ON chat.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $id_pelanggan . "'")->result()
		);
		$this->load->view('Backend/Layout/head');
		$this->load->view('Backend/Layout/aside');
		$this->load->view('Backend/vViewPesan', $data);
		$this->load->view('Backend/Layout/footer');
	}
	public function kirim($id_pelanggan)
	{
		$data = array(
			'id_pelanggan' => $id_pelanggan,
			'id_user' => '1',
			'pelanggan_send' => '0',
			'admin_send' => $this->input->post('pesan'),
			'tgl_chat' => date('Y-m-d')
		);
		$this->db->insert('chat', $data);
		$this->session->set_flashdata('success', 'Pesan berhasil dikirim!');
		redirect('Backend/cDashboard/view_pesan/' . $id_pelanggan);
	}
}

/* End of file cDashboard.php */
