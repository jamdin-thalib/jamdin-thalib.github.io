<table class="table sparkle-table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Berkas</th>
            <th>File</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($get as $row) : ?>
        <tr>
            <td><?= $no++ ; ?></td>
            <td><?= $row->nama_berkas; ?></td>
            <td> 
            <?php if ($row->id == 3 || $row->id == 4) { ?>
                <a href="javascript:void();" class="btn btn-custon-rounded-three btn-primary" onclick="klik('<?= site_url('home/lihatpdf/img/'.$row->file_berkas) ?>')" <?= ($row->file_berkas == null) ? 'disabled' : ''; ?> > Lihat Berkas</a> 
            <?php }else{ ?>
                <a href="javascript:void();" class="btn btn-custon-rounded-three btn-primary" onclick="klik('<?= site_url('home/lihatpdf/pdf/'.$row->file_berkas) ?>')" <?= ($row->file_berkas == null) ? 'disabled' : ''; ?> > Lihat Berkas</a> 
            <?php } ?>
                
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>