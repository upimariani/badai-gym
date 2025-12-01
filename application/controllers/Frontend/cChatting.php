<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cChatting extends CI_Controller
{

	public function index()
	{
		$this->load->view('Frontend/Layout/head');
		$this->load->view('Frontend/vChatting');
		$this->load->view('Frontend/Layout/footer');
	}
}

/* End of file cChatting.php */
