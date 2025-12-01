<div class="pcoded-main-container">
	<div class="pcoded-wrapper">
		<nav class="pcoded-navbar">
			<div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
			<div class="pcoded-inner-navbar main-menu">
				<div class="">
					<div class="main-menu-header">
						<?php
						$user = $this->db->query("SELECT * FROM `user` WHERE id_user='" . $this->session->userdata('id_user') . "' ")->row();
						?>
						<img class="img-40 img-radius" src="<?= base_url('asset/guruable-master/') ?>assets/images/avatar-4.jpg" alt="User-Profile-Image">
						<div class="user-details">
							<span><?= $user->nama_user ?></span>
							<span id="more-details"><?php if ($user->level_user == '1') {
														echo 'Admin';
													} else {
														echo 'Pemilik';
													} ?><i class="ti-angle-down"></i></span>
						</div>
					</div>

					<div class="main-menu-content">
						<ul>
							<li class="more-details">

								<a href="<?= base_url('Backend/cLogin/logout') ?>"><i class="ti-layout-sidebar-left"></i>Logout</a>
							</li>
						</ul>
					</div>
				</div>


				<ul class="pcoded-item pcoded-left-item">
					<li class="<?php if ($this->uri->segment(1) == 'Backend' && $this->uri->segment(2) == 'cDashboard') {
									echo 'active';
								}  ?>">
						<a href="<?= base_url('Backend/cDashboard') ?>">
							<span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
							<span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
							<span class="pcoded-mcaret"></span>
						</a>
					</li>
					<div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Data Master</div>
					<li class="pcoded-hasmenu">
						<a href="javascript:void(0)">
							<span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
							<span class="pcoded-mtext" data-i18n="nav.basic-components.main">Data</span>
							<span class="pcoded-mcaret"></span>
						</a>
						<ul class="pcoded-submenu">
							<li class="<?php if ($this->uri->segment(1) == 'Backend' && $this->uri->segment(2) == 'cUser') {
											echo 'active';
										}  ?>">
								<a href="<?= base_url('Backend/cUser') ?>">
									<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
									<span class="pcoded-mtext" data-i18n="nav.basic-components.alert">User</span>
									<span class="pcoded-mcaret"></span>
								</a>
							</li>
							<li class="<?php if ($this->uri->segment(1) == 'Backend' && $this->uri->segment(2) == 'cPaket') {
											echo 'active';
										}  ?>">
								<a href="<?= base_url('Backend/cPaket') ?>">
									<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
									<span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Paket</span>
									<span class="pcoded-mcaret"></span>
								</a>
							</li>
							<li class="<?php if ($this->uri->segment(1) == 'Backend' && $this->uri->segment(2) == 'cProduk') {
											echo 'active';
										}  ?>">
								<a href="<?= base_url('Backend/cProduk') ?>">
									<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
									<span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Produk</span>
									<span class="pcoded-mcaret"></span>
								</a>
							</li>
							<li class="<?php if ($this->uri->segment(1) == 'Backend' && $this->uri->segment(2) == 'cDiskon') {
											echo 'active';
										}  ?>">
								<a href="<?= base_url('Backend/cDiskon') ?>">
									<span class="pcoded-micon"><i class="ti-angle-right"></i></span>
									<span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Diskon</span>
									<span class="pcoded-mcaret"></span>
								</a>
							</li>

						</ul>
					</li>
				</ul>
				<div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Transaksi</div>
				<ul class="pcoded-item pcoded-left-item">
					<li class="<?php if ($this->uri->segment(1) == 'Backend' && $this->uri->segment(2) == 'cTransaksiProduk') {
									echo 'active';
								}  ?>">
						<a href="<?= base_url('Backend/cTransaksiProduk') ?>">
							<span class="pcoded-micon"><i class="ti-bag"></i><b>FC</b></span>
							<span class="pcoded-mtext" data-i18n="nav.form-components.main">Produk</span>
							<span class="pcoded-mcaret"></span>
						</a>
					</li>
					<li class="<?php if ($this->uri->segment(1) == 'Backend' && $this->uri->segment(2) == 'cTransaksiPaket') {
									echo 'active';
								}  ?>">
						<a href="<?= base_url('Backend/cTransaksiPaket') ?>">
							<span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
							<span class="pcoded-mtext" data-i18n="nav.form-components.main">Paket Gym</span>
							<span class="pcoded-mcaret"></span>
						</a>
					</li>

				</ul>

				<div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Analisis K-Means</div>
				<ul class="pcoded-item pcoded-left-item">
					<li class="<?php if ($this->uri->segment(1) == 'Backend' && $this->uri->segment(2) == 'cAnalisisPelanggan') {
									echo 'active';
								}  ?>">
						<a href="<?= base_url('Backend/cAnalisisPelanggan') ?>">
							<span class="pcoded-micon"><i class="ti-direction-alt"></i><b>FC</b></span>
							<span class="pcoded-mtext" data-i18n="nav.form-components.main">Analisis Pelanggan</span>
							<span class="pcoded-mcaret"></span>
						</a>
					</li>


				</ul>


			</div>
		</nav>