<?php 
		switch ($sidebar) {
			case 'standard':
				$ad='P300x600';
				echo "
						<div class='col-md-10 col-lg-4'>
							<div class='p-l-10 p-rl-0-sr991 p-b-20'>
							
								<div>
												<div class='how2 how2-cl4 flex-s-c'>
														<h3 class='f1-m-2 cl3 tab01-title'>
															Most Popular
														</h3>
													</div>

													<ul class='p-t-35'>
														<li class='flex-wr-sb-s p-b-22'>
															<div class='size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6'>
																1
															</div>

															<a href='#' class='size-w-3 f1-s-7 cl3 hov-cl10 trans-03'>
																Lorem ipsum dolor sit amet, consectetur adipiscing elit
															</a>
														</li>

														<li class='flex-wr-sb-s p-b-22'>
															<div class='size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6'>
																2
															</div>

															<a href='#' class='size-w-3 f1-s-7 cl3 hov-cl10 trans-03'>
																Proin velit consectetur non neque
															</a>
														</li>

														<li class='flex-wr-sb-s p-b-22'>
															<div class='size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6'>
																3
															</div>

															<a href='#' class='size-w-3 f1-s-7 cl3 hov-cl10 trans-03'>
																Nunc vestibulum, enim vitae condimentum volutpat lobortis ante
															</a>
														</li>

														<li class='flex-wr-sb-s p-b-22'>
															<div class='size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6'>
																4
															</div>

															<a href='#' class='size-w-3 f1-s-7 cl3 hov-cl10 trans-03'>
																Proin velit justo consectetur non neque elementum
															</a>
														</li>

														<li class='flex-wr-sb-s p-b-22'>
															<div class='size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0'>
																5
															</div>

															<a href='#' class='size-w-3 f1-s-7 cl3 hov-cl10 trans-03'>
																Proin velit consectetur non neque
															</a>
														</li>
													</ul>
								</div>
						";
				include 'ads.php';
				echo 	"
												<!--  -->
								<div class='p-t-50'>
													<div class='how2 how2-cl4 flex-s-c'>
														<h3 class='f1-m-2 cl3 tab01-title'>
															Stay Connected
														</h3>
													</div>

													<ul class='p-t-35'>
														<li class='flex-wr-sb-c p-b-20'>
															<a href='#' class='size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0'>
																<span class='fab fa-facebook-f'></span>
															</a>

															<div class='size-w-3 flex-wr-sb-c'>
																<span class='f1-s-8 cl3 p-r-20'>
																	6879 Fans
																</span>

																<a href='#' class='f1-s-9 text-uppercase cl3 hov-cl10 trans-03'>
																	Like
																</a>
															</div>
														</li>

														<li class='flex-wr-sb-c p-b-20'>
															<a href='#' class='size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0'>
																<span class='fab fa-twitter'></span>
															</a>

															<div class='size-w-3 flex-wr-sb-c'>
																<span class='f1-s-8 cl3 p-r-20'>
																	568 Followers
																</span>

																<a href='#' class='f1-s-9 text-uppercase cl3 hov-cl10 trans-03'>
																	Follow
																</a>
															</div>
														</li>

														<li class='flex-wr-sb-c p-b-20'>
															<a href='#' class='size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0'>
																<span class='fab fa-youtube'></span>
															</a>

															<div class='size-w-3 flex-wr-sb-c'>
																<span class='f1-s-8 cl3 p-r-20'>
																	5039 Subscribers
																</span>

																<a href='#' class='f1-s-9 text-uppercase cl3 hov-cl10 trans-03'>
																	Subscribe
																</a>
															</div>
														</li>
													</ul>
								</div>
							</div>
						</div>
				";
				break;
			case 'standard2':
				echo "
					<div class='col-md-10 col-lg-4'>
					<div class='p-l-10 p-rl-0-sr991 p-b-20'>
						<!-- Video -->
						<div class='p-b-55'>
							<div class='how2 how2-cl4 flex-s-c m-b-35'>
								<h3 class='f1-m-2 cl3 tab01-title'>
									Featured Video
								</h3>
							</div>

							<div>
								<div class='wrap-pic-w pos-relative'>
									<img src='images/video-01.jpg' alt='IMG'>

									<button class='s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03' data-toggle='modal' data-target='#modal-video-01'>
										<span class='fab fa-youtube'></span>
									</button>
								</div>

								<div class='p-tb-16 p-rl-25 bg3'>
									<h5 class='p-b-5'>
										<a href='#' class='f1-m-3 cl0 hov-cl10 trans-03'>
											Music lorem ipsum dolor sit amet consectetur 
										</a>
									</h5>

									<span class='cl15'>
										<a href='#' class='f1-s-4 cl8 hov-cl10 trans-03'>
											by John Alvarado
										</a>

										<span class='f1-s-3 m-rl-3'>
											-
										</span>

										<span class='f1-s-3'>
											Feb 18
										</span>
									</span>
								</div>
							</div>	
						</div>
							
						<!-- Subscribe -->
						<div class='bg10 p-rl-35 p-t-28 p-b-35 m-b-55'>
							<h5 class='f1-m-5 cl0 p-b-10'>
								Subscribe
							</h5>

							<p class='f1-s-1 cl0 p-b-25'>
								Get all latest content delivered to your email a few times a month.
							</p>

							<form class='size-a-9 pos-relative'>
								<input class='s-full f1-m-6 cl6 plh9 p-l-20 p-r-55' type='text' name='email' placeholder='Email'>

								<button class='size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03'>
									<i class='fa fa-arrow-right'></i>
								</button>
							</form>
						</div>
						
						<!-- Tag -->
						<div class='p-b-55'>
							<div class='how2 how2-cl4 flex-s-c m-b-30'>
								<h3 class='f1-m-2 cl3 tab01-title'>
									Tags
								</h3>
							</div>

							<div class='flex-wr-s-s m-rl--5'>
								<a href='#' class='flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5'>
									Fashion
								</a>

								<a href='#' class='flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5'>
									Lifestyle
								</a>

								<a href='#' class='flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5'>
									Denim
								</a>

								<a href='#' class='flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5'>
									Streetstyle
								</a>

								<a href='#' class='flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5'>
									Crafts
								</a>

								<a href='#' class='flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5'>
									Magazine
								</a>

								<a href='#' class='flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5'>
									News
								</a>

								<a href='#' class='flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5'>
									Blogs
								</a>
							</div>	
						</div>
					</div>
				</div>
				";
				break;
			default:
				# code...
				break;
		}
 ?>