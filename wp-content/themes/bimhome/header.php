<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<html class="no-js" <?php language_attributes(); ?> >
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png" >
	<!-- Main style sheet -->

	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&display=swap" rel="stylesheet">
	-->
	<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js" ></script>
			<script src="vendor/respond.js" ></script>
		<![endif]-->
		<?php wp_head(); ?>

	</head>
	<?php 
	$options_header = get_option( 'my_framework' );
 	?>
	<body <?php body_class(); ?> >
		<div class="main-page-wrapper">

			<!-- Theme Menu ____________________________ -->
			<div class="theme-main-menu theme-default-menu style-One">
				<div class="container">
					<div class="theme-menu-wrapper clear-fix">
						<a href="<?= get_home_url(); ?>" class="float-left logo"><img src="<?= $options_header['logo_site_head'] ?>" alt="Logo"></a>

						<!-- Menu -->
						<nav class="navbar float-right">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									Menu
									<i class="fa fa-bars" aria-hidden="true"></i>
								</button>
							</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse" id="navbar-collapse-1">

								<?php
								$menu_name = 'menu-1';
								$locations = get_nav_menu_locations();
								$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
								$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
//print_r($menuitems)
								?>

								<ul class="nav navbar-nav">
									<?php
									$count = 0;
									$submenu = false;
									foreach( $menuitems as $key => $item ):
										$link = $item->url;
										$title = $item->title;
// item does not have a parent so menu_item_parent equals 0 (false)
										if ( !$item->menu_item_parent ):
// save this id for later comparison with sub-menu items
											$parent_id = $item->ID;

											?>

											<li class="dropdown-holder <?= ($key==0) ? 'current-active' : ''; ?> > ">
												<a href="<?php echo $link; ?>" class="mainmenu__link">
													<?php echo $title; ?>
												</a>
											<?php endif; ?>

											<?php if ( $parent_id == $item->menu_item_parent ): ?>

												<?php if ( !$submenu ): $submenu = true; ?>
													<ul class="sub-menu">
													<?php endif; ?>

													<li class="item">
														<a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
													</li>

													<?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
													</ul>
													<?php $submenu = false; endif; ?>

												<?php endif; ?>

												<?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
												</li>                           
												<?php $submenu = false; endif; ?>

												<?php $count++; endforeach; ?>
											</ul>


										</div><!-- /.navbar-collapse -->
									</nav>
								</div> <!-- /.theme-menu-wrapper -->
							</div> <!-- /.container -->
			</div> <!-- /.theme-main-menu -->