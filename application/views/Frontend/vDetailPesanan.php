<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
	<h1 class="text-center text-white display-6 wow fadeInUp" data-wow-delay="0.1s">Pesanan Saya</h1>
	<ol class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay="0.3s">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item"><a href="#">Pages</a></li>
		<li class="breadcrumb-item active text-white">Pesanan Page</li>
	</ol>
</div>
<!-- Single Page Header End -->

<!-- Cart Page Start -->
<div class="container-fluid py-5">
	<div class="container py-5">
		<?php
		if ($this->session->userdata('success')) {
		?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
			</div>
		<?php
		}
		?>
		<!-- Invoice 1 - Bootstrap Brain Component -->
		<section class="py-3 py-md-5">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-9 col-xl-8 col-xxl-7">
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
								if ($detail->stat_order == '0') {
								?>
									<form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
										<input type="hidden" name="result_type" id="result-type" value="">
										<input type="hidden" name="result_data" id="result-data" value="">
									</form>
									<button class="btn btn-warning" id="pay-button">Bayar!</button>
									<a class="btn btn-danger" href="<?= base_url('Frontend/cPesanan/batalkan_pesanan/' . $detail->id_transaksi) ?>">Batalkan Pesanan</a>

								<?php
								} else if ($detail->pembayaran == 'Midtrans') {
									echo form_open_multipart('Frontend/cPesanan/bayar/' . $detail->id_transaksi)
								?>
									<h6>Upload Pembayaran</h6>
									<input type="file" name="gambar" class="form-control mb-3">
									<button type="submit" class="btn btn-primary">Upload</button>
								<?php
								} else if ($detail->stat_order == '3') {
								?>
									<a href="<?= base_url('Frontend/cPesanan/pesanan_diterima/' . $detail->id_transaksi) ?>" class="btn btn-warning mb-3">Pesanan Diterima</a>
								<?php
								}
								?>
								<a href="<?= base_url('Frontend/cPesanan') ?>" class="btn btn-danger">Kembali</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>
</div>
<!-- Cart Page End -->
<script type=" text/javascript">
	$('#pay-button').click(function(event) {
		event.preventDefault();
		$(this).attr("disabled", "disabled");

		$.ajax({
			url: '<?= site_url() ?>/snap/token/' + <?= $detail->id_transaksi ?>,
			cache: false,

			success: function(data) {
				//location = data;

				console.log('token = ' + data);

				var resultType = document.getElementById('result-type');
				var resultData = document.getElementById('result-data');

				function changeResult(type, data) {
					$("#result-type").val(type);
					$("#result-data").val(JSON.stringify(data));
					//resultType.innerHTML = type;
					//resultData.innerHTML = JSON.stringify(data);
				}

				snap.pay(data, {

					onSuccess: function(result) {
						changeResult('success', result);
						console.log(result.status_message);
						console.log(result);
						$("#payment-form").submit();
					},
					onPending: function(result) {
						changeResult('pending', result);
						console.log(result.status_message);
						$("#payment-form").submit();
					},
					onError: function(result) {
						changeResult('error', result);
						console.log(result.status_message);
						$("#payment-form").submit();
					}
				});
			}
		});
	});
</script>