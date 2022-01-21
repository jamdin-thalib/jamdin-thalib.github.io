<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ideas | <?php echo lang('reset_password_heading');?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo $this->config->item('assets');?>admin-ideas/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo $this->config->item('assets');?>admin-ideas/dist/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo $this->config->item('assets');?>admin-ideas/dist/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $this->config->item('assets');?>admin-ideas/dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo site_url("ideas_admin");?>"><b>Ideas</b> Publishing</a>
  </div>
  <!-- /.login-logo -->
	<div class="login-box-body">
		<p class="login-box-msg"><?php echo lang('reset_password_heading');?></p>
		<div id="infoMessage"><?php echo $message;?></div>
		<?php echo form_open('auth/reset_password/' . $code,array("role"=>"form"));?>		  
		  <div class="form-group has-feedback">
				<label for="new_password"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length);?></label> <br />
				<?php echo form_input($new_password);?>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		  </div>
		  <div class="form-group has-feedback">
				<?php echo lang('reset_password_new_password_confirm_label', 'new_password_confirm');?> <br />
				<?php echo form_input($new_password_confirm);?>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		  </div>
		  <?php echo form_input($user_id);?>
		  <?php echo form_hidden($csrf); ?>
		  <div class="row">
			<div class="col-xs-8">
			</div>
			<!-- /.col -->
			<div class="col-xs-4">
			  <button type="submit" class="btn btn-primary btn-block btn-flat"><?php echo lang('reset_password_submit_btn');?></button>
			</div>
			<!-- /.col -->
		  </div>
		<?php echo form_close();?>
	</div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo $this->config->item('assets');?>plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $this->config->item('assets');?>admin-ideas/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
