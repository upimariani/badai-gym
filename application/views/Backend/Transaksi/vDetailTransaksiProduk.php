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
											<?php
											if ($this->session->userdata('success')) {
											?>
												<div class="alert alert-success alert-dismissible fade show" role="alert">
													<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
												</div>
											<?php
											}
											?>
											<section class="py-3 py-md-5">
												<div class="container">
													<div class="row justify-content-center">
														<div class="col-12">
															<div class="row gy-3 mb-3">
																<div class="col-6">
																	<h2 class="text-uppercase text-endx m-0">Invoice</h2>
																</div>

																<div class="col-8">
																	<h4>From</h4>
																	<address>
																		<strong><?= $detail->nama ?></strong><br>
																		<?= $detail->no_hp ?><br>
																		<?= $detail->alamat_pengiriman ?>
																	</address>
																</div>
															</div>

															<div class="row mb-3">
																<div class="col-12">
																	<div class="table-responsive">
																		<table class="table table-striped">
																			<thead>
																				<tr>
																					<th scope="col" class="text-uppercase">Qty</th>
																					<th scope="col" class="text-uppercase">Product</th>
																					<th scope="col" class="text-uppercase text-end">Harga</th>
																					<th scope="col" class="text-uppercase text-end">SubTotal</th>
																				</tr>
																			</thead>
																			<tbody class="table-group-divider">
																				<?php
																				foreach ($produk as $key => $value) {
																				?>
																					<tr>
																						<th scope="row"><?= $value->qty ?> x</th>
																						<td><?= $value->nama_produk ?></td>
																						<td class="text-end">Rp. <?= number_format($value->harga) ?></td>
																						<td class="text-end">Rp. <?= number_format($value->harga * $value->qty) ?></td>
																					</tr>
																				<?php
																				}
																				?>


																				<tr>
																					<td colspan="3" class="text-end">Ongkos Kirim</td>
																					<td class="text-end">Rp. <?= number_format($value->ongkir) ?></td>
																				</tr>

																				<tr>
																					<th scope="row" colspan="3" class="text-uppercase text-end">Total</th>
																					<td class="text-end">Rp. <?= number_format($value->total_bayar) ?></td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
															<div class="row">
																<div class="col-12 text-end">
																	<?php
																	if ($detail->stat_order == '1') {
																	?>
																		<a href="<?= base_url('Backend/cTransaksiProduk/konfirmasi/' . $value->id_transaksi) ?>" class="btn btn-warning mb-3">Konfirmasi Pesanan</a>

																	<?php
																	} else if ($detail->stat_order == '2') {
																	?>
																		<a href="<?= base_url('Backend/cTransaksiProduk/dikirim/' . $value->id_transaksi) ?>" class="btn btn-info mb-3">Pesanan Dikirim</a>
																	<?php
																	}
																	?>
																	<a href="<?= base_url('Backend/cTransaksiProduk') ?>" class="btn btn-danger mb-3">Kembali</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
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