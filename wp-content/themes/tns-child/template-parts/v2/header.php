<?php

$header_settings = get_field('_theme_header_settings_v2', 'option');

?>

<div class="header-wrapper-v2">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-2 col-6">
				<a href="tel:<?= $header_settings['_phone'] ?>" class="hotline"><span><?= $header_settings['_phone'] ?></span></a>
			</div>
			<div class="col-lg-8 nav-wrapper">
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
			<div class="col-lg-2 col-6">
				<div class="header-buttons">
					<?php if ($header_settings['_icons']):
						foreach ($header_settings['_icons'] as $icon):?>
							<a href="<?= $icon['_url'] ?>" target="_blank" class="header-button"><?= wp_get_attachment_image($icon['_icon']) ?></a>
						<?php endforeach;
					endif; ?>
					<a href="#primary-menu" class="header-button mobile-menu-trigger"><i class="fa-solid fa-bars"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
