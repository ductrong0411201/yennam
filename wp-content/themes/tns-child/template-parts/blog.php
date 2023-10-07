<?php

$home_settings = get_field('_theme_home_settings', 'option');
$blog          = $home_settings['_blog'];

$args = [
	'post_type'      => 'post',
	'posts_per_page' => 3,
	'category'       => $blog['_category'],
];

$loop = new WP_Query($args);

$times = 1;

if ($loop->have_posts()): ?>

	<section class="blog-wrapper">
		<div class="container">
			<h2 class="section-title"><?= $blog['_title'] ?></h2>
			<h3 class="section-subtitle"><?= $blog['_subtitle'] ?></h3>
			<div class="row">
				<?php while ($loop->have_posts()) : $loop->the_post(); ?>
					<div class="<?= $times == 1 ? 'col-lg-6' : 'col-lg-3 col-md-6'; ?>">
						<?php get_template_part('template-parts/content/content'); ?>
					</div>
					<?php $times ++;
				endwhile;
				wp_reset_postdata(); ?>
			</div>
			<div class="category-wrapper">
				<a href="<?= get_category_link($blog['_category']) ?>" class="category-link">Xem thêm</a>
			</div>
		</div>
	</section>

<?php endif;
