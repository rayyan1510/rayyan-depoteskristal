<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="ID-id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login || Depot Es Kristal</title>

    <!-- css, font and icon end admin lte -->
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/fontawesome-free/css/all.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css', 'adminlte'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('css/adminlte.min.css', 'adminlte'); ?>">
    <!-- admin lte -->
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <script src="<?php echo get_theme_uri('plugins/jquery/jquery.min.js', 'adminlte'); ?>"></script>
    <script src="<?php echo get_theme_uri('plugins/bootstrap/js/bootstrap.bundle.min.js', 'adminlte'); ?>"></script>
</head>

<body class="hold-transition login-page">
    <!-- login box -->
    <div class="login-box">
        <div class="login-logo">
            <a href=""><b>Login</b> Depot Es Kristal</a>
        </div>

        <!-- login card -->
        <div class="card">
            <div class="card-body login-card-body">
                <div class=" w3l-login-form">
                    <p class="login-box-msg">Login Akun</p>
                    <!-- jika ada error dalam proses login -->
                    <?php if ($flash_message) : ?>
                        <div class="flash-message">
                            <?php echo $flash_message; ?>
                        </div>
                    <?php endif; ?>

                    <!-- <?php if ($redirection) : ?>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                            Silahkan login untuk melanjutkan...
                        </div>
                    <?php endif; ?> -->
                    <!--  -->

                    <!-- form -->
                    <?php echo form_open('auth/login/do_login'); ?>
                    <!-- username -->
                    <div class="input-group mb-3 ">
                        <input type="text" name="username" value="<?php echo set_value('username', $old_username); ?>" class="form-control" placeholder="Username" minlength="4" maxlength="16" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <?php echo form_error('username'); ?>
                    </div>
                    <!-- end username -->

                    <!-- password -->
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <?php echo form_error('password'); ?>
                    </div>
                    <!-- end password -->

                    <!-- section remember me and forgot password -->
                    <!-- <div class="row">
                        <div class="col-8">
                            <div class="forgot">
                                <?php echo anchor('auth/forget-password', 'Lupa password?'); ?>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember_me" id="remember" value="1">
                                <label for="remember">Ingat Saya</label>
                            </div>
                        </div>
                    </div> -->
                    <!-- end section remember me and forgot password -->

                    <!-- btn submit -->
                    <div class="row mb-2">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </div>
                    <!-- btn submit -->

                    <?php echo form_close(); ?>
                    <!-- end form -->

                    <!-- btn kembali ke beranda -->
                    <div class="row mb-2">
                        <div class="col">
                            <a href="<?php echo base_url(); ?>" class="btn btn-block btn-outline-secondary">Kemabali Ke Beranda</a>
                        </div>
                    </div>
                    <!-- btn kembali ke beranda -->

                    <p class="mb-0">
                        <a href="<?php echo site_url('auth/register'); ?>" class="text-center">Belum Punya Akun? Klik Disini</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- end login card -->


    </div>
    <!-- end login bos -->

    <!-- js template -->
    <script src="<?php echo get_theme_uri('js/adminlte.js', 'adminlte'); ?>"></script>
</body>

</html>