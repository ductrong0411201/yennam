<?php

$home_settings = get_field('_theme_home_settings_v2', 'option');
$service       = $home_settings['_service'];

$args = [
	'post_type'      => 'post',
	'posts_per_page' => 8,
	'category'       => $service['_category'],
];

$loop = new WP_Query($args);

if ($loop->have_posts()): ?>

	<section class="service-wrapper-v2">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="section-title"><?= $service['_title'] ?></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<?php while ($loop->have_posts()) : $loop->the_post(); ?>
					<div class="col-lg-3 col-md-6">
						<?php get_template_part('template-parts/content/content-4'); ?>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="section-title">Quản tài viên & quản lý, thanh lý tài sản</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<?php while ($loop->have_posts()) : $loop->the_post(); ?>
					<div class="col-lg-3 col-md-6">
						<?php get_template_part('template-parts/content/content-5'); ?>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
		</div>
	</section>

<?php endif;
