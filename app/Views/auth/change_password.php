<div class="content-wrapper">
	<section class="content-header">
		<h1>
			<?php echo lang('change_password_heading');?>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo site_url("ideas_admin");?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo site_url("auth");?>"><?php echo lang('index_heading');?></a></li>
			<li class="active"><?php echo lang('change_password_heading');?></li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-xs-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<i class="ion ion-clipboard"></i>
						<h3 class="box-title"><?php echo lang('change_password_heading');?></h3>
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>			</button>
						</div>
					</div>
					<?php echo form_open("auth/change_password",array("role"=>"form"));?>
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
							<?php echo form_input('company',set_value('company',$user->company),'class="form-control"');?>
						</div>
						<div class="form-group">
							<?php echo lang('edit_user_email_label', 'email');?> <br />
							<?php echo form_input('email',set_value('email',$user->email),'class="form-control" required="required"');?>
						</div>
						<div class="form-group">
							<?php echo lang('edit_user_phone_label', 'phone');?> <br />
							<?php echo form_input('phone',set_value('phone',$user->phone),'class="form-control" required="required"');?>
						</div>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary"><?php echo lang('edit_user_submit_btn');?></button>
					</div>
					<?php echo form_close();?>
				</div>
			</div>
			<div class="col-xs-6">
				<div class="box box-primary">
					<div class="box-header with-border">
						<i class="ion ion-clipboard"></i>
						<h3 class="box-title"><?php echo lang('change_password_heading');?></h3>
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>			</button>
						</div>
					</div>
					<?php echo form_open("auth/change_password",array("role"=>"form"));?>
					<div class="box-body">
						<?php echo $message;?>
						<div class="form-group">
							<?php echo lang('change_password_old_password_label', 'old_password');?> <br />
							<?php echo form_input($old_password);?>
						</div>
						<div class="form-group">
							<label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
							<?php echo form_input($new_password);?>
						</div>
						<div class="form-group">
							<?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
							<?php echo form_input($new_password_confirm);?>
						</div>
						<?php echo form_input($user_id);?>
					</div>
					<div class="box-footer">
						<button type="submit" class="btn btn-primary"><?php echo lang('change_password_submit_btn');?></button>
					</div>
					<?php echo form_close();?>
				</div>
			</div>
		</div>
	</section>
</div>

