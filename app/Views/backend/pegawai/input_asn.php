
<?= form_open('backend/pegawai/save_pns');?>
<div class='modal-dialog <?= isset($modal_s) ? $modal_s : 'modal-lg'; ?>'></div>
    <div class="single-product-tab-area mg-tb-15">
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-tab-pro-inner">
                            <ul id="myTab3" class="tab-review-design">
                                <li class="active"><a href="#pns"><i class="fa fa-pencil" aria-hidden="true"></i>Input Data PNS</a></li>
                                <!-- <li><a href="#desa"><i class="fa fa-file-image-o" aria-hidden="true"></i>Input Domain Desa</a></li> -->
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="pns">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <label for="nip" class="form-label">Nomor Induk Pegawai</label>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" id="nip" name="nip" value='<?= (isset($get->nip)) ? $get->nip : ''; ?>' placeholder="Nomor Induk Pegawai" required='required' autofocus>
                                                        </div>
                                                        <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value='<?= (isset($get->nama_pegawai)) ? $get->nama_pegawai : ''; ?>' placeholder="Nama Lengkap" required='required'>
                                                        </div>
                                                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-database" aria-hidden="true"></i></span>
                                                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control pro-edt-select form-control-primary" required='required'>
                                                                <optgroup label="--Pilih--">
                                                                    <option value="Laki-laki">Laki-Laki</option>
                                                                    <option value="Perempuan">Perempuan</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                        <label for="card-number" class="form-label">Tempat Lahir</label>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value='<?= (isset($get->tempat_lahir)) ? $get->tempat_lahir : ''; ?>' placeholder="Tempat Lahir" required='required'>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <center>
                                                                <label for="card-number" class="form-label">Pas Photo</label>
                                                                <div class="input-group mg-b-pro-edt">
                                                                    <span class="input-group-addon"><i class="fa fa-image" aria-hidden="true"></i></span>
                                                                    <input type="file" class="form-control" id="file" name="file" value='<?= (isset($get->file)) ? $get->file : ''; ?>' placeholder="Silahkan Melaukan Upload File" required='required'>
                                                                    <span class="input-group-btn"><button type="button" class="btn btn-primary">Proses</button></span>
                                                                </div>
                                                                <img src="<?= base_url('assets/seleksi/img/computer.jpg')?>" class="img-thumbnail" width="280px">
                                                            </center>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col">
                                                            <label for="card-number" class="form-label">Tanggal Lahir</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value='<?= (isset($get->tgl_lahir)) ? $get->tgl_lahir : ''; ?>' placeholder="Silahkan Melaukan Upload File" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                            <label for="card-number" class="form-label">Umur / Usia</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <input type="number" class="form-control" id="usia" name="usia" value='<?= (isset($get->usia)) ? $get->usia : ''; ?>' placeholder="Umur saat ini" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                            <label for="agama" class="form-label">Agama</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-database" aria-hidden="true"></i></span>
                                                                <select id="agama" name="agama" class="form-control pro-edt-select form-control-primary"  required='required'>
                                                                    <optgroup label="--Pilih--">
                                                                        <option value="Islam">Islam</option>
                                                                        <option value="Kristen">Kriten</option>
                                                                        <option value="Hindu">Hindu</option>
                                                                        <option value="Budha">Budha</option>
                                                                        <option value="Konghucu">Konghucu</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="card-number" class="form-label">Alamat</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="alamat" name="alamat" value='<?= (isset($get->alamat)) ? $get->alamat : ''; ?>' placeholder="Alamat Lengkap" required='required'>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col">
                                                            <label for="card-number" class="form-label">TMT CPNS</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <input type="date" class="form-control" id="cpns" name="cpns" value='<?= (isset($get->cpns)) ? $get->cpns : ''; ?>' placeholder="Silahkan Sesuaikan dengan SK" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <label for="card-number" class="form-label">TMT PNS</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <input type="date" class="form-control" id="pns" name="pns" value='<?= (isset($get->pns)) ? $get->pns : ''; ?>' placeholder="Umur saat ini" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col">
                                                            <label for="pangkat_gol" class="form-label">Pangkat Gol. Ruang</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" id="pangkat_gol" name="pangkat_gol" value='<?= (isset($get->pangkat_gol)) ? $get->pangkat_gol : ''; ?>' placeholder="Silahkan Sesuaikan dengan SK" required='required'>
                                                                        <optgroup label="Juru Muda">
                                                                            <option value="Juru Muda / IIa">Juru Muda / IIa</option>
                                                                            <option value="Juru Muda Tkt. I / IIb">Juru Muda Tkt. I / IIb</option>
                                                                            <option value="Juru / IIc">Juru / IIc</option>
                                                                            <option value="Juru Tkt. I/ IId">Juru Tkt. I/ IId</option>
                                                                        </optgroup>
                                                                        <optgroup label="Penata Muda">
                                                                            <option value="Penata Muda / IIIa">Penata Muda / IIIa</option>
                                                                            <option value="Penata Muda Tkt. I / IIIb">Penata Muda Tkt. I / IIIb</option>
                                                                            <option value="Penata / IIIc">Penata / IIIc</option>
                                                                            <option value="Penata Tkt. I/ IIId">Penata Tkt. I/ IIId</option>
                                                                        </optgroup>
                                                                        <optgroup label="Pembina">
                                                                            <option value="Pembina / IVa">Pembina / IVa</option>
                                                                            <option value="Pembina Tkt. I / VIb">Pembina Tkt. I / VIb</option>
                                                                            <option value="Pembina Utama Muda / VIc">Pembina Utama Muda / VIc</option>
                                                                            <option value="Pembina Utama Madya / VId">Pembina Utama Madya / VId</option>
                                                                            <option value="Pembina Utama / VIe">Pembina Utama / VIe</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <label for="card-number" class="form-label">TMT Pangkat Gol. Ruang</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <input type="date" class="form-control" id="tmt_pangkat" name="tmt_pangkat" value='<?= (isset($get->tmt_pangkat)) ? $get->tmt_pangkat : ''; ?>' placeholder="Silahkan Sesuaikan dengan SK" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col">
                                                            <label for="card-number" class="form-label">Masa Kerja Tahun</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <input type="number" class="form-control" id="tahun" name="tahun" value='<?= (isset($get->tahun)) ? $get->tahun : ''; ?>' placeholder="Silahkan Sesuaikan dengan SK" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <label for="card-number" class="form-label">Masa Kerja Bulan</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <input type="number" class="form-control" id="bulan" name="bulan" value='<?= (isset($get->bulan)) ? $get->bulan : ''; ?>' placeholder="Silahkan Sesuaikan dengan SK" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col">
                                                            <label for="card-number" class="form-label">Berkala Awal</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <input type="date" class="form-control" id="berkala_awal" name="berkala_awal" value='<?= (isset($get->berkala_awal)) ? $get->berkala_awal : ''; ?>' placeholder="Silahkan Sesuaikan dengan SK" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <label for="card-number" class="form-label">Berkala Akhir</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <input type="date" class="form-control" id="berkala_akhir" name="berkala_akhir" value='<?= (isset($get->berkala_akhir)) ? $get->berkala_akhir : ''; ?>' placeholder="Silahkan Sesuaikan dengan SK" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col">
                                                            <label for="jenis_pegawai" class="form-label">Jenis Pegawai</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-copyright" aria-hidden="true"></i></span>
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" id="jenis_pegawai" name="jenis_pegawai"  placeholder="Silahkan Sesuaikan dengan SK" required='required'>
                                                                        <optgroup label="--Pilih--">
                                                                            <option value="Struktural">Struktural</option>
                                                                            <option value="Fungsional">Fungsional</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <label for="status_kawin" class="form-label">Staus Kawin</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-copyright" aria-hidden="true"></i></span>
                                                                <div class="form-select-list">
                                                                    <select class="form-control custom-select-value" id="status_kawin" name="status_kawin" value='<?= (isset($get->status_kawin)) ? $get->status_kawin : ''; ?>' placeholder="Silahkan Sesuaikan dengan SK" required='required'>
                                                                        <optgroup label="--Pilih--">
                                                                            <option value="Menikah">Menikah</option>
                                                                            <option value="Belum Menikah">Belum Menikah</option>
                                                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                                                            <option value="Cerai Mati">Cerai Mati</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <label for="card-number" class="form-label">Nama Perguruan Tinggi / Sekolah</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-institution" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="nama_pt" name="nama_pt" value='<?= (isset($get->nama_pt)) ? $get->nama_pt : ''; ?>' placeholder="Di isi sesuai iajazah terkahir" required='required'>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                        <label for="tingkat_pendidikan" class="form-label">Pendidikan Terkahir</label>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-database" aria-hidden="true"></i></span>
                                                            <select id="tingkat_pendidikan" name="tingkat_pendidikan" value='<?= (isset($get->tingkat_pendidikan)) ? $get->tingkat_pendidikan : ''; ?>' class="form-control pro-edt-select form-control-primary" required='required'>
                                                                <optgroup label="--Pilih--">
                                                                    <option value="SMA">SMA</option>
                                                                    <option value="SMK">SMK</option>
                                                                    <option value="D1">Diploma I</option>
                                                                    <option value="D2">Diploma II</option>
                                                                    <option value="D3">Diploma III</option>
                                                                    <option value="S1">Srata I</option>
                                                                    <option value="S2">Srata II</option>
                                                                    <option value="S3">Srata III</option>
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                        <label for="card-number" class="form-label">Program Study / Jurusan</label>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-server" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" id="program_studi" name="program_studi" value='<?= (isset($get->program_studi)) ? $get->program_studi : ''; ?>' placeholder="Di isi sesuai iajazah terkahir" required='required'>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                        <label for="card-number" class="form-label">Tahun Lulus</label>
                                                        <div class="input-group mg-b-pro-edt">
                                                            <span class="input-group-addon"><i class="fa fa-server" aria-hidden="true"></i></span>
                                                            <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus" value='<?= (isset($get->tahun_lulus)) ? $get->tahun_lulus : ''; ?>' placeholder="Di isi sesuai iajazah terkahir" required='required'>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="col">
                                                            <label for="card-number" class="form-label">Jabatan</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" id="jabatan" name="jabatan" value='<?= (isset($get->jabatan)) ? $get->jabatan : ''; ?>' placeholder="Silahkan Sesuaikan dengan SK" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                            <label for="card-number" class="form-label">Eselon</label>
                                                            <div class="input-group mg-b-pro-edt">
                                                                <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                                <input type="text" class="form-control" id="eselon" name="eselon" value='<?= (isset($get->eselon)) ? $get->eselon : ''; ?>' placeholder="Silahkan Sesuaikan dengan SK" required='required'>
                                                            </div>
                                                        </div>
                                                    </div>
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