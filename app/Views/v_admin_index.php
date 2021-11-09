<?= $this->extend('layout/admin_layout') ?>
<?= $this->section('content') ?>

<div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 mb-2 order-last">
                                <h3>Dashboard</h3>
                                <!-- <p class="text-subtitle text-muted"></p> -->
                            </div>
                        </div>
                    </div>
                    <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Line Area Chart</h4>
                                </div>
                                <div class="card-body">
                                    <div id="area"></div>
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