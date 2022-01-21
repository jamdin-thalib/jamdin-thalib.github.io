
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
                                                        <div class="product-status-wrap">
                                                            <h4>List Pegawai PNS</h4>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/pegawai/pns')?>">Add PNS</a>
                                                            </div>
                                                            <table>
                                                                <head>
                                                                    <tr>
                                                                        <th width="5" class="text-center" valign="middle" rowspan="2">No</th>
                                                                        <th width="5" class="text-center" rowspan="2">NIP</th>
                                                                        <th width="5" class="text-center" rowspan="2">Nama Pegawai</th>
                                                                        <th width="5" class="text-center" rowspan="2">Jenis Kelamin</th>
                                                                        <th width="5" class="text-center" rowspan="2">Tempat Lahir</th>
                                                                        <th width="5" class="text-center" rowspan="2">Tanggal Lahir</th>
                                                                        <th width="5" class="text-center" rowspan="2">Agama</th>
                                                                        <th width="5" class="text-center" rowspan="2">Umur</th>
                                                                        <th width="5" class="text-center" colspan="2">TMT</th>
                                                                        <th width="5" class="text-center" rowspan="2">Pangkat / Gol. Ruang</th>
                                                                        <th width="5" class="text-center" rowspan="2">TMT Pangkat / Gol. Ruang</th>
                                                                        <th width="5" class="text-center" colspan="2">Masa Kerja</th> 
                                                                        <th width="5" class="text-center" rowspan="2">Jenis Pegawai</th>
                                                                        <th width="5" class="text-center" rowspan="2">Status Kawin</th>
                                                                        <th width="5" class="text-center" rowspan="2">Tingkat Pendidikan</th>
                                                                        <th width="5" class="text-center" colspan="3">Perguruan Tinggi</th>
                                                                        <th width="5" class="text-center" rowspan="2">Jabatan</th>
                                                                        <th width="5" class="text-center" rowspan="2">Eselon</th>
                                                                        <th width="5" class="text-center" rowspan="2">Setting</th>
                                                                    </tr>
                                                                    <tr>
                                                                        <th width="5" class="text-center">CPNS</th>
                                                                        <th width="5" class="text-center">PNS</th>
                                                                        <th width="5" class="text-center">Tahun</th>
                                                                        <th width="5" class="text-center">Bulan</th>
                                                                        <th width="5" class="text-center">Nama PT</th>
                                                                        <th width="5" class="text-center">Program Studi</th>
                                                                        <th width="5" class="text-center">Tahun Lulus</th>
                                                                    </tr>
                                                                </head>
                                                                <tbody>
                                                                    <?php $no=1; foreach($pns as $row) { ?>
                                                                    <tr>
                                                                        <td></td>
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
                                    <div class="product-tab-list tab-pane fade" id="ptt">
                                        <div class="product-status mg-tb-15">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="product-status-wrap">
                                                            <h4>List Pegawai PTT</h4>
                                                            <div class="add-product">
                                                                <a href="<?php echo base_url('backend/pegawai/ptt')?>">Add Pegawai PTT</a>
                                                            </div>
                                                            <table>
                                                                <head>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>NIP</th>
                                                                        <th>Nama Pegawai</th>
                                                                        <th>Tempat Lahir</th>
                                                                        <th>Tanggal Lahir</th>
                                                                        <th>Agama</th>
                                                                        <th>Umur</th>
                                                                        <th>TMT CPNS</th>
                                                                        <th>TMT PNS</th>
                                                                        <th>Pangkat/Gol. Ruang</th>
                                                                        <th>TMT Pangkat/Gol. Ruang</th>
                                                                        <th>Tahun</th>
                                                                        <th>Bulan</th>
                                                                        <th>Jenis Pegawai</th>
                                                                        <th>Status Kawin</th>
                                                                        <th>Tingkat Pendidikan</th>
                                                                        <th>Perguruan Tinggi</th>
                                                                        <th>Program Studi</th>
                                                                        <th>Tahun Lulus</th>
                                                                        <th>Jabatan</th>
                                                                        <th>Eselon</th>
                                                                        <th>Setting</th>
                                                                    </tr>
                                                                </head>
                                                                <tbody>
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
        

        

    