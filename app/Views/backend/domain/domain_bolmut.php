
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
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="product-status-wrap">
                                                            <h4>Bolmut List</h4>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/Domain_bolmut/bolmut')?>">Add Bolmut</a>
                                                            </div>
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th class="text-center">No</th>
                                                                        <th class="text-center">Tanggal Pembuatan</th>
                                                                        <th class="text-center">Nama Sub Domain</th>
                                                                        <th class="text-center">Status</th>
                                                                        <th class="text-center">Alamat URL</th>
                                                                        <th class="text-center">Dinas Pengelola</th>
                                                                        <th class="text-center">Nama Pengelola</th>
                                                                        <th class="text-center">No Telpon</th>
                                                                        <th class="text-center">Dekripsi</th>
                                                                        <th class="text-center">Setting</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1; foreach($bolmut as $bolmut) { ?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $no ?></td>
                                                                        <td class="text-center"><?php echo $bolmut['tgl_pembuatan'] ?></td>
                                                                        <td class="text-center"><?php echo $bolmut['nama_subdomain'] ?></td>
                                                                        <td class="text-center"><?php echo $bolmut['status_domain'] ?></td>
                                                                        <td class="text-center"><?php echo $bolmut['link'] ?></td>
                                                                        <td class="text-center"><?php echo $bolmut['pengelola'] ?></td>
                                                                        <td class="text-center"><?php echo $bolmut['nama_pengelola'] ?></td>
                                                                        <td class="text-center"><?php echo $bolmut['no_telpon'] ?></td>
                                                                        <td class="text-center"><?php echo $bolmut['deskripsi'] ?></td>
                                                                        <td>
                                                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/Domain_desa/desa')?>">Add Desa</a>
                                                            </div>
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Nama Domain</th>
                                                                        <th>Domain Status</th>
                                                                        <th>Tanggal Daftar</th>
                                                                        <th>Tanggal Berakhir</th>
                                                                        <th>Masa Aktif</th>
                                                                        <th>Alamat URL</th>
                                                                        <th>Setting</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1; foreach($desa as $desa) { ?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $no ?></td>
                                                                        <td class="text-center"><?php echo $desa['nama_domain'] ?></td>
                                                                        <td class="text-center"><?php echo $desa['domain_status'] ?></td>
                                                                        <td class="text-center"><?php echo $desa['tgl_daftar'] ?></td>
                                                                        <td class="text-center"><?php echo $desa['tgl_akhir'] ?></td>
                                                                        <td class="text-center"><?php echo $desa['masa_aktif'] ?></td>
                                                                        <td class="text-center"><?php echo $desa['link'] ?></td>
                                                                        <td>
                                                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
        