	
<?php 
$options = get_option('my_framework');
$slider = $options['slider'];
$i = 0;
?>
<div id="carousel-id" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-id" data-slide-to="1" class=""></li>

	</ol>
	<div class="carousel-inner">
		<?php foreach ($slider as $key=>$s) : ?>
					<?php 
					$imageId = $s['slider_image']['url'];
					?>
		<div class="item <?= ($key==0) ? 'active' : '' ?>">
			<img data-src="<?= $imageId ?>" alt="First slide" src="<?= $imageId ?>">
			<div class="container">
				<div class="carousel-caption">
					<h1><?= $s['slider_main_title_1'] ?> <span><?= $s['slider_main_title_2'] ?></span></h1>
					<h4>
						<img src="<?= get_template_directory_uri() ?>/libs/images/vien.png">
						<span class=""><?= $s['slider_sub_title_1'] ?></span> <?= $s['slider_sub_title_2'] ?>
						<img src="<?= get_template_directory_uri() ?>/libs/images/vien-duoi.png">
					</h4>
					<p><?= $s['slider_content'] ?></p>
					<p class="button-slider">
						<a class="theme-button" href="<?= $s['slider_more_link'] ?>" role="button"><span><?= $s['slider_more_button'] ?></span></a>
						<a class="theme-button" href="<?= $s['slider_registry_link'] ?>" role="button"><span><?= $s['slider_registry_button'] ?></span></a></p>
				</div>
			</div>
		</div>
		
		<?php endforeach; ?>
	</div>
	
</div>