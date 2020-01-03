
<?php 
$options = get_option('my_framework');
?>
<div class="about-arch">
	<div class="container">
		<h2 class="theme-main-title"><span><?= $options['about_title'];  ?> <strong><?= $options['about_title_2'];  ?></strong></span></h2>
		<h5><?= $options['about_desc']; ?></h5>
		<div class="clear-fix">
			<div class="left-side float-left">
				<?= 
				$options['about_content']; 
				?>

				<br><br>
				<a href="<?= $options['about_link']; ?>" class="theme-button"><span><?= $options['about_button']; ?></span></a>
			</div>
			<div class="img float-right">
				<div>
					<img src="<?= $options['about_image']; ?>" alt="<?= $options['about_title'];  ?>">
					<div class="line-wrapper"><span></span></div>
				</div>
			</div> <!-- /.img -->
		</div>
	</div> <!-- /.container -->
</div>