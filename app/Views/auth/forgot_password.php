<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?> | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets/admin/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/Ionicons/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/AdminLTE.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/bootstrap-material-design.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/ripples.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/MaterialAdminLTE.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/sweetalert2/dist/sweetalert2.all.min.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="<?= site_url('admin/auth/forgot_password') ?>"><?= lang('Auth.forgot_password_heading'); ?></a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">
            <?= sprintf(lang('Auth.forgot_password_subheading'), $identity_label); ?>
            <?= $message; ?>
        </div>
        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="<?= base_url('assets/img/fp-128x128.png') ?>" alt="User Image">
            </div>
            <!-- /.lockscreen-image -->
            <!-- lockscreen credentials (contains the form) -->
            <?= form_open('admin/auth/forgot_password',array('class'=>'lockscreen-credentials mode2')); ?>
                <div class="input-group item">
                    <input type="<?php echo (($type === 'email') ? 'email' : 'text'); ?>" name="identity" id="identity" class="form-control" placeholder="<?php echo (($type === 'email') ? sprintf(lang('Auth.forgot_password_email_label'), $identity_label) : sprintf(lang('Auth.forgot_password_identity_label'), $identity_label)); ?>" required >
                    <div class="input-group-btn">
                        <button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
                    </div>
                </div>
            </form>
            <!-- /.lockscreen credentials -->
        </div>
        <div class="lockscreen-footer text-center">
            Copyright &copy; 2014-2018 <a href="http://almsaeedstudio.com"><b>Almsaeed Studio</b></a>, <br>
            <a href="https://fezvrasta.github.io"><b>Federico Zivolo</b></a> and <a href="https://ducthanhnguyen.github.io"><b>Thanh Nguyen</b></a>. All rights reserved
        </div>
    </div>
    <!-- /.center -->
    <script src="<?= base_url('assets/admin/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/dist/js/material.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/dist/js/ripples.min.js') ?>"></script>
    <script src="<?= base_url('assets/admin/sweetalert2/dist/sweetalert2.all.min.js'); ?>"></script>
    <script src="<?= base_url('assets/admin/validator.js'); ?>"></script>
    <script>
        $.material.init();
        $('form').on('blur', 'input[required], input.optional, select.required', validator.checkField).on('change', 'select.required', validator.checkField).on('keypress', 'input[required][pattern]', validator.keypress);
        $('.multi.required').on('keyup blur', 'input', function() {
            validator.checkField.apply($(this).siblings().last()[0]);
        });
        $('form').submit(function(e) {
            e.preventDefault();
            if (!validator.checkAll($(this))) {
                false;
            } else {
                $.ajax({
                    url: $(this).attr("action"),
                    type: 'post',
                    data: $("form").serialize(),
                    beforeSend: function() {
                        let timerInterval
                        Swal.fire({
                            position: 'top',
                            title: 'Request Reset Password',
                            html: 'Mohon Tunggu Sebentar in <b></b> milliseconds.',
                            timer: 2000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        })
                    },
                    success: function(response) {
                        var data = $.parseJSON(response);
                        swal.fire({
                            position: 'top',
                            icon: data.type,
                            title: data.title,
                            html: data.text
                        }).then((result) => {
                            if (data.type == 'success') {
                                window.location.replace('<?= site_url('login') ?>');
                            }
                        });
                    },
                    error: function(jqXHR, exception, thrownError) {
                        swal.fire({
                            title: "Error code" + jqXHR.status,
                            html: thrownError + ", " + exception,
                            icon: "error"
                        }).then((result) => {
                            $("#spinner").hide();
                        });
                    }
                });
            }
        });
    </script>
</body>

</html>