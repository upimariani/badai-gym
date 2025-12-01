<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cKatalog extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mProduk');
	}

	public function index()
	{
		$data = array(
			'produk' => $this->mProduk->select()
		);
		$this->load->view('Frontend/Layout/head');
		$this->load->view('Frontend/vKatalog', $data);
		$this->load->view('Frontend/Layout/footer');
	}
}

/* End of file cKatalog.php */
