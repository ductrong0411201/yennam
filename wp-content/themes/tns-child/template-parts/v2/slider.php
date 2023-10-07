<?php

$home_settings = get_field('_theme_home_settings_v2', 'option');
$slider        = $home_settings['_slider'];
$content       = $slider['_content'];


if ($slider['_slider']): ?>
	<section class="primary-slider-wrapper-2">
		<div class="primary-slider-container">
			<div class="primary-slider">
				<?php foreach ($slider['_slider'] as $slide): ?>
					<div class="primary-slide-item-wrapper">
						<div class="primary-slide-item" style="background-image: url(<?= wp_get_attachment_image_url($slide['_img'], 'full') ?>)"></div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="primary-slider-content-wrapper">
			<div class="container">
				<div class="primary-slider-content">
					<div class="logo-wrapper">
						<?= wp_get_attachment_image($content['_logo']) ?>
					</div>
					<h2 class="section-title"><?= $content['_title'] ?></h2>
					<h3 class="section-subtitle"><?= $content['_subtitle'] ?></h3>
					<p class="section-subtitle-2"><?= $content['_subtitle_2'] ?></p>
					<div class="text-list-wrapper">
						<?php if ($content['_text_list']): ?>
							<ul class="text-list">
								<?php foreach ($content['_text_list'] as $item): ?>
									<li><?= $item['_text'] ?></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif;
