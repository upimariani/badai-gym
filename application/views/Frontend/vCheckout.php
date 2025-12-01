<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
	<h1 class="text-center text-white display-6 wow fadeInUp" data-wow-delay="0.1s">Cheackout Page</h1>
	<ol class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay="0.3s">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item"><a href="#">Pages</a></li>
		<li class="breadcrumb-item active text-white">Cheackout</li>
	</ol>
</div>
<!-- Single Page Header End -->

<!-- Searvices Start -->
<div class="container-fluid px-0">
	<div class="row g-0">
		<div class="col-6 col-md-4 col-lg-2 border-start border-end wow fadeInUp" data-wow-delay="0.1s">
			<div class="p-4">
				<div class="d-inline-flex align-items-center">
					<i class="fa fa-sync-alt fa-2x text-primary"></i>
					<div class="ms-4">
						<h6 class="text-uppercase mb-2">Free Return</h6>
						<p class="mb-0">30 days money back guarantee!</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.2s">
			<div class="p-4">
				<div class="d-flex align-items-center">
					<i class="fab fa-telegram-plane fa-2x text-primary"></i>
					<div class="ms-4">
						<h6 class="text-uppercase mb-2">Free Shipping</h6>
						<p class="mb-0">Free shipping on all order</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.3s">
			<div class="p-4">
				<div class="d-flex align-items-center">
					<i class="fas fa-life-ring fa-2x text-primary"></i>
					<div class="ms-4">
						<h6 class="text-uppercase mb-2">Support 24/7</h6>
						<p class="mb-0">We support online 24 hrs a day</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.4s">
			<div class="p-4">
				<div class="d-flex align-items-center">
					<i class="fas fa-credit-card fa-2x text-primary"></i>
					<div class="ms-4">
						<h6 class="text-uppercase mb-2">Receive Gift Card</h6>
						<p class="mb-0">Recieve gift all over oder $50</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.5s">
			<div class="p-4">
				<div class="d-flex align-items-center">
					<i class="fas fa-lock fa-2x text-primary"></i>
					<div class="ms-4">
						<h6 class="text-uppercase mb-2">Secure Payment</h6>
						<p class="mb-0">We Value Your Security</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-6 col-md-4 col-lg-2 border-end wow fadeInUp" data-wow-delay="0.6s">
			<div class="p-4">
				<div class="d-flex align-items-center">
					<i class="fas fa-blog fa-2x text-primary"></i>
					<div class="ms-4">
						<h6 class="text-uppercase mb-2">Online Service</h6>
						<p class="mb-0">Free return products in 30 days</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Searvices End -->


<!-- Checkout Page Start -->
<div class="container-fluid bg-light overflow-hidden py-5">
	<div class="container py-5">
		<h1 class="mb-4 wow fadeInUp" data-wow-delay="0.1s">Alamat Pengiriman</h1>
		<form action="<?= base_url('Frontend/cCheckout/pesan') ?>" method="POST">
			<div class="row g-5">
				<div class="col-md-12 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">

					<div class="form-item">
						<label class="form-label my-3">Provinsi<sup class="text-danger">*</sup></label>
						<select name="provinsi" class="form-control" required>

						</select>
					</div>
					<div class="form-item">
						<label class="form-label my-3">Kota/Kabupaten<sup class="text-danger">*</sup></label>
						<select name="kota" class="form-control" required>

						</select>
					</div>
					<div class="form-item">
						<label class="form-label my-3">Kecamatan<sup class="text-danger">*</sup></label>
						<select name="kecamatan" class="form-control" required>

						</select>
					</div>
					<div class="form-item">
						<label class="form-label my-3">Expedisi<sup class="text-danger">*</sup></label>
						<select name="expedisi" class="form-control" required>

						</select>
					</div>
					<div class="form-item">
						<label class="form-label my-3">Paket<sup class="text-danger">*</sup></label>
						<select name="paket" class="form-control" required>

						</select>
					</div>
					<hr>
					<div class="form-item">
						<textarea name="alamat" class="form-control" spellcheck="false" cols="30" rows="11" placeholder="Alamat Detail"></textarea>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.3s">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr class="text-center">
									<th scope="col" class="text-start">Name</th>
									<th scope="col">Price</th>
									<th scope="col">Quantity</th>
									<th scope="col">Total</th>
								</tr>
							</thead>
							<tbody>
								<?php
								foreach ($this->cart->contents() as $key => $value) {
								?>
									<tr class="text-center">
										<th scope="row" class="text-start py-4">
											<?= $value['name'] ?>
										</th>
										<td class="py-4">Rp. <?= number_format($value['price'])  ?></td>
										<td class="py-4 text-center"><?= $value['qty'] ?></td>
										<td class="py-4">Rp. <?= number_format($value['price'] * $value['qty'])  ?></td>
									</tr>
								<?php
								}
								?>
								<tr>
									<th scope="row">
									</th>
									<td class="py-4">
										<p class="mb-0 text-dark text-uppercase py-2">TOTAL</p>
									</td>
									<td class="py-4"></td>
									<td class="py-4"></td>
									<td class="py-4">
										<div class="py-2 text-center border-bottom border-top">
											<p class="mb-0 text-dark">Rp. <?= number_format($this->cart->total()) ?></p>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
									</th>
									<td class="py-4">
										<p class="mb-0 text-dark text-uppercase py-2">ONGKOS KIRIM</p>
									</td>
									<td class="py-4"></td>
									<td class="py-4"></td>
									<td class="py-4">
										<div class="py-4 text-center border-bottom border-top">
											<p class="mb-0 text-dark" id="ongkir"></p>
										</div>
									</td>
								</tr>
								<tr>
									<th scope="row">
									</th>
									<td class="py-4">
										<p class="mb-0 text-dark text-uppercase py-2">TOTAL PEMBAYARAN</p>
									</td>
									<td class="py-4"></td>
									<td class="py-4"></td>
									<td class="py-4">
										<div class="py-2 text-center border-bottom border-top">
											<p class="mb-0 text-dark ttl_bayar"></p>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<input type="text" name="ongkir" hidden>
					<input type="text" name="total_pembayaran" hidden>
					<div class="row g-4 text-center align-items-center justify-content-center pt-4">
						<button type="submit" class="btn btn-primary border-secondary py-3 px-4 text-uppercase w-100 text-primary">Place
							Order</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Checkout Page End -->
