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
}

/* End of file cCheckout.php */
