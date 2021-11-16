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
                        <h4 class="card-title">Login</h4>
                    </div>

                    <div>
                        <div class="card-body">
                            <form class="form form-vertical" action="">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="email-id-icon">Email</label>
                                                        <div class="position-relative">
                                                            <input type="text" class="form-control" placeholder="Email" id="email-id-icon">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-envelope"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group has-icon-left">
                                                        <label for="password-id-icon">Password</label>
                                                        <div class="position-relative">
                                                            <input type="password" class="form-control" placeholder="Password" id="password-id-icon">
                                                            <div class="form-control-icon">
                                                                <i class="bi bi-lock"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class='form-check'>
                                                        <div class="checkbox mt-2">
                                                            <input type="checkbox" id="remember-me-v" class='form-check-input' checked>
                                                            <label for="remember-me-v">Remember Me</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary me-1 mt-4 ">Sign In</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <hr>
                                        <!-- <p class="d-flex justify-content-center">Atau</p> -->
                                    </div>
                                    <div class="div d-flex justify-content-center">
                                        <p>Belum punya akun? <a href="/register">daftar</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>