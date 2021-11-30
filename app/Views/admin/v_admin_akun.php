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
                    <h3>Akun Panitia</h3>
                    <p class="text-subtitle text-muted">Informasi Akun Panitia</p>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Akun Panitia</h4>
                        </div>
                        <div class="card-body">
                            <!-- Account Table -->
                            <table class="table table-sm table-striped">
                                <thead>
                                    <tr>
                                        <th>Warna Level</th>
                                        <th>Keterangan Level</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="badge bg-danger">Administrator</span></td>
                                        <td>Divisi Website</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge bg-warning">Operator</span></td>
                                        <td>Koordinator dan Sekretaris Lomba</td>
                                    </tr>
                                    <tr>
                                        <td><span class="badge bg-secondary">Pengamat</span></td>
                                        <td>Koordinator dan Sekretaris Kepanitiaan</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Account Table -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4>Data Akun Panitia</h4>
                </div>
                <div class="card-body">
                    <!-- Account Table -->
                    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-tambah-akun">
                        <i class="bi bi-pencil-square"></i> Tambah Lomba
                    </button>
                    <table class="table table-sm table-striped" id="table1">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Token Password</th>
                                <th>Divisi</th>
                                <th>Lever User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bejo_Y</td>
                                <td>Bejo</td>
                                <td>lomba_bejo</td>
                                <td>CPC</td>
                                <td><span class="badge bg-warning">Koor Lomba</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modal-edit">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-hapus">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- End Account Table -->
                </div>
            </div>
        </section>
        <!-- Modal Section -->
        <section>
            <!-- Modal Edit -->
            <div class="modal fade" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">
                                Data Akun
                            </h5>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <tr>
                                    <td>Nama</td>
                                    <td>Bejo</td>
                                </tr>
                                <tr>
                                    <td>Lomba</td>
                                    <td>CPC</td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>bejo_cpc@lomba.com</td>
                                </tr>
                                <tr>
                                    <td>Token Password</td>
                                    <td>test123</td>
                                </tr>
                                <tr>
                                    <td>Level User</td>
                                    <td><span class="badge bg-warning">Operator</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Close</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Hapus -->
            <div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">
                                Data Peserta
                            </h5>
                        </div>
                        <div class="modal-body">
                            <p class="d-flex justify-content-center">
                                Hapus akun Bejo?
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                <i class="bx bx-x d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Tidak</span>
                            </button>
                            <button type="button" class="btn btn-danger ml-1" data-bs-dismiss="modal">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Hapus</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Tambah Data -->
            <div class="modal fade" id="modal-tambah-akun" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">
                                Tambah Akun
                            </h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Token Password</label>
                                <input type="text" name="token_password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Divisi</label>
                                <input type="text" name="divition" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Level User</label>
                                <select class="form-control" name="user_level">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
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

        </section>
        <!-- End Modal Section -->
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