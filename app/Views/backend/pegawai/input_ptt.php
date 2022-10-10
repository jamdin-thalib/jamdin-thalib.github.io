
               
<?= form_open('backend/pegawai/save_ptt');?>
<div class='modal-dialog <?= isset($modal_s) ? $modal_s : 'modal-lg'; ?>'></div>
    <div class="single-product-tab-area mg-tb-15">
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#bolmut"><i class="fa fa-pencil" aria-hidden="true"></i>Input Data PTT</a></li>
                                <!-- <li><a href="#desa"><i class="fa fa-file-image-o" aria-hidden="true"></i>Input Domain Desa</a></li> -->
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="bolmut">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="review-content-section">
                                                <label for="card-number" class="form-label">No Register</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="nip" name="nip" value='<?= (isset($get->nip)) ? $get->nip : ''; ?>' placeholder="Nomor Register / Kontrak" required='required'>
                                                </div>
                                                <label for="card-number" class="form-label">Name Pegawai</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value='<?= (isset($get->nama_pegawai)) ? $get->nama_pegawai : ''; ?>' placeholder="Nama Lengkap" required='required'>
                                                </div>
                                                <label for="card-number" class="form-label">Jenis Kelamin</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-database" aria-hidden="true"></i></span>
                                                    <select name="jenis_kelamin" class="form-control pro-edt-select form-control-primary" required='required'>
                                                        <option value="">--Pilih--</option>
                                                        <option value="Laki-laki">Laki-Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col">
                                                            <label for="card-number" class="form-label">Tempat Lahir</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value='<?= (isset($get->tempat_lahir)) ? $get->tempat_lahir : ''; ?>' placeholder="Tempat Lahir" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <label for="card-number" class="form-label">Tanggal Lahir</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value='<?= (isset($get->tgl_lahir)) ? $get->tgl_lahir : ''; ?>' placeholder="Silahkan Melaukan Upload File" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="card-number" class="form-label">Agama</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-database" aria-hidden="true"></i></span>
                                                    <select name="agama" class="form-control pro-edt-select form-control-primary" required='required'>
                                                        <option value="">--Pilih--</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kriten</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>
                                                        <option value="Konghucu">Konghucu</option>
                                                    </select>
                                                </div>
                                                <label for="card-number" class="form-label">Alamat</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="alamat" name="alamat" value='<?= (isset($get->alamat)) ? $get->alamat : ''; ?>' placeholder="Alamat Lengkap" required='required'>
                                                </div>
                                                <label for="card-number" class="form-label">Nama Perguruan Tinggi / Sekolah</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-institution" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="nama_pt" name="nama_pt" value='<?= (isset($get->nama_pt)) ? $get->nama_pt : ''; ?>' placeholder="Di isi sesuai iajazah terkahir" required='required'>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <label for="select" class="form-label">Pendidikan Terkahir</label>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-database" aria-hidden="true"></i></span>
                                                            <select name="pendidikan" class="form-control pro-edt-select form-control-primary" required='required'>
                                                                <option value="">--Pilih--</option>
                                                                <option value="SMA">SMA</option>
                                                                <option value="SMK">SMK</option>
                                                                <option value="D1">Diploma I</option>
                                                                <option value="D2">Diploma II</option>
                                                                <option value="D3">Diploma III</option>
                                                                <option value="S1">Srata I</option>
                                                                <option value="S2">Srata II</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <label for="card-number" class="form-label">Program Study / Jurusan</label>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-server" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" id="jurusan_pt" name="jurusan_pt" value='<?= (isset($get->jurusan_pt)) ? $get->jurusan_pt : ''; ?>' placeholder="Di isi sesuai iajazah terkahir" required='required'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="card-number" class="form-label">Tahun Terangkat</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-institution" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="tahun_terangkat" name="tahun_terangkat" value='<?= (isset($get->tahun_terangkat)) ? $get->tahun_terangkat : ''; ?>' placeholder="Berdasarkan SK Kontrak Pertama" required='required'>
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
                                                <a href="<?php echo base_url('backend/pegawai')?>"><button type="button" class="btn btn-warning waves-effect waves-light" >Discard</button></a>
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