			<?php get_header(); ?>

			<!-- Theme Banner ________________________________ -->
			<?php get_template_part( 'home/home', 'slider' ); ?>
			<!--  /#banner -->

			<!-- About Arch _______________________ -->
			<?php get_template_part( 'home/home', 'about' ); ?>
			<!-- /.about-arch -->

			<!-- Creative ideas _______________________ -->
			<?php get_template_part( 'home/home', 'category' ); ?>
			<!-- /.creative-ideas -->

			<!-- Work History _____________________ -->
			<?php get_template_part( 'home/home', 'ads' ); ?>
			<!-- /.work-history -->

			<!-- Future Project ___________________ -->
			<div class="">
				<div class="container">
					<h2 class="theme-main-title"><span>Chúng tôi <strong>đã thiết kế</strong></span></h2>

					<div class="project-v3">
						<div>
							<ul class="project-home center-text">
								<li class="filter active tran3s" data-filter="all">Tất cả</li>
								<li class="filter tran3s" data-filter=".architecture">Nhà phố</li>
								<li class="filter tran3s" data-filter=".interior">Biệt thự</li>
								<li class="filter tran3s" data-filter=".industrial">Lâu đài</li>
								<li class="filter tran3s" data-filter=".design">Nội thất cổ điển</li>
							</ul>
							<div class="project-item-wrapper" id="mixitUp-item">
								<div class="row">
									<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix interior design">
										<div class="single-project">
											<div class="img">
												<img src="<?= get_template_directory_uri() ?>/libs/images/project/9.jpg" alt="Image">
												<div class="overlay tran3s">
													<div>
														<div>
															<a href="<?= get_template_directory_uri() ?>/libs/images/project/9.jpg" class="fancybox"></a>
														</div>
													</div>
												</div> <!-- /.overlay -->
											</div> <!-- /.img -->
											<div class="desc-project">
												<h3><a href="#">Nhà anh nguyễn long</a></h3>
												<p>Nhà phố - TP Hà Nôi</p>
											</div>
										</div> <!-- /.single-project -->
									</div> <!-- /.col -->


								</div> <!-- /.row -->
								<a href="" class="theme-button"><span>Xem thêm</span></a>
							</div> <!-- /.project-item-wrapper -->
						</div> <!-- /.container -->
					</div> <!-- /.future-project -->


				</div> <!-- /.container -->
			</div> <!-- /.future-project -->


			<!-- Our Team ________________________ -->
			<div class="our-team">
				<div class="container">
					<h2 class="theme-main-title"><span>Kiến trúc sư tài năng</span></h2>
					<div class="row">

						<div class="single-team-member float-left">
							<div class="bao-member">
								<a href="" class="img"><img src="<?= get_template_directory_uri() ?>/libs/images/team/1.jpg" alt="Team member"></a>
								<div class="text">
									<a href=""><h4>Mahfuz Riad</h4></a>
									<span>Lead Architect</span>
									<ul>
										<li><a href="" ><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="" ><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div> <!-- /.text -->
							</div>

						</div> <!-- /.single-team-member -->

						<div class="single-team-member float-left">
							<div class="bao-member">
								<a href="" class="img"><img src="<?= get_template_directory_uri() ?>/libs/images/team/2.jpg" alt="Team member"></a>
								<div class="text">
									<a href="" ><h4>Foqrul Isalm</h4></a>
									<span>Lead Architect</span>
									<ul>
										<li><a href="" ><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
										<li><a href="" ><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div> <!-- /.text -->
							</div>
						</div> <!-- /.single-team-member -->
					</div> <!-- /.row -->

					<a href="" class="theme-button"><span>VIEW MORE</span></a>
				</div> <!-- /.container -->
			</div> <!-- /.our-team -->


			<!-- Client Slider ___________________ -->
			<?php get_template_part( 'home/home', 'client' ); ?>
			<!-- /.client-slider -->


			<!-- Latest News _____________________ -->
			<?php get_template_part( 'home/home', 'news' ); ?>
			<!-- /.latest-news -->

			<?php get_footer(); ?>