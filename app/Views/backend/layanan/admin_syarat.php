

<div class="single-product-tab-area mg-tb-15">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#syarat1"><i class="fa fa-pencil" aria-hidden="true"></i>Persyaratan Umum</a></li>
                            <li><a href="#syarat2"><i class="fa fa-file-image-o" aria-hidden="true"></i>Persyaratan Programer</a></li>
                            <li><a href="#syarat3"><i class="fa fa-file-image-o" aria-hidden="true"></i>Persyaratan Khusus Teknisi Jaringan</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="syarat1">
                                <div class="product-status mg-tb-15">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="product-status-wrap">
                                                    <h4>Persyaratan Umum</h4>
                                                    <div class="alert alert-success alert-success-style1">
                                                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                            </button>
                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                        <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                    </div>
                                                    <div class="add-product">
                                                        <a href="<?php echo base_url('backend/seleksi_syarat/syarat1')?>">Add</a>
                                                    </div>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Dekripsi</th>
                                                                <th>File</th>
                                                                <th>Setting</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no=1; foreach($persyaratan1 as $row) { ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $no ?></td>
                                                                <td class="text-center"><?php echo $row['item'] ?></td>
                                                                <td class="text-center"><?php echo $row['file'] ?></td>
                                                                <td>
                                                                    <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/seleksi_syarat/edit_syarat1/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                    <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/seleksi_syarat/hapus_syarat1/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                            <div class="product-tab-list tab-pane fade" id="syarat2">
                                <div class="product-status mg-tb-15">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="product-status-wrap">
                                                    <h4>Persyaratan Khusus Programer</h4>
                                                    <div class="alert alert-success alert-success-style1">
                                                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                            </button>
                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                        <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                    </div>
                                                    <div class="add-product">
                                                        <a href="<?php echo base_url('backend/seleksi_syarat/syarat2')?>">Add</a>
                                                    </div>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Dekripsi</th>
                                                                <th>File</th>
                                                                <th>Setting</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no=1; foreach($persyaratan2 as $row) { ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $no ?></td>
                                                                <td class="text-center"><?php echo $row['item'] ?></td>
                                                                <td class="text-center"><?php echo $row['file'] ?></td>
                                                                <td>
                                                                    <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/seleksi_syarat/edit_syarat2/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                    <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/seleksi_syarat/hapus_syarat2/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                            <div class="product-tab-list tab-pane fade" id="syarat3">
                                <div class="product-status mg-tb-15">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="product-status-wrap">
                                                    <h4>Persyaratan Khusus Teknisi Jaringan</h4>
                                                    <div class="alert alert-success alert-success-style1">
                                                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                            </button>
                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                        <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                    </div>
                                                    <div class="add-product">
                                                        <a href="<?php echo base_url('backend/seleksi_syarat/syarat3')?>">Add</a>
                                                    </div>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Dekripsi</th>
                                                                <th>File</th>
                                                                <th>Setting</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no=1; foreach($persyaratan3 as $row) { ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $no ?></td>
                                                                <td class="text-center"><?php echo $row['item'] ?></td>
                                                                <td class="text-center"><?php echo $row['file'] ?></td>
                                                                <td>
                                                                    <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/seleksi_syarat/edit_syarat3/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                    <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/seleksi_syarat/hapus_syarat3/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
