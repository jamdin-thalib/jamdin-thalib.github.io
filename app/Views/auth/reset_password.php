<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $title; ?> | bolmutkab.go.id</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="<?= base_url('assets/admin/bootstrap/dist/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/Ionicons/css/ionicons.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/AdminLTE.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/bootstrap-material-design.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/ripples.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/dist/css/MaterialAdminLTE.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/sweetalert2/dist/sweetalert2.min.css') ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?= site_url() ?>">bolmutkab<b>.go.id</b></a>
        </div>
        <div class="login-box-body">
            <p class="login-box-msg"><?= lang('Auth.reset_password_heading');?> <br> <?= $message; ?> </p>
            <?= form_open('admin/auth/reset_password/' . $code, array("class" => "mode2")); ?>
            <div class="form-group has-feedback item">
                <input type="password" name="new" id='new' class="form-control" placeholder="<?= sprintf(lang('Auth.reset_password_new_password_label'), $minPasswordLength) ?> " required="required" data-validate-length-range="8,15" >
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback item">
                <input type="password" name="new_confirm" id="new_confirm" class="form-control" placeholder="<?= lang('Auth.reset_password_new_password_confirm_label');?>" data-validate-linked="new" required="required">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-7">
                    
                </div>
                <div class="col-xs-5">
                    <input type="hidden" name="user_id" value="<?= $user_id; ?>" id="user_id" />
                    <?= form_submit('submit', lang('Auth.reset_password_submit_btn'), 'class="btn btn-primary btn-raised btn-block btn-flat"'); ?>
                </div>
            </div>
            <?= form_close(); ?>
        </div>
    </div>
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
                            position:'top',
                            title: 'Request reset password',
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
                    },success: function(response) {
                        var data = $.parseJSON(response);
                        swal.fire({
                            position: 'top',
                            icon    :data.type,
                            title   :data.title,
                            html    :data.text,
                            showConfirmButton: false,
                            timer   : 1500
                        }).then((result) => {
                            if(data.type == 'success'){
                                window.location.replace('<?= site_url('login') ?>');
                            }else{
                                window.location.replace('<?= site_url('admin/auth/reset_password/' . $code) ?>');
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
