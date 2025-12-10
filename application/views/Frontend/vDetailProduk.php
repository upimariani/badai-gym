<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
	<h1 class="text-center text-white display-6 wow fadeInUp" data-wow-delay="0.1s">Detail Produk</h1>
	<ol class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay="0.3s">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item"><a href="#">Pages</a></li>
		<li class="breadcrumb-item active text-white">Detail Produk</li>
	</ol>
</div>
<div class="container-fluid shop py-5">
	<div class="container py-5">
		<div class="row g-4">
			<div class="col-lg-12 col-xl-12 wow fadeInUp" data-wow-delay="0.1s">
				<div class="row g-4 single-product">
					<div class="col-xl-6">
						<div class="single-carousel owl-carousel">
							<div class="single-item" data-dot="<img class='img-fluid' src='<?= base_url('asset/produk/' . $produk->gambar) ?>' alt=''>">
								<div class="single-inner bg-light rounded">
									<img src="<?= base_url('asset/produk/' . $produk->gambar) ?>" class="img-fluid rounded" alt="Image">
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<h4 class="fw-bold mb-3"><?= $produk->nama_produk ?></h4>
						<p class="mb-3"><?= $produk->deskripsi ?></p>
						<h5 class="fw-bold mb-3">Rp. <?= number_format($produk->harga) ?></h5>
						<a href="<?= base_url('Frontend/cCart/add_cart/' . $produk->id_produk) ?>" class="btn btn-primary border border-secondary rounded-pill px-4 py-2 mb-4 text-primary"><i class="fa fa-shopping-bag me-2 text-white"></i> Add to cart</a>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Single Products End -->