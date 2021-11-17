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
                    <h3>Kategori Lomba</h3>
                    <p class="text-subtitle text-muted">Data Lomba di Web Lomba</p>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4>Data Perlombaan</h4>
                </div>
                <div class="card-body">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-tambah">
                    <i class="bi bi-pencil-square"></i> Tambah Lomba
                </button>
                <table class="table table-sm table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Lomba</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($lomba as $i => $row) : ?>
                            <tr>
                                <td><?= $i + 1; ?></td>
                                <td><?= $row['nama_lomba']; ?></td>
                                <td>
                                    <?php if ($row['status'] == 1) : ?>
                                        <span class="badge bg-success">Aktif</span>
                                    <?php else : ?>
                                        <span class="badge bg-danger">Non Aktif</span>
                                    <?php endif; ?>
                                </td>
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
                                    Tambah Lomba
                                </h5>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Lomba</label>
                                    <input type="text" name="nama_lomba" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-select" required>
                                        <option value="" selected disabled>Pilih</option>
                                        <?php foreach ($status as $row) : ?>
                                            <option value="<?= $row->id; ?>"><?= $row->status; ?></option>
                                        <?php endforeach; ?>
                                    </select>
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
<!-- ... -->
<?= $this->include('layout/footer') ?>