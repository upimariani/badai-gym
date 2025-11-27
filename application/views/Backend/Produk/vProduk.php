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
									<h4>Produk</h4>
									<a class="btn btn-primary mt-1" href="<?= base_url('Backend/cProduk/add') ?>">Tambah Data Produk</a>
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
									<li class="breadcrumb-item"><a href="#!">Informasi Produk</a>
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
							<h5>Informasi Produk</h5>
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
											<th>Nama Produk</th>
											<th>Deskripsi</th>
											<th>Harga</th>
											<th>Stok</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($produk as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?>.</td>
												<td><img style="width: 50px;" src="<?= base_url('asset/produk/' . $value->gambar) ?>"> <strong><?= $value->nama_produk ?></strong></td>
												<td><?= $value->deskripsi ?></td>
												<td>Rp. <?= number_format($value->harga)  ?></td>
												<td><?= $value->stok ?> pcs</td>
												<td>
													<div class="dropdown-success dropdown open">
														<button class="btn btn-success dropdown-toggle waves-effect waves-light btn-sm" type="button" id="dropdown-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Action</button>
														<div class="dropdown-menu" aria-labelledby="dropdown-3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
															<a class="dropdown-item waves-light waves-effect" href="<?= base_url('Backend/cProduk/update/' . $value->id_produk) ?>">Perbaharui</a>
															<a class="dropdown-item waves-light waves-effect" href="<?= base_url('Backend/cProduk/delete/' . $value->id_produk) ?>">Hapus</a>
														</div>
													</div>
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
