	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
			  <?php echo lang('index_heading');?>
			</h1>
			<ol class="breadcrumb">
			  <li><a href="<?php echo site_url("ideas_admin");?>"><i class="fa fa-dashboard"></i> Home</a></li>
			  <li><a href="<?php echo site_url("auth");?>"><?php echo lang('index_heading');?></a></li>
			</ol>
		</section>
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box box-primary">
						<div class="box-header with-border">
							<i class="ion ion-clipboard"></i>
							<h3 class="box-title"><?php echo lang('index_subheading');?></h3>
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
						<div class="box-body table-responsive">
							<?php echo $message; ?>
						  <table id="example1" class="table table-bordered table-striped table-hover">
							 <thead>
							 <tr>
								<th><?php echo lang('index_fname_th');?></th>
								<th><?php echo lang('index_lname_th');?></th>
								<th><?php echo lang('index_username_th');?></th>
								<th><?php echo lang('index_ip_address_th');?></th>
								<th><?php echo lang('index_email_th');?></th>
								<th><?php echo lang('index_groups_th');?></th>
								<th><?php echo lang('index_status_th');?></th>
								<th><?php echo lang('index_action_th');?></th>
							 </tr>
							 </thead>
							 <tbody>
								<?php foreach ($users as $user):?>
									<tr>
										<td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
										<td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
										<td><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></td>
										<td><?php echo htmlspecialchars($user->ip_address,ENT_QUOTES,'UTF-8');?></td>
										<td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
										<td>
											<?php foreach ($user->groups as $group):?>
												<?php 
													//echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8'),array("class"=>"btn btn-info btn-xs")) ;
													echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');
												?><br />
											<?php endforeach?>
										</td>
										<td>
											<?php echo ($user->active) ? 
												anchor("auth/deactivate/".$user->id, lang('index_active_link'),array("class"=>"btn btn-success btn-xs")) : 
												anchor("auth/activate/". $user->id, lang('index_inactive_link'),array("class"=>"btn btn-danger btn-xs"));
											?>
										</td>
										<td>
											<?php 
												echo anchor("auth/edit_user/".$user->id, 'Edit',array("class"=>"btn btn-primary btn-xs"));
												echo anchor("auth/detail_user/".$user->id, 'Detail',array("class"=>"btn btn-info btn-xs"));
											?>
										</td>
									</tr>
								<?php endforeach;?>
							 </tbody>
							 <tfoot>
							 <tr>
								<th><?php echo lang('index_fname_th');?></th>
								<th><?php echo lang('index_lname_th');?></th>
								<th><?php echo lang('index_username_th');?></th>
								<th><?php echo lang('index_ip_address_th');?></th>
								<th><?php echo lang('index_email_th');?></th>
								<th><?php echo lang('index_groups_th');?></th>
								<th><?php echo lang('index_status_th');?></th>
								<th><?php echo lang('index_action_th');?></th>
							 </tr>
							 </tfoot>
						  </table>
						</div>
						<!-- /.box-body -->
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