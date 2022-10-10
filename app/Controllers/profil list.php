<div class="content-wrapper">
        <section class="content-header">
            <h1>Profil List<small></small></h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Profil</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
							<div class="box-tools">
                                <form action="<?php echo site_url('dash/profil'); ?>" class="form-inline" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control pull-right" name="q" value="<?php echo $q; ?>" placeholder="Search">
                                        <span class="input-group-btn">
                                            <?php if ($q <> ''){ ?>
                                                <a href="<?php echo site_url('dash/profil'); ?>" class="btn btn-default">Reset</a>
                                            <?php } ?>
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="box-body">
                        <?php echo ($this->session->flashdata('success')) ? success_msg($this->session->flashdata('success')) : ''; ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>No</th>
									<th>Keterangan</th>
									<th>Isi</th>
									<th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($profil_data as $row){ ?>
                                <tr>
                                    <td><?php echo ++$start ?></td>
									<td><?php echo $row->keterangan ?></td>
									<td><?php echo $row->isi ?></td>
									<td class="text-center"><a href="<?php echo site_url("dash/update_profil/".$row->id); ?>" class="btn btn-xs btn-primary" title='Edit'><i class="fa fa-pencil"></i></a>&nbsp;<a href="<?php echo site_url("profil/preview/".$row->id) ?>" class="btn btn-xs btn-primary toggle-modal" title='Preview'><i class="fa fa-eye"></i></a></td>
		                         </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                                <div class="box-header with-border">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <?php echo $pagination ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>