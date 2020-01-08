<?php /* Template Name: Biệt thự */ 
get_header();
$setting = get_option( 'setting_bietthu' );
$taxonomy_bt = get_terms([
	'taxonomy' => 'danh-muc-du-an',
	'exclude' => [1],
	'include_children'  => true,
	'post_per_page'=>1,
	'meta_query'=> array(
		array(
			'key' => 'my_taxo_options',
			'value' => serialize([
				'taxo_type'=>'bietthu'
			])    
		)),
]);


?>


<div class="banner-top" style="background-image: url('<?= $setting['bietthu_banner']['url'] ?>');">
	<div class="baobanner pd50">
		<div class="container">
			<div class="content-banner">

				<h4>
					<img src="<?= get_template_directory_uri() ?>/libs/images/vien.png">
					<span class="p-color"><?= $setting['bietthu_title_1'] ?> </span> <?= $setting['bietthu_title_2'] ?>
					<img src="<?= get_template_directory_uri() ?>/libs/images/vien-duoi.png">
				</h4>
				<p><?= $setting['bietthu_desc'] ?></p>
				<div class="btn-banner">
					<a href="#cantuvan" class="theme-button">Cần tư vấn</a>
					<a href="#banggia" class="theme-button">Xem bảng giá</a>
				</div>
			</div>
		</div>
	</div><!-- END REVOLUTION SLIDER -->

</div>

<!-- landing cac du an -->
<div class="landing-project pd50">
	<div class="container">
		<h2 class="theme-main-title"><span>Các dự án <strong>đã hoàn thiện</strong></span></h2>
		<div class="row pd30">
			<?php if(!empty($taxonomy_bt)): ?>

				<?php foreach($taxonomy_bt as $key=>$val): ?>
					<?php 
					$query = new WP_Query([
						'post_type' => 'du-an',
						'posts_per_page' => 9,
						'tax_query' => array(
							'relation' => 'AND',
							array(
								'taxonomy' => 'danh-muc-du-an',
								'field' => 'id',
								'terms' => array( $val->term_id ),
								'include_children' => true,
								'operator' => 'IN'
							),
						)

					]);
					?>
					<?php while ($query->have_posts()) : $query->the_post() ?>
						<div class="col-lg-4">
							<?php get_template_part('template-parts/content', 'project' ); ?>
						</div>
					<?php endwhile; ?>
					<div class="button-xem col-lg-12">
						<a href="<?= get_term_link($val->term_id,'danh-muc-du-an'); ?>">Xem thêm</a>
						<a href="#banggia">Xem bảng giá</a>
					</div>
				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

		</div>

	</div>
</div>

<div class="quytrinh pd50">
	<div class="container">
		<div class="mota-quytrinh">
			<h4 class="title-bottom"><?= $setting['bt_quytrinh_title_1'] ?> <span><?= $setting['bt_quytrinh_title_2'] ?></span></h4>
			<p class="hoa-van"><img src="<?= get_template_directory_uri() ?>/libs/images/hoa-chan.png"></p>
			<p><?= $setting['bt_quytrinh_desc'] ?></p>
		</div>

		<div class="danhsach-quytrinh pd30">
			<div class="row">
				<?php $listQT = $setting['list_quytrinh']; ?>
				<?php if(!empty($listQT)): ?>
					<?php foreach($listQT as $key=>$val): ?>
						<div class="col-lg-3">
							<div class="list-quytrinh">
								<a href="#">
									<div class="icon-qt">
										<img src="<?= $val['bt_quytrinh_image']['url']; ?>" class="img-reponsive">
									</div>
									<h4><?= $val['quytrinh_list_title']; ?></h4>
									<p><?= $val['quytrinh_list_desc']; ?></p>
								</a>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>

			<div class="btn-tuvan">
				<a href="#cantuvan" class="btntuvan">Cần tư vấn</a>
			</div>

		</div>

	</div>
</div>


<div class="banggia pd50">
	<div class="container">
		<div class="mota-quytrinh">
			<h4 class="title-bottom"><?= $setting['bt_banggia_title_1'] ?> <span><?= $setting['bt_banggia_title_2'] ?></span></h4>
			<p class="hoa-van"><img src="<?= get_template_directory_uri() ?>/libs/images/hoa-chan.png"></p>
		</div>

		<div class="danhsach-banggia pd30" id="banggia">
			<div class="row">
				<?php $listBG = $setting['list_banggia']; ?>
				<?php if(!empty($listBG)): ?>
					<?php foreach($listBG as $key=>$val): ?>
						<div class="col-lg-4 <?= ($key==0||$key==2) ? 'mgt80' : '' ?> ">
							<div class="list-banggia">
								<div class="<?= ($key==1) ? 'baomau' : 'baoden' ?>"><h3>Gói <span><?= $val['list_bg_title'] ?></span></h3></div>
								<?= $val['list_bg_check'] ?>
								<div class="cantuvan">
									<a href="#cantuvan" class="btntuvan <?= ($key==1) ? 'btndac' : '' ?>">Cần tư vấn</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				<?php endif; ?>

			</div>
		</div>

	</div>
</div>


<div class="trietly">
	<div class="container">
		<div class="bao-shadow">
			<div class="bao-bg-trietly pd50" id="cantuvan">
				<div class="mota-quytrinh">
					<h4 class="title-bottom"><?= $setting['bt_trietly_title_1'] ?> <span><?= $setting['bt_trietly_title_2'] ?></span></h4>
					<p class="hoa-van"><img src="<?= get_template_directory_uri() ?>/libs/images/hoa-chan.png"></p>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="desc-trietly">
							<h4><?= $setting['bt_trietly_title_3'] ?></h4>
							<p><?= $setting['bt_trietly_desc'] ?></p>

							<div class="form-tuvan" >
								<h5><?= $setting['bt_trietly_tuvan'] ?></h5>
								<form method="post" action="#">
									<form action="" method="POST" role="form">
										<div class="form-group">
											<input type="text" class="form-control txtform" id="" placeholder="Họ và tên *">
										</div>
										<div class="form-group">
											<input type="text" class="form-control txtform" id="" placeholder="Số điện thoại *">
										</div>
										<div class="form-group">
											<textarea class="form-control txtform" rows="4" placeholder="Tin nhắn"></textarea>
										</div>
										<button type="submit" class="btn btntuvan">Cần tư vấn</button>
									</form>
								</form>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>

<!-- Our Team ________________________ -->
<?php get_template_part( 'home/home', 'member' ); ?>
<!-- /.our-team -->

<!-- Client Slider ___________________ -->
<?php get_template_part( 'home/home', 'client' ); ?>
<!-- /.client-slider -->


<?php get_footer(); ?>			