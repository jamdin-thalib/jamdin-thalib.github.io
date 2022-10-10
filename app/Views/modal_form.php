<?= form_open('daftarhadir/save', array('class' => 'form-horizontal')); ?>
<div class="modal-dialog <?= isset($modal_s) ? $modal_s : 'modal-lg'; ?>">
    <div class="modal-content">
        <div class="modal-header header-color-modal bg-color-1">
            <h4 class="modal-title"><?= $modal_title; ?></h4>
            <div class="modal-close-area modal-close-df">
                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
            </div>
        </div>
        <div class="modal-body">
            <?= $body_modal ?>
        </div>
        <div class="modal-footer">
            <input type='hidden' name='action' value='<?= $action; ?>' />
            <button type='submit' class='btn btn-primary pull-right'><i class='fa fa-send'></i> <?= $btn; ?></a></button>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<script type='text/javascript'>
$('form').on('blur', 'input[required], input.optional, select.required', validator.checkField).on('change', 'select.required', validator.checkField).on('keypress', 'input[required][pattern]', validator.keypress);
$('.multi.required').on('keyup blur', 'input', function() {
    validator.checkField.apply($(this).siblings().last()[0]);
});
$('form').submit(function(e) {
    e.preventDefault();
    if (!validator.checkAll($(this))) {
        return false;
    } else {
        $.ajax({
            url: $(this).attr('action'),
            type: 'post',
            data: $('form').serialize(),
            success: function(response) {
                var data = $.parseJSON(response);
                Lobibox.notify(data.type, {
                    position: 'top right',
                    msg: data.text
                });
                $('#modal_content').modal('hide');
                $('#table').bootstrapTable('refresh');
            },
            error: function(jqXHR, exception, thrownError) {
                Lobibox.notify('error', {
                    position: 'top right',
                    msg: 'Error code' + jqXHR.status + ', ' + thrownError + ', ' + exception
                });
                $('#spinner').hide();
            }
        });
    }
});
</script>