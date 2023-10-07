<?php

$footer_settings = get_field('_theme_footer_settings', 'option');
$contact         = $footer_settings['_contact'];
$social          = $footer_settings['_social'];

?>

<div class="footer-wrapper">
	<div class="footer-top">
		<div class="container">
			<div class="footer-top-container">
				<div class="row">
					<div class="col-md-8 col-12 order-md-2">
						<div class="brand-wrapper">
							<?= wp_get_attachment_image($footer_settings['_logo']) ?>
							<h5 class="brand-name"><?= $footer_settings['_text_1'] ?></h5>
							<h6 class="brand-subname"><?= $footer_settings['_text_2'] ?></h6>
						</div>
					</div>
					<div class="col-md-2 col-6 order-md-1">
						<div class="action-button-wrapper action-button-left">
							<a href="tel:<?= $footer_settings['_phone'] ?>" class="action-button hotline">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>
					</div>
					<div class="col-md-2 col-6 order-md-3">
						<div class="action-button-wrapper action-button-right">
							<a href="<?= $footer_settings['_zalo'] ?>" class="action-button zalo">
								<span></span>
								<span></span>
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row footer-widgets">
				<div class="col-lg-4 col-md-6 footer-widget footer-widget-1">
					<h6 class="widget-title"><?= $contact['_title'] ?></h6>
					<?php if ($contact['_contact_info']): ?>
						<ul class="contact-info">
							<?php foreach ($contact['_contact_info'] as $contact_info): ?>
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
</div>
