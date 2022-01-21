
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
                                    <li class="active"><a href="#hukum"><i class="fa fa-pencil" aria-hidden="true"></i>Dokumen Produk Hukum</a></li>
                                    
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="hukum">
                                        <div class="product-status mg-tb-15">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="product-status-wrap">
                                                            <h4>Produk Hukum List</h4>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/hukum/hukum_input')?>">Add Produk Hukum</a>
                                                            </div>
                                                            <table>
                                                                <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>Tanggal Di Undangkan</th>
                                                                        <th>Nama Produk Hukum</th>
                                                                        <th>Status</th>
                                                                        <th>Dekripsi</th>
                                                                        <th>Setting</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php $no=1; foreach($hukum as $hukum) { ?>
                                                                    <tr>
                                                                        <td class="text-center"><?php echo $no ?></td>
                                                                        <td class="text-center"><?php echo $hukum['tgl_produkh'] ?></td>
                                                                        <td class="text-center"><?php echo $hukum['nama_produkh'] ?></td>
                                                                        <td class="text-center"><?php echo $hukum['status'] ?></td>
                                                                        <td class="text-center"><?php echo $hukum['uraianh'] ?></td>
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
                                    <!-- <div class="product-tab-list tab-pane fade" id="dpa">
                                        <div class="product-status mg-tb-15">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="product-status-wrap">
                                                            <h4>DPA List</h4>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('Dpa_input')?>">Add DPA</a>
                                                            </div>
                                                            <table>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>Tanggal Pembuatan</th>
                                                                    <th>Nama Sub Domain</th>
                                                                    <th>Status</th>
                                                                    <th>Dinas Pengelola</th>
                                                                    <th>Nama Pengelola</th>
                                                                    <th>No Telpon</th>
                                                                    <th>Dekripsi</th>
                                                                    <th>Setting</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="img/new-product/5-small.jpg" alt="" /></td>
                                                                    <td>Jewelery Title 1</td>
                                                                    <td>50</td>
                                                                    <td>
                                                                        <button class="pd-setting">Active</button>
                                                                    </td>
                                                                    <td>50</td>
                                                                    <td>$750</td>
                                                                    <td>Out Of Stock</td>
                                                                    <td>$15</td>
                                                                    <td>
                                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                                                    <td>Jewelery Title 2</td>
                                                                    <td>60</td>
                                                                    <td>
                                                                        <button class="ps-setting">Paused</button>
                                                                    </td>
                                                                    <td>60</td>
                                                                    <td>$1020</td>
                                                                    <td>In Stock</td>
                                                                    <td>$17</td>
                                                                    <td>
                                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                                                    <td>Jewelery Title 3</td>
                                                                    <td>70</td>
                                                                    <td>
                                                                        <button class="ds-setting">Disabled</button>
                                                                    </td>
                                                                    <td>70</td>
                                                                    <td>$1050</td>
                                                                    <td>Low Stock</td>
                                                                    <td>$15</td>
                                                                    <td>
                                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="img/new-product/5-small.jpg" alt="" /></td>
                                                                    <td>Jewelery Title 4</td>
                                                                    <td>120</td>
                                                                    <td>
                                                                        <button class="pd-setting">Active</button>
                                                                    </td>
                                                                    <td>120</td>
                                                                    <td>$1440</td>
                                                                    <td>In Stock</td>
                                                                    <td>$12</td>
                                                                    <td>
                                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="img/new-product/6-small.jpg" alt="" /></td>
                                                                    <td>Jewelery Title 5</td>
                                                                    <td>30</td>
                                                                    <td>
                                                                        <button class="pd-setting">Active</button>
                                                                    </td>
                                                                    <td>30</td>
                                                                    <td>$540</td>
                                                                    <td>Out Of Stock</td>
                                                                    <td>$18</td>
                                                                    <td>
                                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td><img src="img/new-product/7-small.jpg" alt="" /></td>
                                                                    <td>Jewelery Title 6</td>
                                                                    <td>400</td>
                                                                    <td>
                                                                        <button class="ps-setting">Paused</button>
                                                                    </td>
                                                                    <td>400</td>
                                                                    <td>$4000</td>
                                                                    <td>In Stock</td>
                                                                    <td>$10</td>
                                                                    <td>
                                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                                    </td>
                                                                </tr>
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
                                    </div>  -->
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div> 
        </div> 
        

        

    