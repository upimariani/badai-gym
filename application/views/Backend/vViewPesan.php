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
									<h4>Chatting</h4>
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
									<li class="breadcrumb-item"><a href="#!">Informasi Chatting</a>
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
				<section>
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="col-md-112 col-lg-12 col-xl-12">
								<div class="card" id="chat2">
									<div class="card-header d-flex justify-content-between align-items-center p-3">
										<h5 class="mb-0">Chat</h5>
									</div>
									<?php
									if ($this->session->userdata('success')) {
									?>
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
										</div>
									<?php
									}
									?>
									<div class="card-body" data-bs-spy="scroll">
										<?php
										foreach ($chat as $key => $value) {
											if ($value->pelanggan_send == '0') {
										?>
												<div class="d-flex flex-row justify-content-start">
													<div>
														<p class="small p-2 ms-3 mb-1 rounded-3 bg-warning"><?= $value->admin_send ?></p>
														<p class="small ms-3  rounded-3 text-muted"><?= $value->tgl_chat ?></p>
													</div>
												</div>
											<?php
											} else {
											?>
												<div class="d-flex flex-row justify-content-end pt-1">
													<div>
														<p class="small p-2 me-3 mb-1 text-white rounded-3 bg-primary"><?= $value->pelanggan_send ?></p>

														<p class="small rounded-3 text-muted d-flex justify-content-end"><?= $value->tgl_chat ?></p>
													</div>
												</div>
										<?php
											}
										}
										?>
									</div>
									<form action="<?= base_url('Backend/cDashboard/kirim/' . $id_pelanggan) ?>" method="POST">
										<div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">

											<input type="text" name="pesan" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Type message" required>

											<button type="submit" class="btn btn-success ms-3"><i class="ti-location-arrow"></i></button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>
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