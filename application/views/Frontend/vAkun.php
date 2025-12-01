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

					<form action="<?= base_url('Frontend/cAkun/perbaharui_akun') ?>" method="POST">
						<div class="row g-4 wow fadeInUp" data-wow-delay="0.1s">
							<div class="col-lg-12 col-xl-6">
								<div class="form-floating">
									<input type="text" class="form-control" id="name" placeholder="Your Name">
									<label for="name">Nama Pelanggan</label>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6">
								<div class="form-floating">
									<input type="email" class="form-control" id="email" placeholder="Your Email">
									<label for="email">Nomor Telepon</label>
								</div>
							</div>
							<div class="col-lg-12 col-xl-12">
								<div class="form-floating">
									<input type="phone" class="form-control" id="phone" placeholder="Phone">
									<label for="phone">Alamat</label>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6">
								<div class="form-floating">
									<input type="text" class="form-control" id="project" placeholder="Project">
									<label for="project">Username</label>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6">
								<div class="form-floating">
									<input type="text" class="form-control" id="subject" placeholder="Subject">
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