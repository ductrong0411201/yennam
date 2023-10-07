<?php

$home_settings = get_field('_theme_home_settings', 'option');
$about         = $home_settings['_about'];

?>

<section class="about-wrapper">
	<div class="container">
		<div class="about-content">
			<div class="about-left">
				<h2 class="about-title"><?= $about['_title'] ?></h2>
				<h3 class="about-subtitle"><?= $about['_subtitle'] ?></h3>
				<div class="about-desc"><?= wpautop($about['_desc']) ?></div>
				<a href="<?= $about['_url'] ?>" class="about-link">Xem thêm</a>
				<div class="logo-wrapper">
					<?= wp_get_attachment_image($about['_logo'], 'full') ?>
				</div>
			</div>
			<div class="about-right">
				<?= wp_get_attachment_image($about['_img'], 'full') ?>
			</div>
		</div>
	</div>
</section>
