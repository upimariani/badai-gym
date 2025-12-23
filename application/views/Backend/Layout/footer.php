<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="<?= base_url('asset/guruable-master/') ?>assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="<?= base_url('asset/guruable-master/') ?>assets/pages/widget/amchart/serial.min.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="<?= base_url('asset/guruable-master/') ?>assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="<?= base_url('asset/guruable-master/') ?>assets/js/script.js"></script>
<script type="text/javascript " src="a<?= base_url('asset/guruable-master/') ?>ssets/js/SmoothScroll.js"></script>
<script src="<?= base_url('asset/guruable-master/') ?>assets/js/pcoded.min.js"></script>
<script src="<?= base_url('asset/guruable-master/') ?>assets/js/demo-12.js"></script>
<script src="<?= base_url('asset/guruable-master/') ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?= base_url('asset/chart/js_chart.js') ?>"></script>
<script>
	var $window = $(window);
	var nav = $('.fixed-button');
	$window.scroll(function() {
		if ($window.scrollTop() >= 200) {
			nav.addClass('active');
		} else {
			nav.removeClass('active');
		}
	});
</script>
<link href="<?= base_url('asset/') ?>datatables/datatables.min.css" rel="stylesheet">

<script src="<?= base_url('asset/') ?>datatables/datatables.min.js"></script>


<script>
	$('#myTable').DataTable({
		select: true
	});
	$('.tbl').DataTable({
		select: true
	});
</script>
<script>
	<?php
	$pelanggan = $this->db->query("SELECT COUNT(id_pelanggan) as jml, level_member FROM `pelanggan` GROUP BY level_member")->result();
	foreach ($pelanggan as $key => $value) {
		if ($value->level_member == '1') {
			$lev = 'Classic';
		} else if ($value->level_member == '2') {
			$lev = 'Silver';
		} else if ($value->level_member == '3') {
			$lev = 'Gold';
		}
		$dt_pelanggan[] = $value->jml;
		$member[] = $lev;
	}


	?>
	var ctx = document.getElementById('level_member');
	var grafik = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: <?= json_encode($member) ?>,
			datasets: [{
				label: 'Level Member Pelanggan',
				data: <?= json_encode($dt_pelanggan) ?>,
				backgroundColor: [
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
				],
				borderColor: [
					'rgba(255, 206, 86, 0.80)',
					'rgba(75, 192, 192, 0.80)',
					'rgba(153, 102, 255, 0.80)',
					'rgba(255, 159, 64, 0.80)',
				],
				color: '#666',
				fill: false,
				borderWidth: 1
			}]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>
</body>

</html>
