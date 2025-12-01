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
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">Tanggal Transaksi</th>
						<th scope="col">Total Bayar</th>
						<th scope="col">Status Order</th>
						<th scope="col">Detail</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($pesanan as $key => $value) {
					?>
						<tr>
							<th scope="row">
								<p><?= $no++ ?>.</p>
							</th>
							<td><?= $value->tgl_transaksi ?></td>
							<td>Rp. <?= number_format($value->total_bayar) ?></td>
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
							<td><a href="<?= base_url('Frontend/cPesanan/detail_pesanan/' . $value->id_transaksi) ?>" class="btn btn-md rounded-circle bg-light border">
									<i class="fa fa-ellipsis-h text-success"></i>
								</a></td>
						</tr>
					<?php
					}
					?>

				</tbody>
			</table>
		</div>

	</div>
</div>
<!-- Cart Page End -->
