
            <!-- Mobile Menu end -->
            <!-- <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Product Edit</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Single pro tab start-->
<?= form_open('backend/domain_bolmut/save_bolmut');?>
<div class='modal-dialog <?= isset($modal_s) ? $modal_s : 'modal-lg'; ?>'></div>
<div class="single-product-tab-area mg-tb-15">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#bolmut"><i class="fa fa-pencil" aria-hidden="true"></i>Input Domain Bolmut</a></li>
                            <!-- <li><a href="#desa"><i class="fa fa-file-image-o" aria-hidden="true"></i>Input Domain Desa</a></li> -->
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="bolmut">
                                <?= isset($pesan) ? $pesan : ''; ?>
                                <div class="row">
                                    <?php form_open('backend/domain_bolmut/save_bolmut') ?>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <label for="card-number" class="form-label">Tanggal Pembuatan</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                <input type="date" class="form-control" id="tgl_pembuatan" name="tgl_pembuatan" value='<?= (isset($get->tgl_pembuatan)) ? $get->tgl_pembuatan : ''; ?>' placeholder="Tanggal Pembuatan" required='required'>
                                            </div>
                                            <label for="card-number" class="form-label">Nama Subdomain</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-internet-explorer" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="nama_subdomain" name="nama_subdomain" value='<?= (isset($get->nama_subdomain)) ? $get->nama_subdomain : ''; ?>' placeholder="Alamat Url @bolmutkab.go.id" required='required'>
                                            </div>
                                            
                                            <label for="card-number" class="form-label">Status Domain</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-cloud" aria-hidden="true"></i></span>
                                                <select name="status_domain" class="form-control pro-edt-select form-control-primary" required='required'>
                                                    <option value="">--Status--</option>
                                                    <option value="Active">Active</option>
                                                    <option value="Suspen">Suspen</option>
                                                </select>
                                            </div>
                                            <label for="card-number" class="form-label">Nomor Telpon</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="no_telpon" name="no_telpon" value='<?= (isset($get->no_telpon)) ? $get->no_telpon : ''; ?>' placeholder="Nomor Telpon Penanggung Jawab" required='required'>
                                            </div>
                                            <label for="card-number" class="form-label">Name Pengelola</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="nama_pengelola" name="nama_pengelola" value='<?= (isset($get->nama_pengelola)) ? $get->nama_pengelola : ''; ?>' placeholder="Name Pengelola di Wajibkan ASN" required='required'>
                                            </div>
                                            <label for="card-number" class="form-label">Dinas Pengelola</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-institution" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="pengelola" name="pengelola" value='<?= (isset($get->pengelola)) ? $get->pengelola : ''; ?>' placeholder="Dinas Pengelola" required='required'>
                                            </div>
                                            <label for="card-number" class="form-label">Domain Description</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-commenting" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value='<?= (isset($get->deskripsi)) ? $get->deskripsi : ''; ?>' placeholder="Domain Description" required='required'>
                                            </div>
                                            <label for="card-number" class="form-label">Alamat Url Http:</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-chrome" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="link" name="link" value='<?= (isset($get->link)) ? $get->link : ''; ?>' placeholder="Alamat Url @bolmutkab.go.id" required='required'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="modal-footer">
                                        <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                            <input type='hidden' name='action' value='<?= $action; ?>' />
                                            <input type='hidden' name='id' value='<?php echo (isset($get->id)) ? $get->id: ''; ?>' />
                                            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save </button>
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