<?php

$template_settings = get_field('_contact_page_template_settings', get_the_ID());
$form              = $template_settings['_form'];
$contact_info      = $template_settings['_contact_info'];
$social            = $template_settings['_social'];
$maps              = $template_settings['_maps'];

?>

<section class="contact-template-wrapper">
	<div class="contact-header" style="background-image: url(<?= get_theme_file_uri('assets/src/images/contact-bg.png') ?>)">
		<div class="container">
			<h1 class="page-title"><?php the_title() ?></h1>

			<?php if (function_exists('rank_math_the_breadcrumbs')):
				rank_math_the_breadcrumbs();
			endif; ?>
		</div>
	</div>
	<div class="contact-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="form-wrapper">
						<h2 class="form-title"><?= $form['_title'] ?></h2>
						<h3 class="form-subtitle"><?= $form['_subtitle'] ?></h3>
						<?= do_shortcode($form['_shortcode']) ?>
					</div>
				</div>
				<div class="col-lg-4">
					<?php if ($contact_info): ?>
						<ul class="contact-info">
							<?php foreach ($contact_info as $contact_info_item): ?>
								<li>
									<div class="icon">
										<?= wp_get_attachment_image($contact_info_item['_icon']) ?>
									</div>
									<h3 class="title"><?= $contact_info_item['_title'] ?></h3>
									<div class="content"><?= wpautop($contact_info_item['_content']) ?></div>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

					<?php if ($social): ?>
						<ul class="social-list">
							<?php foreach ($social as $social_item): ?>
								<li>
									<a href="<?= $social_item['_url'] ?>"><?= wp_get_attachment_image($social_item['_icon']) ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="maps-wrapper">
		<?= $maps ?>
	</div>
</section>
