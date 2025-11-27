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
									<a class="btn btn-primary mt-1" href="<?= base_url('Backend/cUser/add') ?>">Tambah Data User</a>
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
							<h5>Informasi User</h5>
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
											<th>Nama User</th>
											<th>Nomor Telepon</th>
											<th>Alamat</th>
											<th>Akun</th>
											<th>Level User</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										foreach ($user as $key => $value) {
										?>
											<tr>
												<td><?= $no++ ?>.</td>
												<td><?= $value->nama_user ?></td>
												<td><?= $value->no_hp ?></td>
												<td><?= $value->alamat ?></td>
												<td><span class="badge bg-primary"><?= $value->username ?></span> <span class="badge bg-danger"><?= $value->password ?></span></td>
												<td><?php if ($value->level_user == '1') {
													?>
														<span class="badge bg-warning">Admin</span>
													<?php
													} else {
													?>
														<span class="badge bg-success">Pemilik</span>
													<?php
													} ?>
												</td>
												<td>
													<div class="dropdown-success dropdown open">
														<button class="btn btn-success dropdown-toggle waves-effect waves-light btn-sm" type="button" id="dropdown-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Action</button>
														<div class="dropdown-menu" aria-labelledby="dropdown-3" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
															<a class="dropdown-item waves-light waves-effect" href="<?= base_url('Backend/cUser/update/' . $value->id_user) ?>">Perbaharui</a>
															<a class="dropdown-item waves-light waves-effect" href="<?= base_url('Backend/cUser/delete/' . $value->id_user) ?>">Hapus</a>
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
