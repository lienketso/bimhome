<?php
$category_home = get_terms([
	'taxonomy' => 'category',
	'exclude' => [1],
	'include_children'  => true,
	'post_per_page'=>1,
	'meta_query'=> array(
		array(
			'key' => 'my_category_options',
			'value' => serialize([
				'tax_status'=>'display_home'
			])    
		)),
]);

?>
<?php foreach($category_home as$key=>$val): ?>
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
	<div class="creative-ideas">
		<div class="container">
			<h2 class="theme-main-title"><span><?= $val->name; ?></span></h2>

			<div class="row">
				<?php while ($query->have_posts()) : $query->the_post() ?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					 <?php get_template_part( 'template-parts/content', 'box' ); ?>
				</div> <!-- /.col- -->
			<?php endwhile; ?>
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div>
	<?php wp_reset_postdata(); ?>
	<?php endforeach; ?>