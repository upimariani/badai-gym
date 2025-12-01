<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
	<div class="container">
		<div class="row g-4 align-items-center">
			<div class="col-md-6 text-center text-md-start mb-md-0">
				<span class="text-white"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Badai Gym</a>, All right
					reserved.</span>
			</div>
			<div class="col-md-6 text-center text-md-end text-white">

				<!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
				<!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
				<!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
				Implementasi Customer Relationship Management Analytical - Algoritma K-Means
			</div>
		</div>
	</div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('asset/Electro/') ?>lib/wow/wow.min.js"></script>
<script src="<?= base_url('asset/Electro/') ?>lib/owlcarousel/owl.carousel.min.js"></script>


<!-- Template Javascript -->
<script src="<?= base_url('asset/Electro/') ?>js/main.js"></script>

<script>
	$(document).ready(function() {
		$.ajax({
			type: "POST",
			url: "http://localhost/badai-gym/Frontend/Ongkir/provinsi",
			success: function(hasil_provinsi) {
				// console.log(hasil_provinsi);
				$("select[name=provinsi]").html(hasil_provinsi);
			}
		});
		$("select[name=provinsi]").on("change", function() {
			var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
			$.ajax({
				type: "POST",
				url: "http://localhost/badai-gym/Frontend/ongkir/kota",
				data: 'id_provinsi=' + id_provinsi_terpilih,
				success: function(hasil_kota) {
					$("select[name=kota]").html(hasil_kota);
				}
			});
		});
		$("select[name=kota]").on("change", function() {
			var id_kota_terpilih = $("option:selected", this).attr("id_kota");
			$.ajax({
				type: "POST",
				url: "http://localhost/badai-gym/Frontend/ongkir/kecamatan",
				data: 'id_kota=' + id_kota_terpilih,
				success: function(hasil_kecamatan) {
					// console.log(hasil_kecamatan);
					$("select[name=kecamatan]").html(hasil_kecamatan);
				}
			});
		});

		$("select[name=kecamatan]").on("change", function() {
			$.ajax({
				type: "POST",
				url: "http://localhost/badai-gym/Frontend/ongkir/expedisi",
				success: function(hasil_expedisi) {
					$("select[name=expedisi]").html(hasil_expedisi);
				}
			});
		});


		$("select[name=expedisi]").on("change", function() {
			//mendapatkan expedisi terpilih
			var expedisi_terpilih = $("select[name=expedisi]").val()

			//mendapatkan id kota tujuan terpilih
			var id_kecamatan_tujuan_terpilih = $("option:selected", "select[name=kecamatan]").attr('id_kecamatan');

			//alert(total_berat);
			$.ajax({
				type: "POST",
				url: "http://localhost/badai-gym/Frontend/ongkir/paket",
				data: 'expedisi=' + expedisi_terpilih + '&id_kecamatan=' + id_kecamatan_tujuan_terpilih + '&berat=1',
				success: function(hasil_paket) {
					console.log(hasil_paket);
					$("select[name=paket]").html(hasil_paket);
				}
			});
		});


		$("select[name=paket]").on("change", function() {
			//menampilkan ongkir
			var dataongkir = $("option:selected", this).attr('ongkir');
			var reverse = dataongkir.toString().split('').reverse().join(''),
				ribuan_ongkir = reverse.match(/\d{1,3}/g);
			ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');
			//alert(dataongkir);
			$("#ongkir").html("Rp. " + ribuan_ongkir)
			//menghitung total bayar
			var ongkir = $("option:selected", this).attr('ongkir');



			var total_bayar = parseInt(ongkir) + parseInt(<?= $this->cart->total() ?>);
			var reverse2 = total_bayar.toString().split('').reverse().join(''),
				ribuan_total = reverse2.match(/\d{1,3}/g);
			ribuan_total = ribuan_total.join(',').split('').reverse().join('');
			$(".ttl_bayar").html("Rp. " + ribuan_total);
			$(".bayar").html("Rp. " + ribuan_total);
			// console.log(ribuan_total);

			//estimasi dan ongkir
			var estimasi = $("option:selected", this).attr('estimasi');
			$("input[name=estimasi]").val(estimasi);
			$("input[name=ongkir]").val(dataongkir);
			$("input[name=total_pembayaran]").val(total_bayar);

		});

	});
</script>
<script>
	console.log = function() {}
	$("#paket").on('change', function() {

		$(".harga").html($(this).find(':selected').attr('data-harga'));
		$(".harga").val($(this).find(':selected').attr('data-harga'));

		$(".masa").html($(this).find(':selected').attr('data-masa'));
		$(".masa").val($(this).find(':selected').attr('data-masa'));

	});
</script>

</body>

</html>