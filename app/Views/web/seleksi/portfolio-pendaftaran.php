<div class="breadcrumb" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-text">
                    <h2>Form Pendaftaran</h2>
                    <ul>
                        <li><a href="<?= site_url('seleksi') ?>">Home</a> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></li>
                        <li><a href="<?= site_url('auth/logout') ?>">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="adminpro-accordion-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="admin-pro-accordion-wrap responsive-mg-b-30">
                    <div class="alert-title" >
                        <center>
                            <h3>SILAHKAN MELAKUKAN PENDAFTARAN MELALUI FORM INI</h3>
                            <h4>MOHON DI LENGKAPI TAHAPAN PROSES PENDAFTARAN</h4>
                            <p>Proses Pendafataran ada tiga tahapan sebelum finalisasi pendaftaran mohon di cermati dengan baik</p>
                        </center>
                    </div>
                    <div class="panel-group adminpro-custon-design" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading accordion-head">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Pilih Jabatan yang di lamar</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse panel-ic collapse in">
                                <div class="panel-body admin-panel-content animated bounce">
                                    <!-- <h4>Silahkan Pilih Jabatan yang ingin di lamar :</h4> -->
                                    <div class="review-content-section">
                                        <label for="card-number" class="form-label">Pilihan menjadi prioritas</label>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                            <div class="form-select-list">
                                                <?php $default = array('' => 'Pilih' );
                                                    $pilihan = array('1' => 'Programer' , '2'=>'Teknisi Jaringan');
                                                    echo form_dropdown('',$default + $pilihan, $posisi,'class="form-control pro-edt-select form-control-primary" readonly');
                                                 ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-head">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Data Pribadi</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse panel-ic collapse">
                                    <?= form_open('backend/pendaftaran/save_pendafataran',['class'=>'mode2','id'=>'pendaftaran']); ?>
                                    <div class="panel-body admin-panel-content animated bounce">
                                        <!-- <h4>Silahkan Melengkapi Data Anda</h4> -->
                                        <?php $read_only = ($get->status == 1) ? 'readonly' : ''; ?>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <label for="card-number" class="form-label">NIK</label>
                                                <div class="input-group mg-b-pro-edt item">
                                                    <span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="nik" name="nik" value='<?= (isset($get->nik)) ? $get->nik : ''; ?>' placeholder="Nomor Induk Kependudukan" required <?= $read_only; ?> />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <label for="card-number" class="form-label">Nama Lengkap</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="full_name" name="full_name" value='<?= (isset($get->full_name)) ? $get->full_name : ''; ?>' placeholder="Wajib di isi sesuai KTP" required readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <label for="card-number" class="form-label">Jenis Kelamin</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
                                                    <div class="form-select-list">
                                                        <?php $default = array('' => 'Pilih' );
                                                            $pilihan = array('Laki-Laki' => 'Laki-Laki' , 'Perempuan'=>'Perempuan');
                                                            echo form_dropdown('jenis_kelamin',$default + $pilihan, isset($get->jenis_kelamin) ? $get->jenis_kelamin : '','class="form-control pro-edt-select form-control-primary" id="jenis_kelamin" '.$read_only);
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                                <label for="card-number" class="form-label">Agama</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-map" aria-hidden="true"></i></span>
                                                    <div class="form-select-list">
                                                        <?php $default = array('' => 'Pilih' );
                                                            $pilihan = array('Islam' => 'Islam' ,
                                                             'Kristen'=>'Kristen',
                                                             'Hindu'=>'Hindu',
                                                             'Budha'=>'Budha',
                                                             'Katolik'=>'Katolik',
                                                            );
                                                            echo form_dropdown('agama',$default + $pilihan, isset($get->agama) ? $get->agama : '','class="form-control pro-edt-select form-control-primary" id="agama" '.$read_only);
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                <label for="card-number" class="form-label">Tempat Lahir</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value='<?= (isset($get->tempat_lahir)) ? $get->tempat_lahir : ''; ?>' placeholder="Wajib di isi sesuai KTP" required <?= $read_only; ?> >
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                <label for="card-number" class="form-label">Tanggal Lahir</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
                                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value='<?= (isset($get->tanggal_lahir)) ? $get->tanggal_lahir : ''; ?>' placeholder="Wajib di isi sesuai KTP" required <?= $read_only; ?> >
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                <label for="card-number" class="form-label">Nomor Telpon</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="no_telpon" name="no_telpon" value='<?= (isset($get->no_telpon)) ? $get->no_telpon : ''; ?>' placeholder="Nomor Telpon / Nomor WA" required <?= $read_only; ?> >
                                                </div>
                                            </div>
                                        </div>
                                        <label for="card-number" class="form-label">Nama Sekolah / Kampus</label>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" id="Nama Sekolah / Kampus" name="nama_kampus" value='<?= (isset($get->nama_kampus)) ? $get->nama_kampus : ''; ?>' placeholder="Wajib di isi sesuai Ijazah" required <?= $read_only; ?> >
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                <label for="card-number" class="form-label">Pendidikan Terkahir</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-institution" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="pendidikan_terkahir" name="pendidikan_terkahir" value='<?= (isset($get->pendidikan_terkahir)) ? $get->pendidikan_terkahir : ''; ?>' placeholder="Wajib di isi sesuai Ijazah" required <?= $read_only; ?> >
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                <label for="card-number" class="form-label">Program Study</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-institution" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="program_study" name="program_study" value='<?= (isset($get->program_study)) ? $get->program_study : ''; ?>' placeholder="Program Study/Jurusan" required <?= $read_only; ?> >
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                                <label for="card-number" class="form-label">IPK (Indeks Prestasi Kumulatif) / Nilai Ujian</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-institution" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="ipk" name="ipk" value='<?= (isset($get->ipk)) ? $get->ipk : ''; ?>' placeholder="Nilai Total IPK" required <?= $read_only; ?> >
                                                </div>
                                            </div>
                                        </div>
                                        <label for="card-number" class="form-label">Email Aktif :</label>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" id="email" name="email" value='<?= (isset($get->email)) ? $get->email : ''; ?>' placeholder="Alamat email yang aktif" required <?= $read_only; ?> >
                                        </div>
                                        <label for="card-number" class="form-label">Alamat Lengkap :</label>
                                        <div class="input-group mg-b-pro-edt">
                                            <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value='<?= (isset($get->alamat)) ? $get->alamat : ''; ?>' placeholder="Alamat Lengkap" required <?= $read_only; ?> >
                                        </div>
                                        <div class="col">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <label for="card-number" class="form-label">RT</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                    <input type="number" class="form-control" id="rt" name="rt" value='<?= (isset($get->rt)) ? $get->rt : ''; ?>' placeholder="RT" required <?= $read_only; ?>  >
                                                </div>
                                                <label for="card-number" class="form-label">Kelurahan / Desa :</label>
                                                <div class="input-group mg-b-pro-edt">
                                                    <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                    <input type="text" class="form-control" id="kelurahan" name="kelurahan" value='<?= (isset($get->kelurahan)) ? $get->kelurahan : ''; ?>' placeholder="Kelurahan / Desa" required <?= $read_only; ?> >
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <label for="card-number" class="form-label">RW</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                        <input type="number" class="form-control" id="rw" name="rw" value='<?= (isset($get->rw)) ? $get->rw : ''; ?>' placeholder="RW" required <?= $read_only; ?> >
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                    <label for="card-number" class="form-label">Kecamatan</label>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" value='<?= (isset($get->kecamatan)) ? $get->kecamatan : ''; ?>' placeholder="Kecamatan" required <?= $read_only; ?> >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <label for="card-number" class="form-label">Kabupaten :</label>
                                                <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" id="kabupaten" name="kabupaten" value='<?= (isset($get->kabupaten)) ? $get->kabupaten : ''; ?>' placeholder="Kabupaten" required <?= $read_only; ?> >
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">
                                            <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                <input type="hidden" name="id" value="<?= (isset($get->id)) ? $get->id : ''; ?>">
                                                <input type="hidden" name="action" value="update">
                                                <?php
                                                    $now = time() * 1000;
                                                    $tgl_akhir = strtotime('06-02-2022 23:59:59') * 1000;
                                                    if($now >= $tgl_akhir){ ?>
                                                        <h2 class='cd-headline clip is-full-width'><span style='color:red;'>Submit Pendaftaran Telah Berakhir Pada Tanggal 05-02-2022 Pukul 23:59:59</span></h2>
                                                <?php }else{ ?>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light m-r-10 pull-left"><i class='fa fa-save'></i> Save</button>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?= form_close(); ?>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-head">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Upload Berkas</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse panel-ic collapse">
                                    <div class="panel-body admin-panel-content animated bounce">
                                        <!-- <center><p>Silahkan Melakukan Upload Dokumen Pendukung Pendaftaran dalam bentuk file .pdf</p></center> -->
                                        <?= form_open('backend/pendaftaran/upload',['class'=>'mode2','id'=>'form_upload']); ?>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <td>Jenis Dokumen</td>
                                                            <td>Status</td>
                                                            <td>Aksi</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php foreach ($file_upload as $row) { 
                                                        $type = 'pdf';
                                                        $fa = 'fa-file-pdf-o';
                                                        if ($row->id == 3 || $row->id == 4) {
                                                            $type = 'foto';
                                                            $fa = 'fa-image';
                                                        }
                                                        ?>
                                                        <tr>
                                                            <td><?= $row->nama_berkas ?></td>
                                                            <td><?= ($row->file_berkas == null) ? 'Belum Diunggah' : '<span style="color:green;">Sudah Diunggah</span>'; ?></td>
                                                            <td>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="input-group mg-b-pro-edt item">
                                                                        <span class="input-group-addon"><i class="fa <?= $fa ?>"></i></span>
                                                                        <?php
                                                                        $now = time() * 1000;
                                                                        $tgl_akhir = strtotime('06-02-2022 23:59:59') * 1000;
                                                                        if($now >= $tgl_akhir){ ?>
                                                                            <h2 class='cd-headline clip is-full-width'><span style='color:red;'>Submit Pendaftaran Telah Berakhir Pada Tanggal 05-02-2022 Pukul 23:59:59</span></h2>
                                                                        <?php }else{ ?>
                                                                            <input class="form-control upload_file" type="file"  id="upload_file<?= $row->id ?>"  required tipe="<?= $type ?>" id_file='<?= $row->berkas_id ?>' nama-file="<?= str_replace(' ','_',$row->nama_berkas) ?>" persya_id='<?= $row->id ?>' />
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6">
                                                                    <div class="input-group mg-b-pro-edt item">
                                                                        <?php if ($row->id == 3 || $row->id == 4) { ?>
                                                                            <a href="#" onClick="klik('<?= site_url('home/lihatpdf/img/'.$row->file_berkas)?>')" class="btn btn-primary" <?= ($row->file_berkas == null) ? 'disabled' : ''; ?> > Lihat</a>
                                                                        <?php }else{ ?>
                                                                            <a href="#" onClick="klik('<?=base_url('home/lihatpdf/pdf/'.$row->file_berkas) ?>')" class="btn btn-primary" <?= ($row->file_berkas == null) ? 'disabled' : ''; ?> > Lihat </a>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading accordion-head">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Finalisasi Pendaftaran</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse panel-ic collapse">
                                    <div class="panel-body admin-panel-content animated bounce">
                                        <center>
                                            <p>Dengan mendaftar, saya telah membaca dan menyetujui Persyaratan Umum & Khusus dan Syarat & Ketentuan dari program ini</p>
                                            <h2>Finalisasi Pendaftaran</h2>
                                        </center>
                                        <div class="alert alert-success alert-success-style1">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6">
                                                    <table class="table">
                                                        <tr><td>Field</td><td colspan='2'>Data</td></tr>
                                                        <tr><td>Nama Lengkap</td><td colspan='2'><?= $get->full_name ?></td></tr>
                                                        <tr><td>Nomor Induk Penduduk (NIK)</td><td colspan='2'><?= $get->nik ?></td></tr>
                                                        <tr><td>Jenis Kelamin</td><td colspan='2'><?= $get->jenis_kelamin ?></td></tr>
                                                        <tr><td>Agama</td><td colspan='2'><?= $get->agama ?></td></tr>
                                                        <tr><td>Tempat, Tanggal Lahir</td><td colspan='2'><?php echo $get->tempat_lahir.', '.$get->tanggal_lahir; ?></td></tr>
                                                        <tr><td>No Telp</td><td colspan='2'><?= $get->no_telpon ?></td></tr>
                                                        <tr><td>Nama Kampus</td><td colspan='2'><?= $get->nama_kampus ?></td></tr>
                                                        <tr><td>Pendidikan Terakhir</td><td colspan='2'><?= $get->pendidikan_terkahir ?></td></tr>
                                                        <tr><td>Program Study</td><td colspan='2'><?= $get->program_study ?></td></tr>
                                                        <tr><td>IPK</td><td colspan='2'><?= $get->ipk ?></td></tr>
                                                        <tr><td>e-mail</td><td colspan='2'><?= $get->email ?></td></tr>
                                                        <tr><td>Alamat</td><td colspan='2'><?= $get->alamat ?></td></tr>
                                                        <tr><td rowspan='5'></td><td>RT</td><td><?= $get->rt ?></td></tr>
                                                        <tr><td>RW</td><td><?= $get->rw ?></td></tr>
                                                        <tr><td>Kelurahan</td><td><?= $get->kelurahan ?></td></tr>
                                                        <tr><td>Kecamatan</td><td><?= $get->kecamatan ?></td></tr>
                                                        <tr><td>Kabupaten</td><td><?= $get->kabupaten ?></td></tr>
                                                    </table>
                                                </div>
                                                <div class="col-md-6 col-sm-6">
                                                    <table class="table">
                                                        <tr>
                                                            <td>Nama File</td>
                                                            <td>File</td>
                                                        </tr>
                                                        <?php foreach ($file_upload as $row) { ?>
                                                            <tr>
                                                                <td><?= $row->nama_berkas ?></td>
                                                                <td>
                                                                <?php if ($row->id == 3 || $row->id == 4) {
                                                                    echo '<a href="#" onClick="klik(\''.site_url('home/lihatpdf/img/'.$row->file_berkas).'\')">'.$row->nama_berkas .'</a>';
                                                                }else{
                                                                    echo '<a href="#" onClick="klik(\''.base_url('home/lihatpdf/pdf/'.$row->file_berkas).'\')">'.$row->nama_berkas .'</a>';
                                                                } ?>
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <?php
                                                    $now = time() * 1000;
                                                    $tgl_akhir = strtotime('06-02-2022 23:59:59') * 1000;
                                                    if($now >= $tgl_akhir){
                                                        echo "<h2 class='cd-headline clip is-full-width'><span style='color:red;'>Submit Pendaftaran Telah Berakhir Pada Tanggal 06-02-2022 Pukul 23:59:59</span></h2>";
                                                    }else{
                                                        if ($get->status == 0) { ?>
                                                            <a href="javascript:void(0)" class="btn btn-primary waves-effect waves-light m-r-10 finalisasi" user_id="<?= $get->id ?>"> <i class="fa fa-send"></i> Submit Pendaftaran</a>
                                                        <?php }else{ ?>
                                                            <a href="javascript:void(0);" class="btn btn-primary waves-effect waves-light m-r-10" onClick="klik('<?=site_url('backend/pendaftaran/cetak/'.$get->user_id)?>')"> <i class="fa fa-print"></i> Cetak Bukti Pendaftaran</a>
                                                        <?php }
                                                    } ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="alert alert-success alert-success-style1 text-center">
                                    <p>Setelah menimbang dan memperhatikan serta melihat kelengkapan berkas pada proses pendaftaran di tahap seleksi adminitrasi maka dengan ini kami panitia menyatakan :</p>
                                    <?php
                                        switch ($get->status) {
                                            case '0':
                                                echo "<h1 style='color:red;'>Anda Tidak Melakukan Submit</h1>";
                                                break;
                                            case '2':
                                                echo "<h1 style='color:red;'>Maaf Anda Tidak Memenuhi Kualifikasi Persyaratan Administrasi</h1>";
                                                break;
                                            default:
                                                # code...
                                                echo "<h5>Selamat Anda di Nyatakan :</h5>";
                                                echo "<h1 color=green>Lulus Seleksi Administrasi</h1>";
                                                echo "<p>dan berhak mengikuti Seleksi Kompetensi Bidang <br> Untuk Informasi Dapat Menghubungi Nara hubung yang tertera pada halaman login</p>";
                                                break;
                                        }
                                    ?>
                                    <p>@terima kasih, Anda telah meluangkan waktu untuk mengikuti seleksi ini...!!!@</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>