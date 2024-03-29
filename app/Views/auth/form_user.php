<?= form_open("auth/save",array("class"=>"form-horizontal"));?>
<div class="modal-dialog <?php echo isset($modal_s) ? $modal_s : 'modal-lg'; ?>">
    <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-1">
            <h4 class="modal-title"><?= $title; ?></h4>
            <p><?= $sub_title;?></p>
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
        </div>
        <div class="modal-body">
            <div class="box-body">
                <div class="form-group mode2">
                    <?= form_label(lang('Auth.create_user_name_label'), 'nama_user',array("class"=>"col-sm-3 control-label")); ?>
                    <div class="col-sm-8 item">
                        <input type="text" name="nama_user" value="<?= isset($user->nama_user) ? $user->nama_user : ''; ?>" id="nama_user" class="form-control" required="required" />
                    </div>
                </div>
            <?php if ($identity_column !== 'email') { ?>
                <div class="form-group mode2">
                    <label for="identity" class="col-sm-3 control-label">Username</label>
                    <?= form_label(lang('Auth.create_user_identity_label'), 'identity',array("class"=>"col-sm-3 control-label")); ?>
                    <div class="col-sm-8 item">
                        <?= form_input($identity);?>
                        <input type="text" name="identity" value="<?= isset($user->identity) ? $user->identity : ''; ?>" id="identity" class="form-control" required="required" />
                    </div>
                    <?= '<p>'. \Config\Services::validation()->getError('identity'). '</p>'; ?>
                </div>
            <?php } ?>
                <div class="form-group mode2">
                    <?php echo form_label(lang('Auth.create_user_email_label'), 'email',array("class"=>"col-sm-3 control-label"));?>
                    <div class="col-sm-8 item">
                        <input type="text" name="email" value="<?= isset($user->email) ? $user->email : ''; ?>" id="email" class="form-control" required="required" />
                    </div>
                </div>
                <div class="form-group mode2">
                    <?php echo form_label(lang('Auth.create_user_phone_label'), 'phone',array("class"=>"col-sm-3 control-label"));?>
                    <div class="col-sm-8 item">
                        <input type="text" name="phone" value="<?= isset($user->phone) ? $user->phone : '08xx-xxxx-xxxx'; ?>" id="phone" class="form-control" required="required" />
                    </div>
                </div>
                <?php if ($action == 'update'): ?>
                <div class="form-group mode2">
                    <label for="jenis_user" class="col-sm-3 control-label">Jenis User **</label>
                    <?php foreach ($groups as $group):?>
                    <div class="col-sm-3 item">
                        <?php $gID = $group->id;
                        $checked = null;
                        foreach($currentGroups as $grp) {
                            if ($gID == $grp->id) {
                                $checked= ' checked="checked"';
                                break;
                            }
                        } ?>
                        <input type="checkbox" name="groups[]" value="<?= $group->id;?>"<?= $checked;?> class="flat">
                        <?= htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?>
                    </div>
                    <?php endforeach ?>
                </div>
                <?php endif ?>
                <div class="form-group mode2">
                    <?php echo form_label(lang('Auth.create_user_password_label'), 'password',array("class"=>"col-sm-3 control-label"));?>
                    <div class="col-sm-8 item">
                        <input type="password" name="password" value="" id="password" class="form-control" <?= isset($required) ? $required : ''; ?> />
                    </div>
                </div>
                <div class="form-group mode2">
                    <?php echo form_label(lang('Auth.create_user_password_confirm_label'), 'password_confirm',array("class"=>"col-sm-3 control-label"));?>
                    <div class="col-sm-8 item">
                        <input type="password" name="password_confirm" value="" id="password_confirm" class="form-control" <?= isset($required) ? $required : ''; ?> />
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <input type="hidden" name="action" value="<?= $action; ?>" />
            <input type="hidden" name="id" value="<?= isset($user->id) ? $user->id : ''; ?>" />
            <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-send"></i> <?= $btn; ?></a></button>
        </div>
    </div>
</div>
<?= form_close();?>
<script src="<?= base_url('assets/backend/validator.js');?>"></script>
<script type="text/javascript">
    $('form').on('blur', 'input[required], input.optional, select.required', validator.checkField).on('change', 'select.required', validator.checkField).on('keypress', 'input[required][pattern]', validator.keypress);
    $('.multi.required').on('keyup blur', 'input', function(){
        validator.checkField.apply( $(this).siblings().last()[0] );
    });
    $('form').submit(function(e){
        e.preventDefault();
        if( !validator.checkAll( $(this) ) ){
            false;
        }else{
            $.ajax({
                url: $(this).attr("action"),
                type: 'post',
                data: $("form").serialize(),
                success: function(response){
                    var data = $.parseJSON(response);
                    swal({title:data.title,html:data.text,type:data.type}).then(function() {
                        $table.bootstrapTable('refresh')
                        $('#modal_content').modal('hide');
                    });
                },error: function (jqXHR, exception, thrownError) {
                    swal({title:"Error code"+jqXHR.status,html:thrownError+", "+exception,type:"error"}).then(function() {
                        $("#spinner").hide();
                    });
                }
            });
        }
    });
</script>
