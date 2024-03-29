
<!-- ################################################################################################ -->
<!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" /> -->
<section id="services" class="hoc container clear">
    <div class="span12">
    <div class="section-head text-left p-b20">
        <!-- <h4 data-title="">Register Aplikasi DISKOMINFO</h4> -->
    </div>
        <div class="widget-box">
        <div class="widget-title">
            <!-- <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab1">Aplikasi Umum</a></li>
                <li><a data-toggle="tab" href="#tab2">Aplikasi Khusus</a></li>
            </ul> -->
        </div>
        <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
                <table class="table table-hover table-bordered" width="100%">
                    <tr>
                        <th class="text-center" style="vertical-align: middle;"><h4>Register Aplikasi Umum</h4></th>
                    </tr>
                </table>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="vertical-align: middle;">No</th>
                                <th style="vertical-align: middle;">Tanggal Pendaftaran</th>
                                <th style="vertical-align: middle;">Nama Aplikasi</th>
                                <th style="vertical-align: middle;">Penggagas</th>
                                <th style="vertical-align: middle;">Manual Book</th>
                                <th style="vertical-align: middle;">Panduan</th>
                                <th style="vertical-align: middle;">Jenis Aplikasi</th>
                                <th style="vertical-align: middle;">Bahasa Pemograman</th>
                                <th style="vertical-align: middle;">Dekripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($aplikasi1 as $row) { ?>
                            <tr>
                                <td class="text-center"><?php echo $no ?></td>
                                <td class="text-center"><?php echo $row['tgl_aplikasi1'] ?></td>
                                <td class="text-center"><?php echo $row['nama_aplikasi1'] ?></td>
                                <td class="text-center"><?php echo $row['penggagas1'] ?></td>
                                <td class="text-center"><?php echo $row['manual_book1'] ?></td>
                                <td class="text-center"><?php echo $row['file_manualbook1'] ?></td>
                                <td class="text-center"><?php echo $row['jenis_aplikasi1'] ?></td>
                                <td class="text-center"><?php echo $row['bahasa_pemograman1'] ?></td>
                                <td class="text-center"><?php echo $row['deskripsi_aplikasi1'] ?></td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
                <table class="table table-hover table-bordered" width="100%">
                    <tr>
                        <th class="text-center" style="vertical-align: middle;">Syarat Pengajuan Aplikasi Umum</th>
                    </tr>
                </table>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="vertical-align: middle;">Nama Dokumen</th>
                                <th style="vertical-align: middle;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align: middle;">Format Surat Permohonan</td>
                                <td align="center"><a href="" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: middle;">Format Surat Kuasa</td>
                                <td align="center"><a href="" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="tab2" class="tab-pane"> 
            <div id="tab1" class="tab-pane active">
                <table class="table table-hover table-bordered" width="100%">
                    <tr>
                        <th>
                            <h4 class="text-center" style="vertical-align: middle;">Register Aplikasi Khusus</h4>
                        </th>
                    </tr>
                </table>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" width="100%">
                        <thead>
                        <tr>
                                <th style="vertical-align: middle;">No</th>
                                <th style="vertical-align: middle;">Nama Aplikasi</th>
                                <th style="vertical-align: middle;">Dinas Penanggung Jawab</th>
                                <th style="vertical-align: middle;">Manual Book</th>
                                <th style="vertical-align: middle;">Petunjuk Penggunaan</th>
                                <th style="vertical-align: middle;">Jenis Aplikasi</th>
                                <th style="vertical-align: middle;">Bahas Pemograman</th>
                                <th style="vertical-align: middle;">Status</th>
                                <th style="vertical-align: middle;">Deskripsi</th>
                                <th style="vertical-align: middle;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($aplikasi2 as $aplikasi2) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $no ?></td>
                                    <td class="text-center"><?php echo $aplikasi2['nama_aplikasi2'] ?></td>
                                    <td class="text-center"><?php echo $aplikasi2['penggagas2'] ?></td>
                                    <td class="text-center"><?php echo $aplikasi2['manual_book2'] ?></td>
                                    <td class="text-center"><?php echo $aplikasi2['file_aplikasi2'] ?></td>
                                    <td class="text-center"><?php echo $aplikasi2['jenis_aplikasi2'] ?></td>
                                    <td class="text-center"><?php echo $aplikasi2['bahasa_pemograman2'] ?></td>
                                    <td class="text-center"><?php echo $aplikasi2['status_aplikasi2'] ?></td>
                                    <td class="text-center"><?php echo $aplikasi2['deskripsi_aplikasi2'] ?></td>
                                    <td align="center"><a href="" target="_blank" class="site-button"><i class="fa fa-link"></i> Link</a></td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                    <table class="table table-hover table-bordered" width="100%">
                    <tr>
                        <th class="text-center" style="vertical-align: middle;">Syarat Pengajuan Aplikasi Khusus</th>
                    </tr>
                </table>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="vertical-align: middle;">Nama Dokumen</th>
                                <th style="vertical-align: middle;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align: middle;">Format Surat Permohonan</td>
                                <td align="center"><a href="" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: middle;">Format Surat Kuasa</td>
                                <td align="center"><a href="" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
