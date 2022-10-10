
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
        <?= form_open('backend/hukum/save');?>
        <div class='modal-dialog <?= isset($modal_s) ? $modal_s : 'modal-lg'; ?>'></div>
        <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#bolmut"><i class="fa fa-pencil" aria-hidden="true"></i>Input Dokumen Produk Hukum</a></li>
                                    <!-- <li><a href="#desa"><i class="fa fa-file-image-o" aria-hidden="true"></i>Input Domain Desa</a></li> -->
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="bolmut">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <label for="card-number" class="form-label">Tanggal Pembuatan</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                                        <input type="date" class="form-control" id="tgl_produkh" name="tgl_produkh" value='<?= (isset($get->tgl_produkh)) ? $get->tgl_produkh : ''; ?>' placeholder="Tanggal Pembuatan" required='required'>
                                                    </div>
                                                    <label for="card-number" class="form-label">Nama Produk Hukum</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="nama_produkh" name="nama_produkh" value='<?= (isset($get->nama_produkh)) ? $get->nama_produkh : ''; ?>' placeholder="Nama Produk Hukum" required='required'>
                                                    </div>
                                                    <label for="card-number" class="form-label">Upload File</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                                                        <input type="file" class="form-control" id="file_hukum" name="file_hukum" value='<?= (isset($get->file_hukum)) ? $get->file_hukum : ''; ?>' placeholder="Di isi nama Dinas Selakua pengelola" required='required'>
                                                    </div>
                                                    <label for="card-number" class="form-label">Status Produk Hukum</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <select name="status" id="file_hukum" value='<?= (isset($get->status)) ? $get->status : ''; ?>' class="form-control pro-edt-select form-control-primary" required='required'>
															<option value="">--Status--</option>
															<option value="Berlaku">Berlaku</option>
															<option value="Revisi">Tidak Berlaku</option>
														</select>
                                                    </div>
                                                    <label for="card-number" class="form-label">Domain Description</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-ticket" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="uraianh" name="uraianh" value='<?= (isset($get->uraianh)) ? $get->uraianh : ''; ?>' placeholder="Domain Description" required='required'>
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
                                                    <a href="<?php echo base_url('backend/hukum')?>"><button type="button" class="btn btn-warning waves-effect waves-light" >Discard</button></a>
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
        