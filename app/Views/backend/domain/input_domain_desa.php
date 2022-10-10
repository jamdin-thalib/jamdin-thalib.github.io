
<?= form_open('backend/domain_bolmut/save_desa',array('class'=>'form-horizontal'));?>
<div class='modal-dialog <?= isset($modal_s) ? $modal_s : 'modal-lg'; ?>'></div>

<div class="single-product-tab-area mg-tb-15">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#bolmut"><i class="fa fa-pencil" aria-hidden="true"></i>Input Domain Desa</a></li>
                            <!-- <li><a href="#desa"><i class="fa fa-file-image-o" aria-hidden="true"></i>Input Domain Desa</a></li> -->
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="bolmut">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <label for="card-number" class="form-label">Nama Domain</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-internet-explorer" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="nama_domain" name="nama_domain" value='<?= (isset($get->nama_domain)) ? $get->nama_domain : ''; ?>' placeholder="Name Domain @desa.id" required='required'>
                                            </div>
                                            <label for="card-number" class="form-label">Status Domain</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-bell-slash" aria-hidden="true"></i></span>
                                                <select name="domain_status" class="form-control pro-edt-select form-control-primary"  value='<?= (isset($get->domain_status)) ? $get->domain_status : ''; ?>' placeholder="Status Domain" required='required'>
                                                    <option value="">--Status--</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Suspen">Suspen</option>
                                                </select>
                                            </div>
                                            <label for="card-number" class="form-label">Tanggal Pendaftaran</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" value='<?= (isset($get->tgl_daftar)) ? $get->tgl_daftar : ''; ?>' placeholder="Tanggal Pendaftaran" required='required'>
                                            </div>
                                            <label for="card-number" class="form-label">Tanggal Berakhir</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                                <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" value='<?= (isset($get->tgl_akhir)) ? $get->tgl_akhir : ''; ?>' placeholder="Tanggal Berakhir" required='required'>
                                            </div>
                                            <label for="card-number" class="form-label">Masa Berlaku</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                                <input type="number" class="form-control" id="masa_aktif" name="masa_aktif" value='<?= (isset($get->masa_berlaku)) ? $get->masa_aktif : ''; ?>' placeholder="@desa.id berlaku" required='required'>
                                            </div>
                                            <label for="card-number" class="form-label">Alamat Url Http://</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-chrome" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="link" name="link" value='<?= (isset($get->link)) ? $get->link : ''; ?>' placeholder="Alamat Url @desa.id" required='required'>
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                            <input type='hidden' name='action' value='<?= $action; ?>' />
                                            <input type='hidden' name='id' value='<?php echo (isset($get->id)) ? $get->id: ''; ?>' />
                                            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save</button>
                                            <a href="<?php echo base_url('backend/domain_bolmut')?>"><button type="button" class="btn btn-warning waves-effect waves-light" >Discard</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo form_close();?>
<script src="<?= base_url('assets/js/validator.js'); ?>"></script>
<script type='text/javascript'>
    $('form').on('blur', 'input[required], input.optional, select.required', validator.checkField).on('change', 'select.required', validator.checkField).on('keypress', 'input[required][pattern]', validator.keypress);
    $('.multi.required').on('keyup blur', 'input', function(){
        validator.checkField.apply( $(this).siblings().last()[0] );
    });
    $('form').submit(function(e){
        e.preventDefault();
        if( !validator.checkAll( $(this) ) ){
            return false;
        }else{
            $.ajax({
                url: $(this).attr('action'),
                type: 'post',
                data: $('form').serialize(),
                success: function(response){
                    var data = $.parseJSON(response);
                    swal({title:data.title,html:data.text,type:data.type}).then(function() {
                        reload_table();
                        $('#modal_content').modal('hide');
                    });
                },error: function (jqXHR, exception, thrownError) {
				swal({title:'Error code'+jqXHR.status,html:thrownError+', '+exception,type:'error'}).then(function() {
					$('#spinner').hide();
				});
			}
            });
        }
    });
</script>  