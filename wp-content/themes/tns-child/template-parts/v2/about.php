<?php

$home_settings = get_field('_theme_home_settings_v2', 'option');
$about         = $home_settings['_about'];
$services      = $about['_services'];
$about_content = $about['_about'];

?>

<section class="about-wrapper-v2">
	<?php if ($services): ?>
		<div class="service-wrapper">
			<div class="container">
				<div class="row">
					<?php foreach ($services as $service): ?>
						<div class="col-lg-4">
							<div class="service-item">
								<div class="icon">
									<?= wp_get_attachment_image($service['_icon']) ?>
								</div>
								<h3 class="service-name"><?= $service['_title'] ?></h3>
								<div class="desc">
									<?= wpautop($service['_desc']) ?>
								</div>
								<div class="service-link-wrapper">
									<a href="<?= $service['_url'] ?>" class="service-link">Xem thêm</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<div class="about-container">
		<div class="container">
			<div class="about-content">
				<div class="about-left">
					<h2 class="about-title"><?= $about_content['_title'] ?></h2>
					<h3 class="about-subtitle"><?= $about_content['_subtitle'] ?></h3>
					<div class="about-desc"><?= wpautop($about_content['_content']) ?></div>
					<a href="<?= $about_content['_url'] ?>" class="about-link">Xem thêm</a>
					<div class="logo-wrapper">
						<?= wp_get_attachment_image($about_content['_logo'], 'full') ?>
					</div>
				</div>
				<div class="about-right">
					<?= wp_get_attachment_image($about_content['_img'], 'full') ?>
				</div>
			</div>
		</div>
	</div>
</section>
