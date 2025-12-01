<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAkun extends CI_Controller
{

	public function index()
	{
		$this->load->view('Frontend/Layout/head');
		$this->load->view('Frontend/vAkun');
		$this->load->view('Frontend/Layout/footer');
	}
}

/* End of file cAkun.php */
