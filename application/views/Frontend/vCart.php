<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
	<h1 class="text-center text-white display-6 wow fadeInUp" data-wow-delay="0.1s">Cart Page</h1>
	<ol class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay="0.3s">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item"><a href="#">Pages</a></li>
		<li class="breadcrumb-item active text-white">Cart Page</li>
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
		<?php
		if ($this->session->userdata('error')) {
		?>
			<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Gagal!</strong> <?= $this->session->userdata('error') ?>
			</div>
		<?php
		}
		?>
		<div class="table-responsive">
			<form action="<?= base_url('Frontend/cCart/update_cart') ?>" method="POST">
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Name</th>
							<th scope="col">Price</th>
							<th scope="col">Quantity</th>
							<th scope="col">Total</th>
							<th scope="col">Handle</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($this->cart->contents() as $key => $value) {
						?>
							<tr>
								<th scope="row">
									<p class="mb-0 py-4"><?= $value['name'] ?> <small>Stok. <?= $value['stok'] ?></small></p>
								</th>
								<td>
									<p class="mb-0 py-4">Rp. <?= number_format($value['price']) ?></p>
								</td>
								<td>
									<div class="input-group quantity py-4" style="width: 100px;">

										x <input type="number" name="qty<?= $i++ ?>" class="form-control form-control-sm text-center border-0" value="<?= $value['qty'] ?>">

									</div>
								</td>
								<td>
									<p class="mb-0 py-4">Rp. <?= number_format($value['qty'] * $value['price']) ?></p>
								</td>
								<td class="py-4">
									<a href="<?= base_url('Frontend/cCart/cart_delete/' . $value['rowid']) ?>" class="btn btn-md rounded-circle bg-light border">
										<i class="fa fa-times text-danger"></i>
									</a>
								</td>
							</tr>
						<?php
						}
						?>
						<tr>
							<td class="py-4"><button type="submit" class="btn btn-primary rounded-pill px-4 py-3 text-uppercase mb-4 ms-4">Update Cart</button>
								<a href="<?= base_url('Frontend/cCheckout') ?>" class="btn btn-primary rounded-pill px-4 py-3 text-uppercase mb-4 ms-4" type="button">Proceed Checkout</a>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>

	</div>
</div>
<!-- Cart Page End -->