<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bimhome
 */

get_header();
?>
<!-- Inner banner ______________________ -->
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
<div class="container blog-v4">

	<div class="theme-large-asidebar float-left">
		<div class="project-item-wrapper">

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="single-project">
						<?php get_template_part( 'template-parts/content', 'blog' ) ?>
					</div> <!-- /.single-project -->
				<?php endwhile; ?>	
			<?php endif; ?>


			<div class="pagination-bam">
				<?php pagination_tdc(); ?>
			</div>

		</div> <!-- /.project-item-wrapper -->
	</div> <!-- /theme-large-asidebar -->

	<!-- ====================== Side bar ==================== -->
	<div class="theme-sidebar float-left">
		<?php get_sidebar(); ?>
	</div> <!-- /.theme-sidebar -->
</div>

<?php

get_footer();
