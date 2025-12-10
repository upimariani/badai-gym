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
									<h4>Transaksi Paket Membership</h4>
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
									<li class="breadcrumb-item"><a href="#!">Informasi Transaksi Paket</a>
									</li>
								</ul>
							</div>
						</div>

					</div>

				</div>
				<?php
				if ($this->session->userdata('id_user') == '2') {
				?>
					<div class="card">
						<div class="card-body">
							<h6>Laporan Transaksi Paket Membership</h6>
							<hr>
							<form action="<?= base_url('Backend/cLaporan/lap_paket') ?>" method="POST">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Bulan:</label>
											<select class="form-control" name="bulan">
												<option value="">Pilih Bulan</option>
												<?php
												for ($i = 1; $i <= 12; $i++) {
												?>
													<option value="<?= $i ?>">Bulan Ke- <?= $i ?></option>
												<?php
												}
												?>
											</select>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Tahun:</label>
											<select class="form-control" name="tahun">
												<option value="">Pilih Tahun</option>
												<option value="2025">2025</option>
											</select>
										</div>
										<div class="form-group"><button type="submit" class="btn btn-success">Cetak Laporan</button></div>
									</div>
								</div>
							</form>
						</div>
					</div>

				<?php
				}
				?>
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
							<h5>Informasi Transaksi Paket Membership</h5>
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
								<table class="tbl table">
									<thead>
										<tr>
											<th>#</th>
											<th>Atas Nama</th>
											<th>Tanggal Transaksi</th>
											<th>Total Bayar</th>
											<th>Status Order</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($transaksi as $key => $value) {

										?>
											<tr>
												<td><?= $no++ ?>.</td>
												<td><?= $value->nama ?></td>
												<td><?= $value->tgl_transaksi ?></td>
												<td>Rp. <?= number_format($value->total_bayar)  ?></td>
												<td><?php if ($value->stat_order == '0') {
													?>
														<span class="badge bg-danger">Belum Bayar</span>
													<?php
													} else if ($value->stat_order == '1') {
													?>
														<span class="badge bg-warning">Menunggu Konfirmasi</span>
													<?php
													} else if ($value->stat_order == '4') {
													?>
														<span class="badge bg-success">Pesanan Selesai</span>
													<?php
													} ?>
												</td>
												<td>
													<a href="<?= base_url('Backend/cTransaksiPaket/detail_pesanan/' . $value->id_transaksi) ?>" class="btn btn-success btn-sm">Detail Pesanan</a>
												</td>
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