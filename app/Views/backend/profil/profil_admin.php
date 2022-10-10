
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
                                    <li class="active"><a href="#visi"><i class="fa fa-pencil" aria-hidden="true"></i>Visi Misi</a></li>
                                    <li><a href="#sejarah"><i class="fa fa-file-image-o" aria-hidden="true"></i>Sejarah Dinas</a></li>
                                    <li><a href="#demografi"><i class="fa fa-file-image-o" aria-hidden="true"></i>Demografi Dinas</a></li>
                                    <li><a href="#geografi"><i class="fa fa-file-image-o" aria-hidden="true"></i>Letak Gegrafis</a></li>
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="visi">
                                        <div class="product-status mg-tb-15">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="product-status-wrap">
                                                            <h4>Visi Dinas</h4>
                                                            <div class="alert alert-success alert-success-style1">
                                                                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                                    </button>
                                                                <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                            </div>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/profil/profil')?>">Add</a>
                                                            </div>
                                                            <table width="50%" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Visi</th>
                                                                        <th>Setting</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1; foreach($profil as $row) { ?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $no ?></td>
                                                                        <td class="text-center"><?php echo $row['visi'] ?></td>
                                                                        <td>
                                                                            <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/profil/profil_form'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/dpa_admin/hapus_rka/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="product-status-wrap">
                                                            <h4>Misi Dinas</h4>
                                                            <div class="alert alert-success alert-success-style1">
                                                                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                    <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                                </button>
                                                                <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                            </div>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/dpa_admin/rka')?>">Add</a>
                                                            </div>
                                                            <table width="50%" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Misi</th>
                                                                        <th>Setting</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1; foreach($profil as $row) { ?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $no ?></td>
                                                                        <td class="text-left"><?php echo $row['misi'] ?></td>
                                                                        <td>
                                                                            <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/dpa_admin/edit_rka/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/dpa_admin/hapus_rka/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                    <div class="product-tab-list tab-pane fade" id="sejarah">
                                        <div class="product-status mg-tb-15">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="product-status-wrap">
                                                            <h4>Sejarah Dinas</h4>
                                                            <div class="alert alert-success alert-success-style1">
                                                                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                                    </button>
                                                                <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                            </div>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/dpa_admin/dpa')?>">Add</a>
                                                            </div>
                                                            <table width="50%" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Judul</th>
                                                                        <th>Dekripsi</th>
                                                                        <th>Setting</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1; foreach($profil as $row) { ?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $no ?></td>
                                                                        <td class="text-center"><?php echo $row['judul1'] ?></td>
                                                                        <td class="text-center"><?php echo $row['deskripsi1'] ?></td>
                                                                        <td>
                                                                            <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/dpa_admin/edit_rka/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/dpa_admin/hapus_rka/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                    <div class="product-tab-list tab-pane fade" id="demografi">
                                        <div class="product-status mg-tb-15">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="product-status-wrap">
                                                            <h4>Demografi Dinas</h4>
                                                            <div class="alert alert-success alert-success-style1">
                                                                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                                    </button>
                                                                <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                            </div>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/dpa_admin/rfk')?>">Add</a>
                                                            </div>
                                                            <table width="50%" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Judul</th>
                                                                        <th>Dekripsi</th>
                                                                        <th>Setting</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1; foreach($profil as $row) { ?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $no ?></td>
                                                                        <td class="text-center"><?php echo $row['judul2'] ?></td>
                                                                        <td class="text-center"><?php echo $row['deskripsi2'] ?></td>
                                                                        <td>
                                                                            <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/dpa_admin/edit_rka/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/dpa_admin/hapus_rka/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                    <div class="product-tab-list tab-pane fade" id="geografi">
                                        <div class="product-status mg-tb-15">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="product-status-wrap">
                                                            <h4>Geografi Dinas</h4>
                                                            <div class="alert alert-success alert-success-style1">
                                                                <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                        <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                                    </button>
                                                                <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                                <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                            </div>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/dpa_admin/rfk')?>">Add</a>
                                                            </div>
                                                            <table width="50%" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Judul</th>
                                                                        <th>Dekripsi</th>
                                                                        <th>Setting</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1; foreach($profil as $row) { ?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $no ?></td>
                                                                        <td class="text-center"><?php echo $row['judul3'] ?></td>
                                                                        <td class="text-center"><?php echo $row['deskripsi3'] ?></td>
                                                                        <td>
                                                                            <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/dpa_admin/edit_rka/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                            <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/dpa_admin/hapus_rka/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
        

        

    