				<div class="img">
					<?php the_post_thumbnail( $size = '', ['class' => 'img-responsive'] ) ?>
					<div class="overlay tran3s">
						<div>
							<div>
								<h4><a href="<?= the_permalink(); ?>"><?= the_title(); ?></a></h4>
								<a href="" ></a>
							</div>
						</div>

					</div> <!-- /.overlay -->
				</div> <!-- /.img -->
				<div class="desc-news">
					<h3 class="title-news-home">
						<a href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
					</h3>
					<p><?= the_excerpt(); ?></p>
				</div>