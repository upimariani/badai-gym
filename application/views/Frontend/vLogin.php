<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>LOGIN PELANGGAN - BADAI GYM</title>

	<!-- Font Icon -->
	<link rel="stylesheet" href="<?= base_url('asset/login/') ?>fonts/material-icon/css/material-design-iconic-font.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- Main css -->
	<link rel="stylesheet" href="<?= base_url('asset/login/') ?>css/style.css">
</head>

<body>

	<div class="main">

		<!-- Sign up form -->
		<section class="signup">
			<div class="container">
				<div class="signup-content">
					<div class="signup-form">
						<h2 class="form-title">Login Pelanggan</h2>

						<?php
						if ($this->session->userdata('error')) {
						?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Gagal!</strong> <?= $this->session->userdata('error') ?>
							</div>
						<?php
						}
						?>
						<?php
						if ($this->session->userdata('success')) {
						?>
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong>Sukses!</strong> <?= $this->session->userdata('success') ?>
							</div>
						<?php
						}
						?>
						<form method="POST" class="register-form" action="<?= base_url('Frontend/cLogin/proses') ?>" id="register-form">
							<div class="form-group">
								<label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
								<input type="text" name="username" id="name" placeholder="Username" required />
							</div>
							<div class="form-group">
								<label for="pass"><i class="zmdi zmdi-lock"></i></label>
								<input type="password" name="password" id="pass" placeholder="Password" required />
							</div>

							<div class="form-group form-button">
								<input type="submit" name="signup" id="signup" class="btn btn-warning" value="Login" />
							</div>
						</form>
					</div>
					<div class="signup-image">
						<figure><img src="<?= base_url('asset/login/') ?>images/signup-image.jpg" alt="sing up image"></figure>
						<a href="<?= base_url('Frontend/cLogin/register') ?>" class="signup-image-link">Belum memiliki akun?</a>
					</div>
				</div>
			</div>
		</section>



	</div>

	<!-- JS -->
	<script src="<?= base_url('asset/login/') ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('asset/login/') ?>js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>