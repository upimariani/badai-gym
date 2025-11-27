<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKatalog extends CI_Controller
{

	public function index()
	{
		$this->load->view('Frontend/Layout/head');
		$this->load->view('Frontend/vKatalog');
		$this->load->view('Frontend/Layout/footer');
	}
}

/* End of file cKatalog.php */
