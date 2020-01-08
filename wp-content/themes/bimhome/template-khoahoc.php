<?php /* Template Name: Khóa học */ 
	get_header();
	$setting = get_option( 'setting_khoahoc' );
?>


			<div class="banner-top" style="background-image: url('<?= $setting['khoahoc_banner']['url'] ?>');">
				<div class="baobanner pd50">
					<div class="container">
						<div class="content-banner">
							<div class="row">
								<div class="col-lg-6" style="text-align: left;">
									<h4 class="nhapho-bn-title">
										<span class=""><?= $setting['khoahoc_banner_title'] ?></span> 
									</h4>
									<p><?= $setting['khoahoc_banner_desc'] ?></p>
									<div class="btn-dangky">
										<a href="#dangkyhoc" class="btndangky">Đăng ký học</a>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="img-video" id="img-video">
										<img src="<?= $setting['khoahoc_video_image']['url']; ?>" class="img-full">
										<img class="img-play" id="img-play" onclick="clickvideo()" src="<?= get_template_directory_uri() ?>/libs/images/play.png" >
									</div>
									<div class="video-iframe" id="video-iframe">
										<?= $setting['khoahoc_banner_video'] ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- END REVOLUTION SLIDER -->

			</div>

			<div class="gt-khoahoc pd50">
				<div class="container">

					<div class="title-main-kh">
						<h2><?= $setting['khss1_main_title'] ?></h2>
						<p><?= $setting['khss1_main_desc'] ?></p>
					</div>

					<div class="list-gt-khoahoc pd50">
						<div class="row">
							<div class="col-lg-6">
								<div class="img-khoahoc">
									<img src="<?= $setting['khss1_image_1']['url'] ?>" class="img-full">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="info-khoahoc">
									<h3><?= $setting['khss1_title_1'] ?></h3>
									<?= $setting['khss1_content'] ?>
								</div>
							</div>
						</div>
					</div>

					<div class="list-gt-khoahoc pd50">
						<div class="row">
							
							<div class="col-lg-6">
								<div class="info-khoahoc">
									<h3><?= $setting['khss1_title_2'] ?></h3>
									<?= $setting['khss1_content_2'] ?>
									<div class="btn-dangky">
										<a href="#dangkyhoc" class="btndangky">Đăng ký học</a>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="img-khoahoc">
									<img src="<?= $setting['khss1_image_2']['url'] ?>" class="img-full">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="khoahoc-chatluong">
				<div class="container">
					<p>Chúng tôi có</p>
					<h3>Những khóa học chất lượng cao</h3>
					<div class="danhsach-khoa pd30">
							<div class="owl-carousel owl-theme">
								<div class="item">
									<div class="img-kh">
										<a href="#"><img src="<?= get_template_directory_uri() ?>/libs/images/khoahoc-3.png" class="img-full"></a>
									</div>
									<div class="desc-khoahoc">
										<h4><a href="#">Khóa học Revit - Thiết kế nhà vườn</a></h4>
										<ul>
											<li class="time-kh">12 buổi</li>
											<li class="baitap-kh">30 bài</li>
											<li class="user-kh">15 người</li>
										</ul>
										<div class="btn-dangky">
											<a class="btn-border-red" href="#">Đăng ký học</a>
											<a class="xemchitiet" href="#">Xem chi tiết</a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="img-kh">
										<a href="#"><img src="<?= get_template_directory_uri() ?>/libs/images/khoahoc-3.png" class="img-full"></a>
									</div>
									<div class="desc-khoahoc">
										<h4><a href="#">Khóa học Revit - Thiết kế nhà vườn</a></h4>
										<ul>
											<li class="time-kh">12 buổi</li>
											<li class="baitap-kh">30 bài</li>
											<li class="user-kh">15 người</li>
										</ul>
										<div class="btn-dangky">
											<a class="btn-border-red" href="#">Đăng ký học</a>
											<a class="xemchitiet" href="#">Xem chi tiết</a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="img-kh">
										<a href="#"><img src="<?= get_template_directory_uri() ?>/libs/images/khoahoc-3.png" class="img-full"></a>
									</div>
									<div class="desc-khoahoc">
										<h4><a href="#">Khóa học Revit - Thiết kế nhà vườn</a></h4>
										<ul>
											<li class="time-kh">12 buổi</li>
											<li class="baitap-kh">30 bài</li>
											<li class="user-kh">15 người</li>
										</ul>
										<div class="btn-dangky">
											<a class="btn-border-red" href="#">Đăng ký học</a>
											<a class="xemchitiet" href="#">Xem chi tiết</a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="img-kh">
										<a href="#"><img src="<?= get_template_directory_uri() ?>/libs/images/khoahoc-3.png" class="img-full"></a>
									</div>
									<div class="desc-khoahoc">
										<h4><a href="#">Khóa học Revit - Thiết kế nhà vườn</a></h4>
										<ul>
											<li class="time-kh">12 buổi</li>
											<li class="baitap-kh">30 bài</li>
											<li class="user-kh">15 người</li>
										</ul>
										<div class="btn-dangky">
											<a class="btn-border-red" href="#">Đăng ký học</a>
											<a class="xemchitiet" href="#">Xem chi tiết</a>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="img-kh">
										<a href="#"><img src="<?= get_template_directory_uri() ?>/libs/images/khoahoc-3.png" class="img-full"></a>
									</div>
									<div class="desc-khoahoc">
										<h4><a href="#">Khóa học Revit - Thiết kế nhà vườn</a></h4>
										<ul>
											<li class="time-kh">12 buổi</li>
											<li class="baitap-kh">30 bài</li>
											<li class="user-kh">15 người</li>
										</ul>
										<div class="btn-dangky">
											<a class="btn-border-red" href="#">Đăng ký học</a>
											<a class="xemchitiet" href="#">Xem chi tiết</a>
										</div>
									</div>
								</div>

						</div>
					</div>
				</div>
			</div>

			<div class="giangvien pd50">
				<div class="container">
					<div class="info-giangvien">
					<p><?= $setting['kh_giangvien_title_1'] ?></p>
					<h2><?= $setting['kh_giangvien_title_2'] ?></h2>
					<?= $setting['kh_giangvien_content'] ?>

					<div class="btn-dangky">
						<a href="#dangkyhoc" class="btn-bg-white">Giảng viên tư vấn</a>
					</div>

					</div>
				</div>
			</div>

			<div class="video-khoahoc pd50">
				<div class="container">
					<div class="row">
						<?php 
						$video = $setting['list_kh_video'];
						 ?>
						<div class="col-lg-6">
							<div class="video-left">
								<p><?= $setting['kh_video_main_title_1'] ?></p>
								<h3><?= $setting['kh_video_main_title_2'] ?></h3>
								<div class="video-hot" id="videohot">
									<img id="imgHot" src="<?= $setting['kh_video_hot_image']['url'] ?>" class="img-full" alt="">
								</div>
								<ul class="list-video">
									<?php if(!empty($video)): ?>
										<?php foreach($video as $k=>$v): ?>
									<li><a class="viewvideo" id="<?= $k ?>" data-content="<?= $v['kh_video_iframe'] ?>" href="javascript:void"><?= $v['kh_video_title']; ?></a></li>
										<?php endforeach; ?>
										<?php endif; ?>
								</ul>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="camnhan-hv">
								<p>Học viên nói gì</p>
								<h3 style="padding-bottom: 30px">Cảm nhận của học viên</h3>
								<div class="owl-carousel-hv owl-theme">
								<div class="item">
									<div class="bao-tron">
										
									</div>
									<p style="padding-top: 20px">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. </p>
									<h5>Nguyễn Thành An - học viên ưu tú</h5>
								</div>
								<div class="item">
									<div class="bao-tron">
										
									</div>
									<p style="padding-top: 20px">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. </p>
									<h5>Nguyễn Thành An - học viên ưu tú</h5>
								</div>
								
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="dangky-khoahoc pd50">
				<div class="container">
					<div class="mota-title">
						<p>Tư vấn</p>
						<h4>Bạn không biết mình có phù hợp ?</h4>
					</div>
					<div class="form-tuvan">
						<div class="row">
							<div class="col-lg-6">
								<div class="left-form-tv">
									<p>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz. Brick quiz whangs jumpy veldt fox. Bright vixens jump; dozy fowl quack. Quick wafting zephyrs vex bold Jim. Quick zephyrs blow</p>
									<p>Liên hệ tư vấn <span>0979 823 452</span></p>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="right-form-tv">
									<form action="" method="POST" role="form">
										<div class="form-group">
											<input type="text" class="form-control txtform" id="" placeholder="Họ và tên *">
										</div>
										<div class="form-group">
											<input type="text" class="form-control txtform" id="" placeholder="Số điện thoại *">
										</div>
										<div class="form-group">
											<select class="form-control txtform">
												<option>Chọn khóa học</option>
											</select>
										</div>
										<button type="submit" class="btn btnSubmit">Đăng ký tư vấn</button>
									</form>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

<?php get_footer(); ?>			