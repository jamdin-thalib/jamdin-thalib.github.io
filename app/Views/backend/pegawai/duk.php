

            <!-- Mobile Menu end -->
            <!-- <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcome-heading">
                                            <form role="search" class="">
                                                <input type="text" placeholder="Search..." class="form-control">
                                                <a href=""><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Data Table</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15">
            <div class="container-fluid">
                <div class="row" style="overflow-x: auto;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Daftar<span class="table-project-n"> Urut</span> Kepangkatan</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph" style="overflow-x: auto;">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
												<option value="">Export Basic</option>
												<option value="all">Export All</option>
												<option value="selected">Export Selected</option>
											</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" style="overflow-x: auto;">
                                        <thead>
                                            <!-- <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" data-editable="true">Product Title</th>
                                                <th data-field="company" data-editable="true">Stock</th>
                                                <th data-field="price" data-editable="true">Price</th>
												<th data-field="date" data-editable="true">Date</th>
												<th data-field="task" data-editable="true">Status</th>
												<th data-field="email" data-editable="true">Total Sales</th>
                                                <th data-field="action">Action</th>
                                            </tr> -->
                                            <tr>
                                                <th width="5" class="text-center" valign="middle" rowspan="2" data-field="state" data-checkbox="true"></th>
                                                <th width="5" class="text-center" valign="middle" rowspan="2" data-field="id">No</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="nip" data-editable="true">NIP</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="nama_pegawai" data-editable="true">Nama Pegawai</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="jenis_kelamin" data-editable="true">Jenis Kelamin</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="tempat_lahir" data-editable="true">Tempat Lahir</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="tgl_lahir" data-editable="true">Tanggal Lahir</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="agama" data-editable="true">Agama</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="usia" data-editable="true">Umur</th>
                                                <th width="5" class="text-center" colspan="2" data-field="tmt" data-editable="true">TMT</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="pangkat_gol" data-editable="true">Pangkat / Gol. Ruang</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="tmt_pangkat" data-editable="true">TMT Pangkat / Gol. Ruang</th>
                                                <th width="5" class="text-center" colspan="2" data-field="masa_kerja" data-editable="true">Masa Kerja</th> 
                                                <th width="5" class="text-center" rowspan="2" data-field="jenis_pegawai" data-editable="true">Jenis Pegawai</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="status_kawin" data-editable="true">Status Kawin</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="tingkat_pendidikan" data-editable="true">Tingkat Pendidikan</th>
                                                <th width="5" class="text-center" colspan="3" data-field="pg" data-editable="true">Perguruan Tinggi</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="jabatan" data-editable="true">Jabatan</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="eselon" data-editable="true">Eselon</th>
                                                <th width="5" class="text-center" rowspan="2" data-field="action">Action</th>
                                            </tr>
                                            <tr>
                                                <th width="5" class="text-center" data-field="cpns" data-editable="true">CPNS</th>
                                                <th width="5" class="text-center" data-field="pns" data-editable="true">PNS</th>
                                                <th width="5" class="text-center" data-field="tahun" data-editable="true">Tahun</th>
                                                <th width="5" class="text-center" data-field="bulan" data-editable="true">Bulan</th>
                                                <th width="5" class="text-center" data-field="nama_pt" data-editable="true">Nama PT</th>
                                                <th width="5" class="text-center" data-field="program_studi" data-editable="true">Program Studi</th>
                                                <th width="5" class="text-center" data-field="tahun_lulus" data-editable="true">Tahun Lulus</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($duk as $row) { ?>
                                            <tr>
                                                <td></td>
                                                <td class="text-center"><?php echo $no ?></td>
                                                <td class="text-center" data-field="nip" data-editable="true"><?php echo $row['nip'] ?></td>
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
                                                <td>
                                                    <!-- <td class="datatable-ct"><i class="fa fa-check"></i> -->
                                                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </td>
                                            </tr>
                                            <?php $no++; } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
        