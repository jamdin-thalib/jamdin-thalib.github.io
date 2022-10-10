<!-- ################################################################################################ -->
<section id="services" class="hoc container clear">   
    <table class="table table-hover table-bordered" width="100%">
        <tr>
            <th class="text-center" style="vertical-align: middle;"><h4>Daftar Produk Hukum</h4>
                <i>Produk Hukum yang di Hasilkan</i>
            </th>
        </tr>
    </table>
    <div class="table-responsive">
        <table class="table table-hover table-bordered" width="100%">
            <thead>
                <tr>
                    <th style="vertical-align: middle;">No</th>
                    <th style="vertical-align: middle;">Tanggal di Undangkan</th>
                    <th style="vertical-align: middle;">Nama Produk Hukum</th>
                    <th style="vertical-align: middle;">Status</th>
                    <th style="vertical-align: middle;">Uraian</th>
                    <th style="vertical-align: middle;">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $no=1; foreach($hukum as $hukum) { ?>
                <tr>
                    <td class="text-center"><?php echo $no ?></td>
                    <td class="text-center"><?php echo $hukum['tgl_produkh'] ?></td>
                    <td class="text-center"><?php echo $hukum['nama_produkh'] ?></td>
                    <td class="text-center"><?php echo $hukum['status'] ?></td>
                    <td class="text-center"><?php echo $hukum['uraianh'] ?></td>
                    <td align="center"><a href="" target="_blank" class="site-button"><i class="fa fa-download"></i> Link</a></td>
                </tr>
            <?php $no++; } ?>
            </tbody>
        </table>
    </div>
</section> 
<!-- ################################################################################################ -->