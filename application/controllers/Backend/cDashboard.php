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
}

/* End of file cDashboard.php */
