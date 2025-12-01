<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cChatting extends CI_Controller
{

	public function index()
	{
		$data = array(
			'chat' => $this->db->query("SELECT * FROM `chat` JOIN pelanggan ON chat.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $this->session->userdata('id_pelanggan') . "'")->result()
		);
		$this->load->view('Frontend/Layout/head');
		$this->load->view('Frontend/vChatting', $data);
		$this->load->view('Frontend/Layout/footer');
	}
	public function kirim()
	{
		$data = array(
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'id_user' => '1',
			'pelanggan_send' => $this->input->post('pesan'),
			'admin_send' => '0',
			'tgl_chat' => date('Y-m-d')
		);
		$this->db->insert('chat', $data);
		$this->session->set_flashdata('success', 'Pesan berhasil dikirim!');
		redirect('Frontend/cChatting');
	}
}

/* End of file cChatting.php */
