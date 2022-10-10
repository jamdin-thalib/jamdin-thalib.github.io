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
            <button href="<?= site_url('backend/pendaftaran/verifikasi/'.$user_id); ?>" class='btn btn-primary pull-right verifikasi' status="3"><i class='fa fa-send'></i> <?= $btn; ?></button>
            <button href="<?= site_url('backend/pendaftaran/verifikasi/'.$user_id); ?>" class='btn btn-danger pull-left verifikasi' status="2"><i class='fa fa-send'></i> Tolak</button>
        </div>
    </div>
</div>
<script>
    $('.verifikasi').click(function(e){
        e.preventDefault
        var  url = $(this).attr("href");
        var  status = $(this).attr("status");
        Lobibox.confirm({
            msg: 'Anda Yakin..?',
            buttons: {
                yes: { 'class': 'btn btn-success', text: 'Ya' }, no: { 'class': 'btn btn-danger', text: 'Tidak' }
            }, callback: function (lobibox, type) {
                if (type === 'yes') {
                    $.ajax({
                        url: url,
                        type: 'post',
                        data: {status:status},
                        success: function(response){
                            var data = $.parseJSON(response);
                            Lobibox.notify(data.type, {
                                position: 'top right',
                                msg: data.text
                            });
                            $('#table').bootstrapTable('refresh');
                        },error: function (jqXHR, exception, thrownError) {
                            Lobibox.notify("error", {
                                position: 'top right',
                                msg: thrownError+", "+exception
                            });
                            $("#spinner").hide();
                        }
                    });
                } else { lobibox.hide(); }
            }
        });
    })
</script>