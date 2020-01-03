<?php
$options = get_option('my_framework');
$partner = $options['partner'];
$i = 0;
?>
<div class="client-slider">
	<div class="opacity">
		<div class="container">
			<h2><?= $options['partner_title_1']; ?> <span><?= $options['partner_title_2']; ?></span></h2>

			<div class="client-slider-wrapper">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<?php foreach($partner as $key=>$part): ?>
							<?= $i++; ?>
						<li data-target="#myCarousel" data-slide-to="<?= $key ?>" class="<?= ($i==1) ? 'active' : '' ?>">0<?= $i ?></li>
						<?php endforeach; ?>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<?php foreach($partner as $key=>$part): ?>
							<?php $imgP =  $part['partner_image']['url']; ?>
						<div class="item <?= ($key==0) ? 'active' : '' ?> clear-fix">
							<div class="img float-left">
								<img src="<?= $imgP; ?>" alt="<?= $options['partner_title_1']; ?>" class="round-border">
							</div>
							<div class="text float-left">
								<p><?= $part['partner_desc']; ?></p>
							</div>
						</div>
					<?php endforeach; ?>
					</div>
				</div>
			</div> <!-- /.client-slider-wrapper -->
		</div> <!-- /.container -->
	</div> <!-- /.opacity -->
</div>