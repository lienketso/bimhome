<?php
$category_bottom = get_terms([
	'taxonomy' => 'category',
	'exclude' => [1],
	'include_children'  => true,
	'post_per_page'=>1,
	'meta_query'=> array(
		array(
			'key' => 'my_category_options',
			'value' => serialize([
				'tax_status'=>'display_bottom'
			])    
		)),
]);

?>
<?php foreach($category_bottom as$key=>$val): ?>
	<?php 
	$query = new WP_Query([
		'post_type' => 'post',
		'posts_per_page' => 8,
		'tax_query' => array(
			'relation' => 'AND',
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => array( $val->term_id ),
				'include_children' => true,
				'operator' => 'IN'
			),
		)

	]);


	?>  

	<div class="latest-news">
		<div class="container">
			<h2 class="theme-main-title"><span><?= $val->name; ?></span></h2>

			<div class="project-item-wrapper">
				<div class="row">
					<?php while ($query->have_posts()) : $query->the_post() ?>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="single-project">
								<div class="img">
									<a href="<?= the_permalink(); ?>">
										<?php the_post_thumbnail( $size = '', ['class' => 'img-full'] ) ?>
									</a>
								</div> <!-- /.img -->
								<div class="desc-news">
									<h3 class="title-news-home">
										<a href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
									</h3>
									<p><?= the_excerpt(); ?></p>
								</div>
							</div> <!-- /.single-project -->
						</div> <!-- /.col -->
					<?php endwhile; ?>
				</div> <!-- /.row -->

			</div> <!-- /.project-item-wrapper -->
		</div> <!-- /.container -->
	</div>
	<?php wp_reset_postdata(); ?>
	<?php endforeach; ?>