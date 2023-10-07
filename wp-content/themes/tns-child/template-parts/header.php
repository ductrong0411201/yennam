<?php

$header_settings = get_field('_theme_header_settings', 'option');
$contact         = $header_settings['_contact'];
$action_buttons  = $header_settings['_action_buttons'];

?>

<div class="header-wrapper">
	<div class="header-top">
		<div class="container">
			<div class="row align-items-center header-widgets">
				<div class="col-md-4 order-md-2 header-widget header-widget-2">
					<?php tns_logo() ?>
				</div>
				<div class="col-md-4 col-sm-6 order-md-1 header-widget header-widget-1">
					<div class="contact">
						<div class="icon">
							<img src="<?= get_theme_file_uri('assets/src/images/mail.png') ?>" alt="Contact">
						</div>
						<div class="content">
							<p class="phone"><?= $contact['_phone'] ?></p>
							<p class="mail"><?= $contact['_email'] ?></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 order-md-3 header-widget header-widget-3">
					<?php if ($action_buttons): ?>
						<ul class="action-buttons">
							<?php foreach ($action_buttons as $action_button): ?>
								<li>
									<a href="<?= $action_button['_url'] ?>">
										<?= wp_get_attachment_image($action_button['_icon']) ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-1">
					<div class="action-button-wrapper action-button-left">
						<a href="<?= $header_settings['_messenger'] ?>" class="action-button messenger" target="_blank">Messenger</a>
					</div>
				</div>
				<div class="col-lg-10 nav-wrapper">
					<nav class="primary-menu-wrapper">
						<?php if (has_nav_menu('primary')):
							wp_nav_menu([
								'theme_location'  => 'primary',
								'container_class' => 'primary-menu',
								'container_id'    => 'primary-menu',
							]);
						endif; ?>
					</nav>
				</div>
				<div class="col-lg-1 col-12">
					<div class="action-button-wrapper action-button-right">
						<a href="<?= $header_settings['_messenger'] ?>" class="action-button messenger" target="_blank">Messenger</a>
						<a href="<?= $header_settings['_zalo'] ?>" class="action-button zalo">Zalo</a>
						<a href="#primary-menu" class="action-button menu-trigger"><i class="fa-solid fa-bars"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
