<?php

$home_settings = get_field('_theme_home_settings', 'option');
$slider        = $home_settings['_slider'];

if ($slider): ?>

	<section class="primary-slider-wrapper">
		<div class="primary-slider">
			<?php foreach ($slider as $slide): ?>
				<div class="primary-slide-item-wrapper">
					<div class="primary-slide-item" style="background-image: url(<?= wp_get_attachment_image_url($slide['_background'], 'full') ?>)">
						<div class="slide-container">
							<div class="container">
								<div class="slide-content">
									<h3 class="slide-subtitle"><?= $slide['_subtitle'] ?></h3>
									<h2 class="slide-title"><?= $slide['_title'] ?></h2>
									<div class="slide-desc"><?= wpautop($slide['_desc']) ?></div>
									<a href="<?= $slide['_url'] ?>" class="slide-link">Xem thêm</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

<?php endif;
