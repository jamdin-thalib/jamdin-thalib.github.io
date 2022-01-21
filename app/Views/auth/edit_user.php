	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
			  Data Tables
			  <small>advanced tables</small>
			</h1>
			<ol class="breadcrumb">
			  <li><a href="<?php echo site_url("auth");?>"><i class="fa fa-dashboard"></i> Home</a></li>
			  <li><a href="<?php echo site_url("auth");?>"><?php echo lang('index_heading');?></a></li>
			  <li class="active"><?php echo lang('edit_user_heading');?></li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<i class="ion ion-clipboard"></i>
							<h3 class="box-title"><?php echo lang('edit_user_subheading');?></h3>
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
						<?php echo form_open(uri_string(),array("role"=>"form"));?>
						  <div class="box-body">
							<div class="form-group">
								<?php echo lang('edit_user_fname_label', 'first_name');?> <br />
								<?php echo form_input('first_name',set_value('first_name',$user->first_name),'class="form-control" required="required"');?>
							</div>
							<div class="form-group">
								<?php echo lang('edit_user_lname_label', 'last_name');?> <br />
								<?php echo form_input('last_name',set_value('last_name',$user->last_name),'class="form-control" required="required"');?>
							</div>
							<div class="form-group">
								<?php echo lang('edit_user_company_label', 'company');?> <br />
								<?php echo form_input('company',set_value('company',$user->company),'class="form-control" required="required"');?>
							</div>
							<div class="form-group">
								<?php echo lang('edit_user_phone_label', 'phone');?> <br />
								<?php echo form_input('phone',set_value('phone',$user->phone),'class="form-control" required="required"');?>
							</div>
							<div class="form-group">
								<?php echo lang('edit_user_password_label', 'password');?> <br />
								<?php echo form_input('password','','class="form-control"');?>
							</div>
							<div class="form-group">
								<?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
								<?php echo form_input('password_confirm','','class="form-control"');?>
							</div>
							 <div class="checkbox">
								<?php if ($this->ion_auth->is_admin()): ?>
									<h3><?php echo lang('edit_user_groups_heading');?></h3>
									<?php foreach ($groups as $group):?>
									  <label>
									  <?php
											$gID=$group['id'];
											$checked = null;
											$item = null;
											foreach($currentGroups as $grp) {
												 if ($gID == $grp->id) {
													  $checked= ' checked="checked"';
												 break;
												 }
											}
									  ?>
									  <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
									  <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
									  </label>
									<?php endforeach?>
								<?php endif ?>
							 </div>
						<?php echo form_hidden('id', $user->id);?>
						  </div>
						  <!-- /.box-body -->

						  <div class="box-footer">
							 <button type="submit" class="btn btn-primary"><?php echo lang('edit_user_submit_btn');?></button>
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