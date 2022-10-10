<?= form_open("admin/auth/save_group",array("class"=>"form-horizontal"));?>
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
                    <?= form_label(lang('Auth.create_group_name_label'), 'group_name',array("class"=>"col-sm-3 control-label")); ?>
                    <div class="col-sm-8 item">
                        <input type="text" name="group_name" value="<?= isset($user->group_name) ? $user->group_name : ''; ?>" id="group_name" class="form-control" required="required" />
                    </div>
                </div>
                <div class="form-group mode2">
                    <?php echo form_label(lang('Auth.create_group_desc_label'), 'description',array("class"=>"col-sm-3 control-label"));?>
                    <div class="col-sm-8 item">
                        <input type="text" name="description" value="<?= isset($user->description) ? $user->description : ''; ?>" id="description" class="form-control" required="required" />
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
                        reload_table();
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
