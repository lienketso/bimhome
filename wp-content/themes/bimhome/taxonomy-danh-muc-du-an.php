<?php 
get_header();
?>
<?php 
$queried_object = get_queried_object();
$term_id = $queried_object->term_id; 
$metaS = get_term_meta( $term_id, 'my_category_options', true );
?>
<div class="inner-banner" style="background: url(<?= $metaS['tax_background']['url'] ?>);">
	<div class="opacity">
		<div class="container">
			<h4><?= single_term_title(); ?></h4>

			<ul class="breadcrumb-d">
				<li><a href="<?= get_home_url(); ?>" class="tran3s">Trang chủ</a></li>
				<li><?= single_term_title(); ?></li>
			</ul>
		</div>
	</div> <!-- /.opacity -->
</div> <!-- /.inner-banner -->

<!-- Blog V3 ___________________________ -->
<div class="future-project-fix">
	<div class="container">
		<div class="project-item-wrapper">
			<div class="row">
				<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="single-project">
						<?php get_template_part( 'template-parts/content', 'project' ) ?>
					</div> <!-- /.single-project -->
				</div> <!-- /.col -->
				<?php endwhile; ?>	
			<?php endif; ?>


			</div> <!-- /.row -->
			<div class="pagination-bam">
				<?php pagination_tdc(); ?>
			</div>
		</div> <!-- /.project-item-wrapper -->
	</div> <!-- /.container -->
</div>

<?php get_footer(); ?>