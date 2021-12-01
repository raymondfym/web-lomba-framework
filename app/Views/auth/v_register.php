<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Lomba</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('vendors/bootstrap-icons/bootstrap-icons.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/app.css') ?>">
    <link rel="icon" href="<?= base_url('images/logoUnila.png') ?>">
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="col-8 col-md-5 position-absolute top-50 start-50 translate-middle">
                <div class="card">
                    <div class="d-flex justify-content-center mt-3">
                        <!-- <img src="images/logoUnila.png" class="logo-login rounded img-thumbnail" alt="...">                         -->
                        <h4 class="card-title"><?= lang('Auth.register') ?></h4>
                    </div>

                    <div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <form class="form form-vertical">
                                        <div class="form-body">
                                            <div class="row">
                                                <?= view('Myth\Auth\Views\_message_block') ?>

                                                <form action="<?= route_to('register') ?>" method="post">
                                                    <?= csrf_field() ?>
                                                    <!-- Form Email -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon"><?= lang('Auth.email') ?></label>
                                                            <div class="position-relative">
                                                                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Form Nama Lengkap -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="name-id-icon">Nama Lengkap</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" id="name-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Form No Telepon -->
                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="phone-id-icon">Nomor Telepon</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="no_hp" placeholder="Nomor Telepon" id="phone-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-phone"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="password-id-icon"><?= lang('Auth.password') ?></label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="<?= lang('Auth.password') ?>" id="password-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-12">
                                                        <div class="form-group has-icon-left">
                                                            <label for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                                                            <div class="position-relative">
                                                                <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary me-1 my-3"><?= lang('Auth.register') ?></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="div d-flex justify-content-center">
                                            <p>Sudah punya akun? <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>