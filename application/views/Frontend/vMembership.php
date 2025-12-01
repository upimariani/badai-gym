<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
	<h1 class="text-center text-white display-6 wow fadeInUp" data-wow-delay="0.1s">Membership</h1>
	<ol class="breadcrumb justify-content-center mb-0 wow fadeInUp" data-wow-delay="0.3s">
		<li class="breadcrumb-item"><a href="#">Home</a></li>
		<li class="breadcrumb-item"><a href="#">Pages</a></li>
		<li class="breadcrumb-item active text-white">Membership</li>
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
						<h4 class="text-primary border-bottom border-primary border-2 d-inline-block pb-2">Membership Badai Gym</h4>
						<p class="mb-5 fs-5 text-dark">Keanggotaan pada Badai Gym, yang memberikan izin untuk menggunakan fasilitas, peralatan, kelas, dan layanan lainnya untuk jangka waktu tertentu
						</p>
					</div>
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
				<div class="col-lg-7">
					<h5 class="text-primary wow fadeInUp" data-wow-delay="0.1s">Let’s Membership</h5>
					<h1 class="display-5 mb-4 wow fadeInUp" data-wow-delay="0.3s">Badai Gym</h1>
					<p class="mb-4 wow fadeInUp" data-wow-delay="0.5s">Silahkan untuk memilih paket membership, dan nikmati diskon sesuai level member kamu!</p>
					<?php
					if ($membership) {
					?>
						<p class="mb-4 wow fadeInUp" data-wow-delay="0.5s">Paket Membership anda saat ini adalah <strong><?= $membership->nama_paket ?>.</strong></p>
						<table class="table">
							<tr>
								<th>Tanggal Awal Member</th>
								<td><?= $membership->tgl_mulai ?></td>
							</tr>
							<tr>
								<th>Tanggal Akhir Member</th>
								<td><?= $membership->tgl_akhir ?></td>
							</tr>
							<?php
							$tanggal_2 = date_create($membership->tgl_akhir);
							$d = date('Y-m-d');
							$date_in = date_create($d);
							$selisih = date_diff($date_in, $tanggal_2);
							?>
							<tr>
								<th>Sisa Waktu Membership</th>
								<td><?= $selisih->days  ?> hari</td>
							</tr>
							<tr>
								<th>Status</th>
								<td><?php if ($selisih->days <= 0) {
									?>
										<span class="badge bg-danger">Not Available</span>
									<?php
									} else {
									?>
										<span class="badge bg-success">Available</span>
									<?php
									} ?>
								</td>
							</tr>
							<?php
							if ($membership->stat_order == '0') {
							?>
								<tr>
									<td></td>
									<td>
										<form id="payment-form" method="post" action="<?= site_url() ?>/snap/finish">
											<input type="hidden" name="result_type" id="result-type" value="">
											<input type="hidden" name="result_data" id="result-data" value="">
										</form>
										<button class="btn btn-danger mb-3" id="pay-button">Bayar!</button>
									</td>
								</tr>
							<?php
							}
							?>

						</table>
						<?php
						if ($selisih->days <= 0) {
						?>
							<form action="<?= base_url('Frontend/cMembership/kirim') ?>" method="POST">
								<div class="row g-4 wow fadeInUp" data-wow-delay="0.1s">
									<div class="col-lg-12 col-xl-12">
										<div class="form-floating">
											<select id="paket" class="form-control" name="paket" required>
												<option value="">Pilih Paket Membership</option>
												<?php
												foreach ($paket as $key => $value) {
												?>
													<option data-masa="<?= $value->masa_berlaku ?>" data-harga="<?= $value->harga - (($value->disc / 100) * $value->harga) ?>" value="<?= $value->id_paket ?>"><?= $value->nama_paket ?> <?= $value->masa_berlaku ?> hari (<?= $value->nama_diskon ?>) <u>Rp. <?= number_format($value->harga - (($value->disc / 100) * $value->harga)) ?></u> </option>
												<?php
												}
												?>

											</select>
											<label for="name">Paket Membership</label>
											<input type="text" name="harga" class="harga" hidden>
											<input type="text" name="masa" class="masa" hidden>
										</div>
									</div>

									<div class="col-12">
										<button type="submit" class="btn btn-primary w-100 py-3">Kirim</button>
									</div>
								</div>
							</form>
						<?php
						}
						?>
					<?php
					} else {
					?>
						<form action="<?= base_url('Frontend/cMembership/kirim') ?>" method="POST">
							<div class="row g-4 wow fadeInUp" data-wow-delay="0.1s">
								<div class="col-lg-12 col-xl-12">
									<div class="form-floating">
										<select id="paket" class="form-control" name="paket" required>
											<option value="">Pilih Paket Membership</option>
											<?php
											foreach ($paket as $key => $value) {
												if ($value->lev_member == $this->session->userdata('level_member')) {
													$disc = $value->disc / 100;
													$nama_diskon = $value->nama_diskon;
												} else {
													$disc = 0;
													$nama_diskon = '';
												}
											?>
												<option data-masa="<?= $value->masa_berlaku ?>" data-harga="<?= $value->harga - (($disc) * $value->harga) ?>" value="<?= $value->id_paket ?>">
													<?= $value->nama_paket ?> <?= $value->masa_berlaku ?> hari
													<?= $nama_diskon ?> <u>Rp. <?= number_format($value->harga - (($disc) * $value->harga)) ?></u> </option>
											<?php
											}
											?>

										</select>
										<label for="name">Paket Membership</label>
										<input type="text" name="harga" class="harga" hidden>
										<input type="text" name="masa" class="masa" hidden>
									</div>
								</div>

								<div class="col-12">
									<button type="submit" class="btn btn-primary w-100 py-3">Kirim</button>
								</div>
							</div>
						</form>
					<?php
					}
					?>

				</div>


			</div>
		</div>
	</div>
</div>
<!-- Contuct End -->
<script type=" text/javascript">
	$('#pay-button').click(function(event) {
		event.preventDefault();
		$(this).attr("disabled", "disabled");

		$.ajax({
			url: '<?= site_url() ?>/snap/token/' + <?= $membership->id_transaksi ?>,
			cache: false,

			success: function(data) {
				//location = data;

				console.log('token = ' + data);

				var resultType = document.getElementById('result-type');
				var resultData = document.getElementById('result-data');

				function changeResult(type, data) {
					$("#result-type").val(type);
					$("#result-data").val(JSON.stringify(data));
					//resultType.innerHTML = type;
					//resultData.innerHTML = JSON.stringify(data);
				}

				snap.pay(data, {

					onSuccess: function(result) {
						changeResult('success', result);
						console.log(result.status_message);
						console.log(result);
						$("#payment-form").submit();
					},
					onPending: function(result) {
						changeResult('pending', result);
						console.log(result.status_message);
						$("#payment-form").submit();
					},
					onError: function(result) {
						changeResult('error', result);
						console.log(result.status_message);
						$("#payment-form").submit();
					}
				});
			}
		});
	});
</script>