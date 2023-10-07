<?php

$home_settings = get_field('_theme_home_settings', 'option');
$service       = $home_settings['_service'];
$contact       = $service['_contact'];

if ($service['_services']): ?>

	<section class="service-wrapper">
		<div class="container">
			<h2 class="section-title"><?= $service['_title'] ?></h2>
			<h3 class="section-subtitle"><?= $service['_subtitle'] ?></h3>
			<div class="service-slick-slider-wrapper">
				<div class="service-slick-slider">
					<?php foreach ($service['_services'] as $service_item): ?>
						<div class="service-item-wrapper">
							<div class="service-item">
								<div class="icon">
									<?= wp_get_attachment_image($service_item['_icon']) ?>
								</div>
								<h4 class="service-title"><?= $service_item['_title'] ?></h4>
								<div class="service-desc"><?= wpautop($service_item['_desc']) ?></div>
								<a href="<?= $service_item['_url'] ?>" class="service-link">Xem thêm</a>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<div class="contact-wrapper">
						<div class="contact-desc"><?= wpautop($contact['_desc']) ?></div>
						<?php if ($contact['_contact_info']): ?>
							<ul class="contact-info">
								<?php foreach ($contact['_contact_info'] as $contact_info): ?>
									<li>
										<a href="<?= $contact_info['_url'] ?>"><?= wp_get_attachment_image($contact_info['_icon']) ?></a>
									</li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php endif;
