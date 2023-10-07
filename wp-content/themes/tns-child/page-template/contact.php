<?php
/**
 * The landing page for our theme
 *
 * Template Name: Contact
 */

/**
 * The contact page for our theme
 */
function tns_contact(){
	get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php do_action('tns_contact'); ?>
		</main>
	</div>
	<?php get_footer();
}

tns_contact();
