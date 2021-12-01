<?= $this->include('user_layout/header') ?>
<!-- Tambah Style -->
<!-- Chart -->
<link rel="stylesheet" href="<?= base_url('vendors/apexcharts/apexcharts.css') ?>">

<?= $this->include('user_layout/sidebar') ?>
<?= $this->include('user_layout/navbar') ?>

<div id="main-content">
	<div class="page-heading">
		<div class="page-title">
			<div class="row">
				<div class="col-12 col-md-6 order-md-1 order-last">
					<h3>Dashboard User</h3>
					<!-- <p class="text-subtitle text-muted">Deskripsi singkat</p> -->
				</div>
			</div>
		</div>
		<section class="section">
			<div class="row">
				<div class="col-4">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">CPC</h4>
						</div>
						<div class="card-body">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis
							laudantium tempore
							exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio
							reprehenderit
							distinctio incidunt! Vel aspernatur dicta consequatur!
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-primary mb-3">Daftar</button>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">LCT</h4>
						</div>
						<div class="card-body">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis
							laudantium tempore
							exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio
							reprehenderit
							distinctio incidunt! Vel aspernatur dicta consequatur!
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-primary mb-3">Daftar</button>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<?= $this->include('user_layout/footer_comment') ?>
	<!-- Tambah Script -->
	<!-- Chart -->
	<script src="<?= base_url('vendors/dayjs/dayjs.min.js') ?>"></script>
	<script src="<?= base_url('vendors/apexcharts/apexcharts.js') ?>"></script>
	<script src="<?= base_url('js/pages/ui-apexchart.js') ?>"></script>

	<?= $this->include('user_layout/footer') ?>