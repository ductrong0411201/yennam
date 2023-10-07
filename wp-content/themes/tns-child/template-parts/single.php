<section class="single-wrapper">
	<div class="single-header" style="background-image: url(<?= get_theme_file_uri('assets/src/images/single-bg.png') ?>)">
		<div class="container">
			<h1 class="page-title"><?php the_title() ?></h1>

			<?php if (function_exists('rank_math_the_breadcrumbs')):
				rank_math_the_breadcrumbs();
			endif; ?>
		</div>
	</div>
	<div class="single-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="post-img">
						<?php the_post_thumbnail('large') ?>
					</div>
					<ul class="post-meta">
						<li class="post-date">
							<time class="entry-date published" datetime="<?= get_the_date('c'); ?>"><?= get_the_date('d.m.Y'); ?></time>
						</li>
						<li class="post-author">Written by <?= get_the_author_meta('display_name', $post->post_author); ?></li>
					</ul>
					<div class="entry-content">
						<?php the_content() ?>
					</div>
				</div>
				<div class="col-lg-4">
					<?php get_template_part('template-parts/sidebar'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
