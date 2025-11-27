<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>BADAI GYM</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="<?= base_url('asset/Electro/') ?>lib/animate/animate.min.css" rel="stylesheet">
	<link href="<?= base_url('asset/Electro/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


	<!-- Customized Bootstrap Stylesheet -->
	<link href="<?= base_url('asset/Electro/') ?>css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="<?= base_url('asset/Electro/') ?>css/style.css" rel="stylesheet">
</head>

<body>

	<!-- Spinner Start -->
	<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
			<span class="sr-only">Loading...</span>
		</div>
	</div>
	<!-- Spinner End -->


	<!-- Topbar Start -->
	<div class="container-fluid px-5 d-none border-bottom d-lg-block">
		<div class="row gx-0 align-items-center">
			<div class="col-lg-4 text-center text-lg-start mb-lg-0">
				<div class="d-inline-flex align-items-center" style="height: 45px;">
					<a href="#" class="text-muted me-2"> Help</a><small> / </small>
					<a href="#" class="text-muted mx-2"> Support</a><small> / </small>
					<a href="#" class="text-muted ms-2"> Contact</a>

				</div>
			</div>
			<div class="col-lg-4 text-center d-flex align-items-center justify-content-center">
				<small class="text-dark">Call Us:</small>
				<a href="#" class="text-muted">(+012) 1234 567890</a>
			</div>

			<div class="col-lg-4 text-center text-lg-end">
				<div class="d-inline-flex align-items-center" style="height: 45px;">

					<div class="dropdown">
						<a href="#" class="dropdown-toggle text-muted ms-2" data-bs-toggle="dropdown"><small><i class="fa fa-home me-2"></i> My Dashboard</small></a>
						<div class="dropdown-menu rounded">

							<a href="#" class="dropdown-item"> Log Out</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid px-5 py-4 d-none d-lg-block">
		<div class="row gx-0 align-items-center text-center">
			<div class="col-md-4 col-lg-3 text-center text-lg-start">
				<div class="d-inline-flex align-items-center">
					<a href="" class="navbar-brand p-0">
						<h1 class="display-5 text-primary m-0"><i class="fas fa-shopping-bag text-secondary me-2"></i>Electro</h1>
						<!-- <img src="img/logo.png" alt="Logo"> -->
					</a>
				</div>
			</div>
			<div class="col-md-4 col-lg-6 text-center">
				<div class="position-relative ps-4">
					<div class="d-flex border rounded-pill">

					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-3 text-center text-lg-end">
				<div class="d-inline-flex align-items-center">

					<a href="<?= base_url('Frontend/cCart') ?>" class="text-muted d-flex align-items-center justify-content-center"><span class="rounded-circle btn-md-square border"><i class="fas fa-shopping-cart"></i></span>
						<span class="text-dark ms-2">$0.00</span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- Topbar End -->

	<!-- Navbar & Hero Start -->
	<div class="container-fluid nav-bar p-0">
		<div class="row gx-0 bg-primary px-5 align-items-center">
			<div class="col-lg-3 d-none d-lg-block">

			</div>
			<div class="col-12 col-lg-9">
				<nav class="navbar navbar-expand-lg navbar-light bg-primary ">
					<a href="" class="navbar-brand d-block d-lg-none">
						<h1 class="display-5 text-secondary m-0"><i class="fas fa-shopping-bag text-white me-2"></i>Electro</h1>
						<!-- <img src="img/logo.png" alt="Logo"> -->
					</a>
					<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
						<span class="fa fa-bars fa-1x"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarCollapse">
						<div class="navbar-nav ms-auto py-0">
							<a href="<?= base_url('Frontend/cHome') ?>" class="nav-item nav-link active">Home</a>
							<a href="<?= base_url('Frontend/cKatalog') ?>" class="nav-item nav-link">Produk</a>
							<a href="single.html" class="nav-item nav-link">Membership</a>
							<a href="contact.html" class="nav-item nav-link me-2">Akun</a>
							<a href="contact.html" class="nav-item nav-link me-2">Pesan</a>

						</div>

					</div>
				</nav>
			</div>
		</div>
	</div>
	<!-- Navbar & Hero End -->
