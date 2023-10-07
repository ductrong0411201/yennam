<?php

$footer_settings = get_field('_theme_footer_settings_v2', 'option');
$contact         = $footer_settings['_contact_info'];
$social          = $footer_settings['_social'];

?>

<div class="footer-wrapper-v2">
	<div class="container">
		<div class="row footer-widgets">
			<div class="col-lg-4 col-md-6 footer-widget footer-widget-1">
				<!-- <div class="footer-logo">
					<?= wp_get_attachment_image($footer_settings['_logo']) ?>
				</div> -->
				<div class="widget-header">
					<div class="about-logo-container">
						<div class="about-logo">
							YENNAM Lawfirm
						</div>
						<svg xmlns="http://www.w3.org/2000/svg" width="123" height="6" viewBox="0 0 123 6" fill="none">
							<ellipse cx="62.3695" cy="2.75445" rx="3.00624" ry="2.44" fill="#CC0066"/>
							<line x1="0.957031" y1="2.25977" x2="52.8013" y2="2.25977" stroke="#707070"/>
							<line x1="70.4297" y1="2.25977" x2="122.274" y2="2.25977" stroke="#707070"/>
						</svg>
					</div>
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
				<div class="widget-header">
					<h6 class="widget-title"><?= wp_get_nav_menu_name('footer-1') ?></h6>
				</div>
				<?php if (has_nav_menu('footer-1')): ?>
					<?php wp_nav_menu([
						'theme_location' => 'footer-1',
						'menu_class'     => 'footer-links',
					]);
				endif; ?>
			</div>
			<div class="col-lg-3 col-md-6 footer-widget footer-widget-3">
				<?php if (has_nav_menu('footer-2')): ?>
					<div class="widget-header">
					</div>
					<?php wp_nav_menu([
						'theme_location' => 'footer-2',
						'menu_class'     => 'footer-links',
					]);
				endif; ?>
			</div>
			<div class="col-lg-3 col-md-6 footer-widget footer-widget-4">
				<?php if ($social['_social']): ?>
					<div class="widget-header">
						<h6 class="widget-title"><?= $social['_title'] ?></h6>
					</div>
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
		<div class="row footer-widgets">
			<?php if (has_nav_menu('footer-2')): ?>
				<h6 class="widget-title"><?= wp_get_nav_menu_name('footer-2') ?></h6>
			<?php endif; ?>
			<div class="spacer"></div>
			<div class="col-lg-3 col-md-6 footer-widget footer-widget-5">
				<?php if (has_nav_menu('footer-2')): ?>
					<?php wp_nav_menu([
						'theme_location' => 'footer-2',
						'menu_class'     => 'footer-links',
					]);
				endif; ?>
			</div>
			<div class="col-lg-3 col-md-6 footer-widget footer-widget-6">
				<?php if (has_nav_menu('footer-2')): ?>
					<?php wp_nav_menu([
						'theme_location' => 'footer-2',
						'menu_class'     => 'footer-links',
					]);
				endif; ?>
			</div>
			<div class="col-lg-3 col-md-6 footer-widget footer-widget-7">
				<?php if (has_nav_menu('footer-2')): ?>
					<?php wp_nav_menu([
						'theme_location' => 'footer-2',
						'menu_class'     => 'footer-links',
					]);
				endif; ?>
			</div>
			<div class="col-lg-3 col-md-6 footer-widget footer-widget-8">
				<?php if (has_nav_menu('footer-2')): ?>
					<?php wp_nav_menu([
						'theme_location' => 'footer-2',
						'menu_class'     => 'footer-links',
					]);
				endif; ?>
			</div>
	</div>
</div>
