<div class="content-wrapper">
    <section class="content-header">
        <h1>User Profile</h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User profile</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?= $session->foto; ?>" alt="User profile picture">
                        <h3 class="profile-username text-center"><?= $session->nama_user; ?></h3>
                        <p class="text-muted text-center"><?= $session->userlevel; ?></p>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Terkahir Login</b> <a class="pull-right"><?= $session->old_last_login; ?></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">About Me</h3>
                    </div>
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
                        <p class="text-muted">
                            B.S. in Computer Science from the University of Tennessee at Knoxville
                        </p>
                        <hr>
                        <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                        <p class="text-muted">Malibu, California</p>
                        <hr>
                        <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                        <p>
                            <span class="label label-danger">UI Design</span>
                            <span class="label label-success">Coding</span>
                            <span class="label label-info">Javascript</span>
                            <span class="label label-warning">PHP</span>
                            <span class="label label-primary">Node.js</span>
                        </p>
                        <hr>
                        <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                    </div>
                </div-->
            </div>
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Biodata</a></li>
                        <li><a href="#settings" data-toggle="tab">Ganti Password</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <div class="row">
                                <?= form_open_multipart("admin/auth/save_profile",array("class"=>"form-horizontal","id"=>"save_profile")) ?>
                                    <div class="col-sm-8">
                                        <div class="form-group mode2">
                                            <?= form_label(lang('Auth.edit_user_name_label'), 'nama_user',['class'=>'col-sm-2 control-label']);?>
                                            <div class="col-sm-10 item">
                                                <input type="text" name="nama_user" value="<?= isset($get->nama_user) ? $get->nama_user : ''; ?>" id="nama_user" class="form-control" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group mode2">
                                            <?= form_label(lang('Auth.edit_username_label'), 'username',['class'=>'col-sm-2 control-label']);?>
                                            <div class="col-sm-10 item">
                                                <input type="text" name="username" value="<?= isset($get->username) ? $get->username : ''; ?>" id="username" class="form-control" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group mode2">
                                            <?= form_label(lang('Auth.edit_user_email_label'), 'email',['class'=>'col-sm-2 control-label']);?>
                                            <div class="col-sm-10 item">
                                                <input type="text" name="email" value="<?= isset($get->email) ? $get->email : ''; ?>" id="email" class="form-control" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group mode2">
                                            <?= form_label(lang('Auth.edit_user_phone_label'), 'phone',['class'=>'col-sm-2 control-label']);?>
                                            <div class="col-sm-10 item">
                                                <input type="text" name="phone" value="<?= isset($get->phone) ? $get->phone : ''; ?>" id="phone" class="form-control" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <input type="hidden" name="user_id" value="<?= isset($get->id) ? $get->id : ''; ?>" id="user_id" />
                                                <input type="hidden" name="old_foto" value="<?= isset($get->img) ? $get->img : ''; ?>" id="old_foto" />
                                                <?= form_submit('submit', lang('Auth.edit_user_submit_btn'),['class'=>'btn btn-success']);?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <img class="img-responsive" src="<?= $session->foto; ?>" alt="Photo">
                                        <br>
                                        <label>Ganti foto</label>
                                        <input type="file" name="file-img" />
                                    </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="settings">
                            <?= form_open('admin/auth/change_password',array('class'=>'form-horizontal','id'=>'change_pass')); ?>
                                <div class="form-group mode2">
                                    <label for="old_password" class="col-sm-2 control-label"><?= lang('Auth.change_password_old_password_label'); ?></label>
                                    <div class="col-sm-10 item">
                                        <?= form_input($old_password);?>
                                    </div>
                                </div>
                                <div class="form-group mode2">
                                    <label for="new_password" class="col-sm-2 control-label"><?= sprintf(lang('Auth.change_password_new_password_label'), $minPasswordLength); ?></label>
                                    <div class="col-sm-10 item">
                                        <?= form_input($new_password);?>
                                    </div>
                                </div>
                                <div class="form-group mode2">
                                    <label for="new_password_confirm" class="col-sm-2 control-label"><?= lang('Auth.change_password_new_password_confirm_label'); ?></label>
                                    <div class="col-sm-10 item">
                                        <?= form_input($new_password_confirm); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <?= form_hidden('id', $session->user_id);?>
                                        <?= form_submit('submit', lang('Auth.change_password_submit_btn'),['class'=>'btn btn-primary']);?>
                                    </div>
                                </div>
                            <?= form_close();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
