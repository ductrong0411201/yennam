<?php

$home_settings = get_field('_theme_home_settings_v2', 'option');
$blog          = $home_settings['_blog'];

$args = [
	'post_type'      => 'post',
	'posts_per_page' => 4,
	'category'       => $blog['_category'],
];

$loop = new WP_Query($args);

if ($loop->have_posts()): ?>

	<section class="blog-wrapper-v2">
		<div class="container">
			<h2 class="section-title">Thông tin cần biết</h2>
			<div class="row">
				<?php while ($loop->have_posts()) : $loop->the_post(); ?>
					<div class="col-lg-3 col-md-6">
						<?php get_template_part('template-parts/content/content'); ?>
					</div>
				<?php endwhile;
				wp_reset_postdata(); ?>
			</div>
			<div class="category-wrapper">
				<a href="<?= get_category_link($blog['_category']) ?>" class="category-link">Xem thêm</a>
			</div>
		</div>
	</section>

<?php endif;
