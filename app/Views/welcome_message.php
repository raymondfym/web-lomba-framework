<?= $this->include('layout/header') ?>
<!-- Tambah Style -->
<!-- ... -->
<?= $this->include('layout/sidebar') ?>
<?= $this->include('layout/navbar') ?>

			<div id="main-content">
				<div class="page-heading">
					<div class="page-title">
						<div class="row">
							<div class="col-12 col-md-6 order-md-1 order-last">
								<h3>Judul Halaman</h3>
								<p class="text-subtitle text-muted">Deskripsi singkat</p>
							</div>
						</div>
					</div>
					<section class="section">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Contoh Card Isi</h4>
							</div>
							<div class="card-body">
								Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur quas omnis
								laudantium tempore
								exercitationem, expedita aspernatur sed officia asperiores unde tempora maxime odio
								reprehenderit
								distinctio incidunt! Vel aspernatur dicta consequatur!
							</div>
						</div>
					</section>
				</div>

<?= $this->include('layout/footer_comment') ?>
<!-- Tambah Script -->
<!-- ... -->
<?= $this->include('layout/footer') ?>
