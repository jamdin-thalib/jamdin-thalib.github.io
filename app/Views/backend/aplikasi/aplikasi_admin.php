
<div class="single-product-tab-area mg-tb-15">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#aplikasi_umum"><i class="fa fa-pencil" aria-hidden="true"></i>Aplikasi Umum</a></li>
                            <li><a href="#aplikasi_khusus"><i class="fa fa-file-image-o" aria-hidden="true"></i>Aplikasi Khusus</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="aplikasi_umum">
                                <div class="product-status mg-tb-15">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="product-status-wrap">
                                                    <h4>Aplikasi Umum List</h4>
                                                    <div class="alert alert-success alert-success-style1">
                                                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                            </button>
                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                        <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                    </div>
                                                    <div class="add-product">
                                                        <a href="<?php echo base_url('backend/aplikasi/umum')?>">Add Aplikasi Umum</a>
                                                    </div>
                                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Tanggal Daftar</th>
                                                                <th>Nama Aplikasi</th>
                                                                <th>Dinas Pengelola</th>
                                                                <th>Manual Book Aplikasi</th>
                                                                <th>Dokumen Manual Book</th>
                                                                <th>Jenis Aplikasi</th>
                                                                <th>Bahasa Pemograman</th>
                                                                <th>Deskripsi</th>
                                                                <th>Setting</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no=1; foreach($aplikasi1 as $row) { ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $no ?></td>
                                                                <td class="text-center"><?php echo $row['tgl_aplikasi1'] ?></td>
                                                                <td class="text-center"><?php echo $row['nama_aplikasi1'] ?></td>
                                                                <td class="text-center"><?php echo $row['penggagas1'] ?></td>
                                                                <td class="text-center"><?php echo $row['manual_book1'] ?></td>
                                                                <td class="text-center"><?php echo $row['file_manualbook1'] ?></td>
                                                                <td class="text-center"><?php echo $row['jenis_aplikasi1'] ?></td>
                                                                <td class="text-center"><?php echo $row['bahasa_pemograman1'] ?></td>
                                                                <td class="text-center"><?php echo $row['deskripsi_aplikasi1'] ?></td>
                                                                <td>
                                                                    <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/aplikasi/edit_umum/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                    <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/aplikasi/hapus/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                            <div class="product-tab-list tab-pane fade" id="aplikasi_khusus">
                                <div class="product-status mg-tb-15">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="product-status-wrap">
                                                    <h4>Aplikasi Khusus List</h4>
                                                    <div class="alert alert-success alert-success-style1">
                                                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                            </button>
                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                        <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                    </div>
                                                    <div class="add-product">
                                                        <a href="<?php echo base_url('backend/aplikasi/khusus')?>">Add Aplikasi Khusus</a>
                                                    </div>
                                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Aplikasi</th>
                                                                <th>Dinas Penanggung Jawab</th>
                                                                <th>Manual Book Aplikasi</th>
                                                                <th>File Manual Book</th>
                                                                <th>Jenis Aplikasi</th>
                                                                <th>Bahasa Pemograman</th>
                                                                <th>Status</th>
                                                                <th>Deskripsi</th>
                                                                <th>Setting</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $no=1; foreach($aplikasi2 as $row) { ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $no ?></td>
                                                                <td class="text-center"><?php echo $row['nama_aplikasi2'] ?></td>
                                                                <td class="text-center"><?php echo $row['penggagas2'] ?></td>
                                                                <td class="text-center"><?php echo $row['manual_book2'] ?></td>
                                                                <td class="text-center"><?php echo $row['file_aplikasi2'] ?></td>
                                                                <td class="text-center"><?php echo $row['jenis_aplikasi2'] ?></td>
                                                                <td class="text-center"><?php echo $row['bahasa_pemograman2'] ?></td>
                                                                <td class="text-center"><?php echo $row['status_aplikasi2'] ?></td>
                                                                <td class="text-center"><?php echo $row['deskripsi_aplikasi2'] ?></td>
                                                                <td>
                                                                    <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/aplikasi/edit_khusus/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                    <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/aplikasi/hapus_khusus/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
        

        

    