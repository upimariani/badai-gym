<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<!-- Main-body start -->
		<div class="main-body">
			<div class="page-wrapper">
				<!-- Page-header start -->
				<div class="page-header card">
					<div class="row align-items-end">
						<div class="col-lg-8">
							<div class="page-header-title">
								<i class="icofont icofont-table bg-c-blue"></i>
								<div class="d-inline">
									<h4>Pelanggan</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="page-header-breadcrumb">
								<ul class="breadcrumb-title">
									<li class="breadcrumb-item">
										<a href="index.html">
											<i class="icofont icofont-home"></i>
										</a>
									</li>
									<li class="breadcrumb-item"><a href="#!">Dashboard</a>
									</li>
									<li class="breadcrumb-item"><a href="#!">Informasi Pelanggan</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Page-header end -->
				<?php
				if ($this->session->userdata('success')) {
				?>
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
					</div>
				<?php
				}
				?>
				<!-- Page-body start -->
				<div class="page-body">
					<!-- Basic table card start -->
					<div class="card">
						<div class="card-header">
							<h4>Informasi History Transaksi Pelanggan</h4>
							<hr>
							<table class="table">
								<tr>
									<th>Nama</th>
									<td><?= $pelanggan->nama ?></td>
								</tr>
								<tr>
									<th>Alamat</th>
									<td><?= $pelanggan->alamat ?></td>
								</tr>
								<tr>
									<th>Nomor Telepon</th>
									<td><?= $pelanggan->no_hp ?></td>
								</tr>
							</table>
							<hr>
							<div class="card-header-right">
								<ul class="list-unstyled card-option">
									<li><i class="icofont icofont-simple-left "></i></li>
									<li><i class="icofont icofont-maximize full-card"></i></li>
									<li><i class="icofont icofont-minus minimize-card"></i></li>
									<li><i class="icofont icofont-refresh reload-card"></i></li>
									<li><i class="icofont icofont-error close-card"></i></li>
								</ul>
							</div>
						</div>
						<div class="card-block table-border-style m-3">
							<div class="table-responsive">
								<table class="table" id="myTable">
									<thead>
										<tr>
											<th>#</th>
											<th>Tanggal Transaksi</th>
											<th>Produk</th>
											<th>Total Pembayaran</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($transaksi as $key => $value) {
											$dt_produk = $this->db->query("SELECT * FROM `transaksi` JOIN detail_transaksi ON transaksi.id_transaksi=detail_transaksi.id_detail_transaksi JOIN produk ON detail_transaksi.id_produk=produk.id_produk WHERE transaksi.id_transaksi='" . $value->id_transaksi . "'")->result();
										?>
											<tr>
												<td><?= $no++ ?>.</td>
												<td><?= $value->tgl_transaksi ?></td>
												<td><?php
													foreach ($dt_produk as $key => $items) {
														echo $items->nama_produk;
													}
													?></td>
												<td>Rp. <?= number_format($value->total_bayar)  ?></td>

											</tr>
										<?php
										}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- Basic table card end -->
					<!-- Inverse table card start -->

					<!-- Background Utilities table end -->
				</div>
				<!-- Page-body end -->
			</div>
		</div>
		<!-- Main-body end -->

		<div id="styleSelector">

		</div>
	</div>
</div>
</div>
</div>
</div>
</div>