<!-- ################################################################################################ -->
<section id="services" class="hoc container clear">
    <div class="page-content">
        <div class="row equal-wraper p-t20">
            <div class="icon-content p-l20">
                <div class="table-responsive" style="overflow-x: auto;">
                    <table class="table table-hover table-bordered" width="100%">
                        <tr style="overflow-x: auto;">
                            <th class="text-center" style="vertical-align: middle;">DATA PEGAWAI PNS</th>
                        </tr>
                    </table>
                    <table class="table table-hover table-bordered" width="100%">
                        <thead>
                            <tr>
                                <th width="5" class="text-center" valign="middle" rowspan="2">No</th>
                                <th width="5" class="text-center" rowspan="2">NIP</th>
                                <th width="5" class="text-center" rowspan="2">Nama Pegawai</th>
                                <th width="5" class="text-center" rowspan="2">Jenis Kelamin</th>
                                <th width="5" class="text-center" rowspan="2">Tempat Lahir</th>
                                <th width="5" class="text-center" rowspan="2">Tanggal Lahir</th>
                                <th width="5" class="text-center" rowspan="2">Agama</th>
                                <th width="5" class="text-center" rowspan="2">Umur</th>
                                <th width="5" class="text-center" colspan="2">TMT</th>
                                <th width="5" class="text-center" rowspan="2">Pangkat / Gol. Ruang</th>
                                <th width="5" class="text-center" rowspan="2">TMT Pangkat / Gol. Ruang</th>
                                <th width="5" class="text-center" colspan="2">Masa Kerja</th> 
                                <th width="5" class="text-center" rowspan="2">Jenis Pegawai</th>
                                <th width="5" class="text-center" rowspan="2">Status Kawin</th>
                                <th width="5" class="text-center" rowspan="2">Tingkat Pendidikan</th>
                                <th width="5" class="text-center" colspan="3">Perguruan Tinggi</th>
                                <th width="5" class="text-center" rowspan="2">Jabatan</th>
                                <th width="5" class="text-center" rowspan="2">Eselon</th>
                            </tr>
                            <tr>
                                <th width="5" class="text-center">CPNS</th>
                                <th width="5" class="text-center">PNS</th>
                                <th width="5" class="text-center">Tahun</th>
                                <th width="5" class="text-center">Bulan</th>
                                <th width="5" class="text-center">Nama PT</th>
                                <th width="5" class="text-center">Program Studi</th>
                                <th width="5" class="text-center">Tahun Lulus</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($pns as $row) { ?>
                                <tr>
                                   
                                    <td class="text-center"><?php echo $no ?></td>
                                    <td class="text-center"><?php echo $row['nip'] ?></td>
                                    <td class="text-center"><?php echo $row['nama_pegawai'] ?></td>
                                    <td class="text-center"><?php echo $row['jenis_kelamin'] ?></td>
                                    <td class="text-center"><?php echo $row['tempat_lahir'] ?></td>
                                    <td class="text-center"><?php echo $row['tgl_lahir'] ?></td>
                                    <td class="text-center"><?php echo $row['agama'] ?></td>
                                    <td class="text-center"><?php echo $row['usia'] ?></td>
                                    <td class="text-center"><?php echo $row['cpns'] ?></td>
                                    <td class="text-center"><?php echo $row['pns'] ?></td>
                                    <td class="text-center"><?php echo $row['pangkat_gol'] ?></td>
                                    <td class="text-center"><?php echo $row['tmt_pangkat'] ?></td>
                                    <td class="text-center"><?php echo $row['tahun'] ?></td>
                                    <td class="text-center"><?php echo $row['bulan'] ?></td>
                                    <td class="text-center"><?php echo $row['jenis_pegawai'] ?></td>
                                    <td class="text-center"><?php echo $row['status_kawin'] ?></td>
                                    <td class="text-center"><?php echo $row['tingkat_pendidikan'] ?></td>
                                    <td class="text-center"><?php echo $row['nama_pt'] ?></td>
                                    <td class="text-center"><?php echo $row['program_studi'] ?></td>
                                    <td class="text-center"><?php echo $row['tahun_lulus'] ?></td>
                                    <td class="text-center"><?php echo $row['jabatan'] ?></td>
                                    <td class="text-center"><?php echo $row['eselon'] ?></td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" width="100%" style="overflow-x: auto;">
                        <tr>
                            <th class="text-center" style="vertical-align: middle;">DAFTAR URUT KEPANGKATAN</th>
                        </tr>
                    </table>
                    <table class="table table-hover table-bordered" width="100%">
                        <thead>
                            
                            <tr>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">No</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">Nama Pegawai</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">NIP</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">Pangkat / Golongan</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">TMT Pangkat </th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">Jabatan</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">Eselon</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($pns as $row) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $no ?></td>
                                    <td class="text-center"><?php echo $row['nama_pegawai'] ?></td>
                                    <td class="text-center"><?php echo $row['nip'] ?></td>
                                    <td class="text-center"><?php echo $row['pangkat_gol'] ?></td>
                                    <td class="text-center"><?php echo $row['tmt_pangkat'] ?></td>
                                    <td class="text-center"><?php echo $row['jabatan'] ?></td>
                                    <td class="text-center"><?php echo $row['eselon'] ?></td>
                                </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" width="100%">
                        <tr>
                            <th class="text-center" style="vertical-align: middle;">DATA PEGAWAI NON-PNS</th>
                        </tr>
                    </table>
                    <table class="table table-hover table-bordered" width="100%" style="overflow-x: auto;">
                        <thead>
                            
                            <tr>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">No</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">Nama Pegawai</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">NIP</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">Jenis Kelamin</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">Tempat Lahir</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">Tanggal Lahir</th>
                                <th rowspan="2" style="vertical-align: middle;" class="text-center">Tahun Terangkat</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">Jamdin Thalib, S.Kom</td>
                                <td class="text-center">198510042011021001</td>
                                <td class="text-center">Laki-Laki</td>
                                <td class="text-center">Dalapuli</td>
                                <td class="text-center">04-10-1985</td>
                                <td class="text-center">2011</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ################################################################################################ -->