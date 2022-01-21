

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
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Tabel<span class="table-project-n"> Struktur</span> Diskominfo</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control">
												<option value="">Export Basic</option>
												<option value="all">Export All</option>
												<option value="selected">Export Selected</option>
											</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="id">No</th>
                                                <th data-field="jabatan" data-editable="true">Jabatan</th>
                                                <th data-field="nama_pegawai" data-editable="true">Nama</th>
                                                <th data-field="nip" data-editable="true">NIP</th>
												<th data-field="tmt_pangkat" data-editable="true">TMT Jabatan</th>
												<th data-field="jenis_pegawai" data-editable="true">Status Pegawai</th>
												<th data-field="eselon" data-editable="true">Eselom</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($struktur as $row) { ?>
                                                <tr>
                                                    <td></td>
                                                    <td class="text-center"><?php echo $no ?></td>
                                                    <td class="text-center"><?php echo $row['jabatan'] ?></td>
                                                    <td class="text-center"><?php echo $row['nama_pegawai'] ?></td>
                                                    <td class="text-center"><?php echo $row['nip'] ?></td>
                                                    <td class="text-center"><?php echo $row['tmt_pangkat'] ?></td>
                                                    <td class="text-center"><?php echo $row['jenis_pegawai'] ?></td>
                                                    <td class="text-center"><?php echo $row['eselon'] ?></td>
                                                    <td class="datatable-ct"><i class="fa fa-check"></i></td>
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
        