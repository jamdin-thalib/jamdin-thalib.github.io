

<div class="single-product-tab-area mg-tb-15">
    <!-- Single pro tab review Start-->
    <div class="single-pro-review-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="review-tab-pro-inner">
                        <ul id="myTab3" class="tab-review-design">
                            <li class="active"><a href="#aplikasi_umum"><i class="fa fa-pencil" aria-hidden="true"></i>Register</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content custom-product-edit">
                            <div class="product-tab-list tab-pane fade active in" id="aplikasi_umum">
                                <div class="product-status mg-tb-15">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="product-status-wrap">
                                                    <h4>Register List</h4>
                                                    <div class="alert alert-success alert-success-style1">
                                                        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
                                                                <span class="icon-sc-cl" aria-hidden="true">&times;</span>
                                                            </button>
                                                        <i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
                                                        <p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
                                                    </div>
                                                    <div class="add-product">
                                                        <a href="<?php echo base_url('backend/aplikasi/umum')?>">Add</a>
                                                    </div>
                                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Nama Lengkapr</th>
                                                                <th>User Name</th>
                                                                <th>Paswor 1</th>
                                                                <th>Pasword 2</th>
                                                                <th>Email 1</th>
                                                                <th>Email 2</th>
                                                                <th>Setting</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $no=1; foreach($registrasi as $row) { ?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $no ?></td>
                                                                <td class="text-center"><?php echo $row['full_name'] ?></td>
                                                                <td class="text-center"><?php echo $row['username'] ?></td>
                                                                <td class="text-center"><?php echo $row['pasword'] ?></td>
                                                                <td class="text-center"><?php echo $row['pasword2'] ?></td>
                                                                <td class="text-center"><?php echo $row['email'] ?></td>
                                                                <td class="text-center"><?php echo $row['email2'] ?></td>
                                                                <td>
                                                                    <a data-toggle="tooltip" title="Edit" class="pd-setting-ed" href="<?= site_url('backend/register/edit/'.$row['id']) ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                                    <a data-toggle="tooltip" title="Trash" class="pd-setting-ed" href="<?= site_url('backend/register/hapus/'.$row['id']) ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
        

        

    