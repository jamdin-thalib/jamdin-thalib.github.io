<!-- ################################################################################################ -->
<section id="services" class="hoc container clear">
    <div class="page-content">
        <div class="row equal-wraper p-t20">
            <!-- <div class="icon-content p-l20"> -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="bb-1 mb-2">
                                <span class="home-blue p-3 text-white my-10 font-weight-bold"><b>DATA PEGAWAI PNS</b></span>
                                <i>Daftar Seluruh Pegawai Negeri Sipil di Dinas</i>
                            </div>
                            <div class="table-success table-striped" style="overflow-x: auto;">
                                <table class="table">
                                    <head>
                                        <tr>
                                            <th width="5" style="vertical-align: middle;" class="text-center" valign="middle" rowspan="2">No</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">NIP</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">Nama Pegawai</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">Jenis Kelamin</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">Tempat Lahir</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">Tanggal Lahir</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">Agama</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">Umur</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" colspan="2">TMT</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">Pangkat / Gol. Ruang</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">TMT Pangkat / Gol. Ruang</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" colspan="2">Masa Kerja</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">Jenis Pegawai</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">Status Kawin</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">Tingkat Pendidikan</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" colspan="3">Perguruan Tinggi</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">Jabatan</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center" rowspan="2">Eselon</th>
                                        </tr>
                                        <tr>
                                            <th width="5" style="vertical-align: middle;" class="text-center">CPNS</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center">PNS</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center">Tahun</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center">Bulan</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center">Nama PT</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center">Program Studi</th>
                                            <th width="5" style="vertical-align: middle;" class="text-center">Tahun Lulus</th>
                                        </tr>
                                    </head>
                                    <body>
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
                                    </body>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row">
                    <div class="table-responsive">
                        <div class="bb-1 mb-3">
                            <span class="home-blue p-2 text-white my-5 font-weight-bold"><b>DATA URUT KEPANGKATAN (DUK)</b></span>
                            <i>Daftar Pegawai Berdasarkan Urutan Kepangkatan</i>
                        </div>
                        <table class="table table-success table-striped" width="100%">
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
                </div>
            </section>
            <section>
                <div class="icon-content p-l20">
                    <div class="table-responsive">
                        <div class="bb-1 mb-2">
                            <span class="home-blue p-2 text-white my-5 font-weight-bold"><b>DATA PEGAWAI NON-PNS</b></span>
                            <i>Daftar Nama-nama Pegawai Non- PNS</i>
                        </div>
                        <table class="table table-success table-striped" width="100%">
                            <thead>
                                <tr>
                                    <th rowspan="2" style="vertical-align: middle;" class="text-center">No</th>
                                    <!-- <th rowspan="2" style="vertical-align: middle;" class="text-center">No Register</th> -->
                                    <th rowspan="2" style="vertical-align: middle;" class="text-center">Nama Pegawai</th>
                                    <th rowspan="2" style="vertical-align: middle;" class="text-center">Jenis Kelamin</th>
                                    <th rowspan="2" style="vertical-align: middle;" class="text-center">Tempat Lahir</th>
                                    <th rowspan="2" style="vertical-align: middle;" class="text-center">Tanggal Lahir</th>
                                    <th rowspan="2" style="vertical-align: middle;" class="text-center">Agama</th>
                                    <th rowspan="2" style="vertical-align: middle;" class="text-center">Alamat</th>
                                    <th rowspan="2" style="vertical-align: middle;" class="text-center">Tahun Terangkat</th>
                                    <th rowspan="2" style="vertical-align: middle;" class="text-center">Pendidikan Terkahir</th>
                                    <th rowspan="2" style="vertical-align: middle;" class="text-center">Nama Perguruan Tinggi / Sekolah</th>
                                    <th rowspan="2" style="vertical-align: middle;" class="text-center">Jurusan / Program Study</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <?php $no=1; foreach($ptt as $row) { ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no ?></td>
                                        <!-- <td class="text-center"><?php echo $row['nip'] ?></td> -->
                                        <td class="text-center"><?php echo $row['nama_pegawai'] ?></td>
                                        <td class="text-center"><?php echo $row['jenis_kelamin'] ?></td>
                                        <td class="text-center"><?php echo $row['tempat_lahir'] ?></td>
                                        <td class="text-center"><?php echo $row['tgl_lahir'] ?></td>
                                        <td class="text-center"><?php echo $row['agama'] ?></td>
                                        <td class="text-center"><?php echo $row['alamat'] ?></td>
                                        <td class="text-center"><?php echo $row['tahun_terangkat'] ?></td>
                                        <td class="text-center"><?php echo $row['pendidikan'] ?></td>
                                        <td class="text-center"><?php echo $row['nama_pt'] ?></td>
                                        <td class="text-center"><?php echo $row['jurusan_pt'] ?></td>
                                    </tr>
                                <?php $no++; } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<!-- ################################################################################################ -->