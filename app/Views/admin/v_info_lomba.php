<?= $this->include('layout/header') ?>
<!-- Tambah Style -->
<!-- DataTable -->
<link rel="stylesheet" href="<?= base_url('vendors/simple-datatables/style.css') ?>">

<?= $this->include('layout/sidebar') ?>
<?= $this->include('layout/navbar') ?>

<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Informasi Lomba</h3>
                    <p class="text-subtitle text-muted">Informasi Lomba - Lomba</p>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4>Tabel Informasi Lomba</h4>
                </div>
                <div class="card-body">
                    <!-- Participant Table -->
                    <table class="table table-sm table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Nama Lomba</th>
                                <th>Kategori Lomba</th>
                                <th>Pembukaan Pendaftaran</th>
                                <th>Penutupan Pendaftaran</th>
                                <th>Koordinator</th>
                                <th>Jumlah Peserta</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CPC</td>
                                <td>SMA</td>
                                <td>17-08-2021</td>
                                <td>20-09-2021</td>
                                <td>M. Bintang Firdaus</td>
                                <td>15</td>
                                <td>
                                    <a href="/admin/lomba/info/edit" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Fotografi</td>
                                <td>Umum</td>
                                <td>17-08-2021</td>
                                <td>20-09-2021</td>
                                <td>M. Firdaus Bintang</td>
                                <td>10</td>
                                <td>
                                    <a href="/admin/lomba/info/edit" class="btn btn-sm btn-warning">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Participant Table -->
                </div>
            </div>
        </section>
    </div>

    <?= $this->include('layout/footer_comment') ?>
    <!-- Tambah Script -->
    	<!-- Table Database -->
	<script src="<?= base_url('vendors/simple-datatables/simple-datatables.js') ?>"></script>
	<script>
		// Simple Datatable
		let table1 = document.querySelector('#table1');
		let dataTable = new simpleDatatables.DataTable(table1);
	</script>
    <?= $this->include('layout/footer') ?>