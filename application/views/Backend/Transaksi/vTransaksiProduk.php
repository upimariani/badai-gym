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
								<i class="icofont icofont-layout bg-c-blue"></i>
								<div class="d-inline">
									<h4>Transaksi Produk</h4>
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
									<li class="breadcrumb-item"><a href="#!">Transaksi Produk</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Page-header end -->

				<!-- Page body start -->
				<div class="page-body">

					<div class="row">
						<div class="col-sm-12">
							<!-- Material tab card start -->
							<div class="card">
								<div class="card-header">
									<h5>Informasi Transaksi Produk</h5>
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
								<div class="card-block">
									<!-- Row start -->
									<div class="row m-b-30">
										<div class="col-lg-12 col-xl-12">
											<!-- Nav tabs -->
											<ul class="nav nav-tabs md-tabs" role="tablist">

												<li class="nav-item">
													<a class="btn btn-warning nav-link active" data-toggle="tab" href="#profile3" role="tab">Menunggu Konfirmasi</a>
													<div class="slide"></div>
												</li>
												<li class="nav-item">
													<a class="btn btn-info nav-link" data-toggle="tab" href="#messages3" role="tab">Pesanan Diproses</a>
													<div class="slide"></div>
												</li>
												<li class="nav-item">
													<a class="btn btn-primary nav-link" data-toggle="tab" href="#settings3" role="tab">Pesanan Dikirim</a>
													<div class="slide"></div>
												</li>
												<li class="nav-item">
													<a class="btn btn-success nav-link" data-toggle="tab" href="#selesai3" role="tab">Pesanan Selesai</a>
													<div class="slide"></div>
												</li>
											</ul>
											<!-- Tab panes -->
											<div class="tab-content card-block">

												<div class="tab-pane active" id="profile3" role="tabpanel">
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
																if ($value->stat_order == '1') {

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
																			} else if ($value->stat_order == '2') {
																			?>
																				<span class="badge bg-info">Pesanan Diproses</span>
																			<?php
																			} else if ($value->stat_order == '3') {
																			?>
																				<span class="badge bg-primary">Pesanan Dikirim</span>
																			<?php
																			} else if ($value->stat_order == '4') {
																			?>
																				<span class="badge bg-success">Pesanan Diterima</span>
																			<?php
																			} ?>
																		</td>
																		<td>
																			<a href="<?= base_url('Backend/cTransaksiProduk/detail_pesanan/' . $value->id_transaksi) ?>" class="btn btn-success btn-sm">Detail Pesanan</a>
																		</td>
																	</tr>
															<?php
																}
															}
															?>

														</tbody>
													</table>
												</div>
												<div class="tab-pane" id="messages3" role="tabpanel">
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
																if ($value->stat_order == '2') {

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
																			} else if ($value->stat_order == '2') {
																			?>
																				<span class="badge bg-info">Pesanan Diproses</span>
																			<?php
																			} else if ($value->stat_order == '3') {
																			?>
																				<span class="badge bg-primary">Pesanan Dikirim</span>
																			<?php
																			} else if ($value->stat_order == '4') {
																			?>
																				<span class="badge bg-success">Pesanan Diterima</span>
																			<?php
																			} ?>
																		</td>
																		<td>
																			<a href="<?= base_url('Backend/cTransaksiProduk/detail_pesanan/' . $value->id_transaksi) ?>" class="btn btn-success btn-sm">Detail Pesanan</a>
																		</td>
																	</tr>
															<?php
																}
															}
															?>

														</tbody>
													</table>
												</div>
												<div class="tab-pane" id="settings3" role="tabpanel">
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
																if ($value->stat_order == '3') {

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
																			} else if ($value->stat_order == '2') {
																			?>
																				<span class="badge bg-info">Pesanan Diproses</span>
																			<?php
																			} else if ($value->stat_order == '3') {
																			?>
																				<span class="badge bg-primary">Pesanan Dikirim</span>
																			<?php
																			} else if ($value->stat_order == '4') {
																			?>
																				<span class="badge bg-success">Pesanan Diterima</span>
																			<?php
																			} ?>
																		</td>
																		<td>
																			<a href="<?= base_url('Backend/cTransaksiProduk/detail_pesanan/' . $value->id_transaksi) ?>" class="btn btn-success btn-sm">Detail Pesanan</a>
																		</td>
																	</tr>
															<?php
																}
															}
															?>

														</tbody>
													</table>
												</div>
												<div class="tab-pane" id="selesai3" role="tabpanel">
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
																if ($value->stat_order == '4') {

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
																			} else if ($value->stat_order == '2') {
																			?>
																				<span class="badge bg-info">Pesanan Diproses</span>
																			<?php
																			} else if ($value->stat_order == '3') {
																			?>
																				<span class="badge bg-primary">Pesanan Dikirim</span>
																			<?php
																			} else if ($value->stat_order == '4') {
																			?>
																				<span class="badge bg-success">Pesanan Diterima</span>
																			<?php
																			} ?>
																		</td>
																		<td>
																			<a href="<?= base_url('Backend/cTransaksiProduk/detail_pesanan/' . $value->id_transaksi) ?>" class="btn btn-success btn-sm">Detail Pesanan</a>
																		</td>
																	</tr>
															<?php
																}
															}
															?>

														</tbody>
													</table>
												</div>
											</div>
										</div>

									</div>
									<!-- Row end -->
									<!-- Row start -->

									<!-- Row end -->
								</div>
							</div>
							<!-- Material tab card end -->
						</div>
					</div>

				</div>
				<!-- Page body end -->
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