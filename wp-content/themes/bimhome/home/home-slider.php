	
<?php 
$options = get_option('my_framework');
$slider = $options['slider'];
$i = 0;
?>
<div id="banner">
	<div class="rev_slider_wrapper">
		<!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
		<div id="main-banner-slider" class="rev_slider" data-version="5.0.7">
			<ul>
				<?php foreach ($slider as $key=>$s) : ?>
					<?php 
					$i++;
					$imageId = $s['slider_image']['url'];

					?>
					<!-- SLIDE1  -->
					<li data-index="rs-<?= $key ?>" data-transition="zoomin" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-rotate="0"  data-saveperformance="off"  data-title="0<?= $i; ?>" data-description="">
						<!-- MAIN IMAGE -->
						<img src="<?= $imageId; ?>" alt="image"  class="rev-slidebg" data-bgparallax="3" data-bgposition="center center" data-duration="20000" data-ease="Linear.easeNone" data-kenburns="on" data-no-retina="" data-offsetend="0 0" data-offsetstart="0 0" data-rotateend="0" data-rotatestart="0" data-scaleend="100" data-scalestart="140">
						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption" 
						data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['-124','-124','-94','-80']" 
						data-width="none"
						data-height="none"
						data-whitespace="nowrap"
						data-transform_idle="o:1;"

						data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
						data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
						data-mask_in="x:0px;y:[100%];" 
						data-mask_out="x:inherit;y:inherit;" 
						data-start="1000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						style="z-index: 6; white-space: nowrap;">
						<h1><?= $s['slider_main_title_1'] ?> <span class="p-color"><?= $s['slider_main_title_2'] ?></span></h1>
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption" 
					data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
					data-y="['middle','middle','middle','middle']" data-voffset="['0','0','25','-10']"
					data-width="none"
					data-height="none"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"

					data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
					data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
					data-mask_in="x:0px;y:[100%];" 
					data-mask_out="x:inherit;y:inherit;" 
					data-start="2000" 
					data-splitin="none" 
					data-splitout="none" 
					data-responsive_offset="on" 
					style="z-index: 6; white-space: nowrap;">
					<h4>
						<img src="<?= get_template_directory_uri() ?>/libs/images/vien.png">
						<span class="p-color"><?= $s['slider_sub_title_1'] ?></span> <?= $s['slider_sub_title_2'] ?>
						<img src="<?= get_template_directory_uri() ?>/libs/images/vien-duoi.png">
					</h4>
				</div>


				<!-- LAYER NR. 3 -->
				<div class="tp-caption" 
				data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
				data-y="['middle','middle','middle','middle']" data-voffset="['80','80','110','85']"
				data-width="none"
				data-height="none"
				data-whitespace="nowrap"
				data-transform_idle="o:1;"

				data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
				data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
				data-mask_in="x:0px;y:[100%];" 
				data-mask_out="x:inherit;y:inherit;" 
				data-start="3000" 
				data-splitin="none" 
				data-splitout="none" 
				data-responsive_offset="on" 
				style="z-index: 6; white-space: nowrap;">
				<p><?= $s['slider_content'] ?> </p>
			</div>


			<!-- LAYER NR. 4 -->
			<div class="tp-caption"
			data-x="['center','center','center','center']" data-hoffset="['-80','-80','-80','0']" 
			data-y="['middle','middle','middle','middle']" data-voffset="['240','240','240','180']"
			data-transform_idle="o:1;"
			data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
			data-transform_in="x:[-100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
			data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
			data-start="3900" 
			data-splitin="none" 
			data-splitout="none" 
			data-responsive_offset="on">
			<a href="<?= $s['slider_more_link'] ?>" class="theme-button"><span><?= $s['slider_more_button'] ?></span></a>
		</div>

		<!-- LAYER NR. 5 -->
		<div class="tp-caption"
		data-x="['center','center','center','center']" data-hoffset="['125','125','125','0']" 
		data-y="['middle','middle','middle','middle']" data-voffset="['240','240','240','250']"
		data-transform_idle="o:1;"
		data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
		data-transform_in="x:[100%];z:0;rX:0deg;rY:0deg;rZ:0deg;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2500;e:Power3.easeInOut;" 
		data-transform_out="auto:auto;s:1000;e:Power2.easeInOut;" 
		data-start="3900" 
		data-splitin="none" 
		data-splitout="none" 
		data-responsive_offset="on">
		<a href="<?= $s['slider_registry_link'] ?>" class="theme-button"><span><?= $s['slider_registry_button'] ?></span></a>
	</div>

</li>
<?php endforeach; ?>

</ul>	
</div>
</div><!-- END REVOLUTION SLIDER -->
</div>