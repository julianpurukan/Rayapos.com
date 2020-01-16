

<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								Jakarta, NY
							</span>

							<img class="m-b-1 m-rl-8" src="<?=asset('images/icons/icon-night.png') ?>" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>

						<a href="#" class="left-topbar-item">
							About
						</a>

						<a href="#" class="left-topbar-item">
							Contact
						</a>

						<a href="#" class="left-topbar-item">
							Sing up
						</a>

						<a href="#" class="left-topbar-item">
							Log in
						</a>
					</div>

					<div class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>
			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="index.html"><img src="<?=asset('images/icons/logo-01.png'); ?>" alt="IMG-LOGO"></a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
								New York, NY
							</span>

							<img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG">

							<span>
								HI 58° LO 56°
							</span>
						</span>
					</li>

					<li class="left-topbar">
						<a href="#" class="left-topbar-item">
							About
						</a>

						<a href="#" class="left-topbar-item">
							Contact
						</a>

						<a href="#" class="left-topbar-item">
							Sing up
						</a>

						<a href="#" class="left-topbar-item">
							Log in
						</a>
					</li>

					<li class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="index.html">Home</a>
						<ul class="sub-menu-m">
							<li><a href="index.html">Homepage v1</a></li>
							<li><a href="home-02.html">Homepage v2</a></li>
							<li><a href="home-03.html">Homepage v3</a></li>
						</ul>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>

					<li>
						<a href="category-01.html">News</a>
					</li>

					<li>
						<a href="category-02.html">Entertainment </a>
					</li>

					<li>
						<a href="category-01.html">Business</a>
					</li>

					<li>
						<a href="category-02.html">Travel</a>
					</li>

					<li>
						<a href="category-01.html">Life Style</a>
					</li>

					<li>
						<a href="category-02.html">Video</a>
					</li>

					<li>
						<a href="#">Features</a>
						<ul class="sub-menu-m">
							<li><a href="category-01.html">Category Page v1</a></li>
							<li><a href="category-02.html">Category Page v2</a></li>
							<li><a href="blog-grid.html">Blog Grid Sidebar</a></li>
							<li><a href="blog-list-01.html">Blog List Sidebar v1</a></li>
							<li><a href="blog-list-02.html">Blog List Sidebar v2</a></li>
							<li><a href="blog-detail-01.html">Blog Detail Sidebar</a></li>
							<li><a href="blog-detail-02.html">Blog Detail No Sidebar</a></li>
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>

						<span class="arrow-main-menu-m">
							<i class="fa fa-angle-right" aria-hidden="true"></i>
						</span>
					</li>
				</ul>
			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="<?php echo baseUrl(); ?>"><img src="<?=asset('images/icons/logo.png') ?>" alt="LOGO"></a>
				</div>	

				<!-- Banner -->
				<?php 
					$ad='L728x90';
					include 'ads.php';
				 ?>
			</div>	
			
			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="index.html">
							<img src="images/icons/logo-01.png" alt="LOGO">
						</a>

						<ul class="main-menu">
							<li>
								<a href="<?php echo baseUrl(); ?>">Home</a>
								
							</li>
							<?php 
								///////////////MAIN KATEGORI////////////////
								$sql="SELECT id_kategori_utama,nama_kategori_utama from kategori_utama WHERE aktif_kategori_utama='Y'";
								
								$fetch=mysqli_query($kon,$sql);
								
								while ($main=mysqli_fetch_array($fetch)) {
								///////////////MAIN KATEGORI////////////////
							 ?>

							<li class="mega-menu-item">
								<a href="#">
								<?php 
									echo $main['nama_kategori_utama']; 
									$main_kat=$main['id_kategori_utama'];
								?>
									
								</a>

								<div class="sub-mega-menu">
									<div class="nav flex-column nav-pills" role="tablist">
										<a class="nav-link active" data-toggle="pill" href="#news-0" role="tab">All</a>
										<?php 
											///////////////SUB KATEGORI////////////////
											$sql2="SELECT id_kategori_berita,nama_kategori from kategori_berita WHERE id_kategori_utama='$main_kat' AND aktif='Y'"; 
											$fetch2=mysqli_query($kon,$sql2);
											///////////////SUB KATEGORI////////////////
										?>

										<?php while ($sub=mysqli_fetch_array($fetch2)) {
											// $no=0;
										?>
											<a class="nav-link" data-toggle="pill" href="<?php echo '#'.$main['nama_kategori_utama'].'-'.$sub['id_kategori_berita']; ?>" role="tab"><?=$sub['nama_kategori']; ?></a>
										<?php 
											// $no++;
										} ?>

									</div>

									<div class="tab-content">
										<div class="tab-pane show active" id="news-0" role="tabpanel">
											<div class="row">
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-05.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Music
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 18
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-10.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Finance
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 15
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-14.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Beach
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Feb 12
																</span>
															</span>
														</div>
													</div>
												</div>

												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="blog-detail-01.html" class="wrap-pic-w hov1 trans-03">
															<img src="images/post-36.jpg" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="blog-detail-01.html" class="f1-s-5 cl3 hov-cl10 trans-03">
																	Donec metus orci, malesuada et lectus vitae
																</a>
															</h5>

															<span class="cl8">
																<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
																	Technology
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	Jan 20
																</span>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<?php 
										$sql5="SELECT id_kategori_berita,nama_kategori from kategori_berita WHERE id_kategori_utama='$main_kat' AND aktif='Y'"; 
										$fetch5=mysqli_query($kon,$sql5);
										while ($sub=mysqli_fetch_array($fetch5)) {?>
										<div class="tab-pane" id="<?php $subkat=$sub['id_kategori_berita']; echo $main['nama_kategori_utama'].'-'.$sub['id_kategori_berita']; ?>" role="tabpanel">
											<div class="row">
												<?php 
													$sql3="SELECT id_berita,CONCAT(tanggal,' ',jam)  as datetime,gambar,judul FROM berita WHERE aktif='Y' AND id_kategori_berita='$subkat' ORDER BY datetime desc LIMIT 4";
													$fetch3=mysqli_query($kon,$sql3);
													while ($p=mysqli_fetch_array($fetch3)) {
												 ?>
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="<?=baseUrl().'/index.php?module=pageDetail&id_berita=$id'; ?>" class="wrap-pic-w hov1 trans-03">
															<img src="<?=imagePost($p['gambar']);?>" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<?php $id=$p['id_berita']; ?>
																<a href="<?=baseUrl().'/index.php?module=pageDetail&id_berita=$id'; ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
																	<?php 
																		$judul=$p['judul'];
																		if(strlen($judul)>57){
																			echo substr($judul,53).'...';
																		}
																		else{
																			echo $judul;
																		} 
																	?>
																</a>
															</h5>

															<span class="cl8">
																<a href="<?=baseUrl().'/index.php?module=front_category&category='.$sub['nama_kategori']; ?>" class="f1-s-6 cl8 hov-cl10 trans-03">
																	<?=$sub['nama_kategori']; ?>
																</a>

																<span class="f1-s-3 m-rl-3">
																	-
																</span>

																<span class="f1-s-3">
																	<?php
																		$dt=$p['datetime']; 
																		echo dateTumbnail($dt);
																	?>
																</span>
															</span>
														</div>
													</div>
												</div>
												<?php }?>
											</div>
										</div>

										<?php } ?>
									</div>
								</div>
							</li>
							<?php } ?>


						</ul>
					</nav>
				</div>
			</div>	
		</div>
</header>