<section class="archive-wrapper">
	<div class="archive-header" style="background-image: url(<?= get_theme_file_uri('assets/src/images/archive-bg.png') ?>)">
		<div class="container">
			<?php if (is_archive()): ?>
				<h1 class="page-title"><?php the_archive_title(); ?></h1>
			<?php else: ?>
				<h1 class="page-title">Bài viết</h1>
			<?php endif; ?>

			<?php if (function_exists('rank_math_the_breadcrumbs')):
				rank_math_the_breadcrumbs();
			endif; ?>
		</div>
	</div>
	<div class="archive-main">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<?php if (have_posts()) : ?>
						<div class="row">
							<?php while (have_posts()): the_post(); ?>
								<div class="content-post-wrapper">
									<?php get_template_part('template-parts/content/content-2'); ?>
								</div>
							<?php endwhile; ?>
						</div>
					<?php else: ?>
						<div class="alert alert-danger" role="alert">
							Nội dung đang được cập nhật, vui lòng quay lại sau!
						</div>
					<?php endif; ?>
					<div class="pagination-wrapper">
						<?php tns_pagination([
							'items_wrap_class'  => 'page-wrap',
							'items_class'       => 'page-item',
							'item_active_class' => 'active',
							'links_class'       => '',
							'prev'              => '←',
							'next'              => '→',
							'prev_label'        => 'Previous',
							'next_label'        => 'Next',
							'echo'              => true,
						])
						?>
					</div>
				</div>
				<div class="col-lg-4">
					<?php get_template_part('template-parts/sidebar'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
