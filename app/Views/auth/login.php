<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url();?>plugin/admin/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>plugin/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>plugin/admin/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>plugin/admin/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>plugin/admin/css/main-style.css" rel="stylesheet" />

</head>

<body class="body-Login-back">

<div class="container">

    <div class="row">

        <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
            <img src="assets/img/logo.png" alt=""/>
        </div>
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <?php echo isset($message) ? $message : "";?>
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <?php echo form_open("auth/login");?>
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" name="identity" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                        </fieldset>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Core Scripts - Include with every page -->
<script src="<?php echo base_url();?>plugin/admin/plugins/jquery-1.10.2.js"></script>
<script src="<?php echo base_url();?>plugin/admin/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>plugin/admin/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>