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
				<?php 
				$query = new WP_Query([
					'post_type' => 'khoahoc'
				]);
				?>  

				<?php while ($query->have_posts()) : $query->the_post() ?>
				<?php $meta = get_post_meta(get_the_ID(), 'my_khoahoc_post', true ); 
				 ?>
				<div class="item">
					<div class="img-kh">
						<a href="<?= the_permalink(); ?>"><?php the_post_thumbnail( $size = '', ['class' => 'img-full'] ) ?></a>
					</div>
					<div class="desc-khoahoc">
						<h4><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h4>
						<ul>
							<li class="time-kh"><?= $meta['khoahoc_buoi'] ?></li>
							<li class="baitap-kh"><?= $meta['khoahoc_bai'] ?></li>
							<li class="user-kh"><?= $meta['khoahoc_nguoi'] ?></li>
						</ul>
						<div class="btn-dangky">
							<a class="btn-border-red" href="#dangkyhoc">Đăng ký học</a>
							<a class="xemchitiet" href="<?= the_permalink(); ?>">Xem chi tiết</a>
						</div>
					</div>
				</div>
				<?php endwhile; ?>

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
						<iframe id="ifVideo" width="" height="315" src="<?= $setting['kh_video_hot_image']; ?>" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
					<p><?= $setting['kh_comment_main_title_1'] ?></p>
					<h3 style="padding-bottom: 30px"><?= $setting['kh_comment_main_title_2'] ?></h3>
					<?php $comment = $setting['list_kh_comment']; ?>
					<?php if(!empty($comment)): ?>
						<div class="owl-carousel-hv owl-theme">
							<?php foreach($comment as $c): ?>
								<div class="item">
									<div class="bao-tron" style="background-image: url(<?= $c['kh_comment_image']['url']; ?>)">
										
									</div>
									<p style="padding-top: 20px"><?= $c['kh_comment_content'] ?> </p>
									<h5><?= $c['kh_comment_title'] ?></h5>
								</div>
							<?php endforeach; ?>

						</div>
					<?php endif; ?>

				</div>
			</div>

		</div>
	</div>
</div>

<div class="dangky-khoahoc pd50" id="dangkyhoc">
	<div class="container">
		<div class="mota-title">
			<p><?= $setting['kh_tuvan_main_title_1'] ?></p>
			<h4><?= $setting['kh_tuvan_main_title_2'] ?></h4>
		</div>
		<div class="form-tuvan">
			<div class="row">
				<div class="col-lg-6">
					<div class="left-form-tv">
						<p><?= $setting['kh_tuvan_desc'] ?></p>
						<p>Liên hệ tư vấn <span><?= $setting['kh_tuvan_phone'] ?></span></p>
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