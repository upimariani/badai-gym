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
									<h4>User</h4>

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
									<li class="breadcrumb-item"><a href="#!">Informasi User</a>
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
							<!-- Basic Form Inputs card start -->
							<div class="card">
								<div class="card-header">
									<h5>Masukkan Data User</h5>
									<div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

									<div class="card-header-right">
										<i class="icofont icofont-spinner-alt-5"></i>
									</div>

								</div>
								<div class="card-block">
									<form action="<?= base_url('Backend/cUser/add') ?>" method="POST">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama</label>
											<div class="col-sm-10">
												<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama User">
												<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Alamat</label>
											<div class="col-sm-10">
												<input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat">
												<?= form_error('alamat', '<small class="text-danger">', '</small>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nomor Telepon</label>
											<div class="col-sm-10">
												<input type="number" name="no_hp" class="form-control" placeholder="Masukkan Nomor Telepon">
												<?= form_error('no_hp', '<small class="text-danger">', '</small>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Username</label>
											<div class="col-sm-10">
												<input type="text" name="username" class="form-control" placeholder="Masukkan Username">
												<?= form_error('username', '<small class="text-danger">', '</small>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Password</label>
											<div class="col-sm-10">
												<input type="text" name="password" class="form-control" placeholder="Masukkan Password">
												<?= form_error('password', '<small class="text-danger">', '</small>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Level User</label>
											<div class="col-sm-10">
												<select name="level_user" class="form-control">
													<option value="">Pilih Level User</option>
													<option value="1">Admin</option>
													<option value="2">Pemilik</option>

												</select>
												<?= form_error('level_user', '<small class="text-danger">', '</small>') ?>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-10">
												<button type="submit" class="btn btn-success">Simpan</button>
												<a href="<?= base_url('Backend/cUser') ?>" class="btn btn-danger">Kembali</a>
											</div>
										</div>
									</form>

								</div>
							</div>
							<!-- Basic Form Inputs card end -->
							<!-- Input Grid card start -->

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
