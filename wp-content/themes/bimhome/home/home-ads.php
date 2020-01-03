
<?php 
$options = get_option('my_framework');
?>
<div class="work-history" style="background: url(<?= $options['banner_home']['url']; ?>) no-repeat; background-size: cover;">
	<div class="opacity">
		<div class="container">
			<div class="section-half float-left left-side">
				<h3><span class="p-color"><?= $options['banner_home_title_1'] ?></span> <?= $options['banner_home_title_2'] ?></h3>
				<p><?= $options['banner_home_desc_1'] ?> </p>
			</div> <!-- /.left-side -->

			<div class="section-half float-right right-side">
				<ul>
					<li><span>01</span><?= $options['banner_home_title_2a_1'] ?></li>
					<li><span>02</span><?= $options['banner_home_title_2a_2'] ?></li>
					<li><span>03</span><?= $options['banner_home_title_2a_3'] ?></li>
				</ul>
			</div> <!-- /.right-side -->
		</div> <!-- /.container -->
	</div> <!-- /.opacity -->
</div>