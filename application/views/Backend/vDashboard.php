<div class="pcoded-content">
	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<?php
				$classic = $this->db->query("SELECT COUNT(id_pelanggan) as jml FROM `pelanggan` WHERE level_member='1'")->row();
				$silver = $this->db->query("SELECT COUNT(id_pelanggan) as jml FROM `pelanggan` WHERE level_member='2'")->row();
				$gold = $this->db->query("SELECT COUNT(id_pelanggan) as jml FROM `pelanggan` WHERE level_member='3'")->row();
				?>
				<div class="page-body">
					<div class="row">
						<!-- card1 start -->
						<div class="col-md-6 col-xl-4">
							<div class="card widget-card-1">
								<div class="card-block-small">
									<i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
									<span class="text-c-blue f-w-600">Member Classic</span>
									<h4><?= $classic->jml ?> pelanggan</h4>
								</div>
							</div>
						</div>
						<!-- card1 end -->
						<!-- card1 start -->
						<div class="col-md-6 col-xl-4">
							<div class="card widget-card-1">
								<div class="card-block-small">
									<i class="icofont icofont-ui-home bg-c-pink card1-icon"></i>
									<span class="text-c-pink f-w-600">Member Silver</span>
									<h4><?= $silver->jml ?> pelanggan</h4>
								</div>
							</div>
						</div>
						<!-- card1 end -->
						<!-- card1 start -->
						<div class="col-md-6 col-xl-4">
							<div class="card widget-card-1">
								<div class="card-block-small">
									<i class="icofont icofont-warning-alt bg-c-green card1-icon"></i>
									<span class="text-c-green f-w-600">Member Gold</span>
									<h4><?= $gold->jml ?> pelanggan</h4>
								</div>
							</div>
						</div>


					</div>
				</div>
			</div>

			<div id="styleSelector">

			</div>
		</div>
	</div>
</div>
</div>
</div>

</div>
</div>