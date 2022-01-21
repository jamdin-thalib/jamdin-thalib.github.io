	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
			  <?php echo lang('deactivate_heading');?>
			</h1>
			<ol class="breadcrumb">
			  <li><a href="<?php echo site_url("ideas_admin");?>"><i class="fa fa-dashboard"></i> Home</a></li>
			  <li><a href="<?php echo site_url("auth");?>"><?php echo lang('index_heading');?></a></li>
			  <li class="active"><?php echo lang('deactivate_heading');?></li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<i class="ion ion-clipboard"></i>
							<h3 class="box-title"><?php echo lang('deactivate_heading');?></h3>
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
						<?php echo form_open("auth/deactivate/".$user->id,array("role"=>"form"));?>
						  <div class="box-body">
							 <div class="checkbox">
								<div class="callout callout-warning">
								 <h4>Warning!</h4>

								 <p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
							  </div>
								<label>
									 <?php echo lang('deactivate_confirm_y_label', 'confirm');?>
									 <input type="radio" name="confirm" value="yes" checked="checked" class="icheckbox_square-blue"/>
									 <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
									 <input type="radio" name="confirm" value="no" class="icheckbox_square-blue"/>
								</label>
							 </div>
							<?php echo form_hidden($csrf); ?>
							<?php echo form_hidden(array('id'=>$user->id)); ?>
						  </div>
						  <!-- /.box-body -->

						  <div class="box-footer">
							 <button type="submit" class="btn btn-primary"><?php echo lang('deactivate_submit_btn');?></button>
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