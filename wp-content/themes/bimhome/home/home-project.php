<?php
$terms = get_terms( array(
	'taxonomy' => 'danh-muc-du-an',
	'hide_empty' => false,
) );
?>

<div class="">
	<div class="container">
		<h2 class="theme-main-title"><span>Chúng tôi <strong>đã thiết kế</strong></span></h2>

		<div class="project-v3">
			<div>
				<ul class="project-home center-text">
					<li class="filter active tran3s" data-filter="all">Tất cả</li>
					<?php foreach ($terms as $key => $value): ?>
						<li class="filter tran3s" data-filter=".<?= $value->term_id; ?>"><?= $value->name; ?></li>
					<?php endforeach; ?>
				</ul>
				<div class="project-item-wrapper" id="mixitUp-item">
					<div class="row">
						<?php foreach ($terms as $key => $value): ?>
							<?php 
							$query = new WP_Query([
								'post_type' => 'du-an',
								'posts_per_page' => 6,
								'tax_query' => array(
									'relation' => 'AND',
									array(
										'taxonomy' => 'danh-muc-du-an',
										'field' => 'id',
										'terms' => array( $value->term_id ),
										'include_children' => true,
										'operator' => 'IN'
									),
								)

							]);


							?>  
							<?php while ($query->have_posts()) : $query->the_post() ?>
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 mix interior <?= $value->term_id; ?>">
								 <?php get_template_part( 'template-parts/content', 'project' ); ?>
								<!-- /.single-project -->
							</div> <!-- /.col -->
						<?php endwhile; ?>
						<?php endforeach; ?>


					</div> <!-- /.row -->
					<a href="" class="theme-button"><span>Xem thêm</span></a>
				</div> <!-- /.project-item-wrapper -->
			</div> <!-- /.container -->
		</div> <!-- /.future-project -->


	</div> <!-- /.container -->
</div>