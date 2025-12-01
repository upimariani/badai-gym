<!-- Shop Page Start -->
<div class="container-fluid shop py-5">
	<div class="container py-5">
		<div class="row g-4">
			<div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
				<div class="product-categories mb-4">
					<h4>Products Categories</h4>
					<ul class="list-unstyled">
						<li>
							<div class="categories-item">
								<a href="#" class="text-dark"><i class="fas fa-apple-alt text-secondary me-2"></i>
									Accessories</a>
								<span>(3)</span>
							</div>
						</li>
						<li>
							<div class="categories-item">
								<a href="#" class="text-dark"><i class="fas fa-apple-alt text-secondary me-2"></i>
									Electronics & Computer</a>
								<span>(5)</span>
							</div>
						</li>
						<li>
							<div class="categories-item">
								<a href="#" class="text-dark"><i class="fas fa-apple-alt text-secondary me-2"></i>Laptops & Desktops</a>
								<span>(2)</span>
							</div>
						</li>
						<li>
							<div class="categories-item">
								<a href="#" class="text-dark"><i class="fas fa-apple-alt text-secondary me-2"></i>Mobiles & Tablets</a>
								<span>(8)</span>
							</div>
						</li>
						<li>
							<div class="categories-item">
								<a href="#" class="text-dark"><i class="fas fa-apple-alt text-secondary me-2"></i>SmartPhone & Smart TV</a>
								<span>(5)</span>
							</div>
						</li>
					</ul>
				</div>

			</div>
			<div class="col-lg-9 wow fadeInUp" data-wow-delay="0.1s">


				<div class="tab-content">
					<?php
					if ($this->session->userdata('success')) {
					?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
						</div>
					<?php
					}
					?>
					<div id="tab-5" class="tab-pane fade show p-0 active">
						<div class="row g-4 product">
							<?php
							foreach ($produk as $key => $value) {
							?>
								<div class="col-lg-4">
									<div class="product-item rounded wow fadeInUp" data-wow-delay="0.1s">
										<div class="product-item-inner border rounded">
											<div class="product-item-inner-item">
												<img src="<?= base_url('asset/produk/' . $value->gambar) ?>" class="img-fluid w-100 rounded-top" alt="">


											</div>
											<div class="text-center rounded-bottom p-4">
												<small class="d-block mb-2"><?= $value->deskripsi ?></small>
												<a href="#" class="d-block h4"><?= $value->nama_produk ?> </a>

												<span class="text-primary fs-5">Rp. <?= number_format($value->harga) ?></span>
											</div>
										</div>
										<div class="product-item-add border border-top-0 rounded-bottom  text-center p-4 pt-0">
											<a href="<?= base_url('Frontend/cCart/add_cart/' . $value->id_produk) ?>" class="btn btn-primary border-secondary rounded-pill py-2 px-4 mb-4"><i class="fas fa-shopping-cart me-2"></i> Add To Cart</a>
											<div class="d-flex justify-content-between align-items-center">

											</div>
										</div>
									</div>
								</div>
							<?php
							}
							?>


							<div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
								<div class="pagination d-flex justify-content-center mt-5">
									<a href="#" class="rounded">&laquo;</a>
									<a href="#" class="active rounded">1</a>
									<a href="#" class="rounded">2</a>
									<a href="#" class="rounded">3</a>
									<a href="#" class="rounded">4</a>
									<a href="#" class="rounded">5</a>
									<a href="#" class="rounded">6</a>
									<a href="#" class="rounded">&raquo;</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Shop Page End -->
