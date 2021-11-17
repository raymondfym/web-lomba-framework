<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Lomba</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
    <!-- Chart -->
    <link rel="stylesheet" href="<?= base_url('vendors/apexcharts/apexcharts.css') ?>">

    <!-- DataTable -->
    <link rel="stylesheet" href="<?= base_url('vendors/simple-datatables/style.css') ?>">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?= base_url('vendors/sweetalert2/sweetalert2.min.css') ?>">

    <link rel="stylesheet" href="<?= base_url('vendors/perfect-scrollbar/perfect-scrollbar.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendors/bootstrap-icons/bootstrap-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/app.css') ?>">
    <link rel="icon" href="<?= base_url('images/logoUnila.png') ?>">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <!-- <a href="index.html"><img src="images/logo/logo.png" alt="Logo" srcset=""></a> -->
                            <h3>Web Lomba</h3>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item ">
                            <a href="/admin" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-trophy-fill"></i>
                                <span>Lomba</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="/admin/cpc">
                                        <i class="bi bi-circle"></i>
                                        CPC
                                    </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/admin/lct">
                                        <i class="bi bi-circle"></i>
                                        LCT
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-trophy-fill"></i>
                                <span>Settings</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="/admin/settings">
                                        <i class="bi bi-circle"></i>
                                        Kategori Lomba
                                    </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/settings">
                                        <i class="bi bi-circle"></i>
                                        Kategori Peserta
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-0'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-lg-0">
                                <div class="dropdown">
                                    <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div class="user-menu d-flex">
                                            <div class="user-name text-end me-3">
                                                <h6 class="mb-0 text-gray-600">Ucok</h6>
                                                <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                            </div>
                                            <div class="user-img d-flex align-items-center">
                                                <div class="avatar avatar-md">
                                                    <img src="<?= base_url('images/faces/1.jpg') ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Hello, Ucok!</h6>
                                        </li>

                                        <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>

            <?= $this->renderSection('content') ?>

        </div>
    </div>
    <script src="<?= base_url('vendors/perfect-scrollbar/perfect-scrollbar.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    <!-- Chart -->
    <script src="<?= base_url('vendors/dayjs/dayjs.min.js') ?>"></script>
    <script src="<?= base_url('vendors/apexcharts/apexcharts.js') ?>"></script>
    <script src="<?= base_url('js/pages/ui-apexchart.js') ?>"></script>

    <!-- Sweet Alert -->
    <script src="<?= base_url('js/extensions/sweetalert2.js') ?>"></script>
    <script src="<?= base_url('vendors/sweetalert2/sweetalert2.all.min.js') ?>"></script>

    <!-- Table Database -->
    <script src="<?= base_url('vendors/simple-datatables/simple-datatables.js') ?>"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="<?= base_url('js/main.js') ?>"></script>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {

            // get Edit Product
            $('.btn-edit').on('click', function() {
                // get data from button edit
                const id = $(this).data('id');
                const nama_lomba = $(this).data('nama');
                const status = $(this).data('status');
                // const category = $(this).data('category_id');
                // Set data to Form Edit
                $('.id').val(id);
                $('.nama_lomba').val(nama);
                $('.status').val(status);
                // $('.product_category').val(category).trigger('change');
                // Call Modal Edit
                $('#editModal').modal('show');
            });

            // get Delete Product
            $('.btn-delete').on('click', function() {
                // get data from button edit
                const id = $(this).data('id');
                // Set data to Form Edit
                $('.lomba_id').val(id);
                // Call Modal Edit
                $('#modal-hapus').modal('show');
            });
        });
    </script>
</body>

</html>