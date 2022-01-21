<!-- <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>" /> -->
<section id="services" class="hoc container clear">
<div class="span12">   
        <div class="section-head text-left p-b20">
            <h4 data-title="">Register Domain DISKOMINFO</h4>
        </div>
        <div class="widget-box">
        <div class="widget-title">
            <!-- <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#tab1">Sub Domain bolmutkab.go.id</a></li>
            <li><a data-toggle="tab" href="#tab2">Domain desa.id</a></li>
            </ul> -->
        </div>
        <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
                <table class="table table-hover table-bordered" width="100%">
                    <tr>
                        <th class="text-center" style="vertical-align: middle;">Domain yang yang terdaftar di bolmutkab.go.id</th>
                    </tr>
                </table>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="vertical-align: middle;">No</th>
                                <th style="vertical-align: middle;">Tanggal Pembuatan</th>
                                <th style="vertical-align: middle;">Nama Domaian</th>
                                <th style="vertical-align: middle;">Domaian Status</th>
                                <th style="vertical-align: middle;">Pengelola Domaian</th>
                                <th style="vertical-align: middle;">Nama Pengelola Domaian</th>
                                <th style="vertical-align: middle;">Kontak Pengelola</th>
                                <th style="vertical-align: middle;">Deskripsi Domain</th>
                                <th style="vertical-align: middle;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($bolmut as $bolmut) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $no ?></td>
                                    <td class="text-center"><?php echo $bolmut['tgl_pembuatan'] ?></td>
                                    <td class="text-center"><?php echo $bolmut['nama_subdomain'] ?></td>
                                    <td class="text-center"><?php echo $bolmut['status_domain'] ?></td>
                                    <td class="text-center"><?php echo $bolmut['pengelola'] ?></td>
                                    <td class="text-center"><?php echo $bolmut['nama_pengelola'] ?></td>
                                    <td class="text-center"><?php echo $bolmut['no_telpon'] ?></td>
                                    <td class="text-center"><?php echo $bolmut['deskripsi'] ?></td>
                                    <td align="center"><a href="<?php echo $bolmut['link'] ?>" target="_blank" class="site-button"><i class="fa fa-download"></i> Link</a></td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
                <table class="table table-hover table-bordered" width="100%">
                    <tr>
                        <th class="text-center" style="vertical-align: middle;">Syarat Pengajuan Sub Domain</th>
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
                                <td align="center"><a href="" target="_blank" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                            </tr>
                            <tr>
                                <td style="vertical-align: middle;">Format Surat Kuasa</td>
                                <td align="center"><a href="" target="_blank" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="tab2" class="tab-pane"> 
            <div id="tab1" class="tab-pane active">
                <table class="table table-hover table-bordered" width="100%">
                    <tr>
                        <th class="text-center" style="vertical-align: middle;">Domain desa.id yang terdaftar di Kementrian KOMINFO RI</th>
                    </tr>
                </table>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th style="vertical-align: middle;">No</th>
                                <th style="vertical-align: middle;">Nama Domain</th>
                                <th style="vertical-align: middle;">Domain Status</th>
                                <th style="vertical-align: middle;">Tanggal Pendaftaran</th>
                                <th style="vertical-align: middle;">Tanggal Berakhir</th>
                                <th style="vertical-align: middle;">Masa Aktif</th>
                                <th style="vertical-align: middle;">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($desa as $desa) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $no ?></td>
                                    <td class="text-center"><?php echo $desa['nama_domain'] ?></td>
                                    <td class="text-center"><?php echo $desa['domain_status'] ?></td>
                                    <td class="text-center"><?php echo $desa['tgl_daftar'] ?></td>
                                    <td class="text-center"><?php echo $desa['tgl_akhir'] ?></td>
                                    <td class="text-center"><?php echo $desa['masa_aktif'] ?></td>
                                    <td align="center"><a href="<?php echo $desa['link'] ?>" target="_blank" class="site-button"><i class="fa fa-download"></i> Link</a></td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                    <table class="table table-hover table-bordered" width="100%">
                    <tr>
                        <th class="text-center" style="vertical-align: middle;">Syarat Pengajuan Sub Domain</th>
                    </tr>
                    </table>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th style="vertical-align: middle;">Nama Dokumen</th>
                                    <th style="vertical-align: middle;">Contoh</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="vertical-align: middle;">Format Surat Permohonan</td>
                                    <td align="center"><a href="" target="_blank" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">Format Surat Kuasa</td>
                                    <td align="center"><a href="" target="_blank" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">Surat Keputusan Pengangkatan Sangadi</td>
                                    <td align="center"><a href="" target="_blank" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                                </tr>
                                <tr>
                                    <td style="vertical-align: middle;">Surat Keputusan Aparat Desa</td>
                                    <td align="center"><a href="" target="_blank" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- JAVASCRIPTS -->
<script src="<?php echo base_url('assets/layout/scripts/jquery.min.js')?>"></script>


