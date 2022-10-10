
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
<?= form_open('backend/syarat/save_syarat3');?>
<div class='modal-dialog <?= isset($modal_s) ? $modal_s : 'modal-lg'; ?>'></div>
<div class="single-product-tab-area mg-tb-15">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#bolmut"><i class="fa fa-pencil" aria-hidden="true"></i>Input Persyaratan Teknisi Jaringan</a></li>
                            <!-- <li><a href="#desa"><i class="fa fa-file-image-o" aria-hidden="true"></i>Input Domain Desa</a></li> -->
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="bolmut">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="review-content-section">
                                            <label for="card-number" class="form-label">Deskripsi</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
                                                <input type="text" class="form-control" id="item" name="item" value='<?= (isset($get->item)) ? $get->item : ''; ?>' placeholder="Input Persyaratan Teknisi Jaringan" required='required'>
                                            </div>
                                            <label for="card-number" class="form-label">File</label>
                                            <div class="input-group mg-b-pro-edt">
                                                <span class="input-group-addon"><i class="fa fa-folder" aria-hidden="true"></i></span>
                                                <input type="file" class="form-control" id="file" name="file" value='<?= (isset($get->file)) ? $get->file : ''; ?>' placeholder="Upload File" required='required'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                            <input type='hidden' name='action' value='<?= $action; ?>' />
                                            <input type='hidden' name='id' value='<?php echo (isset($get->id)) ? $get->id: ''; ?>' />
                                            <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save
                                            </button>
                                            <a href="<?php echo base_url('backend/syarat')?>"><button type="button" class="btn btn-warning waves-effect waves-light" >Discard</button></a>
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
        