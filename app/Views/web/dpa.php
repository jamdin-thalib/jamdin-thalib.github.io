<!-- ################################################################################################ -->
<link href="<?= base_url('assets/layout/scripts/adminlte.min.js') ?>" rel="stylesheet" type="text/css" media="all">
<section id="services" class="hoc container clear">     
    <table class="table table-hover table-bordered" width="100%">
        <tr>
            <th class="text-center" style="vertical-align: middle;"><h4>Rencana Kegiatan dan Anggaran (RKA)</h4></th>
        </tr>
    </table>
    <div class="table-responsive">
        <table class="table table-hover table-bordered" width="100%">
            <thead>
                <tr>
                    <th style="vertical-align: middle;">No</th>
                    <th style="vertical-align: middle;">Tanggal Pengesahan</th>
                    <th style="vertical-align: middle;">Nama Dokumen</th>
                    <th style="vertical-align: middle;">Uraian</th>
                    <th style="vertical-align: middle;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($rka as $rka) { ?>
                <tr>
                    <td class="text-center"><?php echo $no ?></td>
                    <td class="text-center"><?php echo $rka['tgl_pengesahan_rka'] ?></td>
                    <td class="text-center"><?php echo $rka['nama_dok_rka'] ?></td>
                    <td class="text-center"><?php echo $rka['uraian_rka'] ?></td>
                    <td align="center"><a href="<?php echo $rka['file_rka'] ?>" target="_blank" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table>
    </div>
    <table class="table table-hover table-bordered" width="100%">
        <tr>
            <th class="text-center" style="vertical-align: middle;"><h4>Daftar Penggunaan Anggaran (DPA)</h4></th>
        </tr>
    </table>
    <div class="table-responsive">
        <table class="table table-hover table-bordered" width="100%">
            <thead>
                <tr>
                    <th style="vertical-align: middle;">No</th>
                    <th style="vertical-align: middle;">Tanggal Pengesahan</th>
                    <th style="vertical-align: middle;">Nama Dokumen</th>
                    <th style="vertical-align: middle;">Uraian</th>
                    <th style="vertical-align: middle;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($dpa as $dpa) { ?>
                <tr>
                    <td class="text-center"><?php echo $no ?></td>
                    <td class="text-center"><?php echo $dpa['tgl_pengesahan_dpa'] ?></td>
                    <td class="text-center"><?php echo $dpa['nama_dok_dpa'] ?></td>
                    <td class="text-center"><?php echo $dpa['uraian_dpa'] ?></td>
                    <td align="center"><a href="<?php echo $dpa['file_dpa'] ?>" target="_blank" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table> 
    </div>
    <table class="table table-hover table-bordered" width="100%">
        <tr>
            <th class="text-center" style="vertical-align: middle;"><h4>Daftar Realisasi Fisik dan Kegiatan (RFK)</h4></th>
        </tr>
    </table>
    <div class="table-responsive">
        <table class="table table-hover table-bordered" width="100%">
            <thead>
                <tr>
                    <th style="vertical-align: middle;">No</th>
                    <th style="vertical-align: middle;">Tanggal Pengesahan</th>
                    <th style="vertical-align: middle;">Nama Dokumen</th>
                    <th style="vertical-align: middle;">Uraian</th>
                    <th style="vertical-align: middle;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; foreach($rfk as $rfk) { ?>
                <tr>
                    <td class="text-center"><?php echo $no ?></td>
                    <td class="text-center"><?php echo $rfk['tgl_pengesahan_rfk'] ?></td>
                    <td class="text-center"><?php echo $rfk['nama_dok_rfk'] ?></td>
                    <td class="text-center"><?php echo $rfk['uraian_rfk'] ?></td>
                    <td align="center"><a href="<?php echo $rfk['file_rfk'] ?>" target="_blank" class="site-button"><i class="fa fa-download"></i> Unduh</a></td>
                </tr>
                <?php $no++; } ?>
            </tbody>
        </table> 
    </div>
</section> 
