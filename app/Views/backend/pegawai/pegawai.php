<div class="single-product-tab-area mg-tb-15">
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row" style="overflow-x: auto;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#pns"><i class="fa fa-pencil" aria-hidden="true"></i>Pegawai ASN</a></li>
                            <li><a href="#ptt"><i class="fa fa-file-image-o" aria-hidden="true"></i>Pegawai PTT</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="pns">
                                <div class="product-status mg-tb-15">
                                    <div class="container-fluid">
                                        <div class="row" style="overflow-x: auto;">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="sparkline13-list">
                                                    <div class="sparkline13-hd">
                                                        <div class="main-sparkline13-hd">
                                                            <h1>List <span class="table-project-n">Pegawai PNS</span></h1>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/pegawai/pns')?>">Add PNS</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="sparkline13-graph">
                                                        <div class="datatable-dashv1-list custom-datatable-overright">
                                                            <!-- <div id="toolbar">
                                                                <select class="btn btn-custon-rounded-three btn-default">
                                                                    <option value="">Export Basic</option>
                                                                    <option value="all">Export All</option>
                                                                    <option value="selected">Export Selected</option>
                                                                </select>
                                                                <button  class="btn btn-custon-rounded-three btn-default"><i class="fa fa-home adminpro-home-admin" aria-hidden="true"></i> Default</button>
                                                                <button  class="btn btn-custon-rounded-three btn-primary" id="lihat_berkas" disabled><i class="fa fa-info-circle adminpro-informatio"></i> Lihat Berkas</button>
                                                                <button  class="btn btn-custon-rounded-three btn-success"><i class="fa fa-check adminpro-checked-pro" aria-hidden="true"></i> Success</button>
                                                                <button  class="btn btn-custon-rounded-three btn-warning"><i class="fa fa-exclamation-triangle adminpro-warning-danger" aria-hidden="true"></i> Warning</button>
                                                                <button  class="btn btn-custon-rounded-three btn-danger"><i class="fa fa-times adminpro-danger-error" aria-hidden="true"></i> Danger</button>
                                                            </div> -->
                                                            <table id="table" data-toggle="table" data-ajax="ajaxRequest" data-side-pagination="server" data-pagination="true" data-search="true" data-show-columns="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                                <head>
                                                                    <tr>
                                                                        <th data-field="state" data-checkbox="true" rowspan="2"></th>
                                                                        <th data-field="id" data-visible="false" rowspan="2">Id</th>
                                                                        <th data-field="no" valign="middle" rowspan="2">No</th>
                                                                        <th data-field="nip" rowspan="2">NIP</th>
                                                                        <th data-field="nama" rowspan="2">Nama Pegawai</th>
                                                                        <th data-field="jenkel" rowspan="2">Jenis Kelamin</th>
                                                                        <th data-field="tempat_lahir" rowspan="2">Tempat Lahir</th>
                                                                        <th data-field="tanggal_lahir" rowspan="2">Tanggal Lahir</th>
                                                                        <th data-field="agama" rowspan="2">Agama</th>
                                                                        <th data-field="umur" rowspan="2">Umur</th>
                                                                        <th data-field="tmt" colspan="2">TMT</th>
                                                                        <th data-field="pangkat_gol" rowspan="2">Pangkat / Gol. Ruang</th>
                                                                        <th data-field="tmt_pangkat" rowspan="2">TMT Pangkat / Gol. Ruang</th>
                                                                        <th data-field="masa_kerja" colspan="2">Masa Kerja</th> 
                                                                        <th data-field="berkala" colspan="2">Berkala</th> 
                                                                        <th data-field="jenis_pegawai" rowspan="2">Jenis Pegawai</th>
                                                                        <th data-field="status_kawin" rowspan="2">Status Kawin</th>
                                                                        <th data-field="tingkat_pendidikan" rowspan="2">Tingkat Pendidikan</th>
                                                                        <th data-field="kampus" colspan="3">Perguruan Tinggi</th>
                                                                        <th data-field="jabatan" rowspan="2">Jabatan</th>
                                                                        <th data-field="eselon" rowspan="2">Eselon</th>
                                                                        <th data-field="alamat" rowspan="2">Alamat</th>
                                                                        <th data-field="seting" rowspan="2">Setting</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th data-field="cpns">CPNS</th>
                                                                        <th data-field="pns">PNS</th>
                                                                        <th data-field="tahun">Tahun</th>
                                                                        <th data-field="bulan">Bulan</th>
                                                                        <th data-field="awal">Awal</th>
                                                                        <th data-field="akhir">Akhir</th>
                                                                        <th data-field="pt">Nama PT</th>
                                                                        <th data-field="program_study">Program Studi</th>
                                                                        <th data-field="tahun_lulus">Tahun Lulus</th>
                                                                    </tr>
                                                                </head>
                                                                <tbody>
                                                                    <?php $no=1; foreach($pns as $row) { ?>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td><?php echo $no ?></td>
                                                                        <td><?php echo $row['nip'] ?></td>
                                                                        <td><?php echo $row['nama_pegawai'] ?></td>
                                                                        <td><?php echo $row['jenis_kelamin'] ?></td>
                                                                        <td><?php echo $row['tempat_lahir'] ?></td>
                                                                        <td><?php echo $row['tgl_lahir'] ?></td>
                                                                        <td><?php echo $row['agama'] ?></td>
                                                                        <td><?php echo $row['usia'] ?></td>
                                                                        <td><?php echo $row['cpns'] ?></td>
                                                                        <td><?php echo $row['pns'] ?></td>
                                                                        <td><?php echo $row['pangkat_gol'] ?></td>
                                                                        <td><?php echo $row['tmt_pangkat'] ?></td>
                                                                        <td><?php echo $row['tahun'] ?></td>
                                                                        <td><?php echo $row['bulan'] ?></td>
                                                                        <td><?php echo $row['berkala_awal'] ?></td>
                                                                        <td><?php echo $row['berkala_akhir'] ?></td>
                                                                        <td><?php echo $row['jenis_pegawai'] ?></td>
                                                                        <td><?php echo $row['status_kawin'] ?></td>
                                                                        <td><?php echo $row['tingkat_pendidikan'] ?></td>
                                                                        <td><?php echo $row['nama_pt'] ?></td>
                                                                        <td><?php echo $row['program_studi'] ?></td>
                                                                        <td><?php echo $row['tahun_lulus'] ?></td>
                                                                        <td><?php echo $row['jabatan'] ?></td>
                                                                        <td><?php echo $row['eselon'] ?></td>
                                                                        <td><?php echo $row['alamat'] ?></td>
                                                                        <td>
                                                                            <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/pegawai/edit_pns/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/pegawai/hapus_ptt/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php $no++; } ?>
                                                                </tbody>
                                                            </table>
                                                            <div class="custom-pagination">
                                                                <nav aria-label="Page navigation example">
                                                                    <ul class="pagination">
                                                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                                    </ul>
                                                                </nav>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-tab-list tab-pane fade" id="ptt">
                                <div class="product-status mg-tb-15">
                                    <div class="container-fluid">
                                        <div class="row" style="overflow-x: auto;">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="sparkline13-list">
                                                    <div class="main-sparkline13-hd">
                                                        <h1>List <span class="table-project-n">Pegawai PTT</span></h1>
                                                        <div class="add-product">
                                                            <a href="<?php echo base_url('backend/pegawai/ptt')?>">Add PTT</a>
                                                        </div>
                                                    </div>
                                                    <table id="table" data-toggle="table" data-ajax="ajaxRequest" data-side-pagination="server" data-pagination="true" data-search="true" data-show-columns="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                        <head>
                                                            <tr>
                                                                <th data-field="state" data-checkbox="true"></th>
                                                                <th data-field="id" data-visible="false"></th>
                                                                <th data-field="no" valign="middle">No</th>
                                                                <th data-field="nip" >No Register</th>
                                                                <th data-field="nama">Nama Pegawai</th>
                                                                <th data-field="jenkel">Jenis Kelamin</th>
                                                                <th data-field="tempat_lahir">Tempat Lahir</th>
                                                                <th data-field="tanggal_lahir">Tanggal Lahir</th>
                                                                <th data-field="agama">Agama</th>
                                                                <th data-field="alamat">Alamat</th>
                                                                <th data-field="pendidikan">Pendidikan Terkahir</th>
                                                                <th data-field="pendidikan">Nama Perguruan Tinggi / Sekolah</th>
                                                                <th data-field="pendidikan">Jurusan / Program Study</th>
                                                                <th data-field="seting">Tahun Terangkat</th>
                                                                <th data-field="seting">Setting</th>
                                                            </tr>
                                                        </head>
                                                        <tbody>
                                                            <?php $no=1; foreach($ptt as $row) { ?>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td><?php echo $no ?></td>
                                                                <td><?php echo $row['nip'] ?></td>
                                                                <td><?php echo $row['nama_pegawai'] ?></td>
                                                                <td><?php echo $row['jenis_kelamin'] ?></td>
                                                                <td><?php echo $row['tempat_lahir'] ?></td>
                                                                <td><?php echo $row['tgl_lahir'] ?></td>
                                                                <td><?php echo $row['agama'] ?></td>
                                                                <td><?php echo $row['alamat'] ?></td>
                                                                <td><?php echo $row['pendidikan'] ?></td>
                                                                <td><?php echo $row['nama_pt'] ?></td>
                                                                <td><?php echo $row['jurusan_pt'] ?></td>
                                                                <td><?php echo $row['tahun_terangkat'] ?></td>
                                                                <td>
                                                                    <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/pegawai/edit_ptt/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                    <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/pegawai/hapus_ptt/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                                </td>
                                                            </tr>
                                                            <?php $no++; } ?>
                                                        </tbody>
                                                    </table>
                                                    <div class="custom-pagination">
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                            </ul>
                                                        </nav>
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
        </div> 
    </div> 
</div> 
        

        

    