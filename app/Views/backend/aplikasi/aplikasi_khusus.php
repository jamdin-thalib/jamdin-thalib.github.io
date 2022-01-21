
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
                                    <li class="active"><a href="#bolmut"><i class="fa fa-pencil" aria-hidden="true"></i>Input Aplikasi Khusus</a></li>
                                    <!-- <li><a href="#desa"><i class="fa fa-file-image-o" aria-hidden="true"></i>Input Domain Desa</a></li> -->
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="bolmut">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="review-content-section">
                                                    <label for="nama_aplikasi2" class="form-label">Nama Aplikasi</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="nama_aplikasi2" name="nama_aplikasi2" value='<?= (isset($get->nama_aplikasi2)) ? $get->nama_aplikasi2 : ''; ?>' placeholder="Nama Sistem Informasi yang di Buat" required='required'>
                                                    </div>
                                                    <label for="penggagas2" class="form-label">Dinas Penanggung Jawab</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-bank" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="penggagas2" name="penggagas2" value='<?= (isset($get->penggagas2)) ? $get->penggagas2 : ''; ?>' placeholder="Di isi nama Dinas Selakua pengelola" required='required'>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12"> 
                                                                <label for="manual_book2" class="form-label">Manual Book / Buku Petunjuk</label>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon"><i class="fa fa-book" aria-hidden="true"></i></span>
                                                                    <select name="manual_book2" id="manual_book2" value='<?= (isset($get->manual_book2)) ? $get->manual_book2 : ''; ?>' class="form-control pro-edt-select form-control-primary">
                                                                        <option value="opt1">--Pilih--</option>
                                                                        <option value="Ada">Ada</option>
                                                                        <option value="Tidak">Tidak</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col">
                                                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                                    <label for="card-number" class="form-label">Upload File</label>
                                                                    <div class="input-group mg-b-pro-edt">
                                                                        <span class="input-group-addon"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></span>
                                                                        <input type="file" class="form-control" id="file_aplikasi2" name="file_aplikasi2" value='<?= (isset($get->file_aplikasi2)) ? $get->file_aplikasi2 : ''; ?>' placeholder="Di isi nama Dinas Selakua pengelola" required='required'>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
                                                            <label for="jenis_aplikasi2" class="form-label">Jenis Aplikasi</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
                                                                <select name="jenis_aplikasi2" id="jenis_aplikasi2" value='<?= (isset($get->jenis_aplikasi2)) ? $get->jenis_aplikasi2 : ''; ?>' class="form-control pro-edt-select form-control-primary">
                                                                    <option value="opt1">--Pilih--</option>
                                                                    <option value="ClienServer">ClienServer</option>
                                                                    <option value="Dekstop">Dekstop</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"> 
                                                            <label for="bahasa_pemograman2" class="form-label">Bahasa Pemograman</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-server" aria-hidden="true"></i></span>
                                                                <select name="bahasa_pemograman2" id="bahasa_pemograman2" class="form-control pro-edt-select form-control-primary" value='<?= (isset($get->bahasa_pemograman2)) ? $get->bahasa_pemograman2 : ''; ?>'>
                                                                    <option value="opt1">--Pilih--</option>
                                                                    <option value="PHP">PHP</option>
                                                                    <option value="Java">Java</option>
                                                                    <option value="Phyton">Phyton</option>
                                                                    <option value="Laraver">Laraver</option>
                                                                    <option value="WebBase">WebBase</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <label for="status_aplikasi2" class="form-label">Status Aplikasi</label>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-clipboard" aria-hidden="true"></i></span>
                                                            <select name="status_aplikasi2" id="status_aplikasi2" value='<?= (isset($get->status_aplikasi2)) ? $get->status_aplikasi2 : ''; ?>' class="form-control pro-edt-select form-control-primary">
                                                                <option value="opt1">--Status--</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Suspen">Suspen</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <label for="deskripsi_aplikasi2" class="form-label">Aplikasi Description</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-windows" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="deskripsi_aplikasi2" name="deskripsi_aplikasi2" value='<?= (isset($get->deskripsi_aplikasi2)) ? $get->deskripsi_aplikasi2 : ''; ?>' placeholder="Domain Description" required='required'>
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
        