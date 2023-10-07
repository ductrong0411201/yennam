<?php

$categories = get_the_category(get_the_ID());

?>

<article <?php post_class('content-post-4') ?>>
	<figure class="featured-media">
		<div class="featured-media-inner">
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail('large') ?>
			</a>
		</div>
	</figure>
	<div class="post-inner">
		<?php if ($categories): ?>
			<p class="cat-name"><?= $categories[0]->name ?></p>
		<?php endif; ?>

		<?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>') ?>
	</div>
</article>
