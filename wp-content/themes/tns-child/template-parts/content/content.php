<article <?php post_class('content-post') ?>>
	<figure class="featured-media">
		<time class="entry-date published" datetime="<?= get_the_date('c'); ?>">
			<span><?= get_the_date('d'); ?></span>
			<span><?= get_the_date('m.Y'); ?></span>
		</time>
		<div class="featured-media-inner">
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail('large') ?>
			</a>
		</div>
	</figure>
	<div class="post-inner">
		<p class="post-author">Written by <?= get_the_author_meta('display_name', $post->post_author); ?></p>
		<?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>') ?>
	</div>
</article>
