<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cAnalisis extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mAnalisis');
	}

	public function index()
	{

		$data = $this->mAnalisis->getData();
		$k = 3; // jumlah cluster
		$centroids = $this->mAnalisis->randomCentroid($k);

		$maxIterasi = 100;
		$hasilCluster = [];
		$iterasi = 0;

		do {
			$oldCentroid = $centroids;
			$clusters = [];

			// 1️⃣ Hitung jarak Euclidean setiap data ke setiap centroid
			foreach ($data as $row) {

				$distances = [];
				foreach ($centroids as $i => $centroid) {
					$distances[$i] = sqrt(
						pow($row->recency - $centroid->recency, 2) +
							pow($row->frequency - $centroid->frequency, 2) +
							pow($row->monetary - $centroid->monetary, 2)
					);
				}

				$clusterIndex = array_keys($distances, min($distances))[0];
				$hasilCluster[$row->id_pelanggan] = $clusterIndex;
				$clusters[$clusterIndex][] = $row;
			}

			// 2️⃣ Update centroid baru
			foreach ($clusters as $i => $cluster) {
				$jumlah = count($cluster);
				if ($jumlah > 0) {
					$sumRecency = 0;
					$sumFrequency = 0;
					$sumMonetary = 0;

					foreach ($cluster as $item) {
						$sumRecency += $item->recency;
						$sumFrequency += $item->frequency;
						$sumMonetary += $item->monetary;
					}

					$centroids[$i]->recency = $sumRecency / $jumlah;
					$centroids[$i]->frequency = $sumFrequency / $jumlah;
					$centroids[$i]->monetary = $sumMonetary / $jumlah;
				}
			}

			$iterasi++;
		} while ($centroids != $oldCentroid && $iterasi < $maxIterasi);

		$dataView['clusters'] = $clusters;
		$dataView['centroids'] = $centroids;
		$dataView['iterasi'] = $iterasi;

		foreach ($clusters as $i => $cluster) {
			foreach ($cluster as $key => $row) {
				$data = array(
					'hasil' => $i + 1
				);
				$this->db->where('id_pelanggan', $row->id_pelanggan);
				$this->db->update('analisis', $data);

				$dt_pelanggan = array(
					'level_member' => $i + 1
				);
				$this->db->where('id_pelanggan', $row->id_pelanggan);
				$this->db->update('pelanggan', $dt_pelanggan);
			}
		}
		$this->session->set_flashdata('success', 'Pesanan berhasil dipesan!');
		redirect('Frontend/cPesanan');
	}
	public function variabel()
	{
		$this->db->truncate('analisis');
		$dt_pelanggan = $this->db->query("SELECT * FROM `pelanggan`")->result();
		foreach ($dt_pelanggan as $key => $value) {
			//menentukan variabel
			$dt = $this->db->query("SELECT COUNT(id_transaksi) as frequency, SUM(total_bayar) as monetary FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $value->id_pelanggan . "'")->row();


			$date = date('Y-m-d');
			$dt_recency = $this->db->query("SELECT DATEDIFF('" . $date . "', tgl_transaksi) AS selisih_hari FROM transaksi JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan WHERE pelanggan.id_pelanggan='" . $value->id_pelanggan . "' GROUP BY tgl_transaksi DESC LIMIT 1")->row();

			$data = array(
				'id_pelanggan' => $value->id_pelanggan,
				'recency' => $dt_recency->selisih_hari,
				'frequency' => $dt->frequency,
				'monetary' => $dt->monetary
			);
			$this->db->insert('analisis', $data);
		}
		redirect('cAnalisis');
	}


	public function triger_tot_transaksi()
	{
		$tot = 0;
		$dt_transaksi = $this->db->query("SELECT * FROM transaksi JOIN `detail_transaksi` ON transaksi.id_transaksi=detail_transaksi.id_transaksi JOIN produk ON detail_transaksi.id_produk=produk.id_produk")->result();
		foreach ($dt_transaksi as $key => $value) {


			$tot = $value->harga * $value->qty;

			$data = array(
				'total_bayar' => $tot + 7000
			);
			$this->db->where('id_transaksi', $value->id_transaksi);
			$this->db->update('transaksi', $data);
		}
	}
	public function triger_alamat()
	{
		$dt_pelanggan = $this->db->query("SELECT * FROM `transaksi` JOIN pelanggan ON transaksi.id_pelanggan=pelanggan.id_pelanggan")->result();
		foreach ($dt_pelanggan as $key => $value) {
			$data = array(
				'alamat_pengiriman' => $value->alamat
			);
			$this->db->where('id_pelanggan', $value->id_pelanggan);
			$this->db->update('transaksi', $data);
		}
	}
}

/* End of file cAnalisis.php */
