<?php 
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  
?>
<div class="single-project">
	<div class="img">
		<a href="<?= the_permalink(); ?>"><?php the_post_thumbnail( $size = '', ['class' => 'img-responsive'] ) ?></a>
		<div class="overlay tran3s">
			<div>
				<div>
					<a href="<?php echo esc_url($featured_img_url) ?>" class="fancybox"></a>
				</div>
			</div>
		</div> <!-- /.overlay -->
	</div> <!-- /.img -->
	<div class="desc-project">
		<h3><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h3>
		<p><?= the_excerpt(); ?></p>
	</div>
</div> 