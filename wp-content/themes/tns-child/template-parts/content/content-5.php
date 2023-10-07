<?php

?>

<article <?php post_class('content-post-5') ?>>
	<figure class="featured-media">
		<div class="featured-media-inner">
			<a href="<?php the_permalink() ?>">
				<?php the_post_thumbnail('large') ?>
			</a>
		</div>
	</figure>
	<div class="post-inner">

		<?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>') ?>
	</div>
</article>
