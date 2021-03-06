<?= $this->include('layout/header') ?>
<!-- Tambah Style -->
<!-- Chart -->
<link rel="stylesheet" href="<?= base_url('vendors/apexcharts/apexcharts.css') ?>">

<?= $this->include('layout/sidebar') ?>
<?= $this->include('layout/navbar') ?>

			<div id="main-content">
				<div class="page-heading">
					<div class="page-title">
						<div class="row">
							<div class="col-12 col-md-6 order-md-1 order-last">
								<h3>Dashboard</h3>
								<p class="text-subtitle text-muted">Dashboard administrator</p>
							</div>
						</div>
					</div>
					<section class="section">
						<div class="card">
							<div class="card-header">
                                    <h4>Line Area Chart</h4>
                                </div>
                                <div class="card-body">
                                    <div id="area"></div>
                                </div>
						    </div>
						</div>
						
					</section>
				</div>

<?= $this->include('layout/footer_comment') ?>
<!-- Tambah Script -->
<!-- Chart -->
<script src="<?= base_url('vendors/dayjs/dayjs.min.js') ?>"></script>
<script src="<?= base_url('vendors/apexcharts/apexcharts.js') ?>"></script>
<script src="<?= base_url('js/pages/ui-apexchart.js') ?>"></script>

<?= $this->include('layout/footer') ?>