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
                    <h3>Edit Lomba</h3>
                    <p class="text-subtitle text-muted">Deskripsi singkat</p>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Lomba (NAMA LOMBA)</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama_lomba" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" name="category" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Pembukaan Pendaftaran</label>
                            <input type="text" name="date_open" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Penutupan Pendaftaran</label>
                            <input type="text" name="date_close" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Koordinator</label>
                            <input type="text" name="coordinator" class="form-control" required>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary px-4 mx-2">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Edit</span>
                            </button>
                            <a href="/admin/lomba/info" class="btn btn-light-secondary px-3 mx-1">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Batal</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <?= $this->include('layout/footer_comment') ?>
    <!-- Tambah Script -->
    <!-- ... -->
    <?= $this->include('layout/footer') ?>