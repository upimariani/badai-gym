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
									<h4>Diskon</h4>
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
									<li class="breadcrumb-item"><a href="#!">Informasi Diskon</a>
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
									<h5>Masukkan Data Diskon</h5>
									<div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

									<div class="card-header-right">
										<i class="icofont icofont-spinner-alt-5"></i>
									</div>

								</div>
								<div class="card-block">
									<form action="<?= base_url('Backend/cDiskon/add') ?>" method="POST">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Paket</label>
											<div class="col-sm-10">
												<select name="paket" class="form-control">
													<option value="">Pilih Paket Gym</option>
													<?php
													foreach ($paket as $key => $value) {
													?>
														<option value="<?= $value->id_paket ?>"><?= $value->nama_paket ?></option>
													<?php
													}
													?>


												</select>
												<?= form_error('paket', '<small class="text-danger">', '</small>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Nama Diskon</label>
											<div class="col-sm-10">
												<input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Diskon">
												<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Deskripsi</label>
											<div class="col-sm-10">
												<input type="text" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi">
												<?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Diskon</label>
											<div class="col-sm-10">
												<input type="text" name="diskon" class="form-control" placeholder="Masukkan Diskon (%)">
												<?= form_error('diskon', '<small class="text-danger">', '</small>') ?>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Level Member</label>
											<div class="col-sm-10">
												<select name="level_member" class="form-control">
													<option value="">Pilih Level Member</option>
													<option value="1">Classic</option>
													<option value="2">Silver</option>
													<option value="3">Gold</option>

												</select>
												<?= form_error('level_member', '<small class="text-danger">', '</small>') ?>
											</div>
										</div>
										<div class="form-group row">
											<div class="col-sm-10">
												<button type="submit" class="btn btn-success">Simpan</button>
												<a href="<?= base_url('Backend/cPaket') ?>" class="btn btn-danger">Kembali</a>
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
