
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
        <?= form_open('backend/dpa_admin/save_dpa');?>
        <div class='modal-dialog <?= isset($modal_s) ? $modal_s : 'modal-lg'; ?>'></div>
        <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#bolmut"><i class="fa fa-pencil" aria-hidden="true"></i>Input Dokumen DPA</a></li>
                                    <!-- <li><a href="#desa"><i class="fa fa-file-image-o" aria-hidden="true"></i>Input Domain Desa</a></li> -->
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="bolmut">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                <label for="card-number" class="form-label">Tanggal Pengesahan</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                        <input type="date" class="form-control" id="tgl_pengesahan_dpa" name="tgl_pengesahan_dpa" value='<?= (isset($get->tgl_pengesahan_dpa)) ? $get->tgl_pengesahan_dpa : ''; ?>' placeholder="Tanggal Pengesahan" required='required'>
                                                    </div>
                                                    <label for="card-number" class="form-label">Nama Dokumen</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="nama_dok_dpa" name="nama_dok_dpa" value='<?= (isset($get->nama_dok_dpa)) ? $get->nama_dok_dpa : ''; ?>' placeholder="Nama Dokumen DPA" required='required'>
                                                    </div>
                                                    <label for="card-number" class="form-label">File</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-folder" aria-hidden="true"></i></span>
                                                        <input type="file" class="form-control" id="file_dpa" name="file_dpa" value='<?= (isset($get->file_dpa)) ? $get->file_dpa : ''; ?>' placeholder="Upload File Dokumen DPA" required='required'>
                                                    </div>
                                                    <label for="card-number" class="form-label">Description</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-commenting" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="uraian_dpa" name="uraian_dpa" value='<?= (isset($get->uraian_dpa)) ? $get->uraian_dpa : ''; ?>' placeholder="Description Dokumen" required='required'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <input type='hidden' name='action' value='<?= $action; ?>' />
                                                    <input type='hidden' name='id' value='<?php echo (isset($get->id)) ? $get->id: ''; ?>' />
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Save</button>
                                                    <a href="<?php echo base_url('backend/dpa_admin')?>"><button type="button" class="btn btn-warning waves-effect waves-light" >Discard</button></a>
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
        