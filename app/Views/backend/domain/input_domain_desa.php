
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
                                                        <select name="select" class="form-control pro-edt-select form-control-primary">
                                                            <option value="opt1">--Status--</option>
                                                            <option value="opt2">Active</option>
                                                            <option value="opt3">Suspen</option>
                                                        </select>
                                                    </div>
                                                    <label for="card-number" class="form-label">Tanggal Pembuatan</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                        <input type="date" class="form-control" id="tgl_daftar" name="tgl_daftar" value='<?= (isset($get->tgl_daftar)) ? $get->tgl_daftar : ''; ?>' placeholder="Tanggal Pembuatan" required='required'>
                                                    </div>
                                                    <label for="card-number" class="form-label">Tanggal Berakhir</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                                        <input type="date" class="form-control" id="tgl_akhir" name="tgl_akhir" value='<?= (isset($get->tgl_akhir)) ? $get->tgl_akhir : ''; ?>' placeholder="Tanggal Berakhir" required='required'>
                                                    </div>
                                                    <label for="card-number" class="form-label">Masa Berlaku</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                                                        <input type="number" class="form-control" id="masa_berlaku" name="masa_berlaku" value='<?= (isset($get->masa_berlaku)) ? $get->masa_berlaku : ''; ?>' placeholder="@desa.id berlaku" required='required'>
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
                                                    <button type="button" class="btn btn-primary waves-effect waves-light m-r-10">Save
													</button>
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
        