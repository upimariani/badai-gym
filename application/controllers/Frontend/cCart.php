<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cCart extends CI_Controller
{

	public function index()
	{
		$this->load->view('Frontend/Layout/head');
		$this->load->view('Frontend/vCart');
		$this->load->view('Frontend/Layout/footer');
	}
}

/* End of file cCart.php */
