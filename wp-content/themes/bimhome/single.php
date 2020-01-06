				<?php
				/**
				 * The template for displaying all single posts
				 *
				 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
				 *
				 * @package bimhome
				 */

				get_header();
				?>
				<!-- Inner banner ______________________ -->
				<div class="inner-banner">
					<div class="opacity">
						<div class="container">
							<h4><?= the_title(); ?></h4>
						</div>
					</div> <!-- /.opacity -->
				</div> <!-- /.inner-banner -->
				<div class="container">
					<div class="theme-large-asidebar float-left blog-details blog-details-v1">
						<div class="blog-details-slider">
							<!-- ========================= Single Post =========================== -->
							<div class="item">
								<?php
								while ( have_posts() ) :
									the_post();

									get_template_part( 'template-parts/content', get_post_type() );

						endwhile; // End of the loop.
						?>
					</div>
					<div class="item"></div>
				</div>

				<?php
				$categories = get_the_category(get_the_ID());
				?>
				<div class="read-next-section">
					<h6>Bài viết liên quan</h6>
					<div class="row">
						<div class="read-next-sldierOne">

							<?php
							$categories = get_the_category(get_the_ID());
							if ($categories){
								$category_ids = array();
								foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
								$args=array(
									'category__in' => $category_ids,
									'post__not_in' => array(get_the_ID()),
				                                'posts_per_page' => 3, // So bai viet dc hien thi
				                            );
								$my_query = new wp_query($args);
								if( $my_query->have_posts() ):
									while ($my_query->have_posts()):$my_query->the_post();
										?>
										<div class="item">
											<div class="img">
												<a href="<?= the_permalink(); ?>" class="related-post__thumb">
													<?= kinggold_post_thumbnail(); ?>
												</a>
												<h4><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h4>
											</div>  
										</div>
										<?php
									endwhile;
								endif; wp_reset_query();
							}
							?>
						</div> <!-- /.read-next-sldierOne -->
					</div> <!-- /.row -->
				</div> <!-- /.read-next-section -->

				</div>
				</div>

				<?php

				get_footer();
