<div class="content-wrapper">
    <section class="content-header">
        <h1><?php echo $action; ?> Profil<small></small></h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="<?php echo site_url("Profil"); ?>"><i class="fa fa-list"></i> Profil</a></li>
            <li class="active"><?php echo $action; ?> Profil</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <i class="ion ion-clipboard"></i>
                        <h3 class="box-title"><?php echo $action; ?> Profil</h3>
                        <div class="pull-right box-tools">
                            <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>           </button>
                        </div>
                    </div><?php echo form_open_multipart("profil/save",array("class"=>"mode2"));?>
                    <div class="box-body">
                        
                        <div class="form-group item">
                            <label for="foto">Upload Media</label>
                            <a class='btn btn-default btn-file toggle-modal' href='<?php echo site_url('dash/filemanager'); ?>'>
                                <i class="fa fa-paperclip"></i> Attachment
                                <!--a class="form-control"> Attachment </a-->
                                <p class="help-block">Max. 3 MB, Dimensi Max 1366 x 768 px</p>
                            </a>
                        </div>
                        <div class="form-group item">
                            <label for="keterangan">Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo (isset($get->keterangan)) ? $get->keterangan : ''; ?>" placeholder="Keterangan" required="required">
                        </div>
                        <div class='form-group item'>
                            <label for='isi'>Isi</label>
                            <textarea class="form-control" rows="3" name="isi" id="maineditor"><?php echo (isset($get->isi)) ? $get->isi : ''; ?></textarea>
                        </div>
					</div>
                    <div class="box-footer">
                        <input type="hidden" name="action" value="<?php echo $action; ?>" />
                        <input type="hidden" name="id" value="<?php echo (isset($get->id)) ? $get->id: ''; ?>" />
                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Update</a></button>
                    </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </section>
    </div>