
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
                                            <li><span class="bread-blod">Product List</span>
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
        <div class="single-product-tab-area mg-tb-15">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#bolmut1"><i class="fa fa-pencil" aria-hidden="true"></i>Domain Bolmut</a></li>
                                    <li><a href="#desa1"><i class="fa fa-file-image-o" aria-hidden="true"></i>Domain Desa</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="bolmut1">
                                        <div class="product-status mg-tb-15">
                                            <div class="container-fluid">
                                                <div class="row" style="overflow-x: auto;">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="product-status-wrap">
                                                            <h4>Bolmut List</h4>
                                                            <div class="alert alert-success alert-success-style1">
                                                                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                                    </button>
                                                                <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                            </div>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/Domain_bolmut/bolmut')?>">Add Bolmut</a>
                                                            </div>
                                                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                                <thead>
                                                                    <tr>
                                                                        <th data-field="state" data-checkbox="true"></th>
                                                                        <th class="text-center" data-field="id" data-editable="true">No</th>
                                                                        <th class="text-center" data-field="tgl" data-editable="true">Tanggal Pembuatan</th>
                                                                        <th class="text-center" data-field="sub_domain" data-editable="true">Nama Sub Domain</th>
                                                                        <th class="text-center" data-field="status" data-editable="true">Status</th>
                                                                        <th class="text-center" data-field="pengelola" data-editable="true">Dinas Pengelola</th>
                                                                        <th class="text-center" data-field="nama" data-editable="true">Nama Pengelola</th>
                                                                        <th class="text-center" data-field="telpon" data-editable="true">No Telpon</th>
                                                                        <th class="text-center" data-field="deskripsi" data-editable="true">Dekripsi</th>
                                                                        <th class="text-center" data-field="link" data-editable="true">Alamat URL</th>
                                                                        <th class="text-center" data-field="action">Setting</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1; foreach($bolmut as $row) { ?>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td class="text-center"><?php echo $no ?></td>
                                                                        <td class="text-center"><?php echo $row['tgl_pembuatan'] ?></td>
                                                                        <td class="text-center"><?php echo $row['nama_subdomain'] ?></td>
                                                                        <td class="text-center"><?php echo $row['status_domain'] ?></td>
                                                                        <td class="text-center"><?php echo $row['pengelola'] ?></td>
                                                                        <td class="text-center"><?php echo $row['nama_pengelola'] ?></td>
                                                                        <td class="text-center"><?php echo $row['no_telpon'] ?></td>
                                                                        <td class="text-center"><?php echo $row['deskripsi'] ?></td>
                                                                        <td class="text-center"><?php echo $row['link'] ?></td>
                                                                        <td>
                                                                            <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/domain_bolmut/edit_bolmut/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/domain_bolmut/hapus/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                    <div class="product-tab-list tab-pane fade" id="desa1">
                                        <div class="product-status mg-tb-15">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="product-status-wrap">
                                                            <h4>Desa List</h4>
                                                            <div class="alert alert-success alert-success-style1">
                                                                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                                    </button>
                                                                <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                <p><strong><?= isset($pesan) ? $pesan : ''; ?>! </strong> Successful or positive action.</p>
                                                            </div>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/Domain_bolmut/desa')?>">Add Desa</a>
                                                            </div>
                                                            <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                                <thead>
                                                                    <tr>
                                                                        <th data-field="state" data-checkbox="true"></th>
                                                                        <th class="text-center" data-field="id" data-editable="true">No</th>
                                                                        <th class="text-center" data-field="nama" data-editable="true">Nama Domain</th>
                                                                        <th class="text-center" data-field="status" data-editable="true">Domain Status</th>
                                                                        <th class="text-center" data-field="pendaftaran" data-editable="true">Tanggal Pendaftaran</th>
                                                                        <th class="text-center" data-field="akhir" data-editable="true">Tanggal Berakhir</th>
                                                                        <th class="text-center" data-field="aktif" data-editable="true">Masa Aktif</th>
                                                                        <th class="text-center" data-field="link" data-editable="true">Alamat URL</th>
                                                                        <th>Setting</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1; foreach($desa as $row) { ?>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td class="text-center"><?php echo $no ?></td>
                                                                        <td class="text-center"><?php echo $row['nama_domain'] ?></td>
                                                                        <td class="text-center"><?php echo $row['domain_status'] ?></td>
                                                                        <td class="text-center"><?php echo $row['tgl_daftar'] ?></td>
                                                                        <td class="text-center"><?php echo $row['tgl_akhir'] ?></td>
                                                                        <td class="text-center"><?php echo $row['masa_aktif'] ?></td>
                                                                        <td class="text-center"><?php echo $row['link'] ?></td>
                                                                        <td>
                                                                            <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/domain_bolmut/edit_desa/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/domain_bolmut/hapus_desa/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
        