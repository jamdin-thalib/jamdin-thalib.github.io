
    <body>
		<div class="breadcrumb" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="breadcrumb-text">
							<h2>Form Pendaftaran</h2>
							<ul>
								<li><a href="">Home</a> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></li>
								<li><a href="">single portfolio</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
    </body>
	<?= form_open('backend/layanan/save_pendaftaran');?>
	<div class='modal-dialog <?= isset($modal_s) ? $modal_s : 'modal-lg'; ?>'> </div>
	<div class="adminpro-accordion-area mg-tb-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="admin-pro-accordion-wrap responsive-mg-b-30">
                            <div class="alert-title">
								<center>
									<h3>SILAHKAN MELAKUKAN PENDAFTARAN MELALUI FORM INI</h3>
									<h4>MOHON DI LENGKAPI TAHAPAN PROSES PENDAFTARAN</h4>
									<p>Proses Pendafataran ada tiga tahapan sebelum finalisasi pendaftaran mohon di cermati dengan baik</p>
								</center>
                            </div>
                            <div class="panel-group adminpro-custon-design" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading accordion-head">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Pilih Jabatan yang di lamar</a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse panel-ic collapse in">
                                        <div class="panel-body admin-panel-content animated bounce">
											<!-- <h4>Silahkan Pilih Jabatan yang ingin di lamar :</h4> -->
                                            <div class="review-content-section">
											<label for="card-number" class="form-label">Pilihan menjadi prioritas</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
												<div class="form-select-list">
													<select name="jabatan" id="jabatan" value='<?= (isset($get->jabatan)) ? $get->jabatan : ''; ?>' class="form-control pro-edt-select form-control-primary">
														<option value="">--Pilih--</option>
														<option value="Programer">Programer</option>
														<option value="Teknisi Jaringan">Teknisi Jaringan</option>
													</select>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading accordion-head">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Data Pribadi</a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
											<!-- <h4>Silahkan Melengkapi Data Anda</h4> -->
											<label for="card-number" class="form-label">NIK</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-qrcode" aria-hidden="true"></i></span>
												<input type="text" class="form-control" id="nik" name="nik" value='<?= (isset($get->nik)) ? $get->nik : ''; ?>' placeholder="Nomor Induk Kependudukan" required='required'>
											</div>
                                            <div class="row">
												<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
													<label for="card-number" class="form-label">Name Depan</label>
													<div class="input-group mg-b-pro-edt">
														<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
														<input type="text" class="form-control" id="nama_depan" name="nama_depan" value='<?= (isset($get->nama_depan)) ? $get->nama_depan : ''; ?>' placeholder="Wajib di isi sesuai KTP" required='required'>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
													<label for="card-number" class="form-label">Name Belakang</label>
													<div class="input-group mg-b-pro-edt">
														<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
														<input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value='<?= (isset($get->nama_belakang)) ? $get->nama_belakang : ''; ?>' placeholder="Wajib di isi sesuai KTP" required='required'>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">	
													<label for="card-number" class="form-label">Jenis Kelamin</label>
													<div class="input-group mg-b-pro-edt">
														<span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
														<div class="form-select-list">
															<select name="jenkel" id="jenkel" value='<?= (isset($get->jenkel)) ? $get->jenkel : ''; ?>' class="form-control pro-edt-select form-control-primary">
																<option value="">--Pilih--</option>
																<option value="Laki">Laki-Laki</option>
																<option value="Perempuan">Perempuan</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
													<label for="card-number" class="form-label">Agama</label>
													<div class="input-group mg-b-pro-edt">
														<span class="input-group-addon"><i class="fa fa-map" aria-hidden="true"></i></span>
														<div class="form-select-list">
															<select name="agama" id="agama" value='<?= (isset($get->agama)) ? $get->agama : ''; ?>' class="form-control pro-edt-select form-control-primary">
																<option value="">--Pilih--</option>
																<option value="Islam">Islam</option>
																<option value="Kristen">Kristen</option>
																<option value="Hindu">Hindu</option>
																<option value="Budha">Budha</option>
																<option value="Protestan">Protestan</option>
															</select>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">	
													<label for="card-number" class="form-label">Tempat Lahir</label>
													<div class="input-group mg-b-pro-edt">
														<span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
														<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value='<?= (isset($get->tempat_lahir)) ? $get->tempat_lahir : ''; ?>' placeholder="Wajib di isi sesuai KTP" required='required'>
													</div>
												</div>
												<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
													<label for="card-number" class="form-label">Tanggal Lahir</label>
													<div class="input-group mg-b-pro-edt">
														<span class="input-group-addon"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
														<input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value='<?= (isset($get->tanggal_lahir)) ? $get->tanggal_lahir : ''; ?>' placeholder="Wajib di isi sesuai KTP" required='required'>
													</div>
												</div>
												<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
													<label for="card-number" class="form-label">Nomor Telpon</label>
													<div class="input-group mg-b-pro-edt">
														<span class="input-group-addon"><i class="fa fa-phone" aria-hidden="true"></i></span>
														<input type="text" class="form-control" id="no_telpon" name="no_telpon" value='<?= (isset($get->no_telpon)) ? $get->no_telpon : ''; ?>' placeholder="Nomor Telpon / Nomor WA" required='required'>
													</div>
												</div>
											</div>
											<label for="card-number" class="form-label">Nama Kampus</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
												<input type="text" class="form-control" id="nama_kampus" name="nama_kampus" value='<?= (isset($get->nama_kampus)) ? $get->nama_kampus : ''; ?>' placeholder="Wajib di isi sesuai Ijazah" required='required'>
											</div>
											<div class="row">
												<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
													<label for="card-number" class="form-label">Pendidikan Terkahir</label>
													<div class="input-group mg-b-pro-edt">
														<span class="input-group-addon"><i class="fa fa-institution" aria-hidden="true"></i></span>
														<input type="text" class="form-control" id="pendidikan_terkahir" name="pendidikan_terkahir" value='<?= (isset($get->pendidikan_terkahir)) ? $get->pendidikan_terkahir : ''; ?>' placeholder="Wajib di isi sesuai Ijazah" required='required'>
													</div>
												</div>
												<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
													<label for="card-number" class="form-label">Program Study</label>
													<div class="input-group mg-b-pro-edt">
														<span class="input-group-addon"><i class="fa fa-institution" aria-hidden="true"></i></span>
														<input type="text" class="form-control" id="program_study" name="program_study" value='<?= (isset($get->program_study)) ? $get->program_study : ''; ?>'placeholder="Program Study/Jurusan" required='required'>
													</div>
												</div>
												<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
													<label for="card-number" class="form-label">IPK (Indeks Prestasi Kumulatif)</label>
													<div class="input-group mg-b-pro-edt">
														<span class="input-group-addon"><i class="fa fa-institution" aria-hidden="true"></i></span>
														<input type="number" class="form-control" id="ipk" name="ipk" value='<?= (isset($get->ipk)) ? $get->ipk : ''; ?>' placeholder="Nilai Total IPK" required='required'>
													</div>
												</div>
											</div>
											<label for="card-number" class="form-label">Email Aktif :</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
												<input type="text" class="form-control" id="email" name="email" value='<?= (isset($get->email)) ? $get->email : ''; ?>' placeholder="Alamat email yang aktif" required='required'>
											</div>
											<label for="card-number" class="form-label">Alamat Lengkap :</label>
											<div class="input-group mg-b-pro-edt">
												<span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
												<input type="text" class="form-control" id="alamat" name="alamat" value='<?= (isset($get->alamat)) ? $get->alamat : ''; ?>' placeholder="Alamat Lengkap" required='required'>
											</div>
											<div class="col">
												<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
													<label for="card-number" class="form-label">RT</label>
													<div class="input-group mg-b-pro-edt">
														<span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
														<input type="number" class="form-control" id="rt" name="rt" value='<?= (isset($get->rt)) ? $get->rt : ''; ?>' placeholder="RT" required='required'>
													</div>
													<label for="card-number" class="form-label">Kelurahan :</label>
													<div class="input-group mg-b-pro-edt">
														<span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
														<input type="text" class="form-control" id="kelurahan" name="kelurahan" value='<?= (isset($get->kelurahan)) ? $get->kelurahan : ''; ?>' placeholder="Kelurahan" required='required'>
													</div>
												</div>
												<div class="row">
													<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
														<label for="card-number" class="form-label">RW</label>
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
															<input type="number" class="form-control" id="rw" name="rw" value='<?= (isset($get->rw)) ? $get->rw : ''; ?>' placeholder="RW" required='required'>
														</div>
													</div>
													<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<label for="card-number" class="form-label">Kecamatan</label>
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="fa fa-male" aria-hidden="true"></i></span>
															<div class="form-select-list">
																<select name="kecamatan" id="kecamatan" value='<?= (isset($get->kecamatan)) ? $get->kecamatan : ''; ?>' placeholder="Kecamatan" required='required' class="form-control pro-edt-select form-control-primary">
																	<option value="">--Pilih--</option>
																	<option value="Pinogaluman">Pinogaluman</option>
																	<option value="Kaidipang">Kaidipang</option>
																	<option value="Bolangitang Barat">Bolangitang Barat</option>
																	<option value="Bolangitang Timur">Bolangitang Timir</option>
																	<option value="Bintauna">Bintauna</option>
																	<option value="Sangkub">Sangkub</option>
																</select>
															</div>
														</div>
													</div>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<label for="card-number" class="form-label">Kabupaten :</label>
														<div class="input-group mg-b-pro-edt">
															<span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
															<select name="kabupaten" id="kabupaten" value='<?= (isset($get->kabupaten)) ? $get->kabupaten : ''; ?>' placeholder="Kabupaten" required='required' class="form-control pro-edt-select form-control-primary">
																	<option value="">--Pilih--</option>
																	<option value="bolmut">Bolaang Mongondow Utara</option>
																</select>
														</div>
													</div>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading accordion-head">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Upload Berkas</a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <!-- <center><p>Silahkan Melakukan Upload Dokumen Pendukung Pendaftaran dalam bentuk file .pdf</p></center> -->
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
												<label for="card-number" class="form-label">Surat lamaran yang ditandatangani File Pdf maxsimal 250Kb</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="fa fa-image"></i></span>
													<input class="form-control" type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;" id="prepend-big-btn" placeholder="no file selected" required='required'>
												</div>
												<label for="card-number" class="form-label">Kartu Tanda Penduduk (KTP) File Pdf maxsimal 250Kb</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="fa fa-file-pdf-o"></i></span>
													<input class="form-control" type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;" id="prepend-big-btn" placeholder="no file selected" required='required'>
												</div>
												<label for="card-number" class="form-label">Ijazah dan daftar nilai/transkrip nilai File Pdf maxsimal 250Kb</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="fa fa-graduation-cap"></i></span>
													<input class="form-control" type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;" id="prepend-big-btn" placeholder="no file selected" required='required'>
												</div>
												<label for="card-number" class="form-label">Portofolio Project/Aplikasi yang pernah dibuat File Zip/Rar maxsimal 500Kb</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="fa fa-file-zip-o"></i></span>
													<input class="form-control" type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;" id="prepend-big-btn" placeholder="no file selected" required='required'>
												</div>
												<label for="card-number" class="form-label">Sertifikat kegiatan Seminar/Workshop/Pelatihan yang pernah diikuti (jika ada) File Pdf maxsimal 250Kb</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="fa fa-file-pdf-o"></i></span>
													<input class="form-control" type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;" id="prepend-big-btn" placeholder="no file selected" required='required'>
												</div>
												<label for="card-number" class="form-label">Sertifikat Keahlian File Pdf maxsimal 250Kb</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="fa fa-file-pdf-o"></i></span>
													<input class="form-control" type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;" id="prepend-big-btn" placeholder="no file selected" required='required'>
												</div>
												<label class="icon-center" for="prepend-big-btn">Surat Pernyataan File Pdf maxsimal 500Kb</label>
												<div class="input-group mg-b-pro-edt">
													<span class="input-group-addon"><i class="fa fa-upload"></i></span>
													<input class="form-control" type="file"  onchange="document.getElementById('prepend-big-btn').value = this.value;" id="prepend-big-btn" placeholder="no file selected" required='required'>
												</div>
											</div>
                                        </div>
                                    </div>
                                </div>
								<div class="panel panel-default">
                                    <div class="panel-heading accordion-head">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Finalisasi Pendaftaran</a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
											<center>
												<p>Dengan mendaftar, saya telah membaca dan menyetujui Persyaratan Umum & Khusus dan Syarat & Ketentuan dari program ini</p>
												<h2>Finalisasi Pendaftaran</h2>
											</center>
											<div class="alert alert-success alert-success-style1">
												<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
														<span class="icon-sc-cl" aria-hidden="true">&times;</span>
													</button>
												<i class="fa fa-check adminpro-checked-pro admin-check-pro" aria-hidden="true"></i>
												<p><strong><?= isset($pesan) ? $pesan : ''; ?>....!</strong> Successful or positive action.</p>
											</div>
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="text-center mg-b-pro-edt custom-pro-edt-ds">
														
														<button type="submit" class="btn btn-primary waves-effect waves-light m-r-10">Submit</button>
														<a href="<?php echo base_url('home/layanan')?>"><button type="submit" class="btn btn-warning waves-effect waves-light" >Discard</button></a>
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
		<?php echo form_close();?>
		<script src="<?= base_url('assets/js/validator.js'); ?>"></script>
		<script type='text/javascript'>
			$('form').on('blur', 'input[required], input.optional, select.required', validator.checkField).on('change', 'select.required', validator.checkField).on('keypress', 'input[required][pattern]', validator.keypress);
			$('.multi.required').on('keyup blur', 'input', function(){
				validator.checkField.apply( $(this).siblings().last()[0] );
			});
			$('form').submit(function(e){
				e.preventDefault();
				if( !validator.checkAll( $(this) ) ){
					return false;
				}else{
					$.ajax({
						url: $(this).attr('action'),
						type: 'post',
						data: $('form').serialize(),
						success: function(response){
							var data = $.parseJSON(response);
							swal({title:data.title,html:data.text,type:data.type}).then(function() {
								reload_table();
								$('#modal_content').modal('hide');
							});
						},error: function (jqXHR, exception, thrownError) {
						swal({title:'Error code'+jqXHR.status,html:thrownError+', '+exception,type:'error'}).then(function() {
							$('#spinner').hide();
						});
					}
					});
				}
			});
		</script>  
        <!-- accordion End-->
</html>