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
                    <h3>Kategori Peserta</h3>
                    <p class="text-subtitle text-muted">Data Peserta di Web Lomba</p>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4>Data Peserta</h4>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-sm btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-tambah">
                        <i class="bi bi-pencil-square"></i> Tambah Kategori
                    </button>
                    <table class="table table-sm table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori Peserta</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kategori as $i => $row) : ?>
                                <tr>
                                    <td><?= $i + 1; ?></td>
                                    <td><?= $row['kategori']; ?></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modal-edit">
                                            <i class="bi bi-receipt"></i>
                                        </button>
                                        <!-- <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modal-validasi">
                                        <i class="bi bi-check-circle"></i>
                                    </button> -->
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-hapus">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section>
            <!-- Hapus -->
            <form action="/admin/delete" method="post">
                <div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                    Hapus Lomba
                                </h5>
                            </div>
                            <div class="modal-body">
                                <p class="d-flex justify-content-center">
                                    Apakah Anda yakin ingin menghapus kategori lomba ini?
                                </p>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id" class="lomba_id">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Batal</span>
                                </button>
                                <button type="button" class="btn btn-danger ml-1" data-bs-dismiss="modal">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Hapus</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!-- Tambah -->
            <form action="/admin/save" method="post">
                <div class="modal fade" id="modal-tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenterTitle">
                                    Tambah Kategori
                                </h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Kategori Peserta</label>
                                    <input type="text" name="kategori" class="form-control" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Batal</span>
                                </button>
                                <button type="submit" class="btn btn-primary ml-1">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Tambah</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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