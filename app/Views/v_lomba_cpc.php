<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>

<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Peserta CPC</h3>
                </div>
            </div>
        </div>
        <div class="card">
            <!-- <div class="card-header">
                                Simple Datatable
                            </div> -->
            <div class="card-body">
                <table class="table table-sm table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graiden</td>
                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                            <td>076 4820 8838</td>
                            <td>Offenburg</td>
                            <td>
                                <span class="badge bg-danger">Inactive</span>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modal-detail">
                                    <i class="bi bi-receipt"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modal-validasi">
                                <i class="bi bi-check-circle"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#modal-hapus">
                                <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Dale</td>
                            <td>fringilla.euismod.enim@quam.ca</td>
                            <td>0500 527693</td>
                            <td>New Quay</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">
                                    <i class="bi bi-receipt"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-success">
                                    <i class="bi bi-check-circle"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>Nathaniel</td>
                            <td>mi.Duis@diam.edu</td>
                            <td>(012165) 76278</td>
                            <td>Grumo Appula</td>
                            <td>
                                <span class="badge bg-danger">Inactive</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-warning">
                                    <i class="bi bi-receipt"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-success">
                                    <i class="bi bi-check-circle"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </section>
    </div>

    <div>
        <section>
            <!-- Modal -->
    <!-- Detail -->
    <div class="modal fade" id="modal-detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        Data Peserta
                    </h5>
                </div>
                <div class="modal-body">
                    <table class="table table-striped">
                        <tr>
                            <td>Nama</td>
                            <td>Graiden</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Validasi -->
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
                        Validasi akun Gaiden?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Hapus -->
    <div class="modal fade" id="modal-validasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        Data Peserta
                    </h5>
                </div>
                <div class="modal-body">
                    <p class="d-flex justify-content-center"> 
                        Hapus akun Gaiden?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Accept</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
        </section>
    </div>

    <footer>
        <div class="footer clearfix mb-0 text-muted">
            <div class="float-end">
                <p>Made<span class="text-danger"></span> by
                    <a href="https://github.com/deana00">
                        Ardella Awalia
                    </a>
                    &
                    <a href="https://github.com/raymondfym" target="_blank">
                        Raymond Yandika
                    </a>
                </p>
            </div>
        </div>
    </footer>
</div>

<?= $this->endSection() ?>