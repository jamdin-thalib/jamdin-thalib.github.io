<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Kominfo</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap-responsive.min.css')?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/maruti-login.css')?>" />
    </head>
    <body>
        <div id="loginbox">
            <form id="loginform" class="form-vertical" action="index.html">
                <div class="control-group normal_text"> <h3><img src="<?php echo base_url('assets/img/logokominfo.png')?>" alt="Logo" /></h3>
                    <p>LOGIN ADMIN</p>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="Username"/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" placeholder="Password"/>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="<?php echo base_url('home/backend')?>" class="flip-link btn btn-inverse" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-success" value="Login" /></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
                <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" class="span2"/>
                        </div>
                    </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-inverse" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><input type="submit" class="btn btn-info" value="Recover" /></span>
                </div>
            </form>
        </div>
        <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>  
        <script src="<?php echo base_url('assets/js/maruti.login.js')?>"></script> 
    </body>
</html>


