<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Register | diskominfo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/img/logokominfo.png') ?>">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/backend/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/sweetalert2/sweetalert2.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/backend/style.css') ?>">
</head>
<div class="color-line"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="back-link back-backend">
                <a href="<?= base_url('login') ?>" class="btn btn-primary">Kembali Ke Halaman Log In</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
            <div class="text-center custom-login">
                <h3>Registrasi</h3>
                <p>Silahkan Melakukan Registrasi Untuk Dapat Membuat Akun </p>
                <h3><span id="timer" style="color:red;"></span></h3>
            </div <div class="hpanel">
            <div class="panel-body">
                <?= form_open('auth/save', ["class" => "mode2"]) ?>
                <div class="row">
                    <div class="form-group col-lg-12 item">
                        <label>NIK</label>
                        <input type="text" class="form-control" id="nik" name="nik" placeholder="Nomor Induk Penduduk" required>
                    </div>
                    <div class="form-group col-lg-6 item">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="form-group col-lg-6 item">
                        <label>Tanggal Lahir</label>
                        <input type="date" class="form-control tanggal_lahir" id="tanggal_lahir" name="tanggal_lahir" required />
                    </div>
                    <div class="form-group col-lg-6 item">
                        <label>No HP</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="No HP" required data-validate-length-range="12,14">
                    </div>
                    <div class="form-group col-lg-6 item">
                        <label>Jabatan Yang Akan Dilamar</label>
                        <select name="jabatan" id="jabatan" class="form-control" required>
                            <option value="">Pilih Jabatan</option>
                            <option value="1">Programer</option>
                            <option value="2">Teknisi Jaringan</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-6 item">
                        <label>Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group col-lg-6 item">
                        <label>Repeat Password</label>
                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Konfirmasi Password" required data-validate-linked="password">
                    </div>
                    <div class="form-group col-lg-6 item">
                        <label>Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="email">
                    </div>
                    <div class="form-group col-lg-6 item">
                        <label>Repeat Email Address</label>
                        <input type="email" class="form-control" id="confirm-email" name="confirm-email" placeholder="Konfirmasi Email Address" required data-validate-linked="email">
                    </div>
                </div>
                <div class="text-center">
                    <input type="hidden" name="action" value="register" />
                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Register</button>
                    <a href="<?= site_url('login') ?>"><button type="button" class="btn btn-default">Discard</button></a>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
</div>
<div class="row">
    <div class="col-md-12 text-center">
        <p><i class="fa fa-telp"></i> Nara Hubung (Telp/WA): 0853-4239-4448 (Jamdin Thalib)</p>
        <p><h4> <span style="color:red;"> Note :  Bila Anda Tidak Menerima e-mail pada folder inbox, coba lihat pada folder spam dan tandai bukan sebagai spam </span></h4></p>
        <p>Copyright &copy; 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
    </div>
</div>
</div>
<script src="<?= base_url('assets/backend/js/vendor/jquery-1.11.3.min.js') ?>"></script>
<script src="<?= base_url('assets/backend/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('assets/backend/js/icheck/icheck.min.js') ?>"></script>
<script src="<?= base_url('assets/backend/js/icheck/icheck-active.js') ?>"></script>
<script src="<?= base_url('assets/backend/sweetalert2/sweetalert2.all.min.js'); ?>"></script>
<script src="<?= base_url('assets/backend/validator.js') ?>"></script>
<script>
    const countDownDate = <?= strtotime('05-02-2022 23:59:59') ?> * 1000;
    var timeNow = <?php print(time()) ?> * 1000;
    // Every second, the countdown will be updated.
    let i = setInterval(function() {
        timeNow = timeNow + 1000;
        // Calculate the time between now and the end of the countdown.
        let dist = countDownDate - timeNow;
        // Calculate the number of days, hours, minutes, and seconds in days, hours, minutes, and seconds.
        let numOfDays = Math.floor(dist / (1000 * 60 * 60 * 24));
        let hr = Math.floor((dist % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let min = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
        let sec = Math.floor((dist % (1000 * 60)) / 1000);
        // Put the result in an element with the id="timer" attribute.
        document.getElementById("timer").innerHTML = "Waktu Pendaftaran Tersisa " + numOfDays + " hari " + hr + " jam " + min + "m " + sec + "s ";
        <?php if (time() * 1000 < strtotime('01-02-2022 22:00:00')) { ?>
            document.getElementById("timer").innerHTML = "Pendaftaran Dimulai Pada Tanggal 01-02-2022";
        <?php } else { ?>
            if (dist < 0) {
                clearInterval(i);
                document.getElementById("timer").innerHTML = "Pendaftaran Telah Berakhir.";
            }
        <?php } ?>
    }, 1000);
    $('form').on('blur', 'input[required], input.optional, select.required', validator.checkField).on('change', 'select.required', validator.checkField).on('keypress', 'input[required][pattern]', validator.keypress);
    $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
    });
    $('form').submit(function(e) {
        e.preventDefault();

        if (!validator.checkAll($(this))) {
            return false;
        } else {
            $.ajax({
                url: $(this).attr("action"),
                type: 'post',
                data: $("form").serialize(),
                beforeSend: function() {
                    let timerInterval
                    Swal.fire({
                        //position: 'top',
                        title: 'Request Register',
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
                    Swal.fire({
                        //position: 'top',
                        icon: data.type,
                        title: data.title,
                        html: data.text,
                        showConfirmButton: true,
                        //timer   : 1500
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