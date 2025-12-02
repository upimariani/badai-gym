<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporan extends CI_Controller
{

	public function index()
	{
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();


		$pdf->SetFont('Times', 'B', 14);
		// $pdf->Image('asset/logo.png', 10, 3, 28);
		$pdf->Cell(200, 5, 'BADAI GYM', 0, 1, 'C');
		$pdf->SetFont('Times', '', 10);
		$pdf->Cell(200, 20, 'Kuningan, Kabupaten Kuningan Jawa Barat', 0, 0, 'C');

		$pdf->SetLineWidth(1);
		$pdf->Line(10, 43, 200, 43);
		$pdf->SetLineWidth(0);
		$pdf->Line(10, 42, 200, 42);
		$pdf->Cell(10, 30, '', 0, 1);



		$pdf->SetFont('Times', 'B', 14);
		$pdf->Cell(190, 10, 'LAPORAN TRANSAKSI PRODUK PELANGGAN', 0, 1, 'C');
		$pdf->SetFont('Times', '', 12);
		$pdf->SetFont('Times', '', 10);

		$pdf->Cell(10, 10, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(20, 7, 'No.', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Tanggal Transaksi', 1, 0, 'C');
		$pdf->Cell(70, 7, 'Atas Nama', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Total Pembayaran', 1, 1, 'C');

		$pdf->SetFont('Times', '', 9);

		$data = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE stat_order='4' AND jenis_trans='1'")->result();

		$no = 1;
		foreach ($data as $key => $value) {
			$pdf->Cell(20, 7, $no++, 1, 0, 'R');
			$pdf->Cell(40, 7, $value->tgl_transaksi, 1, 0);
			$pdf->Cell(70, 7, $value->nama, 1, 0, 'C');
			$pdf->Cell(50, 7, 'Rp. ' . number_format($value->total_bayar), 1, 1, 'C');
		}

		$pdf->SetFont('Times', '', 9);
		$pdf->Cell(40, 7, '', 0, 1, 'C');
		$pdf->Cell(40, 7, '', 0, 1, 'C');

		$pdf->Cell(95, 7, 'Kuningan, ' . date('j F Y'), 0, 1, 'C');

		$pdf->Cell(95, 7, 'Pemilik', 0, 1, 'C');
		$pdf->Cell(95, 10, '', 0, 1, 'C');

		$pdf->SetFont('Times', 'B', 9);

		$pdf->Cell(95, 7, '(....................)', 0, 0, 'C');

		$pdf->Output();
	}
	public function lap_paket()
	{
		require('asset/fpdf/fpdf.php');

		// intance object dan memberikan pengaturan halaman PDF
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->AddPage();


		$pdf->SetFont('Times', 'B', 14);
		// $pdf->Image('asset/logo.png', 10, 3, 28);
		$pdf->Cell(200, 5, 'BADAI GYM', 0, 1, 'C');
		$pdf->SetFont('Times', '', 10);
		$pdf->Cell(200, 20, 'Kuningan, Kabupaten Kuningan Jawa Barat', 0, 0, 'C');

		$pdf->SetLineWidth(1);
		$pdf->Line(10, 43, 200, 43);
		$pdf->SetLineWidth(0);
		$pdf->Line(10, 42, 200, 42);
		$pdf->Cell(10, 30, '', 0, 1);



		$pdf->SetFont('Times', 'B', 14);
		$pdf->Cell(190, 10, 'LAPORAN TRANSAKSI PAKET MEMBERSHIP PELANGGAN', 0, 1, 'C');
		$pdf->SetFont('Times', '', 12);
		$pdf->SetFont('Times', '', 10);

		$pdf->Cell(10, 10, '', 0, 1);
		$pdf->SetFont('Times', 'B', 9);
		$pdf->Cell(20, 7, 'No.', 1, 0, 'C');
		$pdf->Cell(40, 7, 'Tanggal Transaksi', 1, 0, 'C');
		$pdf->Cell(70, 7, 'Atas Nama', 1, 0, 'C');
		$pdf->Cell(50, 7, 'Total Pembayaran', 1, 1, 'C');

		$pdf->SetFont('Times', '', 9);

		$data = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE stat_order='4' AND jenis_trans='2'")->result();

		$no = 1;
		foreach ($data as $key => $value) {
			$pdf->Cell(20, 7, $no++, 1, 0, 'R');
			$pdf->Cell(40, 7, $value->tgl_transaksi, 1, 0);
			$pdf->Cell(70, 7, $value->nama, 1, 0, 'C');
			$pdf->Cell(50, 7, 'Rp. ' . number_format($value->total_bayar), 1, 1, 'C');
		}

		$pdf->SetFont('Times', '', 9);
		$pdf->Cell(40, 7, '', 0, 1, 'C');
		$pdf->Cell(40, 7, '', 0, 1, 'C');

		$pdf->Cell(95, 7, 'Kuningan, ' . date('j F Y'), 0, 1, 'C');

		$pdf->Cell(95, 7, 'Pemilik', 0, 1, 'C');
		$pdf->Cell(95, 10, '', 0, 1, 'C');

		$pdf->SetFont('Times', 'B', 9);

		$pdf->Cell(95, 7, '(....................)', 0, 0, 'C');

		$pdf->Output();
	}
}

/* End of file cLaporan.php */
