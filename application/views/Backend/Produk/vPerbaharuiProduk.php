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
									<h4>Produk</h4>
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
									<li class="breadcrumb-item"><a href="#!">Informasi Produk</a>
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
									<h5>Perbaharui Data Produk</h5>
									<div class="card-header-right"><i class="icofont icofont-spinner-alt-5"></i></div>

									<div class="card-header-right">
										<i class="icofont icofont-spinner-alt-5"></i>
									</div>

								</div>
								<div class="card-block">
									<?= form_open_multipart('Backend/cProduk/update/' . $produk->id_produk) ?>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Nama Produk</label>
										<div class="col-sm-10">
											<input type="text" value="<?= $produk->nama_produk ?>" name="nama" class="form-control" placeholder="Masukkan Nama Produk">
											<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Deskripsi</label>
										<div class="col-sm-10">
											<input type="text" value="<?= $produk->deskripsi ?>" name="deskripsi" class="form-control" placeholder="Masukkan Deskripsi">
											<?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Harga</label>
										<div class="col-sm-10">
											<input type="text" value="<?= $produk->harga ?>" name="harga" class="form-control" placeholder="Masukkan Harga">
											<?= form_error('harga', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Stok</label>
										<div class="col-sm-10">
											<input type="number" value="<?= $produk->stok ?>" name="stok" class="form-control" placeholder="Masukkan Stok">
											<?= form_error('stok', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-2 col-form-label">Gambar</label>
										<div class="col-sm-10">
											<input type="file" name="gambar" class="form-control" placeholder="Masukkan Gambar">
											<?= form_error('gambar', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-10">
											<button type="submit" class="btn btn-success">Simpan</button>
											<a href="<?= base_url('Backend/cProduk') ?>" class="btn btn-danger">Kembali</a>
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
