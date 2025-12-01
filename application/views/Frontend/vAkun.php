<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
	<h1 class="text-center text-white display-6 wow fadeInUp" data-wow-delay="0.1s">Akun Pelanggan</h1>
	<ol class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay="0.3s">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item"><a href="#">Pages</a></li>
		<li class="breadcrumb-item active text-white">Akun Pelanggan</li>
	</ol>
</div>
<!-- Single Page Header End -->

<!-- Contucts Start -->
<div class="container-fluid contact py-5">
	<div class="container py-5">
		<div class="p-5 bg-light rounded">
			<div class="row g-4">
				<div class="col-12">
					<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
						<h4 class="text-primary border-bottom border-primary border-2 d-inline-block pb-2">Akun Pelanggan</h4>
						<p class="mb-5 fs-5 text-dark">Silahkan untuk memperbaharui akun anda!
						</p>
					</div>
				</div>
				<div class="col-lg-12">
					<?php
					if ($this->session->userdata('success')) {
					?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
						</div>
					<?php
					}
					?>
					<form action="<?= base_url('Frontend/cAkun/perbaharui_akun/' . $pelanggan->id_pelanggan) ?>" method="POST">
						<div class="row g-4 wow fadeInUp" data-wow-delay="0.1s">
							<div class="col-lg-12 col-xl-6">
								<div class="form-floating">
									<input type="text" class="form-control" name="nama" value="<?= $pelanggan->nama ?>" required>
									<label for="name">Nama Pelanggan</label>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6">
								<div class="form-floating">
									<input type="number" class="form-control" name="no_hp" value="<?= $pelanggan->no_hp ?>" required>
									<label for="email">Nomor Telepon</label>
								</div>
							</div>
							<div class="col-lg-12 col-xl-12">
								<div class="form-floating">
									<input type="text" class="form-control" name="alamat" value="<?= $pelanggan->alamat ?>" required>
									<label for="phone">Alamat</label>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6">
								<div class="form-floating">
									<input type="text" class="form-control" name="username" value="<?= $pelanggan->username ?>" required>
									<label for="project">Username</label>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6">
								<div class="form-floating">
									<input type="text" class="form-control" name="password" value="<?= $pelanggan->password ?>" required>
									<label for="subject">Password</label>
								</div>
							</div>

							<div class="col-12">
								<button type="submit" class="btn btn-primary w-100 py-3">Perbaharui Akun</button>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>
</div>
<!-- Contuct End -->