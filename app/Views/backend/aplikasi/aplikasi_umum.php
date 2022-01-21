
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
                                    <li class="active"><a href="#bolmut"><i class="fa fa-pencil" aria-hidden="true"></i>Input Aplikasi Umum</a></li>
                                    <!-- <li><a href="#desa"><i class="fa fa-file-image-o" aria-hidden="true"></i>Input Domain Desa</a></li> -->
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="bolmut">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="review-content-section">
                                                    <label for="card-number" class="form-label">Tanggal Pembuatan</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                        <input type="date" class="form-control" id="nama_aplikasi1" name="nama_aplikasi1" value='<?= (isset($get->nama_aplikasi1)) ? $get->nama_aplikasi1 : ''; ?>' placeholder="Tanggal Pembuatan" required='required'>
                                                    </div>
                                                    <label for="card-number" class="form-label">Name Pengelola</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-institution" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="penggagas1" name="penggagas1" value='<?= (isset($get->penggagas1)) ? $get->penggagas1 : ''; ?>' placeholder="Nama Dinas Salaku Pengelola" required='required'>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="col">
                                                                <label for="card-number" class="form-label">Manual Book / Buku Petunjuk</label>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon"><i class="fa fa-book" aria-hidden="true"></i></span>
                                                                    <select name="select" class="form-control pro-edt-select form-control-primary">
                                                                        <option value="opt1">--Pilih--</option>
                                                                        <option value="opt2">Ada</option>
                                                                        <option value="opt3">Tidak</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                <label for="card-number" class="form-label">Upload File</label>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                                                                        <input type="file" class="form-control" id="file_aplikasi1" name="file_aplikasi1" value='<?= (isset($get->file_aplikasi1)) ? $get->file_aplikasi1 : ''; ?>' placeholder="Silahkan Melaukan Upload File" required='required'>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <label for="card-number" class="form-label">Status Domain</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-database" aria-hidden="true"></i></span>
                                                                <select name="select" class="form-control pro-edt-select form-control-primary">
                                                                    <option value="opt1">--Pilih--</option>
                                                                    <option value="opt2">Active</option>
                                                                    <option value="opt3">Suspen</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <label for="card-number" class="form-label">Jenis Aplikasi</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
                                                                <select name="select" class="form-control pro-edt-select form-control-primary">
                                                                    <option value="opt1">--Pilih--</option>
                                                                    <option value="opt2">Clien Server</option>
                                                                    <option value="opt3">Dekstop</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <label for="card-number" class="form-label">Bahasa Pemograman</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-server" aria-hidden="true"></i></span>
                                                                <select name="select" class="form-control pro-edt-select form-control-primary">
                                                                    <option value="opt1">--Pilih--</option>
                                                                    <option value="opt2">PHP</option>
                                                                    <option value="opt3">Java</option>
                                                                    <option value="opt4">Phyton</option>
                                                                    <option value="opt5">Laraver</option>
                                                                    <option value="opt6">Web Base</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <label for="card-number" class="form-label">Apliaksi Description</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-windows" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="deskripsi_aplikasi1" name="deskripsi_aplikasi1" value='<?= (isset($get->deskripsi_aplikasi1)) ? $get->deskripsi_aplikasi1 : ''; ?>' placeholder="Domain Description" required='required'>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light m-r-10">Save
														</button>
                                                    <a href="<?php echo base_url('backend/aplikasi')?>"><button type="button" class="btn btn-warning waves-effect waves-light" >Discard</button></a>
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
        