<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
	<h1 class="text-center text-white display-6 wow fadeInUp" data-wow-delay="0.1s">Chat</h1>
	<ol class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay="0.3s">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item"><a href="#">Pages</a></li>
		<li class="breadcrumb-item active text-white">Chat</li>
	</ol>
</div>
<!-- Single Page Header End -->
<section>
	<div class="container py-5">

		<div class="row d-flex justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-6">

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
										<p class="small p-2 ms-3 mb-1 rounded-3 bg-body-tertiary"><?= $value->admin_send ?></p>

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
					<form action="<?= base_url('Frontend/cChatting/kirim') ?>" method="POST">
						<div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">

							<input type="text" name="pesan" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Type message" required>

							<button type="submit" class="btn btn-warning ms-3"><i class="fas fa-paper-plane"></i></button>
						</div>
					</form>
				</div>

			</div>
		</div>

	</div>
</section>
</div>