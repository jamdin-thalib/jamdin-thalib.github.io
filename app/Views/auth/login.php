<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Admin Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/img/logokominfo.png') ?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/style.css') ?>">
</head>

<body>
    <div class="color-line"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="back-link back-backend">
                    <a href="<?php echo base_url() ?>" class="btn btn-primary">Kembali Ke Dashboard</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3>Log In</h3>
                    <p>Silahkan Login Untuk Melengkapi Data dan Document Pendaftaran</p>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                    <?= form_open('auth/login', array("class" => "mode2")); ?>
                            <div class="form-group item">
                                <label class="control-label" for="identity">e-mail</label>
                                <input type="text" placeholder="example@gmail.com" title="Please enter you username" required name="identity" id="identity" class="form-control">
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div class="form-group item">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required name="password" id="password" class="form-control">
                                <span class="help-block small">Yur strong password</span>
                            </div>
                            <?= form_submit('submit', lang('Auth.login_submit_btn'), 'class="btn btn-primary btn-raised btn-block btn-flat"'); ?>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
            </div>
        </div>
    </div>
    <script src="<?= base_url('assets/backend/js/vendor/jquery-1.11.3.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/js/icheck/icheck.min.js') ?>"></script>
    <script src="<?= base_url('assets/backend/js/icheck/icheck-active.js') ?>"></script>
    <script src="<?= base_url('assets/backend/sweetalert2/sweetalert2.all.min.js'); ?>"></script>
    <script src="<?= base_url('assets/backend/validator.js')?>"></script>

    <script>
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
                            title: 'Request Login',
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
                                window.location.replace('<?= site_url('admin'); ?>')
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