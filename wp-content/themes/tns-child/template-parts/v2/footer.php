<?php

$footer_settings = get_field('_theme_footer_settings_v2', 'option');
$contact         = $footer_settings['_contact_info'];
$social          = $footer_settings['_social'];

?>

<div class="footer-wrapper-v2">
	<div class="container">
		<div class="row footer-widgets">
			<div class="col-lg-4 col-md-6 footer-widget footer-widget-1">
				<div class="footer-logo">
					<?= wp_get_attachment_image($footer_settings['_logo']) ?>
				</div>
				<?php if ($contact): ?>
					<ul class="contact-info">
						<?php foreach ($contact as $contact_info): ?>
							<li>
								<span class="icon">
									<?= wp_get_attachment_image($contact_info['_icon']) ?>
								</span>
								<?= $contact_info['_text'] ?>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
			<div class="col-lg-2 col-md-6 footer-widget footer-widget-2">
				<?php if (has_nav_menu('footer-1')): ?>
					<h6 class="widget-title"><?= wp_get_nav_menu_name('footer-1') ?></h6>
					<?php wp_nav_menu([
						'theme_location' => 'footer-1',
						'menu_class'     => 'footer-links',
					]);
				endif; ?>
			</div>
			<div class="col-lg-3 col-md-6 footer-widget footer-widget-3">
				<?php if (has_nav_menu('footer-2')): ?>
					<h6 class="widget-title"><?= wp_get_nav_menu_name('footer-2') ?></h6>
					<?php wp_nav_menu([
						'theme_location' => 'footer-2',
						'menu_class'     => 'footer-links',
					]);
				endif; ?>
			</div>
			<div class="col-lg-3 col-md-6 footer-widget footer-widget-4">
				<h6 class="widget-title"><?= $social['_title'] ?></h6>
				<?php if ($social['_social']): ?>
					<ul class="social-list">
						<?php foreach ($social['_social'] as $contact_info): ?>
							<li>
								<a href="<?= $contact_info['_url'] ?>" target="_blank"><?= wp_get_attachment_image($contact_info['_icon']) ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				<div class="copyright">
					<span>2023 © VP Luật sư Yến Nam</span>
					Designed by Taynamsolution.vn
				</div>
			</div>
		</div>
	</div>
</div>
