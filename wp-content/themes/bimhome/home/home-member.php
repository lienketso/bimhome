<?php 
$query = new WP_Query([
	'post_type' => 'kien-truc-su',
	'posts_per_page' => 4,
]);

?>  

<div class="our-team">
	<div class="container">
		<h2 class="theme-main-title"><span>Kiến trúc sư tài năng</span></h2>
		<div class="row">

			<?php while ($query->have_posts()) : $query->the_post() ?>
				<?php $meta = get_post_meta(get_the_ID(), 'my_member_post', true ); 
						//print_r($meta);
				 ?>
			<div class="single-team-member float-left">
				<div class="bao-member">
					<a href="" class="img">
						<?php the_post_thumbnail( $size = '', ['class' => ''] ) ?>
					</a>
					<div class="text">
						<a href=""><h4><?= the_title(); ?></h4></a>
						<span><?= the_excerpt(); ?></span>
						<ul>
							<li><a href="<?= $meta['member_fb'] ?>" target="_blank" ><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="<?= $meta['member_google'] ?>" target="_blank" ><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="<?= $meta['member_twitter'] ?>" target="_blank" ><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						</ul>
					</div> <!-- /.text -->
				</div>
			</div> <!-- /.single-team-member -->
		<?php endwhile; ?>
		</div> <!-- /.row -->

	</div> <!-- /.container -->
</div>