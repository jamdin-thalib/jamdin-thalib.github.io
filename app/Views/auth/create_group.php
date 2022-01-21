	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
			  <?php echo lang('create_group_heading');?>
			</h1>
			<ol class="breadcrumb">
			  <li><a href="<?php echo site_url("ideas_admin");?>"><i class="fa fa-dashboard"></i> Home</a></li>
			  <li><a href="<?php echo site_url("auth");?>"><?php echo lang('index_heading');?></a></li>
			  <li class="active"><?php echo lang('create_group_heading');?></li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<i class="ion ion-clipboard"></i>
							<h3 class="box-title"><?php echo lang('create_group_subheading');?></h3>
							<!-- tools box -->
							<div class="pull-right box-tools">
								<!-- button with a dropdown -->
								<div class="btn-group">
									<button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>
									<ul class="dropdown-menu pull-right" role="menu">
										<li><?php echo anchor('auth/create_user', lang('index_create_user_link'))?></li>
										<li><?php echo anchor('auth/create_group', lang('index_create_group_link'))?></li>
										<li class="divider"></li>
										<li><a href="#">View calendar</a></li>
									</ul>
								</div>
								<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
								<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>			</button>
							</div>
							<!-- /. tools -->
						</div>
						<!-- /.box-header -->
						<?php echo form_open("auth/create_group",array("role"=>"form"));?>
						  <div class="box-body">
							<?php echo $message;?>
							 <div class="form-group">
								<?php echo lang('create_group_name_label', 'group_name');?> <br />
								<?php echo form_input($group_name);?>
							 </div>
							 <div class="form-group">
								<?php echo lang('create_group_desc_label', 'description');?> <br />
								<?php echo form_input($description);?>
							 </div>
						  </div>
						  <!-- /.box-body -->

						  <div class="box-footer">
							 <button type="submit" class="btn btn-primary"><?php echo lang('create_group_submit_btn');?></button>
						  </div>
						<?php echo form_close();?>
					</div>
				 <!-- /.box -->
				</div>
			  <!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
    <!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
