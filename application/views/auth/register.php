<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ID-id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title Page-->
    <title>Daftar Akun</title>

    <!-- css, font and icon end admin lte -->
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/fontawesome-free/css/all.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('css/adminlte.min.css', 'adminlte'); ?>">
    <!-- admin lte -->

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <script src="<?php echo get_theme_uri('plugins/jquery/jquery.min.js', 'adminlte'); ?>"></script>
    <script src="<?php echo get_theme_uri('plugins/bootstrap/js/bootstrap.bundle.min.js', 'adminlte'); ?>"></script>
</head>

<body class="hold-transition register-page">
    <!-- register box -->
    <div class="register-box">
        <div class="register-logo">
            <a href=""><b>Buat Akun</b> Depot Es Kristal</a>
        </div>

        <!-- card -->
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Buat Akun</p>

                <?php echo form_open('auth/register/verify'); ?>
                <!-- row pertama -->
                <div class="row">
                    <div class="col-6">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" placeholder="Username" minlength="4" maxlength="16" name="username" value="<?php echo set_value('username'); ?>" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                            <?php echo form_error('username'); ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group">
                            <input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            <?php echo form_error('password'); ?>
                        </div>
                    </div>
                </div>
                <!-- end row pertama -->

                <!-- row kedua -->
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Nama lengkap" name="name" value="<?php echo set_value('name'); ?>" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    <?php echo form_error('name'); ?>
                </div>
                <!-- end row kedua -->

                <!-- row 3 -->
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="input-group">
                            <input class="form-control" type="number" placeholder="No. HP" minlength="9" maxlength="15" name="phone_number" value="<?php echo set_value('phone_number'); ?>" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-phone"></span>
                                </div>
                            </div>
                            <?php echo form_error('phone_number'); ?>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group">
                            <input class="form-control" minlength="10" type="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>" required>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            <?php echo form_error('email'); ?>
                        </div>
                    </div>
                </div>
                <!-- end row 3 -->

                <!-- row 4 -->
                <div class="input-group mb-3">
                    <input class="form-control" type="text" placeholder="Alamat" name="address" value="<?php echo set_value('address'); ?>" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-map-marker-alt"></span>
                        </div>
                    </div>
                    <?php echo form_error('address'); ?>
                </div>
                <!-- end row 4 -->

                <button class="btn btn-primary btn-block" type="submit">Daftar</button>
                <?php echo form_close(); ?>

                <!-- btn kembali ke beranda -->
                <div class="row mt-2 mb-2">
                    <div class="col">
                        <a href="<?php echo base_url(); ?>" class="btn btn-block btn-outline-secondary">Kemabali Ke Beranda</a>
                    </div>
                </div>
                <!-- btn kembali ke beranda -->

                <p class="mb-0">
                    <a href="<?php echo site_url('auth/login'); ?>" class="text-center">Sudah Punya Akun? Klik Disini</a>
                </p>
            </div>
        </div>
        <!-- end card -->
    </div>



    <!-- js template -->
    <script src="<?php echo get_theme_uri('js/adminlte.js', 'adminlte'); ?>"></script>

</body>

</html>
<!-- end document-->