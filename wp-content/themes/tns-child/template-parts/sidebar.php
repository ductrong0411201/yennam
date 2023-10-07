<aside class="primary-sidebar">
	<div class="sidebar-widget search-widget">
		<form action="/" method="get">
			<label for="search">Search in <?php echo home_url('/'); ?></label>
			<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Tìm kiếm..."/>
			<button type="submit">Tìm kiếm</button>
		</form>
	</div>

	<div class="sidebar-widget post-widget">
		<h4 class="widget-title">Bài viết mới</h4>
		<div class="posts-wrapper">
			<?php $recent_posts = wp_get_recent_posts([
				'numberposts' => 6,
				'post_status' => 'publish'
			]);

			foreach ($recent_posts as $post_item) : ?>
				<div class="post-item">
					<article <?php post_class('content-post-3', $post_item['ID']) ?>>
						<figure class="featured-media">
							<div class="featured-media-inner">
								<a href="<?php the_permalink($post_item['ID']) ?>">
									<?= get_the_post_thumbnail($post_item['ID'], 'medium') ?>
								</a>
							</div>
						</figure>
						<div class="post-inner">
							<time class="entry-date published" datetime="<?= get_the_date('c', $post_item['ID']); ?>"><?= get_the_date('d.m.Y', $post_item['ID']); ?></time>
							<?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink($post_item['ID'])) . '">', '</a></h2>') ?>
						</div>
					</article>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</aside>
