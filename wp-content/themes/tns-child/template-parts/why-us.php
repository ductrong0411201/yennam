<?php

$home_settings = get_field('_theme_home_settings', 'option');
$why_us        = $home_settings['_why_us'];
$textbox       = $why_us['_textbox'];
$form          = $why_us['_form'];

?>

<section class="why-us-wrapper">
	<div class="why-us-content" style="background-image: url(<?= wp_get_attachment_image_url($why_us['_background'], 'full') ?>)">
		<div class="container">
			<h2 class="section-title"><?= $why_us['_title'] ?></h2>
			<h3 class="section-subtitle"><?= $why_us['_subtitle'] ?></h3>
			<?php if ($textbox): ?>
				<div class="textbox-wrapper">
					<?php foreach ($textbox as $textbox_item): ?>
						<div class="textbox-item">
							<h4 class="text-1"><?= $textbox_item['_text_1'] ?></h4>
							<p class="text-2"><?= $textbox_item['_text_2'] ?></p>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="contact-wrapper">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="form-wrapper">
						<h2 class="form-title"><?= $form['_title'] ?></h2>
						<h3 class="form-subtitle"><?= $form['_subtitle'] ?></h3>
						<?= do_shortcode($form['_shortcode']) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
