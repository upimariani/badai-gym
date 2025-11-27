<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHome extends CI_Controller
{

	public function index()
	{
		$this->load->view('Frontend/Layout/head');
		$this->load->view('Frontend/vHome');
		$this->load->view('Frontend/Layout/footer');
	}
}

/* End of file cHome.php */
