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

	<body <?php body_class(); ?> >
		<div class="main-page-wrapper">

			<!-- Theme Menu ____________________________ -->
			<div class="theme-main-menu theme-default-menu style-One">
				<div class="container">
					<div class="theme-menu-wrapper clear-fix">
						<a href="index.html" class="float-left logo"><img src="<?= get_template_directory_uri() ?>/libs/images/logo.png" alt="Logo"></a>

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
								<ul class="nav navbar-nav">
									<li class="dropdown-holder current-active"><a href="#">HOME</a>
										<ul class="sub-menu">
											<li><a href="index.html" class="tran3s">Home Version One</a></li>
											
										</ul>
									</li>
									<li class="dropdown-holder"><a href="#">Projects</a>
										<ul class="sub-menu">
											<li><a href="">Project-V01</a></li>
											
										</ul>
									</li>
									<li class="dropdown-holder"><a href="#">Page</a>
										<ul class="sub-menu">
											<li><a href="" >Our Team-V01</a></li>
										</ul>
									</li>
									<li class="dropdown-holder"><a href="#">About us</a>
										<ul class="sub-menu">
											<li><a href="" class="tran3s">About Us-V01</a></li>
											
										</ul>
									</li>
									<li class="dropdown-holder"><a href="#">Blog</a>
										<ul class="sub-menu">
											<li><a href="" class="tran3s">Blog-V01</a></li>
											
										</ul>
									</li>
									<li class="dropdown-holder"><a href="#">Contacts</a>
										<ul class="sub-menu">
											<li><a href="" class="tran3s">Contact Us-V01</a></li>
										</ul>
									</li>
								</ul>
							</div><!-- /.navbar-collapse -->
						</nav>
					</div> <!-- /.theme-menu-wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.theme-main-menu -->