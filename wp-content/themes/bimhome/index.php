			<?php get_header(); ?>

			<!-- Theme Banner ________________________________ -->
			<?php get_template_part( 'home/home', 'slider' ); ?>
			<!--  /#banner -->

			<!-- About Arch _______________________ -->
			<?php get_template_part( 'home/home', 'about' ); ?>
			<!-- /.about-arch -->

			<!-- Creative ideas _______________________ -->
			<?php get_template_part( 'home/home', 'category' ); ?>
			<!-- /.creative-ideas -->

			<!-- Work History _____________________ -->
			<?php get_template_part( 'home/home', 'ads' ); ?>
			<!-- /.work-history -->

			<!-- Future Project ___________________ -->
			<?php get_template_part( 'home/home', 'project' ); ?>
			 <!-- /.future-project -->


			<!-- Our Team ________________________ -->
			<?php get_template_part( 'home/home', 'member' ); ?>
			 <!-- /.our-team -->


			<!-- Client Slider ___________________ -->
			<?php get_template_part( 'home/home', 'client' ); ?>
			<!-- /.client-slider -->


			<!-- Latest News _____________________ -->
			<?php get_template_part( 'home/home', 'news' ); ?>
			<!-- /.latest-news -->

			<?php get_footer(); ?>