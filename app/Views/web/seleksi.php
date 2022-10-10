		<div class="color-plate ">
			<a class="icon"><i class="fa fa-cog fa-spin"></i></a>
			<center><h2 style="color: blue;" >Silahkan Melakukan Pendaftaran</h2></center>
			<div class="color-head">
				<div class="button-ap-list responsive-btn">
					<div class="mb-4 mr-4">
						<div class="text-center"><small>Silahkan Clik Tombol Daftar</small></div>
						<button class="btn  btn-primary btn-block"><a href="<?= base_url('login/register')?>" target="_blank"><p style="color:cyan">Daftar</p></button>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Area -->
		<header id="header" class="header">
			<!-- Header Inner -->
			<div class="header-inner">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-2 col-xs-2">
							<div class="logo">
								<a href="<?= site_url('home')?>"><img src="<?= base_url('assets/seleksi/img/logo.png')?>" alt="logo.png"></a>
							</div>
						</div>
						<div class="col-md-9 col-sm-10">
							<div class="mobile-menu"></div>
							<nav class="navbar navbar-default">
								<div class="collapse navbar-collapse">
									<ul id="nav" class="nav navbar-nav">
										<li><a href="#contact">Contact</a></li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
				<!-- <section>
					<marquee title="Ini Muncul Saat Hover" behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()" direction="right">
						<div class="button-head">
							<div style="color: darkred;">
								<span></span>
								<a href="<?= base_url('home/pendaftaran')?>" target="_blank" class="btn"><h4><p style="color: red;">Silahkan Clik Link ini untuk melakuakan Pendaftaran...!!!</h4></p></a>
							</div>
						</div>	
					</marquee>
				</section> -->
			</div>
		</header>
		<!--/ End Header Area -->
		
		<!-- Slider Area -->
		<section id="slider">
			<div class="single-slider" style="background-image:url('assets/seleksi/img/slider1.jpg')">
				<div id="particles-js"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="text">
								<h1 class="cd-headline clip is-full-width">
									SELEKSI PENERIMAAN TENAGA AHLI
									<span class="cd-words-wrapper">
										<b class="is-visible">Programer</b>
										<b>Teknisi Jaringan</b>
									</span>
								</h1>
								<!-- <p>Bagi Pelamar yang berkeinginan silahkan melakukan pendaftaran.<br> Dan melengkapi berkas persyaratan.</p> -->
                                <h2 class="cd-headline clip is-full-width"><span id="timer" style="color:red;"></span></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- features Area -->
		<section id="features" class="section">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2> I. <span>Persyaratan</span></h2>
							<p>Mohon di baca dan di pahami se teliti mungkin sebelum malakukan proses pendaftaran</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="feature-left">
							<img src="<?= base_url('assets/seleksi/img/computer.jpg')?>" alt="#">
						</div>	
					</div>
					<div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="feature-right">
							<!-- <div class="single-right">
								<i class="fa fa-line-chart" aria-hidden="true"></i>
								<div class="right-content">
									<h3>UX design</h3>
									<P>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</P>
								</div>
							</div> -->
							<div class="single-right">
								<i class="fa fa-database" aria-hidden="true"></i>
								<div class="right-content">
									<div class="text-justify left-align">
										<h3>A.	Persyaratan Umum</h3>
										<div class="product-status-wrap border-pdt-ct">
											<div class="container-fluid">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<!-- <div class="sparkline8-list">
															<div class="sparkline8-graph">
																<div class="static-table-list">
																	
																</div>
															</div>
														</div> -->
                                                        <table class="table">
                                                            <tbody>
                                                                <?php $no=1; foreach($persyaratan1 as $row) { ?>
                                                                    <tr>
                                                                        <td><?= $no ?></td>
                                                                        <td><?= $row['item'] ?></td>
                                                                    </tr>
                                                                <?php $no++; } ?>
                                                            </tbody>
                                                        </table>
													</div>
												</div>
											</div>
										</div>									
									</div>									
								</div>
							</div>
							<div class="single-right">
								<i class="fa fa-cubes" aria-hidden="true"></i>
								<div class="right-content">
									<h3>B.	Persyaratan Khusus Jabatan Programer</h3>
									<div class="text-justify">
										<div class="container-fluid">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="sparkline8-list">
														<div class="sparkline8-graph">
															<div class="static-table-list">
																<table class="table">
																	<tbody>
																		<?php $no=1; foreach($persyaratan2 as $row) { ?>
																		<tr>
																			<td><?= $no ?></td>
																			<td><?= $row['item'] ?></td>
																		</tr>
																		<?php $no++; } ?>
																	</tbody>
																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="single-right">
								<i class="fa fa-desktop" aria-hidden="true"></i>
								<div class="right-content">
									<h3>C.	Persyaratan Khusus Jabatan Teknisi Jaringan</h3>
									<div class="text-justify">
										<div class="container-fluid">
											<div class="row">
												<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
													<div class="sparkline8-list">
														<div class="sparkline8-graph">
															<div class="static-table-list">
																<table class="table">
																	<tbody>
																		<?php $no=1; foreach($persyaratan3 as $row) { ?>
																		<tr>
																			<td><?= $no ?></td>
																			<td><?= $row['item'] ?></td>
																		</tr>
																		<?php $no++; } ?>
																	</tbody>
																</table>
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
		</section>
		<!--/ End features Area -->

		 <!-- tabs start-->
		<section id="Services" class="section">
			<div class="admintab-area mg-tb-15">
				<div class="container-fluid">
					<div class="row">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="section-title">
										<h2>II. <span>Tata Cara Pendaftaran</span></h2>
										<p>Tahapan yang harus di lalui oleh speserta sampai di nyatakan lulus</p>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div class="admintab-wrap mg-t-30">
									<ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
										<li class="active"><a data-toggle="tab" href="#RP"><span class="adminpro-icon adminpro-analytics tab-custon-ic"></span><h5>A. Registrasi Peserta</h5></a>
										</li>
                                        <li class=""><a data-toggle="tab" href="#TabProject"><span class="adminpro-icon adminpro-analytics tab-custon-ic"></span><h5>B. Kelengkapan Berkas Lamaran</h5></a>
										</li>
										<li><a data-toggle="tab" href="#TabPlan"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span><h5>C. Berkas lamaran</h5></a>
										</li>
										<li><a data-toggle="tab" href="#TabPlan1"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span><h5>D.	Waktu Pendaftaran</h5></a>
										</li>
										<li><a data-toggle="tab" href="#TabPlan2"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span><h5>E.	Tahap Seleksi</h5></a>
										</li>
										<li><a data-toggle="tab" href="#TabPlan3"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span><h5>F. Informasi Tambahan</h5></a>
										</li>
									</ul>
									<div class="tab-content">
                                        <div id="RP" class="tab-pane in active animated flipInX custon-tab-style1">
											<div class="static-table-area mg-t-15">
												<div class="container-fluid">
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<div class="sparkline8-list">
																<div class="sparkline8-graph">
																	<div class="static-table-list">
																		<table class="table">
																			<tbody>
																				<tr>
																					<td>1.</td>
																					<td>Pelamar wajib memiliki email aktif untuk melakukan registrasi;
																				</tr>
																				<tr>
																					<td>2.</td>
																					<td>Pelamar hanya bisa mendaftar 1 (satu) kali pada 1 (satu) jabatan;</td>
																				</tr>
																				<tr>
																					<td>3.</td>
																					<td>Pelamar melakukan registrasi online melalui diskominfo.bolmutkab.go.id/seleksi kemudian akan mendapatkan balasan email aktivasi;</td>
																				</tr>
																				<tr>
																					<td>4.</td>
																					<td>Email dan password yang didaftarkan akan menjadi username dan password login untuk pengisian kelengkapan data dan mengunggah dokumen pendaftaran;</td>
																				</tr>
																				<tr>
																					<td>5.</td>
																					<td>Setelah mengisi kelengkapan data dan mengunggah dokumen pendaftaran, pelamar wajib melakukan submit dan mencetak bukti pendaftaran.</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div> 
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="TabProject" class="tab-pane in animated flipInX custon-tab-style1">
											<div class="static-table-area mg-t-15">
												<div class="container-fluid">
													<div class="row">
														<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
															<div class="sparkline8-list">
																<div class="sparkline8-graph">
																	<div class="static-table-list">
																		<table class="table">
																			<tbody>
																				<tr>
																					<td>1.</td>
																					<td>File pdf surat lamaran bermaterai Rp. 10.000,- yang ditandatangani ditujukan kepada  Kepala Dinas Komunikasi Informatika dan Persandian Kabupaten Bolaang Mongondow Utara dengan alamat Dinas Kominfo Bolaang Mongondow Utara, Jln. Imam Bonjol, Desa Boroko, Kecamatan Kaidipang; <a href="<?= base_url('assets/seleksi/file/contoh_surat.pdf')?>" target="_blank"><i>(Contoh Surat)</i></a>
																				</tr>
																				<tr>
																					<td>2.</td>
																					<td>File pdf ijazah dan daftar nilai/transkrip nilai;</td>
																				</tr>
																				<tr>
																					<td>3.</td>
																					<td>File jpg Kartu Tanda Penduduk (KTP);</td>
																				</tr>
																				<tr>
																					<td>4.</td>
																					<td>File jpg pas foto berwarna latar merah ukuran 4x6 cm;</td>
																				</tr>
																				<tr>
																					<td>5.</td>
																					<td>Surat Keterangan Catatan Kepolisian (SKCK) yang masih berlaku dan telah dilegalisir dari pihak Polres/Polsek sebanyak 1 (satu) lembar (apabila telah dinyatakan <b>“DITERIMA”</b>);</td>
																				</tr>
																				<tr>
																					<td>6.</td>
																					<td>Surat Keterangan Sehat dari Dokter Rumah Sakit Pemerintah/Puskesmas (apabila telah dinyatakan <b>“DITERIMA”</b>);</td>
																				</tr>
																				<tr>
																					<td>7.</td>
																					<td>Link Portofolio  Project/Aplikasi yang pernah dibuat khusus untuk jabatan Programer (jika ada);</td>
																				</tr>
																				<tr>
																					<td>8.</td>
																					<td>File pdf sertifikat kegiatan Seminar/Workshop/ Pelatihan bidang IT yang pernah diikuti (jika ada);</td>
																				</tr>
																				<tr>
																					<td>9.</td>
																					<td>Sertifikat Keahlian Bidang IT (Nilai tambah);</td>
																				</tr>
																				<tr>
																					<td>10.</td>
																					<td>
																						Surat Pernyataan bermaterai Rp. 10000,- yang menyatakan : <a href="<?= base_url('assets/seleksi/file/contoh_surat.pdf')?>" target="_blank"><i>(Contoh Surat)</i></a>
																						<table class="table">
																							<tr>
																								<td>a.</td>
																								<td>Tidak sedang terikat kontrak kerja dengan instansi lain baik Negeri maupun Swasta;</td>
																							</tr>
																							<tr>
																								<td>b.</td>
																								<td>Mampu bekerja keras secara mandiri maupun tim dan disiplin kerja;</td>
																							</tr>
																							<tr>
																								<td>c.</td>
																								<td>Dapat bekerja berdasarkan target yang diberikan;</td>
																							</tr>
																							<tr>
																								<td>d.</td>
																								<td>Memiliki kemampuan analisa yang baik, mampu bekerja dibawah tekanan dan melakukan pengembangan serta perawatan aplikasi yang sudah ada;</td>
																							</tr>
																							<tr>
																								<td>e.</td>
																								<td>Bersedia menyesuaikan dengan jam kerja yang berlaku pada Pemerintah Kabupaten Bolaang Mongondow Utara;</td>
																							</tr>
																							<tr>
																								<td>f.</td>
																								<td>Bersedia kerja diluar jam kerja kantor ketika sewaktu-waktu dibutuhkan.</td>
																							</tr>
																						</table>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div> 
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="TabPlan" class="tab-pane animated flipInX custon-tab-style1">
											<p>Setelah dinyatakan <b>DITERIMA</b> berkas lamaran (hardcopy) yang di unggah dapat diantar  ke Sekretariat Panitia Seleksi Kantor Dinas Komunikasi Informatika dan Persandian Kabupaten Bolaang Mongondow Utara dengan alamat Jln. Imam Bonjol, Desa Boroko, Kecamatan Kaidipang.</p>
										</div>
										<div id="TabPlan1" class="tab-pane animated flipInX custon-tab-style1">
											<div class="container-fluid">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="sparkline8-list">
															<div class="sparkline8-graph">
																<div class="static-table-list">
																	<table class="table">
																		<tbody>
																			<tr>
																				<td>A.</td>
																				<td><h4>Waktu Pendaftaran :</h4></td>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td>Pengumuman dimulai dari tanggal 01 Februari 2022.</td>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<td>Waktu pendaftaran dan pengiriman berkas lamaran berlangsung dari tanggal 02 Februari s/d 05 Februari 2022.</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="TabPlan2" class="tab-pane animated flipInX custon-tab-style1">
											<div class="container-fluid">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="sparkline8-list">
															<div class="sparkline8-graph">
																<div class="static-table-list">
																	<table class="table">
																		<tbody>
																			<tr>
																				<td>A.</td>
																				<td><h4>Seleksi Administrasi</h4> </td>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td>Pelamar dinyatakan lulus administrasi apabila memenuhi seluruh persyaratan dan ketentuan sebagaimana dimaksud pada poin II dan III, akan diumumkan pada tanggal 7 Februari 2022 pada website bolmutkab.go.id dan diskominfo.bolmutkab.go.id.</td>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<td>Pelamar yang lulus seleksi administratif akan diundang untuk mengikuti Seleksi Kompetensi Bidang (SKB) dan Tes Wawancara.</td>
																			</tr>
																		</tbody>
																		<tbody>
																			<tr>
																				<td>B.</td>
																				<td><h4>Seleksi Kompetensi Bidang (SKB)</h4></td>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td>Tes kemampuan dan pengetahuan mengenai Pemrograman/live coding (untuk Jabatan Programmer);</td>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<td>Tes tertulis dan praktik (membuat kabel Lan, manajemen Switch dan Access Point serta splicing kabel fiber optik) untuk Jabatan Teknisi Jaringan;</td>
																			</tr>
																			<tr>
																				<td>3.</td>
																				<td>Jadwal pelaksanaan Seleksi Kompetensi Bidang (SKB) dan Wawancara akan disampaikan pada pengumuman selanjutnya.</td>
																			</tr>
																			<tr>
																				<td>4.</td>
																				<td>Hasil SKB dan wawancara akan diumumkan pada website diskominfo.bolmutkab.go.id. dan bolmutkab.go.id.</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="TabPlan3" class="tab-pane animated flipInX custon-tab-style1">
											<div class="container-fluid">
												<div class="row">
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<div class="sparkline8-list">
															<div class="sparkline8-graph">
																<div class="static-table-list">
																	<table class="table">
																		<tbody>
																			<tr>
																				<td>A.</td>
																				<td><h4>Informasi Tambahan :</h4></td>
																			</tr>
																			<tr>
																				<td>1.</td>
																				<td>Seluruh proses seleksi Calon Tenaga Ahli Dinas Komunikasi Informatika dan Persandian Kabupaten Bolaang Mongondow Utara Tahun Anggaran 2022 tidak dipungut biaya dan bebas dari Korupsi, Kolusi dan Nepotisme;</td>
																			</tr>
																			<tr>
																				<td>2.</td>
																				<td>Bagi pelamar yang terbukti melakukan perjokian dan atau memberikan keterangan PALSU dinyatakan TIDAK LULUS/GUGUR dan akan dikenakan sanksi sesuai dengan hukum yang berlaku;</td>
																			</tr>
																			<tr>
																				<td>3.</td>
																				<td>Seluruh dokumen yang telah diserahkan menjadi hak milik panitia dan tidak dapat diminta kembali;</td>
																			</tr>
																			<tr>
																				<td>4.</td>
																				<td>Keputusan Panitia Seleksi Tenaga Ahli Dinas Komunikasi Informatika dan Persandian Kabupaten Bolaang Mongondow Utara Tahun Anggaran 2022 tidak dapat diganggu gugat;</td>
																			</tr>
																		</tbody>
																	</table>
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
		</section>
		<section>
			<marquee title="Ini Muncul Saat Hover" behavior="alternate" onmouseover="this.stop()" onmouseout="this.start()" direction="right">
				<div class="">
					<span></span>
					<a href="<?= base_url('login')?>" target="_blank" class="btn"><h4><p style="color: red;">Silahkan klik Link ini untuk melakukan Pendaftaran...!!!</h4></p></a>
				</div>
			</marquee>
		</section>

		<!-- <section id="testimonials" class="section" data-stellar-background-ratio="0.5">
			<section class="bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="owl-carousel testimonial-slider">
								<div class="single-testimonial">
									<img src="<?= base_url('assets/seleksi/img/testi-1.jpg')?>" alt="#">
									<h2><i>Web Developer Job Description</i></h2>
									<p><i class="fa fa-quote-left" aria-hidden="true"></i><i>Web developers design and build websites. They are typically responsible for the appearance, of the site and technical aspects, such as site speed and how much traffic the site can handle. Web developers may also create site content that requires technical features.They are sometimes known as web designers or full-stack developers if they can do both front-end and back-end development.<i class="fa fa-quote-right" aria-hidden="true"></i></i>
									<span>https:google.com</span>
									<p>engembang web merancang dan membangun situs web. Mereka biasanya bertanggung jawab atas penampilan, situs, dan aspek teknis, seperti kecepatan situs dan seberapa banyak lalu lintas yang dapat ditangani situs. Pengembang web juga dapat membuat konten situs yang memerlukan fitur teknis. Mereka terkadang dikenal sebagai web designer atau full-stack developer jika mereka dapat melakukan pengembangan front-end dan back-end.</p>
									</p>
								</div>
								<div class="single-testimonial">
									<img src="<?= base_url('assets/seleksi/img/testi-2.jpg')?>" alt="#">
									<h2><i>Web Developer Programmer Job Description</i></h2>
									<p><i class="fa fa-quote-left" aria-hidden="true"></i><i>A Web Developer is responsible for the coding, design and layout of a website according to a company's specifications. As the role takes into consideration user experience and function, a certain level of both graphic design and computer programming is necessary.<i class="fa fa-quote-right" aria-hidden="true"></i></i></p>
									<span>https:google.com</span>
									<p>
									Pengembang Web bertanggung jawab atas pengkodean, desain, dan tata letak situs web sesuai dengan spesifikasi perusahaan . Karena peran mempertimbangkan pengalaman dan fungsi pengguna, tingkat tertentu dari desain grafis dan pemrograman komputer diperlukan.
									</p>

								</div>
								<div class="single-testimonial">
									<img src="<?= base_url('assets/seleksi/img/testi-3.jpg')?>" alt="#">
									<h2><i>Web Analytics Manager Job Description</i></h2>
									<p><i class="fa fa-quote-left" aria-hidden="true"></i><i>The Web Analytics Manager reports the Director of Digital Marketing for Merchant Sales & Solutions, providing technical leadership and support for web analytics tools that deliver insights to help increase site visitors, create deeper engagement, and improve online conversions.<i class="fa fa-quote-right" aria-hidden="true"></i></i></p>
									<span>Foster City, CA</span>
									<p>Manajer Analisis Web melaporkan Director of Digital Marketing for Merchant Sales & Solutions , memberikan kepemimpinan teknis dan dukungan untuk alat analisis web yang memberikan wawasan untuk membantu meningkatkan pengunjung situs, menciptakan keterlibatan yang lebih dalam, dan meningkatkan konversi online.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section> -->
		<!--/ End Testimonials -->
		
		<!-- Blog -->
		<section id="blog" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Galery Kegiatan</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<div class="single-news">
							<div class="news-head">
								<img src="<?= base_url('assets/seleksi/img/kegiatan1.jpg')?>" alt="#">
							</div>
							<div class="news-body">
								<h3 class="date">25<span>nov</span></h3>
								<h2><a href="blog-single.html">Penarikan Pasang Baru</a></h2>
								
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.6s">
						<div class="single-news">
							<div class="news-head">
								<img src="<?= base_url('assets/seleksi/img/kegiatan2.jpg')?>" alt="#">
							</div>
							<div class="news-body">
								<h3 class="date">30<span>nov</span></h3>
								<h2><a href="blog-single.html">Perbaikan Sambungan ODP</a></h2>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.9s">
						<div class="single-news">
							<div class="news-head">
								<img src="<?= base_url('assets/seleksi/img/kegiatan3.jpg')?>" alt="#">
							</div>
							<div class="news-body">
								<h3 class="date">05<span>dec</span></h3>
								<h2><a href="blog-single.html">Penyambungan Kabel</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Newslatter -->
		
		<section id="team" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="section-title">
							<h2>Team Penguji</h2>
							<p>Adapun Team penguji berdasarkan SK Bupati Kabupaten Bolaang Mongondow Utara</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.7s">
						<!-- Single Team -->
						<div class="single-team">
							<div class="team-head">
								<img src="<?= base_url('assets/seleksi/img/img_avatar3.png')?>" alt="">
								<div class="team-hover">
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="t-name">
								<h4>AANG WARDIMAN., AK., CA<span>Kepala Dinas</span></h4>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-md-2 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.6s">
						<!-- Single Team -->
						<div class="single-team">
							<div class="team-head">
								<img src="<?= base_url('assets/seleksi/img/pak_sek_kominfo.png')?>" alt="">
								<div class="team-hover">
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="t-name">
								<h4>MIRWAN DATUKARAMAT, S.Kom<span>Sekretaris Dinas</span></h4>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-md-2 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.5s">
						<!-- Single Team -->
						<div class="single-team">
							<div class="team-head">
								<img src="<?= base_url('assets/seleksi/img/kabid_aptika.jpeg')?>" alt="">
								<div class="team-hover">
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="t-name">
								<h4>PRITA A. DEWI PONONGOA, S.Kom<span>Kepala Bidang Aplikasi Informatika</span></h4>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-md-2 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<!-- Single Team -->
						<div class="single-team">
							<div class="team-head">
								<img src="<?= base_url('assets/seleksi/img/JAWAHIR1.jpeg')?>" alt="">
								<div class="team-hover">
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="t-name">
								<h4>Jawahir A. Pohontu, S.Kom<span>Analis Sistem Informasi</span></h4>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-md-2 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<!-- Single Team -->
						<div class="single-team">
							<div class="team-head">
								<img src="<?= base_url('assets/seleksi/img/hafid.jpg')?>" alt="">
								<div class="team-hover">
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="t-name">
								<h4>Hafid Akbar Pangeran, ST<span>Analis Jaringan</span></h4>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
					<div class="col-md-2 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.4s">
						<!-- Single Team -->
						<div class="single-team">
							<div class="team-head">
								<img src="<?= base_url('assets/seleksi/img/jamdin.jpg')?>" alt="">
								<div class="team-hover">
									<ul class="social">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="t-name">
								<h4>Jamdin Thalib, S.Kom<span>Analis Sistem Informasi dan Jaringan</span></h4>
							</div>
						</div>
						<!--/ End Single Team -->
					</div>
				</div>
			</div>
		</section>