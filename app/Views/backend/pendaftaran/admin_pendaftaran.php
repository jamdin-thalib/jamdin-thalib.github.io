
<div class="single-product-tab-area mg-tb-15">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#aplikasi_umum"><i class="fa fa-pencil" aria-hidden="true"></i>Data Identitas</a></li>
                            <li><a href="#aplikasi_khusus"><i class="fa fa-file-image-o" aria-hidden="true"></i>Data Berkas</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="aplikasi_umum">
                                <div class="product-status mg-tb-15">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="product-status-wrap">
                                                    <h4>List Identitas</h4>
                                                    <div class="alert alert-success alert-success-style1">
                                                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                            </button>
                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                        <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                    </div>
                                                    <div class="add-product">
                                                        <a href="<?php echo base_url('')?>">Add</a>
                                                    </div>
                                                    <table border="1" width="100%" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar" style="overflow-x: auto;">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>NIK</th>
                                                                <!-- <th>Nama</th> -->
                                                                <th>Nama Peserta</th>
                                                                <th>Jenis Kelamin</th>
                                                                <th>Agama</th>
                                                                <th>Tempat Lahir</th>
                                                                <th>Tanggal Lahir</th>
                                                                <th>No Telpon</th>
                                                                <th>Nama Perguruan Tinggi</th>
                                                                <th>Pendidikan Terkahir</th>
                                                                <th>Program Study / Jurusan</th>
                                                                <th>IPK</th>
                                                                <th>Email</th>
                                                                <th>Alamat</th>
                                                                <th>Setting</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no=1; foreach($pendaftaran as $row) { ?>
                                                                <tr>
                                                                    <td class="text-center"><?php echo $no ?></td>
                                                                    <td class="text-center"><?php echo $row['nik'] ?></td>
                                                                    <td class="text-center"><?php echo $row['nama_depan'],$row['nama_belakang'] ?></td>
                                                                    <!-- <td class="text-center"><?php echo $row['nama_belakang'] ?></td> -->
                                                                    <td class="text-center"><?php echo $row['jenis_kelamin'] ?></td>
                                                                    <td class="text-center"><?php echo $row['agama'] ?></td>
                                                                    <td class="text-center"><?php echo $row['tempat_lahir'] ?></td>
                                                                    <td class="text-center"><?php echo $row['tanggal_lahir'] ?></td>
                                                                    <td class="text-center"><?php echo $row['no_telpon'] ?></td>
                                                                    <td class="text-center"><?php echo $row['nama_kampus'] ?></td>
                                                                    <td class="text-center"><?php echo $row['pendidikan_terkahir'] ?></td>
                                                                    <td class="text-center"><?php echo $row['program_study'] ?></td>
                                                                    <td class="text-center"><?php echo $row['ipk'] ?></td>
                                                                    <td class="text-center"><?php echo $row['email'] ?></td>
                                                                    <td class="text-center"><?php echo $row['alamat'] ?></td>
                                                                    <td class="text-center"><?php echo $row['rt'] ?></td>
                                                                    <td class="text-center"><?php echo $row['rw'] ?></td>
                                                                    <td class="text-center"><?php echo $row['kelurahan'] ?></td>
                                                                    <td class="text-center"><?php echo $row['kecamatan'] ?></td>
                                                                    <td class="text-center"><?php echo $row['kabupaten'] ?></td>
                                                                    <td>
                                                                        <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/layanan/edit_pendafataran/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                        <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/aplikasi/hapus_pendafataran/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
                                                    <h4>List Berkas</h4>
                                                    <div class="alert alert-success alert-success-style1">
                                                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                            </button>
                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                        <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                    </div>
                                                    <div class="add-product">
                                                        <a href="<?php echo base_url('')?>">Add</a>
                                                    </div>
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Berkas</th>
                                                                <th>File</th>
                                                                <th>Setting</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
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
        

    